import "../scss/main.scss";

if (typeof window !== `undefined`) {
  window.addEventListener(`load`, () => {
    console.log("Window loaded.");
  });
}

if (typeof document !== `undefined`) {
  document.addEventListener(`DOMContentLoaded`, () => {
    console.log("DOM loaded.");
  });
}
