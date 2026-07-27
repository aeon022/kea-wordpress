// reveal.js
gsap.registerPlugin(ScrollTrigger);
function createRevealAnimation(options) {
    const {
        selector,
        revealDuration = 1,
        revealDirection = 'right',
        startColor = 'black',
        middleColor = 'black',
        endColor = 'black',
        startEase = 'sine.inOut',
        endEase = 'sine.inOut',
        contentEffect = '',
        contentDuration = 1,
        contentEase = 'sine.inOut',
        disableOnMobile = false,
        playOnce = 'play pause resume reset',
        delay = 0
    } = options;

    const createTimeline = () => {
        const timeline = gsap.timeline({
            defaults: {
                ease: 'sine.inOut',
                duration: revealDuration,
            },
            scrollTrigger: {
                trigger: selector,
                start: "top bottom",
                toggleActions: playOnce
            }
        });

        let overlayFrom = {};
        let overlayTo = {};

        switch (revealDirection) {
            case 'left':
                overlayFrom = { xPercent: 101, yPercent: 0 };
                overlayTo = { xPercent: -101, yPercent: 0 };
                break;
            case 'bottom':
                overlayFrom = { xPercent: 0, yPercent: -101 };
                overlayTo = { xPercent: 0, yPercent: 101 };
                break;
            case 'top':
                overlayFrom = { xPercent: 0, yPercent: 101 };
                overlayTo = { xPercent: 0, yPercent: -101 };
                break;
            default: // right
                overlayFrom = { xPercent: -101, yPercent: 0 };
                overlayTo = { xPercent: 101, yPercent: 0 };
        }

        overlayFrom.backgroundColor = startColor;

        let contentFrom = { autoAlpha: 0 };
        switch (contentEffect) {
            case 'zoomin':
                contentFrom = { ...contentFrom, x: 0, y: 0, scale: 0.8 };
                break;
            case 'zoomout':
                contentFrom = { ...contentFrom, scale: 1.2 };
                break;
            case 'slideleft':
                contentFrom = { ...contentFrom, x: -100, y: 0, scale: 1 };
                break;
            case 'slideright':
                contentFrom = { ...contentFrom, x: 100, y: 0, scale: 1 };
                break;
            case 'slidetop':
                contentFrom = { ...contentFrom, x: 0, y: -100, scale: 1 };
                break;
            case 'slidebottom':
                contentFrom = { ...contentFrom, x: 0, y: 100, scale: 1 };
                break;
        }

        timeline.fromTo(`${selector} .supa-reveal-overlay`, overlayFrom, {
            ease: startEase,
            delay: delay,
            xPercent: 0,
            yPercent: 0,
            backgroundColor: middleColor
        })
        .fromTo(`${selector} > *:first-child`, contentFrom, {
            duration: contentEffect ? contentDuration : 0.01,
            ease: contentEase,
            scale: 1,
            x: 0,
            y: 0,
            autoAlpha: 1
        })
        .to(`${selector} .supa-reveal-overlay`, {
            ease: endEase,
            ...overlayTo,
            backgroundColor: endColor
        }, "<");

        return timeline;
    };
	if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; }
    if (disableOnMobile) {
        let mm = gsap.matchMedia();
        mm.add("(min-width: 768px)", () => {
            createTimeline();
        });
    } else {
        createTimeline();
    }
}
