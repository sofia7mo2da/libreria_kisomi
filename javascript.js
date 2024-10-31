let cart = [];
let cartTotal = 0;

// Función para mostrar/ocultar el menú desplegable del carrito
function toggleDropdown() {
    const dropdownMenu = document.getElementById("dropdown-menu");
    dropdownMenu.classList.toggle("show");
}


document.querySelectorAll('.carousel-container').forEach(carouselContainer => {
   const carousel = carouselContainer.querySelector('.carousel');
   const slides = carouselContainer.querySelectorAll('.carousel-slide');
   const prevButton = carouselContainer.querySelector('.prev-btn');
   const nextButton = carouselContainer.querySelector('.next-btn');

   let currentIndex = 0;
   const totalSlides = slides.length;

   function showSlide(index) {
       if (index >= totalSlides) {
           currentIndex = 0;
       } else if (index < 0) {
           currentIndex = totalSlides - 1;
       } else {
           currentIndex = index;
       }
       // Mueve el carrusel hacia la imagen actual
       carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
   }

   nextButton.addEventListener('click', () => {
       showSlide(currentIndex + 1);
   });

   prevButton.addEventListener('click', () => {
       showSlide(currentIndex - 1);
   });
});

/* carrusel 2*/
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
   slides.forEach((slide, i) => {
      slide.style.display = i === index ? 'block' : 'none';
   });
}

function nextSlide() {
   currentSlide = (currentSlide + 1) % slides.length;
   showSlide(currentSlide);
}

function prevSlide() {
   currentSlide = (currentSlide - 1 + slides.length) % slides.length;
   showSlide(currentSlide);
}

// Mostrar la primera diapositiva al cargar la página
showSlide(currentSlide);







