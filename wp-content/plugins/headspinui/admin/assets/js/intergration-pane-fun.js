

document.addEventListener('alpine:init', () => {

    Alpine.store('integrations', {
        hasIntegration(name, catName) {
            if (!catName || !name) return false;
            const folders = Alpine.store('pd')?.themeTokens?.folders;
            if (!folders || !folders.length) return false;

            const targetCat = catName.toLowerCase();
            const targetName = name.toLowerCase();

            for (let i = 0; i < folders.length; i++) {
                const folder = folders[i];
                if (folder && folder.name && folder.name.toLowerCase() === targetCat) {
                    const groups = folder.groups;
                    if (groups && groups.length) {
                        for (let j = 0; j < groups.length; j++) {
                            const group = groups[j];
                            if (group && group.name && group.name.toLowerCase() === targetName) {
                                return true;
                            }
                        }
                    }
                    return false;
                }
            }
            return false;
        },
        checkIntegrationCount(catName) {
        },
        isActiveProp(cssVarName, folderName) {
            if (!cssVarName) return false;
            const folders = Alpine.store('pd')?.themeTokens?.folders;
            if (!folders || !folders.length) return false;

            if (folderName) {
                const targetFolder = folderName.toLowerCase();
                for (let i = 0; i < folders.length; i++) {
                    const folder = folders[i];
                    if (folder && folder.name && folder.name.toLowerCase() === targetFolder) {
                        const groups = folder.groups;
                        if (groups && groups.length) {
                            for (let j = 0; j < groups.length; j++) {
                                const group = groups[j];
                                const data = group.data;
                                if (data && data.length) {
                                    for (let k = 0; k < data.length; k++) {
                                        if (data[k].cssVar === cssVarName) return true;
                                    }
                                }
                            }
                        }
                        return false;
                    }
                }
                return false;
            }

            // Fallback: check all folders if folderName is not provided
            for (let i = 0; i < folders.length; i++) {
                const groups = folders[i].groups;
                if (groups && groups.length) {
                    for (let j = 0; j < groups.length; j++) {
                        const data = groups[j].data;
                        if (data && data.length) {
                            for (let k = 0; k < data.length; k++) {
                                if (data[k].cssVar === cssVarName) return true;
                            }
                        }
                    }
                }
            }
            return false;
        },
        importOrDeleteCssProp(cssVarName, folderName) {
            const integrationsStore = Alpine.store('integrations');
            const isActive = integrationsStore && typeof integrationsStore.isActiveProp === 'function'
                ? integrationsStore.isActiveProp(cssVarName, folderName)
                : false;

            const targetFolder = folderName ? folderName.toLowerCase() : null;

            // Check if variable is active
            if (isActive) {
                // Case active: already imported with passed cssVarName, remove it
                const folders = Alpine.store('pd')?.themeTokens?.folders;
                if (folders) {
                    let removed = false;
                    for (let fIndex = 0; fIndex < folders.length; fIndex++) {
                        const folder = folders[fIndex];
                        if (targetFolder && (!folder.name || folder.name.toLowerCase() !== targetFolder)) {
                            continue;
                        }
                        if (folder.groups) {
                            for (let gIndex = 0; gIndex < folder.groups.length; gIndex++) {
                                const group = folder.groups[gIndex];
                                if (group.data) {
                                    const tIndex = group.data.findIndex(t => t.cssVar === cssVarName);
                                    if (tIndex !== -1) {
                                        group.data.splice(tIndex, 1);
                                        removed = true;
                                        break;
                                    }
                                }
                            }
                        }
                        if (removed) break;
                    }

                    // Fallback search in all folders if folderName didn't yield a match
                    if (!removed && targetFolder) {
                        for (let fIndex = 0; fIndex < folders.length; fIndex++) {
                            const folder = folders[fIndex];
                            if (folder.groups) {
                                for (let gIndex = 0; gIndex < folder.groups.length; gIndex++) {
                                    const group = folder.groups[gIndex];
                                    if (group.data) {
                                        const tIndex = group.data.findIndex(t => t.cssVar === cssVarName);
                                        if (tIndex !== -1) {
                                            group.data.splice(tIndex, 1);
                                            removed = true;
                                            break;
                                        }
                                    }
                                }
                            }
                            if (removed) break;
                        }
                    }

                    if (removed) {
                        window.dispatchEvent(headspinReloadTokenAPP);
                    }
                }
            } else {
                // Case not active: not imported yet - find the specific token in the boilerplates and import only that single property
                const boilerplates = Alpine.store('connect')?.boilerplates;
                if (boilerplates) {
                    let foundInventory = null;
                    let foundToken = null;

                    for (let ci = 0; ci < boilerplates.length; ci++) {
                        const cat = boilerplates[ci];
                        for (let bi = 0; bi < cat.data.length; bi++) {
                            const bp = cat.data[bi];
                            if (targetFolder && bp.folder && (!bp.folder.name || bp.folder.name.toLowerCase() !== targetFolder)) {
                                continue;
                            }
                            if (bp.data) {
                                const token = bp.data.find(t => t.cssVar === cssVarName);
                                if (token) {
                                    foundInventory = bp;
                                    foundToken = token;
                                    break;
                                }
                            }
                        }
                        if (foundInventory) break;
                    }

                    // Fallback search without folderName filter
                    if (!foundInventory && targetFolder) {
                        for (let ci = 0; ci < boilerplates.length; ci++) {
                            const cat = boilerplates[ci];
                            for (let bi = 0; bi < cat.data.length; bi++) {
                                const bp = cat.data[bi];
                                if (bp.data) {
                                    const token = bp.data.find(t => t.cssVar === cssVarName);
                                    if (token) {
                                        foundInventory = bp;
                                        foundToken = token;
                                        break;
                                    }
                                }
                            }
                            if (foundInventory) break;
                        }
                    }

                    if (foundInventory && foundToken) {
                        const connectStore = Alpine.store('connect');
                        const collections = Alpine.store('pd')?.themeTokens?.folders;

                        if (connectStore && collections) {
                            let folder = collections.find(c => c.uuid === foundInventory.folder.uuid);
                            if (!folder) {
                                folder = connectStore.createCollection(foundInventory);
                            }

                            if (folder) {
                                if (!folder.groups) {
                                    folder.groups = [];
                                }
                                let group = folder.groups.find(g => g.uuid === foundInventory.group.uuid);
                                if (!group) {
                                    group = connectStore.createGroup(folder, foundInventory);
                                }

                                if (group) {
                                    if (!group.data) {
                                        group.data = [];
                                    }

                                    // Make sure it doesn't already exist
                                    const alreadyExists = group.data.some(t => t.cssVar === cssVarName);
                                    if (!alreadyExists) {
                                        // Clone the token to avoid mutating the template definition
                                        const tokenClone = JSON.parse(JSON.stringify(foundToken));

                                        // Generate new unique ID & UUID
                                        const newId = connectStore.generateUUID ? connectStore.generateUUID() : tokenClone.id;
                                        tokenClone.id = newId;
                                        tokenClone.uuid = newId;

                                        group.data.push(tokenClone);

                                        window.dispatchEvent(headspinReloadTokenAPP);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        deleteGroup(name) {

        },
        deleteCollection(name) {

        },
        importCollection(name) {

        },
        activateAll(ci, bi) {
            const cat = Alpine.store('connect')?.boilerplates[ci];
            const bp = cat?.data[bi];
            if (bp && bp.data) {
                const folderName = bp.folder?.name;
                bp.data.forEach(token => {
                    if (!this.isActiveProp(token.cssVar, folderName)) {
                        this.importOrDeleteCssProp(token.cssVar, folderName);
                    }
                });
            }
        },
        deactivateAll(ci, bi) {
            const cat = Alpine.store('connect')?.boilerplates[ci];
            const bp = cat?.data[bi];
            if (bp && bp.data) {
                const folderName = bp.folder?.name;
                bp.data.forEach(token => {
                    if (this.isActiveProp(token.cssVar, folderName)) {
                        this.importOrDeleteCssProp(token.cssVar, folderName);
                    }
                });
            }
        }

    })
})