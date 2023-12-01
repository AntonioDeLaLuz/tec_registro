// Importar funciones 
import {menuDesplegable} from './menu'
import {swiperScroll} from './swiperFull'
import {drop} from './dropzone'



window.addEventListener("DOMContentLoaded",()=>{
    drop();
    swiperScroll();
    menuDesplegable();
})
