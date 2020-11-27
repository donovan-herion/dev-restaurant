console.log("script working");

const onScrollElements = document.querySelectorAll(".appear-on-scroll");

document.addEventListener("scroll", () => {
  const viewportheight = window.innerHeight - 100;

  onScrollElements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;

    if (elementTop < viewportheight) {
      element.classList.add("show");
    }
  });
});

const single = document.querySelector(".single-recipe-container");
single.classList.add("show");
