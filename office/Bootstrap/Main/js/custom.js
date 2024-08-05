
document.addEventListener("DOMContentLoaded", function () {

  var toggleBtns = document.querySelectorAll(".collapse-btn");

  toggleBtns.forEach(function (toggleBtn) {
    var toggleIcon = toggleBtn.querySelector(".toggle-icon");
    var collapseElement = document.querySelector(
      toggleBtn.getAttribute("data-bs-target")
    );

    toggleBtn.addEventListener("click", function () {
      if (collapseElement.classList.contains("show")) {
        toggleIcon.src = "./images/add.png";
      } else {
        toggleIcon.src = "./images/remove.png";
      }
    });

    collapseElement.addEventListener("hidden.bs.collapse", function () {
      toggleIcon.src = "./images/add.png";
    });

    collapseElement.addEventListener("shown.bs.collapse", function () {
      toggleIcon.src = "./images/remove.png";
    });
  });
});

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


