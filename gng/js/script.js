function mobile_menu_open() {
    let mobileMenu = document.querySelector("#__mobile_menu");
    mobileMenu.classList.toggle("hidden");
}

document.querySelector("#mobile_menu_open").addEventListener("click", mobile_menu_open);

function mobile_menu_close() {
    let mobileMenu = document.querySelector("#__mobile_menu");
    mobileMenu.classList.toggle("hidden");
}

document.querySelector("#mobile_menu_close").addEventListener("click", mobile_menu_close);

window.addEventListener('scroll', function() {
    var header = document.getElementById('gng_main_header_menu');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 0) {
        header.classList.add('sticky-bg');
    } else {
        header.classList.remove('sticky-bg');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const parentItems = document.querySelectorAll('.has-submenu'); 
    parentItems.forEach(item => {
        item.addEventListener('click', function() {
            const submenu = this.querySelector('.sub-menu');
            submenu.classList.toggle('hidden'); 
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    let image_slider = new Swiper('#imageSlider', {
        slidesPerView: 2, 
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
        
            768: {
                slidesPerView: 4, 
            }
        }
    });

    let testimonial_slider = new Swiper('#testimonialSlider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        speed: 1000,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>'; 
            },
        },
        slidesPerView: 'auto' 
    });
});



