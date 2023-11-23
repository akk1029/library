        let currentIndex = 0;
        const totalSlides = document.querySelectorAll('.carousel-item').length;

        function showSlide(index) {
            const carousel = document.getElementById('image-carousel');
            const offset = index * -100 + '%';
            carousel.style.transform = 'translateX(' + offset + ')';
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        }