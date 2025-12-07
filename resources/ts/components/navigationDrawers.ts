document.addEventListener("DOMContentLoaded", () => {
    showSectionsNr2(
        "[data-background-window]",
        "[data-nav-drawers-views] [data-click]",
        "[data-nav-drawers-views]",
        "[data-nav-drawers-views] [data-name]",
        "[data-nav-drawers-image]"
    )
});

function showSectionsNr2(
    backgroundWindowSelector: string,
    triggerElementSelector: string,
    navDrawersViewsSelector: string,
    sectionsSelector: string,
    imageSelector: string,
): void {
    const backgroundWindow = document.querySelector<HTMLElement>(backgroundWindowSelector);
    const triggerElement = document.querySelector<HTMLImageElement>(triggerElementSelector);
    const navDrawersViews = document.querySelector<HTMLElement>(navDrawersViewsSelector);
    const sections = document.querySelectorAll<HTMLElement>(sectionsSelector);
    const image = document.querySelector<HTMLImageElement>(imageSelector);

    function showImage(section: HTMLElement) {
        const link = section.dataset.name as string;
        if (!image || !link) return;

        image.style.display = "block";
        image.src = `/images/sections-home/${link}.webp`;
        image.classList.add("active");
    }

    function hideImage() {
        if (!image) return;
        image.classList.remove("active");
    }

    sections.forEach(section => {
        section.addEventListener('touchstart', () => showImage(section));
        section.addEventListener('touchend', hideImage);
        section.addEventListener('touchcancel', hideImage);

        section.addEventListener('mouseover', () => showImage(section));
        section.addEventListener('mouseout', hideImage);
    });

    triggerElement?.addEventListener("click", () => {
        navDrawersViews?.classList.add("active");
        backgroundWindow?.classList.add("active");
    });

    backgroundWindow?.addEventListener("click", () => {
        navDrawersViews?.classList.remove("active");
        backgroundWindow?.classList.remove("active");
    });
}
