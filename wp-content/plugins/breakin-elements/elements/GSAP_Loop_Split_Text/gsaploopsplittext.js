gsap.registerPlugin(ScrollTrigger);

function splitLoopText(selector, options = {}) {
    const { wrapWords = false, wrapChars = false, splitType = 'char' } = options;
    const element = document.querySelector(selector);

    if (!element) {
        console.error('Element not found');
        return;
    }
    
    // Clone the element to preserve its original structure
    const workingElement = element.cloneNode(true);
    
    // Find the span with class 'loop-split'
    const spanToSplit = workingElement.querySelector('.loop-split');
    
    if (!spanToSplit) {
        console.log('Element with class loop-split not found. Keeping original content.');
        return;
    }
    
    // Get the text content from the span
    const textToSplit = spanToSplit.textContent;
    
    // Clear the span's content to replace it with the split text
    spanToSplit.textContent = '';
    
    // Split the text based on options
    const words = textToSplit.split(' ');
    
    words.forEach((word, index) => {
        if (splitType === 'word' && !wrapWords) {
            const wordSpan = document.createElement('span');
            wordSpan.classList.add('word');
            wordSpan.setAttribute('data-word', word);
            wordSpan.textContent = word;
            spanToSplit.appendChild(wordSpan);
        } else if (splitType === 'word' && wrapWords) {
            const wordContainer = document.createElement('span');
            wordContainer.classList.add('wordwrap');
            const wordSpan = document.createElement('span');
            wordSpan.classList.add('word');
            wordSpan.setAttribute('data-word', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            spanToSplit.appendChild(wordContainer);
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
            spanToSplit.appendChild(wordSpan);
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
            spanToSplit.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement('span');
            whitespace.classList.add('whitespace');
            whitespace.innerHTML = ' ';
            spanToSplit.appendChild(whitespace);
        }
    });
    
    // Replace the original element's content with the modified content
    element.innerHTML = workingElement.innerHTML;
}

function initializeLoop(selector, options = {}) {
    const {
        disableOnMobile = false,
        actions = 'play pause resume reset',
        splitType = 'char',
        effect = '',
        duration = 1,
        delay = 0,
        ease = 'power2.out',
        stagger = 0,
        staggerFrom = 'start',
        distance = 0,
        scale = 1,
        endColor = '',
        repeat = -1,
        yoyo = true,
        start = 'top 100%',
        end = 'bottom 0%',
        scrub = false
    } = options;

    function runLoop() {
        splitLoopText(selector, { wrapWords: true, wrapChars: true, splitType });
        
        const element = document.querySelector(selector);
        if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; }

        const letters = element.querySelectorAll(`span.${splitType}`);
        
        const animationConfig = {
            scrollTrigger: {
                trigger: element,
                start,
                end,
                scrub,
                toggleActions: actions
            }
        };

        const headinglooptm = gsap.timeline(animationConfig);

        const toVars = {
            duration,
            ease,
            stagger: {
                each: stagger,
                from: staggerFrom,
                repeat,
                yoyo,
                repeatDelay: delay
            }
        };

        // Add effect-specific properties
        switch(effect) {
            case 'slidedown':
                toVars.y = distance;
                break;
            case 'slideup':
                toVars.y = -distance;
                break;
            case 'slideleft':
                toVars.x = -distance;
                break;
            case 'slideright':
                toVars.x = distance;
                break;
            case 'scale':
                toVars.scale = scale;
                break;
        }

        // Add end color if specified
        if (endColor) {
            toVars.color = endColor;
        }

        headinglooptm.to(letters, toVars);
        element.headinglooptm = headinglooptm;
    }

    if (disableOnMobile) {
        let mm = gsap.matchMedia();
        mm.add("(min-width: 768px)", () => {
            runLoop();
        });
    } else {
        runLoop();
    }
}
