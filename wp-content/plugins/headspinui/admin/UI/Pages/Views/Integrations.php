<section x-show="$store.appView.activeTab === 'integrations'" class="edit-integrations">



    <section data-breakdance>
        <template x-for="(catagory, ci) in $store.connect.boilerplates" :key="ci">
            <div>
                <div x-text="catagory.name" style="margin-bottom: .75rem; font-size: 2rem"></div>
                <div
                    style="display: flex; gap: .35rem; flex-wrap: wrap; flex-direction: column; padding: .25rem 1rem; border: 1px solid var(--neutral-6); border-radius: .35rem;">
                    <template x-for="(boilerplate, bi) in catagory.data" :key="bi">
                        <div class="integration-is"
                            :class="{ 'active': $store.integrations.hasIntegration(boilerplate.name, catagory.name) }"
                            style="display: grid; grid-template-columns: 200px 400px  100px 1fr; gap: 2rem; padding: 1rem 0;">
                            <div x-text="boilerplate.name"></div>
                            <div style="display: flex; flex-wrap: wrap; gap: .25rem">
                                <template x-for="(cssprop, vi) in boilerplate.data" :key="vi">
                                    <div class="hs-button hs-chip" :data-tippy-content="cssprop.desc"
                                        :class="{ 'active': $store.integrations.isActiveProp(cssprop.cssVar, catagory.name) }"
                                        @click="$store.integrations.importOrDeleteCssProp(cssprop.cssVar, catagory.name)"
                                        style=" display: flex; flex-direction: row; align-items: center; gap: .35rem; font-size:.75rem">

                                        <div x-text="cssprop.label"></div>
                                    </div>
                                </template>
                            </div>
                            <div :data-tippy-content="boilerplate.description">
                                <svg class="hs-icon hs-icon-large loading-icon">
                                    <use href="#ii-info"></use>
                                </svg>
                            </div>
                            <div style="display:flex; flex-direction: column; gap: .5rem">
                                <button @click="$store.integrations.activateAll(ci, bi)">Activate all</button>
                                <button @click="$store.integrations.deactivateAll(ci, bi)">Deactivate all</button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </template>
    </section>

</section>