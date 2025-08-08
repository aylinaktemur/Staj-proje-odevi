document.addEventListener('DOMContentLoaded', function() {
    initializeGalleryCarousel();
    
    function initializeGalleryCarousel() {
        const carousel = document.getElementById('galleryCarousel');
        if (carousel) {
            const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: 5000,
                wrap: true,
                keyboard: true,
                pause: 'hover'
            });
            
            const prevButton = carousel.querySelector('.carousel-control-prev');
            const nextButton = carousel.querySelector('.carousel-control-next');
            const indicators = carousel.querySelectorAll('.carousel-indicators button');
            
            if (prevButton) {
                prevButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    bsCarousel.prev();
                });
            }
            
            if (nextButton) {
                nextButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    bsCarousel.next();
                });
            }
            
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', function(e) {
                    e.preventDefault();
                    bsCarousel.to(index);
                });
            });
            
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    bsCarousel.prev();
                } else if (e.key === 'ArrowRight') {
                    bsCarousel.next();
                }
            });
            
            let startX = 0;
            let endX = 0;
            
            carousel.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
            });
            
            carousel.addEventListener('touchend', function(e) {
                endX = e.changedTouches[0].clientX;
                handleSwipe();
            });
            
            function handleSwipe() {
                const threshold = 50;
                const diff = startX - endX;
                
                if (Math.abs(diff) > threshold) {
                    if (diff > 0) {
                        bsCarousel.next();
                    } else {
                        bsCarousel.prev();
                    }
                }
            }
        }
    }
    
    function initializeCarousel(carouselId, options = {}) {
        const carousel = document.getElementById(carouselId);
        if (carousel) {
            const defaultOptions = {
                interval: 5000,
                wrap: true,
                keyboard: true,
                pause: 'hover'
            };
            
            const carouselOptions = { ...defaultOptions, ...options };
            const bsCarousel = new bootstrap.Carousel(carousel, carouselOptions);
            
            return bsCarousel;
        }
        return null;
    }
    
    window.SliderUtils = {
        initializeGalleryCarousel,
        initializeCarousel
    };
});
