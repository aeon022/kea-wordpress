function initParallax(selector, options = {}) {
    const duration = options.duration || 0.5;
    const ease = options.ease || "power2";
    const resetOnExit = options.resetOnExit !== undefined ? options.resetOnExit : true;
    const useFullScreen = options.useFullScreen || false;
    const enableTouch = useFullScreen ? false : (options.enableTouch || false);

    var container = document.querySelector(selector);
    let rect = container.getBoundingClientRect();

    var mouse = {x: 0, y: 0, moved: false, leave: false};

    const moveHandler = function(e) {
        if (!enableTouch && e.type.startsWith('touch')) {
            return;
        }
        mouse.moved = true;
        mouse.leave = false;
        if (e.type.startsWith('touch')) {
            e.preventDefault(); // Prevent scrolling when touching the element
            const touch = e.touches[0] || e.changedTouches[0];
            if (useFullScreen) {
                mouse.x = touch.clientX;
                mouse.y = touch.clientY;
            } else {
                mouse.x = touch.clientX - rect.left;
                mouse.y = touch.clientY - rect.top;
            }
        } else {
            if (useFullScreen) {
                mouse.x = e.clientX;
                mouse.y = e.clientY;
            } else {
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;
            }
        }
    };

    const leaveHandler = function(e) {
        if (!enableTouch && e.type.startsWith('touch')) {
            return;
        }
        mouse.moved = true;
        mouse.leave = true;
    };

    const target = useFullScreen ? document : container;

    if (enableTouch) {
        target.addEventListener('touchmove', moveHandler, { passive: false });
        target.addEventListener('touchend', leaveHandler);
    }
    target.addEventListener('mousemove', moveHandler);
    target.addEventListener('mouseleave', leaveHandler);

    function parallaxIt(target, movement) {
        let x, y;
        if (useFullScreen) {
            x = (mouse.x - window.innerWidth / 2) / window.innerWidth * movement;
            y = (mouse.y - window.innerHeight / 2) / window.innerHeight * movement;
        } else {
            x = (mouse.x - rect.width / 2) / rect.width * movement;
            y = (mouse.y - rect.height / 2) / rect.height * movement;
        }

        gsap.to(target, {
            duration: duration,
            ease: ease,
            x: x,
            y: y
        });
    }

    const tickerFunction = function() {
        if (mouse.moved) {
            const parallaxEl = container.querySelectorAll('[data-parallax]');
            parallaxEl.forEach((element) => {
                const paraValue = (mouse.leave && resetOnExit) ? 0 : element.dataset.parallax;
                parallaxIt(element, paraValue);
            });
        }
        mouse.moved = false;
    };

    gsap.ticker.add(tickerFunction);

    function updateRect() {
        if (!useFullScreen) {
            rect = container.getBoundingClientRect();
        }
    }

    window.addEventListener('resize', updateRect);
    window.addEventListener('scroll', updateRect);

    return function cleanup() {
        if (enableTouch) {
            target.removeEventListener('touchmove', moveHandler);
            target.removeEventListener('touchend', leaveHandler);
        }
        target.removeEventListener('mousemove', moveHandler);
        target.removeEventListener('mouseleave', leaveHandler);
        window.removeEventListener('resize', updateRect);
        window.removeEventListener('scroll', updateRect);
        gsap.ticker.remove(tickerFunction);
    };
}
