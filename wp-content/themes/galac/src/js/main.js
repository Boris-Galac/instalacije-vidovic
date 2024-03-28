const main = document.querySelector(".main");
const nav = document.querySelector(".nav");
const ham = document.querySelector(".ham");

if (main.classList.contains("main-home")) {
  // PROJECT COUNTER
  let valueDisplays = document.querySelectorAll(".count");
  let interval = 5000;

  valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = Number(valueDisplay.getAttribute("data-num"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(() => {
      startValue += 1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
  // ACCORDION
  document.querySelectorAll("#accordion-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const contentAttr = btn
        .closest(".o-ponudi-accordion")
        .querySelector(".accordion-content")
        .getAttribute("data-active");
      const content = btn
        .closest(".o-ponudi-accordion")
        .querySelector(".accordion-content");
      const btnIcon = btn.querySelector("#accordion-icon");
      if (contentAttr === "false") {
        content.setAttribute("data-active", "true");
        btnIcon.style = `
          rotate: 45deg;
        `;
      } else {
        content.setAttribute("data-active", "false");
        btnIcon.style = `
        rotate: 0;
      `;
      }
    });
  });
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: true,
    speed: 1000,
    loop: true,
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      670: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
}

//// 💡💡💡💡 GLOBALS

//// HAM
ham.addEventListener("click", (e) => {
  const navAttr = nav.getAttribute("data-active");
  if (navAttr === "false") {
    nav.setAttribute("data-active", "true");
    ham.setAttribute("data-active", "true");
  } else {
    nav.setAttribute("data-active", "false");
    ham.setAttribute("data-active", "false");
  }
});

//// back to top button

const backToTopbtn = document.querySelector(".back-to-top-btn");
backToTopbtn.addEventListener("click", (e) => {
  window.scroll({
    top: 0,
  });
});
window.addEventListener("scroll", (e) => {
  if (window.scrollY > 150) {
    backToTopbtn.setAttribute("data-visible", "true");
  } else backToTopbtn.setAttribute("data-visible", "false");
});

if (!main.classList.contains("main-home")) {
  // header padding
  const header = document.querySelector(".header").offsetHeight;
  document.querySelector(".header-padding").style = `
    padding-top:${header}px;
  `;
}

// SEARCH OVERLAY

const headerSearch = document.querySelector(".search-btn");

headerSearch.addEventListener("click", (e) => {
  const searchOverlay = document.querySelector(".search-overlay");

  if (searchOverlay.getAttribute("data-active") === "false") {
    searchOverlay.setAttribute("data-active", "true");
  } else {
    searchOverlay.setAttribute("data-active", "false");
  }
  window.addEventListener("click", (e) => {
    if (e.target.matches(".search-overlay")) {
      searchOverlay.setAttribute("data-active", "false");
    }
  });
});
// EMAIL CONSULTATION

document.getElementById("emailForm").addEventListener("submit", (e) => {
  e.preventDefault(); // Spriječava slanje obrasca

  // Dohvati uneseni e-mail korisnika
  const userEmail = document.getElementById("userEmail").value;

  // Provjeri ispravnost e-mail adrese
  if (!isValidEmail(userEmail)) {
    alert("Molimo unesite ispravnu e-mail adresu.");
    return;
  }

  // Pošalji e-mail na određenu adresu
  const emailBody = `Korisnikov e-mail: ${userEmail}`;
  const mailtoLink = `mailto:boris.galac@gmail.com?subject=Novi e-mail&body=${encodeURIComponent(
    emailBody
  )}`;
  window.location.href = mailtoLink;
});

// Funkcija za provjeru ispravnosti e-mail adrese
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

if (document.body.classList.contains("single")) {
  //// OFFER GMAIL CONTACT FORM
  document.querySelectorAll(".upit-offer-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const offerHeading =
        btn.parentElement.parentElement.parentElement.firstElementChild
          .firstElementChild.nextElementSibling.innerText;
      const bodyText =
        "Poštovani,\n\nZanimam se za navedenu ponudu. Možete mi se javiti povratno što je prije moguće da bi ostvarili suradnju. \n\nLijep Vam pozdrav!"; // Add additional text after "Poštovani,\n\n"
      const subject = encodeURIComponent(`Ponuda: ${offerHeading}`);
      const body = encodeURIComponent(bodyText);
      const recipient = "boris.galac@gmail.com";

      // Compose the mailto link with recipient, subject, and body
      const mailtoLink = `mailto:${recipient}?subject=${subject}&body=${body}`;

      // Open the mail client
      window.location.href = mailtoLink;
    });
  });
}
