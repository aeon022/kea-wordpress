function createStaggerAnimation(selector, options) {
  gsap.registerPlugin(ScrollTrigger);
  if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; }
  if (options.disableOnMobile) {
    let mm = gsap.matchMedia();
    mm.add("(min-width: 768px)", () => {
      setupAnimation();
    });
  } else {
    setupAnimation();
  }

  function setupAnimation() {

    const targetSelector = options.galleryMode ? `${selector} > *:not(.bde-gallery), ${selector} .ee-gallery-item` : `${selector} > *`;

    window.staggertm = gsap.timeline({
      scrollTrigger: {
        trigger: selector,
		start: options.start || "top bottom",
        end: options.end || "bottom top",
        scrub: options.scrub !== undefined ? options.scrub : false,
        toggleActions: options.toggleActions || "play pause resume reset",
		onEnter: () => {
                        gsap.set(selector, { autoAlpha: 1 });
                    },
		onEnterBack: () => {
                        gsap.set(selector, { autoAlpha: 1 });
                    }
      }
    });

    const fromVars = {
      autoAlpha: 0,
      ...getEffectVars(options.effect, options.customEffect)
    };

    const toVars = {
      duration: options.duration || 1,
	  delay: options.delay || 0,
      autoAlpha: 1,
      x: 0,
      y: 0,
      scale: 1,
      rotateX: 0,
      rotateY: 0,
      rotateZ: 0,
      ease: options.ease || "power2.out",
      stagger: {
        each: options.stagger || 0,
        from: options.staggerFrom || "start"
      }
    };

    window.staggertm.fromTo(targetSelector, fromVars, toVars);
  }

function getEffectVars(effect, customEffect) {
  switch (effect.toLowerCase()) {
    case 'slidedown':
      return { y: -100 };
    case 'slideup':
      return { y: 100 };
    case 'slideleft':
      return { x: -100 };
    case 'slideright':
      return { x: 100 };
    case 'zoomin':
      return { scale: 0 };
    case 'zoomout':
      return { scale: 2 };
    case 'customeffect':
      return getCustomEffectVars(customEffect);
    default:
      return {};
  }
}


  function getCustomEffectVars(customEffect) {
    const vars = {};

    if (customEffect.randomX) {
      vars.x = `random(${customEffect.randomX[0]}, ${customEffect.randomX[1]}, 10)`;
    } else {
      vars.x = customEffect.x || 0;
    }

    if (customEffect.randomY) {
      vars.y = `random(${customEffect.randomY[0]}, ${customEffect.randomY[1]}, 10)`;
    } else {
      vars.y = customEffect.y || 0;
    }

    if (customEffect.randomScale) {
      vars.scale = `random(${customEffect.randomScale[0]}, ${customEffect.randomScale[1]}, 0.1)`;
    } else {
      vars.scale = customEffect.scale || 1;
    }

    if (customEffect.randomRotationX) {
      vars.rotateX = `random(${customEffect.randomRotationX[0]}, ${customEffect.randomRotationX[1]}, 10)`;
    } else {
      vars.rotateX = customEffect.rotationX || 0;
    }

    if (customEffect.randomRotationY) {
      vars.rotateY = `random(${customEffect.randomRotationY[0]}, ${customEffect.randomRotationY[1]}, 10)`;
    } else {
      vars.rotateY = customEffect.rotationY || 0;
    }

    if (customEffect.randomRotationZ) {
      vars.rotateZ = `random(${customEffect.randomRotationZ[0]}, ${customEffect.randomRotationZ[1]}, 10)`;
    } else {
      vars.rotateZ = customEffect.rotationZ || 0;
    }

    vars.transformPerspective = customEffect.perspective || 0;
    vars.transformOrigin = `${customEffect.transformOriginX || 50}% ${customEffect.transformOriginY || 50}%`;

    return vars;
  }
}
