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
    let currentActive: HTMLElement | null = null;

    function showImage(section: HTMLElement) {
        const link = section.dataset.name as string;
        if (!image || !link) return;

        if (currentActive && currentActive !== section) {
            currentActive.classList.remove("active");
        }

        section.classList.add("active");
        currentActive = section;

        image.style.display = "block";
        image.src = `/images/sections-home/${link}.webp`;
        image.classList.add("active");
    }

    function hideImage() {
        if (!image) return;
        image.classList.remove("active");

        if (currentActive) {
            currentActive.classList.remove("active");
            currentActive = null;
        }
    }

    sections.forEach(section => {
        let tapped = false;

        section.addEventListener("touchstart", (e) => {
            if (!tapped) {
                e.preventDefault();
                tapped = true;
                showImage(section);

                setTimeout(() => tapped = false, 500);
            } else {
                hideImage();
                const link = section.getAttribute("href");
                if (link) {
                    window.location.href = link;
                }
            }
        });

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
