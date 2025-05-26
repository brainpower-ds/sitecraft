document.addEventListener('DOMContentLoaded', function () {

    const circle = document.querySelector('.mouse--cursor-circle');

    if (circle) {
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.pageX;
            const mouseY = e.pageY;

            circle.style.left = `${mouseX}px`;
            circle.style.top = `${mouseY}px`;
        });
    } else {
        console.error("Circle doesnt exist.");
    }

    var swiper = new Swiper(".tools-slider", {
        slidesPerView: 4.4,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1.2,
            },
            650: {
                slidesPerView: 2.2,
            },
            992: {
                slidesPerView: 3.2,
            },
            1280: {
                slidesPerView: 4.2,
            },
            1440: {
                slidesPerView: 4.2,
            },
        },
    });

    var swiper1 = new Swiper(".testimonial--slider", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
    });

});



