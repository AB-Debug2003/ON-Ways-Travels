(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function (e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function (e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Hero carousel indicators
   */
  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>" :
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function (direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()

document.addEventListener("DOMContentLoaded", function () {
  adultSlider.addEventListener("input", function () {
    adultInput.value = adultSlider.value;
  });

  adultInput.addEventListener("input", function () {
    adultSlider.value = adultInput.value;
  });

  childInput.addEventListener("input", function () {
    childSlider.value = childInput.value;
  });

  childSlider.addEventListener("input", function () {
    childInput.value = childSlider.value;
  });
});

function validateBooking() {
  var name = document.getElementById("name")
  var email = document.getElementById("email")
  var depDate = new Date(document.getElementById("depDate").value);
  var retDate = new Date(document.getElementById("retDate").value);
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var timeDiff = Math.abs(retDate.getTime() - depDate.getTime());
  var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

  if (name.value === "") {
    alert("Error! Enter a Valid Name.")
    return false;
  }
  
  if (email.value === "" || !(emailPattern.test(email.value))) {
    alert("Error! Enter a valid email");
    return false;
  }
  
  if (diffDays < 7) {
    alert("Incorrect Return Date! Your trip must be of more than 7 days.")
    return false;
  }

  else{
    return true;
  }
}

function validateSignup() {
  var email = document.getElementById("email")
  var username = document.getElementById("username")
  var password = document.getElementById("password")
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var usernamePattern = /^[a-zA-Z0-9]+$/;

  if (email.value === "" || !(emailPattern.test(email.value))) {
    alert("Error! Enter a valid email");
    return false;
  }

  if (username.value === "" || !(usernamePattern.test(username.value))) {
    alert("Enter a Valid Username!")
    return false;
  }

  if (password.value === "") {
    alert("Enter a Valid Password!")
    return false;
  }

  else{
    return true;
  }
  
}

function validateLogin() {
  var username = document.getElementById("username")
  var password = document.getElementById("password")

  if (username.value === "" || !(usernamePattern.test(username.value))) {
    alert("Enter a Valid Username!")
    return false;
  }

  if (password.value === "") {
    alert("Enter a Valid Password!")
    return false;
  }

  else{
    return true;
  }
  
}