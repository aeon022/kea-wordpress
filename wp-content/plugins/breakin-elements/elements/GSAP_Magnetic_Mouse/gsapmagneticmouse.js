function MagneticMouse(options) {
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
  
  const {
    element,
    target,
    threshold = 2,
    durationin = 1.2,
    durationout = 1.2,
    easein = "power2",
    easeout = "power2"
  } = options;
  
  let { zoom = false } = options;
  const eventHandlers = [];

  const mousemove = (e) => {
    const rect = target.getBoundingClientRect();
    const mouseX = e.clientX - rect.left - rect.width / 2;
    const mouseY = e.clientY - rect.top - rect.height / 2;

    gsap.to(element, {
      x: threshold === 0 ? mouseX : mouseX / threshold,
      y: threshold === 0 ? mouseY : mouseY / threshold,
      ease: easein,
      overwrite: "auto",
      duration: durationin
    });

    if (zoom && zoom !== 1) {
      gsap.to(element, {
        scale: zoom,
        ease: easein,
        overwrite: "auto",
        duration: durationin
      });
    }
  };

  const mouseleave = () => {
    gsap.to(element, {
      x: 0,
      y: 0,
      scale: 1,
      ease: easeout,
      duration: durationout,
      overwrite: "auto",
    });
  };

  const init = () => {
    const mouseMoveHandler = (e) => mousemove(e);
    const mouseLeaveHandler = () => mouseleave();

    target.addEventListener('mousemove', mouseMoveHandler, false);
    target.addEventListener('mouseleave', mouseLeaveHandler, false);

    eventHandlers.push(
      { type: 'mousemove', handler: mouseMoveHandler },
      { type: 'mouseleave', handler: mouseLeaveHandler }
    );
  };

  this.updateZoom = (newZoom) => {
    zoom = newZoom;
  };

  init();
}
