function splitTextIntoSpans(selector, options = {}) {
    const { wrapWords = false, wrapChars = false, splitType = 'char' } = options;
    const element = document.querySelector(selector);
    
    if (!element) {
        console.error('Element not found');
        return;
    }
    
    if (!element.hasAttribute('data-text')) {
        console.log('data-text attribute not found. Keeping original content.');
        return;
    }
    
    const text = element.getAttribute('data-text');
    
    element.innerHTML = '';
    
    const words = text.split(' ');
    
    words.forEach((word, index) => {
        if (splitType === 'word' && !wrapWords) {
            const wordSpan = document.createElement('span');
            wordSpan.classList.add('word');
            wordSpan.setAttribute('data-word', word);
            wordSpan.textContent = word;
            element.appendChild(wordSpan);
        } else if (splitType === 'word' && wrapWords) {
            const wordContainer = document.createElement('span');
            wordContainer.classList.add('wordwrap');
            const wordSpan = document.createElement('span');
            wordSpan.classList.add('word');
            wordSpan.setAttribute('data-word', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            element.appendChild(wordContainer);
        } else if (splitType === 'char' && !wrapChars) {
            const wordSpan = document.createElement('span');
            wordSpan.classList.add('word');
            wordSpan.setAttribute('data-word', word);
            word.split('').forEach(char => {
                const charSpan = document.createElement('span');
                charSpan.classList.add('char');
                charSpan.textContent = char;
                charSpan.setAttribute('data-char', char);
                wordSpan.appendChild(charSpan);
            });
            element.appendChild(wordSpan);
        } else if (splitType === 'char' && wrapChars) {
            const wordSpan = document.createElement('span');
            wordSpan.classList.add('word');
            wordSpan.setAttribute('data-word', word);
            word.split('').forEach(char => {
                const charContainer = document.createElement('span');
                charContainer.classList.add('charwrap');
                const charSpan = document.createElement('span');
                charSpan.classList.add('char');
                charSpan.textContent = char;
                charSpan.setAttribute('data-char', char);
                charContainer.appendChild(charSpan);
                wordSpan.appendChild(charContainer);
            });
            element.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement('span');
            whitespace.classList.add('whitespace');
            whitespace.innerHTML = ' ';
            element.appendChild(whitespace);
        }
    });
}


function initializeAnimation(selector, options = {}) {
    const {
        disableOnMobile = false,
        actions = 'play pause resume reset',
        overflowEffect = '',
        splitType = 'char',
        animationEffect = '',
        animationDuration = 1,
        animationDelay = 0,
        animationEase = 'power4.out',
        animationStagger = 0,
        animationStaggerFrom = 'start',
        customEffect = {},
        endColor = '',
        randomValues = {},
		start = 'top 100%',
        end = 'bottom 0%',
        scrub = false
    } = options;

    function runAnimation() {
        if (overflowEffect === 'hidden') {
            splitTextIntoSpans(selector, { wrapWords: true, wrapChars: true, splitType: splitType });
        } else {
            splitTextIntoSpans(selector, { splitType: splitType });
        }

        const heading = document.querySelector(selector, { splitType: splitType });
		if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; }
        if (heading) {

            const letters = heading.querySelectorAll(`span.${splitType}`);
            const headinganimtm = gsap.timeline({
                scrollTrigger: {
                    trigger: heading,
                    toggleActions: actions,
					start: start,
                    end: end,
                    scrub: scrub,
					onEnter: () => {
                        gsap.set(heading, { autoAlpha: 1 });
                    },
					onEnterBack: () => {
                        gsap.set(heading, { autoAlpha: 1 });
                    }
                },
            });

            let fromVars = {
                autoAlpha: 0
            };

            switch (animationEffect) {
                case 'Slidedown':
                    fromVars.y = -100;
                    break;
                case 'slideup':
                    fromVars.y = 100;
                    break;
                case 'slideleft':
                    fromVars.x = -100;
                    break;
                case 'slideright':
                    fromVars.x = 100;
                    break;
                case 'zoomin':
                    fromVars.scale = 0;
                    break;
                case 'zoomout':
                    fromVars.scale = 2;
                    break;
                case 'customeffect':
                    fromVars = {
                        ...fromVars,
                        x: randomValues.x ? `random(${randomValues.x[0]}, ${randomValues.x[1]}, 10)` : customEffect.x || 0,
                        y: randomValues.y ? `random(${randomValues.y[0]}, ${randomValues.y[1]}, 10)` : customEffect.y || 0,
                        scale: randomValues.scale ? gsap.utils.random(randomValues.scale[0], randomValues.scale[1], 0.1) : (customEffect.scale !== undefined ? customEffect.scale : 1),
                        rotateX: randomValues.rotationX ? `random(${randomValues.rotationX[0]}, ${randomValues.rotationX[1]}, 10)` : customEffect.rotationX || 0,
                        rotateY: randomValues.rotationY ? `random(${randomValues.rotationY[0]}, ${randomValues.rotationY[1]}, 10)` : customEffect.rotationY || 0,
                        rotateZ: randomValues.rotationZ ? `random(${randomValues.rotationZ[0]}, ${randomValues.rotationZ[1]}, 10)` : customEffect.rotationZ || 0,
                        transformPerspective: customEffect.perspective || 0,
                        transformOrigin: `${customEffect.transformOriginX || 50}% ${customEffect.transformOriginY || 50}%`
                    };
                    break;
            }

            headinganimtm.fromTo(letters, fromVars, {
                duration: animationDuration,
				delay: animationDelay,
                ...(endColor && { color: endColor }),
                autoAlpha: 1,
                x: 0,
                y: 0,
                scale: 1,
                rotateX: 0,
                rotateY: 0,
                rotateZ: 0,
                ease: animationEase,
                stagger: {
                    each: animationStagger,
                    from: animationStaggerFrom,
                }
            });

            heading.headinganimtm = headinganimtm;
        }
    }
	
    if (disableOnMobile) {
        let mm = gsap.matchMedia();
        mm.add("(min-width: 768px)", () => {
            runAnimation();
        });
    } else {
        runAnimation();
    }
}