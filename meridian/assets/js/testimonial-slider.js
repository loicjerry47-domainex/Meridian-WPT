document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.testimonial-track');
    if (!track) return;
    
    const slides = Array.from(track.children);
    if(slides.length === 0) return;
    
    const dotContainer = document.querySelector('.testimonial-dots');
    let currentIndex = 0;
    
    // Create dots
    slides.forEach((_, idx) => {
        const dot = document.createElement('button');
        dot.classList.add('dot-indicator');
        if (idx === 0) dot.classList.add('active');
        dot.setAttribute('aria-label', 'Go to slide ' + (idx + 1));
        dot.addEventListener('click', () => goToSlide(idx));
        dotContainer.appendChild(dot);
    });
    
    const dots = Array.from(dotContainer.children);
    
    function goToSlide(index) {
        track.style.transform = 'translateX(-' + (index * 100) + '%)';
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
        currentIndex = index;
    }
    
    function nextSlide() {
        let index = currentIndex + 1;
        if(index >= slides.length) index = 0;
        goToSlide(index);
    }
    
    let interval = setInterval(nextSlide, 5000);
    
    // Pause on hover
    const container = document.querySelector('.testimonial-slider-container');
    container.addEventListener('mouseenter', () => clearInterval(interval));
    container.addEventListener('mouseleave', () => {
        interval = setInterval(nextSlide, 5000);
    });
    
    // Basic touch support
    let startX = 0;
    container.addEventListener('touchstart', e => {
        startX = e.touches[0].clientX;
    }, {passive: true});
    
    container.addEventListener('touchend', e => {
        let endX = e.changedTouches[0].clientX;
        if(startX - endX > 50) {
            nextSlide();
        } else if(endX - startX > 50) {
            let index = currentIndex - 1;
            if(index < 0) index = slides.length - 1;
            goToSlide(index);
        }
    }, {passive: true});
    
});
