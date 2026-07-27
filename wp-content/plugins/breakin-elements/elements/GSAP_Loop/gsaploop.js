function createFloatingAnimation(selector, options) {
    gsap.registerPlugin(ScrollTrigger);

    const disableOnMobile = options.disableOnMobile || false;

    function createAnimation() {
        const xpos = options.x || 0;
        const ypos = options.y || 0;
        const rot = options.rotation || 0;
        const speedx = options.speed_x || 1;
        const speedy = options.speed_y || 1;
        const speedrot = options.speed_rotation || 1;
        const speedscale = options.speed_scale || 1;
        const targetSelector = `${selector} > :first-child`;

        const timeline = gsap.timeline({
            defaults: {
                ease: options.horizontal_effect || 'sine.inOut',
                repeat: -1,
                yoyo: true,
            },
            scrollTrigger: {
                trigger: selector,
                start: "top bottom",
                toggleActions: "play pause resume reset"
            }
        });

        timeline.fromTo(targetSelector, { x: -xpos/2 }, {
            x: xpos/2,
            duration: speedx,
            ease: options.horizontal_effect || 'sine.inOut',
        }, 0)
        .fromTo(targetSelector, { y: -ypos/2 }, {
            y: ypos/2,
            duration: speedy,
            ease: options.vertical_effect || 'sine.inOut',
        }, 0)
        .fromTo(targetSelector, { scale: options.scale_start || 1 }, {
            scale: options.scale_end || 1,
            duration: speedscale,
            ease: options.scale_effect || 'sine.inOut',
        }, 0)
        .fromTo(targetSelector, { rotation: -rot/2 }, {
            rotation: rot/2,
            duration: speedrot,
            ease: options.rotation_effect || 'sine.inOut',
        }, 0);

        return timeline;
    }
	if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; }
    if (disableOnMobile) {
        let mm = gsap.matchMedia();
        mm.add("(min-width: 768px)", () => {
            createAnimation();
        });
    } else {
        createAnimation();
    }
}
