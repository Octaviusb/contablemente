document.addEventListener("DOMContentLoaded", function () {
    const sliderTrack = document.querySelector(".slider-track");
    const slides = document.querySelectorAll(".slide");
    let offset = 0;
    let slideWidth = slides[0].offsetWidth + 20; // Considerando el margen derecho
    let totalWidth = slideWidth * slides.length;

    function moveSlider() {
        offset -= slideWidth;
        if (Math.abs(offset) >= totalWidth) {
            offset = 0; // Reinicia cuando llega al final
        }
        sliderTrack.style.transition = "transform 0.5s ease-in-out";
        sliderTrack.style.transform = `translateX(${offset}px)`;
    }

    setInterval(moveSlider, 3000); // Mueve cada 3 segundos

    // Ajustar el tamaño cuando se cambia la ventana
    window.addEventListener("resize", () => {
        slideWidth = slides[0].offsetWidth + 20;
        totalWidth = slideWidth * slides.length;
    });
});
