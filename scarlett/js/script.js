document.addEventListener("DOMContentLoaded", function () {
    var menuBtn = document.querySelector('.menuIcon');
    var closeBtn = document.getElementById('closeIcon');
    var navbar = document.getElementById('navbar');
    var menuLinks = document.querySelectorAll('.menu-links');

    menuBtn.addEventListener('click', function () {
        if (navbar.style.display === "none" || navbar.style.display === "") {
            navbar.classList.add("active");
        }
    });

    closeBtn.addEventListener('click', function () {
        navbar.classList.remove("active");
    });

    // console.log(menuLinks);

    menuLinks.forEach((link) => {
        // console.log(navbar);
        link.addEventListener('click', function () {
            navbar.classList.remove("active");
        });
    });

});


document.addEventListener("DOMContentLoaded", function () {
    var toggles = document.querySelectorAll('.toggle');
    var collapses = document.querySelectorAll('.collapse-content');


    toggles.forEach((toggle, index) => {
        const collapseContent = collapses[index];
        const uniqueId = `collapse-content-${index}`;

        console.log(collapseContent);
        console.log(uniqueId);

        collapseContent.setAttribute('id', uniqueId);

        toggle.setAttribute('data-target', `#${uniqueId}`);


        toggle.addEventListener('click', function () {
            const target = document.querySelector(this.getAttribute('data-target'));
            const icon = this.querySelector('i');

            // console.log(target, icon);

            target.classList.toggle('show');

            if (target.classList.contains('show')) {
                // icon.classList.remove('bi-chevron-compact-up');
                // icon.classList.add('bi-chevron-compact-down');
                icon.classList.remove('icon-down');
                icon.classList.add('icon-up');
            } else {
                icon.classList.remove('icon-up');
                icon.classList.add('icon-down');
            }

        });
    })
});
