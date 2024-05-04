document.addEventListener('DOMContentLoaded', function() {
    var slides = document.querySelectorAll('.slide');
    var currentSlide = 0;

    function showSlide(index) {
        slides.forEach(function(slide) {
            slide.style.display = 'none';
        });
        slides[index].style.display = 'block';
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000); // Change d'image toutes les 5 secondes (5000 millisecondes)
});
