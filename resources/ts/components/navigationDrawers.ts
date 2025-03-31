const sectionsNavDraw = document.querySelectorAll<HTMLElement>('[data-section2-view-name]');
const imageNavDraw = document.querySelector<HTMLImageElement>('[data-section2-view]') as HTMLImageElement | null;

function handleMouseEnterNavDraw(event: MouseEvent) {
    const target = event.target as HTMLElement;
    const link = target.dataset.section2ViewName as string;

    if (!imageNavDraw || !link) return;
    imageNavDraw.style.display = "block";
    imageNavDraw.src = `/images/sections-home/${link}.webp`;
    imageNavDraw.classList.add('active');
}

function handleMouseLeaveNavDraw() {
    if (!imageNavDraw) return;
    imageNavDraw.classList.remove('active');
}

sectionsNavDraw.forEach(section => {
    section.addEventListener('mouseenter', handleMouseEnterNavDraw);
    section.addEventListener('mouseleave', handleMouseLeaveNavDraw);
});
