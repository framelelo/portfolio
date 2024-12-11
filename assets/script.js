const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
});
const getElements = document.querySelectorAll(".hidden");
getElements.forEach((el) => observer.observe(el));

let hamburger = document.querySelector(".nav-but");
let body = document.querySelector("body");
let nav = document.querySelector("nav");
let navList = document.querySelector(".nav-list");

hamburger.addEventListener("click", () => {
  body.classList.toggle("open");
});

hamburger.addEventListener("click", () => {
  if (hamburger.firstElementChild.classList.contains("fa-bars")) {
    hamburger.firstElementChild.classList.add("fa-times");
    hamburger.firstElementChild.classList.remove("fa-bars");
  } else {
    hamburger.firstElementChild.classList.add("fa-bars");
    hamburger.firstElementChild.classList.remove("fa-times");
  }
});

navList.addEventListener("click", () => {
  if (body.classList.contains("open") && hamburger.firstElementChild.classList.contains("fa-times")) {
    body.classList.remove("open");
    hamburger.firstElementChild.classList.add("fa-bars");
    hamburger.firstElementChild.classList.remove("fa-times");
  }
});

document.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    hamburger.classList.add("fixed");
  } else {
    hamburger.classList.remove("fixed");
  }
});