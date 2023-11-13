
    // Récupérez le carousel et les images
    const carousel = document.getElementById('myCarousel');
    const images = carousel.getElementsByTagName('img');
    let currentIndex = 0;

    // Fonction pour passer à la prochaine image
    function nextImage() {
        images[currentIndex].style.display = 'none';
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].style.display = 'block';
    }

    // Démarrez le défilement automatique toutes les 3 secondes
    setInterval(nextImage, 5000);  

    let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.getElementsByClassName("carousel-slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change d'image toutes les 4 secondes
}


// pour le fprum

