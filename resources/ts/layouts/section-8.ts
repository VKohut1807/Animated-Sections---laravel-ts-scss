document.addEventListener("DOMContentLoaded", () => {
  handleScrollNr8 && handleScrollNr8("[data-run-y1]", "[data-run-y2]");
  percentBarsNr8 && percentBarsNr8("[data-percentage]");
});

document.addEventListener("scroll", () => {
  handleScrollNr8 && handleScrollNr8("[data-run-y1]", "[data-run-y2]");
  percentBarsNr8 && percentBarsNr8("[data-percentage]");
});

function handleScrollNr8(firstSelector: string, secondSelector: string): void {
  const firstImage = document.querySelector(
    firstSelector,
  ) as HTMLElement | null;
  const secondImage = document.querySelector(
    secondSelector,
  ) as HTMLElement | null;
  if (!firstImage || !secondImage) return;

  const windowHeight: number = window.innerHeight;
  const maxTranslateY: number = 100;
  const remToPx: number = 16;
  const threshold: number = 0.5 * remToPx;

  applyTransform(firstImage, windowHeight, maxTranslateY, threshold, true);
  applyTransform(secondImage, windowHeight, maxTranslateY, threshold, false);
}

function applyTransform(
  element: HTMLElement,
  windowHeight: number,
  maxTranslateY: number,
  threshold: number,
  invert: boolean,
): void {
  const {top: topOffset, bottom: bottomOffset} =
    element.getBoundingClientRect();

  if (topOffset <= windowHeight + threshold && bottomOffset >= -threshold) {
    const translateY: number = Math.min(
      (windowHeight - topOffset) * 0.01,
      maxTranslateY,
    );
    const direction: number = invert ? -translateY : translateY;
    element.style.transform = `translateY(${direction}%)`;
  }
}

function percentBarsNr8(selector: string) {
  const percentSections = document.querySelectorAll(selector);
  const windowHeight: number = window.innerHeight;

  percentSections.forEach((section) => {
    const {top: topOffset, bottom: bottomOffset} =
      section.getBoundingClientRect();
    const line = section.querySelector("[data-line]") as HTMLElement;
    const percentage = (section as HTMLElement).dataset.percentage;

    if (topOffset <= windowHeight / 2 && bottomOffset >= 0) {
      if (percentage)
        line?.style.setProperty("--custom-width", `${percentage}%`);
    } else if (topOffset > windowHeight) {
      line.style.setProperty("--custom-width", `0%`);
    }
  });
}
