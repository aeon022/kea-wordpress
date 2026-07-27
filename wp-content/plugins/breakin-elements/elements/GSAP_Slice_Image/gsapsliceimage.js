function createSliceAnimation(selector, options) {
    gsap.registerPlugin(ScrollTrigger);

    if (options.disableOnMobile) {
        let mm = gsap.matchMedia();
        mm.add("(min-width: 768px)", () => {
            initAnimation();
        });
    } else {
        initAnimation();
    }

    function initAnimation() {
        const timeline = gsap.timeline({
            defaults: {
                ease: 'sine.inOut',
                duration: 1,
            },
            scrollTrigger: {
                trigger: selector,
				start: options.start || "top bottom",
				end: options.end || "bottom top",
				scrub: options.scrub !== undefined ? options.scrub : false,
                toggleActions: options.toggleActions || 'play pause resume reset',
				onEnter: () => {
                        gsap.set(selector, { autoAlpha: 1 });
                    },
				onEnterBack: () => {
                        gsap.set(selector, { autoAlpha: 1 });
                    }
            }
        });

        const fromConfig = {
            autoAlpha: 0,
        };

        if (options.effect === 'slidedown') {
            fromConfig.y = -100;
        } else if (options.effect === 'slideup') {
            fromConfig.y = 100;
        } else if (options.effect === 'slideleft') {
            fromConfig.x = -100;
        } else if (options.effect === 'slideright') {
            fromConfig.x = 100;
        } else if (options.effect === 'zoomin') {
            fromConfig.scale = 0;
        } else if (options.effect === 'zoomout') {
            fromConfig.scale = 2;
        } else if (options.effect === 'customeffect') {
            if (options.customEffect) {
                const ce = options.customEffect;
                if (ce.randomX) {
                    fromConfig.x = `random(${ce.randomX[0]}, ${ce.randomX[1]}, 10)`;
                } else {
                    fromConfig.x = ce.x || 0;
                }
                if (ce.randomY) {
                    fromConfig.y = `random(${ce.randomY[0]}, ${ce.randomY[1]}, 10)`;
                } else {
                    fromConfig.y = ce.y || 0;
                }
                if (ce.randomScale) {
                    fromConfig.scale = `random(${ce.randomScale[0]}, ${ce.randomScale[1]}, 0.1)`;
                } else {
                    fromConfig.scale = ce.scale || 1;
                }
                if (ce.randomRotationX) {
                    fromConfig.rotateX = `random(${ce.randomRotationX[0]}, ${ce.randomRotationX[1]}, 10)`;
                } else {
                    fromConfig.rotateX = ce.rotationX || 0;
                }
                if (ce.randomRotationY) {
                    fromConfig.rotateY = `random(${ce.randomRotationY[0]}, ${ce.randomRotationY[1]}, 10)`;
                } else {
                    fromConfig.rotateY = ce.rotationY || 0;
                }
                if (ce.randomRotationZ) {
                    fromConfig.rotateZ = `random(${ce.randomRotationZ[0]}, ${ce.randomRotationZ[1]}, 10)`;
                } else {
                    fromConfig.rotateZ = ce.rotationZ || 0;
                }
                fromConfig.transformPerspective = ce.perspective || 0;
                fromConfig.transformOrigin = `${ce.transformOriginX || 50}% ${ce.transformOriginY || 50}%`;
            }
        }

        timeline.fromTo(`${selector} .sliced`, fromConfig, {
            duration: options.duration || 1,
			delay: options.delay || 0,
            autoAlpha: 1,
            x: 0,
            y: 0,
            scale: 1,
            rotateX: 0,
            rotateY: 0,
            rotateZ: 0,
            ease: options.ease || 'power2.out',
            stagger: {
                each: options.stagger || 0,
                from: options.staggerFrom || 'start',
            }
        });

        return timeline;
    }
}
