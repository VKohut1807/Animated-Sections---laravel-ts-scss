document.addEventListener("DOMContentLoaded", () => {
    showSectionsNr2(
        "[data-background-window]",
        "[data-nav-drawers-views] [data-click]",
        "[data-nav-drawers-views]",
        "[data-nav-drawers-views] [data-name]",
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
    let tappedElement: HTMLElement | null = null;

    function showImage(section: HTMLElement) {
        const link = section.dataset.name;
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
        if (!image) return;

        image.classList.remove("active");

        if (currentActive) {
            currentActive.classList.remove("active");
            currentActive = null;
        }
    }

    sections.forEach(section => {
        section.addEventListener("mouseover", () => showImage(section));
        section.addEventListener("mouseout", hideImage);

        section.addEventListener("click", () => {
            const href = section.getAttribute("href");
            if (href) window.location.href = href;
        });

        section.addEventListener("touchstart", (e) => {
            const href = section.getAttribute("href");

            if (tappedElement !== section) {
                e.preventDefault();
                tappedElement = section;
                showImage(section);

                setTimeout(() => {
                    tappedElement = null;
                }, 600);

            } else {
                if (href) {
                    hideImage();
                    window.location.href = href;
                }
            }
        });
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
