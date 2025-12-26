document.addEventListener("DOMContentLoaded", () => {
  showSectionsNr2(
    "[data-background-window]",
    "[data-section-2-views] [data-trigger]",
    "[data-section-2-views]",
    "[data-section-2-views] [data-section-name]",
    "[data-section-2-image]"
  );
});

function showSectionsNr2(
  backgroundWindowSelector: string,
  triggerElementSelector: string,
  section2ViewsSelector: string,
  sectionsSelector: string,
  imageSelector: string
): void {
  const backgroundWindow = document.querySelector(backgroundWindowSelector) as HTMLElement;
  const triggerElement = document.querySelector(triggerElementSelector) as HTMLElement;
  const section2Views = document.querySelector(section2ViewsSelector) as HTMLElement;
  const sections = document.querySelectorAll(sectionsSelector) as NodeListOf<HTMLElement>;
  const image = document.querySelector(imageSelector) as HTMLImageElement;

  const state = {
    currentActive: null as HTMLElement | null,
    scrollY: 0 as number
  };

  bindSectionEvents(sections, image, state);

  triggerElement?.addEventListener("click", () => {
    disableScroll(state);
    section2Views?.classList.add("active");
    backgroundWindow?.classList.add("active");
  });

  backgroundWindow?.addEventListener("click", () => {
    hideImage(image, state);
    enableScroll(state);
    section2Views?.classList.remove("active");
    backgroundWindow?.classList.remove("active");
  });
}

function showImage(
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

function hideImage(
  image: HTMLImageElement | null,
  state: { currentActive: HTMLElement | null }
) {
  if (!image || !state.currentActive) return;

  image.classList.remove("active");
  state.currentActive.classList.remove("active");
  state.currentActive = null;
}

function bindSectionEvents(
  sections: NodeListOf<HTMLElement>,
  image: HTMLImageElement | null,
  state: { currentActive: HTMLElement | null }
) {
  sections.forEach(section => {
    section.addEventListener("touchstart", () =>
      showImage(section, image, state)
    );
    section.addEventListener("touchend", () =>
      hideImage(image, state)
    );
    section.addEventListener("touchcancel", () =>
      hideImage(image, state)
    );

    section.addEventListener("mouseover", () =>
      showImage(section, image, state)
    );
    section.addEventListener("mouseout", () =>
      hideImage(image, state)
    );
  });
}

function disableScroll(state: { scrollY: number }) {
  state.scrollY = window.scrollY;
  document.body.style.position = 'fixed';
  document.body.style.top = `-${scrollY}px`;
  document.body.style.width = '100%';
}

function enableScroll(state: { scrollY: number }) {
  document.body.style.position = '';
  document.body.style.top = '';
  window.scrollTo(0, state.scrollY);
}
