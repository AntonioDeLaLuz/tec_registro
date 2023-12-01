// Swiper
export function swiperScroll(){
    if(document.querySelector('.slider__contenedor')){
        window.swiper = new Swiper({
            // Padre de los elementos
            el: '.slider__contenedor',
            // Elementos
            slideClass: 'slider__slide',
            createElements: true,
            // Iniciar automaticamente
            autoplay: {
                // cambiar cada 3s
                delay: 3000
            },
            // Cicl
            loop: true,
            // Espacios
            spaceBetween: 30,
            // Muesta la ubicacion
            pagination: {
                el: '.slider__paginacion',
            },
            // Flechitas
            navigation: true
        });
    }
}