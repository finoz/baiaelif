import "../style/main.scss";

const setupScrollBlur = () => {
  const header = document.querySelector(".header") as HTMLElement;
  const section = document.querySelector(".section") as HTMLElement;

  if (!header || !section) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(() => {
        const sectionRect = section.getBoundingClientRect();
        const progress = Math.min(
          1,
          Math.max(0, -sectionRect.top / sectionRect.height)
        );
        const blurValue = progress * 10;
        const scaleValue = 1 + progress * 0.2;
        header.style.filter = `blur(${blurValue}px)`;
        header.style.transform = `scale(${scaleValue})`;
      });
    },
    {
      threshold: Array.from({ length: 100 }, (_, i = 20) => i / 100),
    }
  );

  observer.observe(section);
};

document.addEventListener("DOMContentLoaded", setupScrollBlur);
