document.addEventListener("DOMContentLoaded", () => {
    navDrawers(
        "[data-background-window]",
        "[data-nav-drawers-views] [data-trigger]",
        "[data-nav-drawers-views]",
        "[data-nav-drawers-views] [data-section-name]",
        "[data-nav-drawers-image]"
    );
});

function navDrawers(
    backgroundWindowSelector: string,
    triggerElementSelector: string,
    navDrawersViewsSelector: string,
    sectionsSelector: string,
    imageSelector: string,
): void {
    const backgroundWindow = document.querySelector(backgroundWindowSelector) as HTMLElement;
    const triggerElement = document.querySelector(triggerElementSelector) as HTMLElement;
    const navDrawersViews = document.querySelector(navDrawersViewsSelector) as HTMLElement;
    const sections = document.querySelectorAll(sectionsSelector) as NodeListOf<HTMLElement>;
    const image = document.querySelector(imageSelector) as HTMLImageElement;

    const state = {
        currentActive: null as HTMLElement | null,
        scrollY: 0 as number
    };

    bindSectionEventsNavDrawers(sections, image, state);

    triggerElement?.addEventListener("click", () => {
        disableScrollNavDrawers(state);
        navDrawersViews?.classList.add("active");
        backgroundWindow?.classList.add("active");
    });

    backgroundWindow?.addEventListener("click", () => {
        hideImageNavDrawers(image, state);
        enableScrollNavDrawers(state);
        navDrawersViews?.classList.remove("active");
        backgroundWindow?.classList.remove("active");
    });
}

function showImageNavDrawers(
    section: HTMLElement,
    image: HTMLImageElement | null,
    state: { currentActive: HTMLElement | null }
) {
    const link = section.dataset.sectionName;
    if (!image || !link) return;

    if (state.currentActive && state.currentActive !== section) {
        state.currentActive.classList.remove("active");
    }

    state.currentActive = section;
    section.classList.add("active");

    image.src = `/images/sections-home/${link}.webp`;
    image.style.display = "block";
    image.classList.add("active");
}

function hideImageNavDrawers(
    image: HTMLImageElement | null,
    state: { currentActive: HTMLElement | null }
) {
    if (!image || !state.currentActive) return;

    image.classList.remove("active");
    state.currentActive.classList.remove("active");
    state.currentActive = null;
}

function bindSectionEventsNavDrawers(
    sections: NodeListOf<HTMLElement>,
    image: HTMLImageElement | null,
    state: { currentActive: HTMLElement | null }
) {
    sections.forEach(section => {
        section.addEventListener("touchstart", () =>
            showImageNavDrawers(section, image, state)
        );
        section.addEventListener("touchend", () =>
            hideImageNavDrawers(image, state)
        );
        section.addEventListener("touchcancel", () =>
            hideImageNavDrawers(image, state)
        );

        section.addEventListener("mouseover", () =>
            showImageNavDrawers(section, image, state)
        );
        section.addEventListener("mouseout", () =>
            hideImageNavDrawers(image, state)
        );
    });
}

function disableScrollNavDrawers(state: { scrollY: number }) {
    state.scrollY = window.scrollY;
    document.body.style.position = 'fixed';
    document.body.style.top = `-${scrollY}px`;
    document.body.style.width = '100%';
}

function enableScrollNavDrawers(state: { scrollY: number }) {
    document.body.style.position = '';
    document.body.style.top = '';
    window.scrollTo(0, state.scrollY);
}
