document.addEventListener("DOMContentLoaded", () => {
    showSectionsNr2(
        "[data-background-window]",
        "[data-nav-drawers-views] [data-trigger]",
        "[data-nav-drawers-views]",
        "[data-nav-drawers-views] [data-section-name]",
        "[data-nav-drawers-image]"
    );
});

function showSectionsNr2(
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

    let currentActive: HTMLElement | null = null;

    function showImage(section: HTMLElement) {
        const link = section.dataset.sectionName;
        if (!image || !link) return;


        if (currentActive && currentActive !== section) {
            currentActive.classList.remove("active");
        }

        currentActive = section;
        section.classList.add("active");

        image.src = `/images/sections-home/${link}.webp`;
        image.style.display = "block";
        image.classList.add("active");
    }

    function hideImage() {
        if (!image || !currentActive) return;

        image.classList.remove("active");
        currentActive.classList.remove("active");
        currentActive = null;
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
        hideImage();
        navDrawersViews?.classList.remove("active");
        backgroundWindow?.classList.remove("active");
    });
}
