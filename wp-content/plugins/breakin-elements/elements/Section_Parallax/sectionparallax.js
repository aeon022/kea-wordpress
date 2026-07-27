gsap.registerPlugin(ScrollTrigger);
function createParallaxEffect(selector, options) {

    // Default options
    const defaults = {
        inverseVertical: false,
        inverseHorizontal: false,
        verticalParallax: ['50', '50'],
        horizontalParallax: ['50', '50'],
        scrub: true
    };

    // Merge defaults with provided options
    const settings = { ...defaults, ...options };

    // Kill existing timeline if it exists
    if (window[`parallaxbg_${selector}`]) {
        window[`parallaxbg_${selector}`].kill();
    }

    // Calculate start and end positions
    const startVertical = settings.inverseVertical ? settings.verticalParallax[1] : settings.verticalParallax[0];
    const endVertical = settings.inverseVertical ? settings.verticalParallax[0] : settings.verticalParallax[1];
    const startHorizontal = settings.inverseHorizontal ? settings.horizontalParallax[1] : settings.horizontalParallax[0];
    const endHorizontal = settings.inverseHorizontal ? settings.horizontalParallax[0] : settings.horizontalParallax[1];

    const directionStart = `${startHorizontal}% ${startVertical}%`;
    const directionEnd = `${endHorizontal}% ${endVertical}%`;

    // Create and store the timeline
    window[`parallaxbg_${selector}`] = gsap.timeline({
        scrollTrigger: {
            trigger: selector,
            start: "top bottom",
            scrub: settings.scrub
        }
    });

    // Add the animation to the timeline
    window[`parallaxbg_${selector}`].fromTo(selector,
        { backgroundPosition: directionStart },
        { backgroundPosition: directionEnd, ease: "none" }
    );
}
