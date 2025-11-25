// document.addEventListener("DOMContentLoaded", () => {
//     handleScrollNr11("[data-section-selector]", "[data-image-selector]");
// });

// window.addEventListener("scroll", () => {
//     handleScrollNr11("[data-section-selector]", "[data-image-selector]");
// });

// function handleScrollNr11(
//     sectionSelector: string,
//     imageSelector: string,
// ): void {
//     const section = document.querySelector(sectionSelector) as HTMLElement;
//     const image = document.querySelector(imageSelector) as HTMLElement;

//     if (!section || !image) return;

//     const { top: sectionTop, height: sectionHeight } =
//         section.getBoundingClientRect();
//     const windowHeight: number = window.innerHeight;

//     const minScale: number = 1;
//     const maxScale: number = 2;
//     const maxObjectPositionY: number = 100;
//     const startObjectPositionY: number = 30;

//     const distanceFromTop: number = sectionTop;
//     const isVisible: boolean =
//         distanceFromTop < windowHeight && distanceFromTop > -sectionHeight;

//     const visibilityFactor: number = isVisible
//         ? Math.min(
//             1,
//             Math.max(
//                 0,
//                 (windowHeight - distanceFromTop) / (windowHeight + sectionHeight),
//             ),
//         )
//         : 0;

//     const scaleFactor: number = isVisible
//         ? minScale + visibilityFactor * (maxScale - minScale)
//         : minScale;

//     const offsetPercentage: number = isVisible
//         ? startObjectPositionY +
//         visibilityFactor * (maxObjectPositionY - startObjectPositionY)
//         : distanceFromTop <= -sectionHeight
//             ? maxObjectPositionY
//             : startObjectPositionY;

//     image.style.transform = `scale(${scaleFactor})`;
//     image.style.objectPosition = `center ${offsetPercentage}%`;
// }
