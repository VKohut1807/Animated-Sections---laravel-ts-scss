const sections = document.querySelectorAll<HTMLElement>(
  "[data-section2-view-name]",
);
const image = document.querySelector<HTMLImageElement>(
  "[data-section2-view]",
) as HTMLImageElement | null;

function handleMouseEnter(event: MouseEvent): void {
  const target = event.target as HTMLElement;
  const link = target.dataset.section2ViewName as string;

  if (!image || !link) return;
  image.style.display = "block";
  image.src = `/images/sections-home/${link}.webp`;
  image.classList.add("active");
}

function handleMouseLeave(): void {
  if (!image) return;
  image.classList.remove("active");
}

sections.forEach((section) => {
  section.addEventListener("mouseenter", handleMouseEnter);
  section.addEventListener("mouseleave", handleMouseLeave);
});
