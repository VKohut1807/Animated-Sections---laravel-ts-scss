document.addEventListener("DOMContentLoaded", () => {
  scrollProgressNr7 &&
    scrollProgressNr7("[data-scroll-progress]", "#circle-progress path");
});

document.addEventListener("scroll", () => {
  scrollProgressNr7 &&
    scrollProgressNr7("[data-scroll-progress]", "#circle-progress path");
});

window.addEventListener("resize", () => {
  scrollProgressNr7 &&
    scrollProgressNr7("[data-scroll-progress]", "#circle-progress path");
});

function scrollProgressNr7(
  sectionSelector: string,
  circleSelector: string,
): void {
  const sectionPath = document.querySelector<HTMLElement>(sectionSelector);
  const circlePath = document.querySelector<SVGPathElement>(circleSelector);

  if (!sectionPath || !circlePath) return;

  const totalHeight: number =
    document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercentage: number = (window.scrollY / totalHeight) * 100;
  const newStrokeDashoffset: number =
    circlePath.getTotalLength() * (1 - scrollPercentage / 100);

  sectionPath.style.opacity = scrollPercentage ? "1" : "0";
  sectionPath.style.visibility = scrollPercentage ? "visible" : "hidden";
  circlePath.style.strokeDashoffset = `${newStrokeDashoffset}px`;

  sectionPath.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}
