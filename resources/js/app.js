import './bootstrap';

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

if (!prefersReducedMotion.matches) {
    document.documentElement.classList.add('motion-ready');

    const revealElements = document.querySelectorAll('[data-reveal]');

    revealElements.forEach(element => {
        const delayStep = Number(element.dataset.revealDelay ?? 0);
        element.style.setProperty('--reveal-delay', `${Math.max(delayStep, 0) * 90}ms`);
    });

    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.16,
            rootMargin: '0px 0px -8% 0px',
        }
    );

    revealElements.forEach(element => {
        revealObserver.observe(element);
    });
}
