const carouselList = document.querySelector('.carousel-list');
const items = document.querySelectorAll('.carousel-item');
const itemWidth = items[0].clientWidth;
let currentPosition = 0;
const maxScroll = -(items.length - 5) * itemWidth;

function nextSlide() {
    currentPosition -= itemWidth;
    if (currentPosition < maxScroll) {
        currentPosition = 0;
    }
    carouselList.style.transform = `translateX(${currentPosition}px)`;
}

function prevSlide() {
    currentPosition += itemWidth;
    if (currentPosition > 0) {
        currentPosition = maxScroll;
    }
    carouselList.style.transform = `translateX(${currentPosition}px)`;
}

document.querySelector('.carousel-button.next').addEventListener('click', nextSlide);
document.querySelector('.carousel-button.prev').addEventListener('click', prevSlide);

setInterval(nextSlide, 3200);


