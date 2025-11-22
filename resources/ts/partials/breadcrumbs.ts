window.addEventListener("DOMContentLoaded", () => { breadcrumbsToRight(); });
window.addEventListener('resize', () => { breadcrumbsToRight(); });

function breadcrumbsToRight(): void {
    const breadcrumbsScroll = document.querySelector<HTMLElement>(".breadcrumbs-items");
    const sizeMobile: number = 768;

    if (breadcrumbsScroll && window.innerWidth <= sizeMobile) {
        breadcrumbsScroll.scrollLeft = breadcrumbsScroll.scrollWidth;
    }
}