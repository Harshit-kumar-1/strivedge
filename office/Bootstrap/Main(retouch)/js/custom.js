
// Testimonial and Blog Slider 

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    items: 4,
    loop: false,
    center: true,
    margin: 10,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash'
  });
});



document.addEventListener('DOMContentLoaded', function () {
  var navbarHeight = document.querySelector('.navbar').offsetHeight;

  document.querySelectorAll('.navbar-nav a').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      var targetId = this.getAttribute('href').substring(1);
      var targetElement = document.getElementById(targetId);

      window.scrollTo({
        top: targetElement.offsetTop - navbarHeight,
        behavior: 'smooth'
      });
    });
  });
});


// Automatic close navbar
// $(document).ready(function () {
//   $('.navbar-nav a').on('click', function () {
//     if ($('.navbar-toggler').is(':visible')) {
//       $('.navbar-collapse').collapse('hide');
//     }
//   });
// });

// Automatic close navbar
document.addEventListener('DOMContentLoaded', function () {
  var navLinks = document.querySelectorAll('.navbar-nav a');
  var navbarCollapse = document.querySelector('.navbar-collapse');

  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.getComputedStyle(navbarCollapse).display !== 'none') {
        var collapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
        collapse.hide();
      }
    });
  });
});




// Collapse button for image replacemant

// document.addEventListener("DOMContentLoaded", function () {

//   var toggleBtns = document.querySelectorAll(".collapse-btn");

//   toggleBtns.forEach(function (toggleBtn) {
//     var toggleIcon = toggleBtn.querySelector(".toggle-icon");
//     var collapseElement = document.querySelector(
//       toggleBtn.getAttribute("data-bs-target")
//     );

//     toggleBtn.addEventListener("click", function () {
//       if (collapseElement.classList.contains("show")) {
//         toggleIcon.src = "./images/add.png";
//       } else {
//         toggleIcon.src = "./images/remove.png";
//       }
//     });

//     collapseElement.addEventListener("hidden.bs.collapse", function () {
//       toggleIcon.src = "./images/add.png";
//     });

//     collapseElement.addEventListener("shown.bs.collapse", function () {
//       toggleIcon.src = "./images/remove.png";
//     });
//   });
// });





//Also image replacement for menu bar

// document.addEventListener("DOMContentLoaded", function () {
//     let navbarToggle = document.getElementById("navbar-button");
//     let navbarMenuIcon = document.getElementById("menu");
//     let navbarContent = document.getElementById("navbarSupportedContent");

//     navbarToggle.addEventListener('click', function () {
//         if (navbarContent.classList.contains("show")) {
//             navbarMenuIcon.classList.remove("navbar-toggler-icon");
//         } else {
//             navbarMenuIcon.classList.add("bi bi-x");
//         }
//     });
// })


