const burger = document.querySelectorAll(".burger");
burger.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("menu").classList.toggle("active");
  });
});

function headerPaint() {
  const minOffset = 50;
  if (minOffset < document.documentElement.scrollTop) {
    if (!document.body.classList.contains("is-scrolled")) {
      document.body.classList.add("is-scrolled");
    }
  } else if (document.body.classList.contains("is-scrolled")) {
    document.body.classList.remove("is-scrolled");
  }
}

window.onload = () => {
  headerPaint();
};

window.onscroll = function () {
  headerPaint();
};

const swiper = new Swiper("#price-list", {
  slidesPerView: 1,
  allowTouchMove: false,
});

document
  .getElementById("material__gravel")
  .addEventListener("click", (event) => {
    swiper.slideTo(0);
  });
document
  .getElementById("material__granite")
  .addEventListener("click", (event) => {
    swiper.slideTo(1);
  });
document
  .getElementById("material__expanded-clay")
  .addEventListener("click", (event) => {
    swiper.slideTo(2);
  });
document
  .getElementById("material__RSG-solution")
  .addEventListener("click", (event) => {
    swiper.slideTo(3);
  });

const popupLinks = document.querySelectorAll(".popup__link");
const body = document.querySelector("body");
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;
const timeout = 600;

for (let index = 0; index < popupLinks.length; index++) {
  const popupLink = popupLinks[index];
  popupLink.addEventListener("click", function (e) {
    const popupName = popupLink.getAttribute("href").replace("#", "");
    const curentPopup = document.getElementById(popupName);
    popupOpen(curentPopup);
    e.preventDefault();
  });
}

const popupCloseIcon = document.querySelectorAll(".close-popup");
if (popupCloseIcon.length > 0) {
  for (let index = 0; index < popupCloseIcon.length; index++) {
    const el = popupCloseIcon[index];
    el.addEventListener("click", function (e) {
      e.preventDefault();
      popupClose(el.closest(".popup"));
    });
  }
}

function popupOpen(curentPopup) {
  document.body.classList.add("locked");
  if (curentPopup && unlock) {
    const popupActive = document.querySelector(".popup.open");
    if (popupActive) {
      popupClose(popupActive, false);
    }
    curentPopup.classList.add("open");
    curentPopup.addEventListener("click", function (e) {
      if (!e.target.closest(".popup__content")) {
        popupClose(e.target.closest(".popup"));
      }
    });
  }
}

function popupClose(curentPopup) {
  document.body.classList.remove("locked");
  curentPopup.classList.remove("open");
}

const form = document.getElementById("message-form");
if (form) {
  const formMessageBlock = form.querySelector(".form__message");
  form.addEventListener("submit", (event) => {
    formMessageBlock.innerHTML = "";
    const formData = new FormData(form);
    event.preventDefault();
    fetch("./scripts/script.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);

        let alertBlock = document.createElement("div");
        alertBlock.classList.add("alert");

        if (data.success) {
          form
            .querySelectorAll("input")
            .forEach((element) => (element.value = ""));
          alertBlock.classList.add("alert_success");
        } else {
          alertBlock.classList.add("alert_danger");
        }
        alertBlock.innerHTML = data.message;
        formMessageBlock.append(alertBlock);
      });
  });
}
