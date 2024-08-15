let isPaused = false;
let sliderInterval;

function prevSlide() {
    pauseSlider();
    // Code to show previous slide
}

function nextSlide() {
    pauseSlider();
    // Code to show next slide
}

function togglePause() {
    isPaused = !isPaused;
    if (isPaused) {
        clearInterval(sliderInterval);
    } else {
        sliderInterval = setInterval(nextSlide, 5000);
    }
}

function pauseSlider() {
    isPaused = true;
    clearInterval(sliderInterval);
}
