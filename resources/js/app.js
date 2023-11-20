import Dropzone from "dropzone";

// No buscar elemento con esa clase
Dropzone.autoDiscover=false;

window.addEventListener("DOMContentLoaded",()=>{
    drop();
   swi();
})
function drop(){
    if(document.querySelector('#dropzone')){
        const dropzone = new  Dropzone('#dropzone',{
            dictDefaultMessage:"Sube aquí tu imagen",
            acceptedFiles:".png, .jpg, .jepg, .gif, .jfif",
            addRemoveLinks:true,
            dictRemoveFile:"Eliminar archivo",
            maxFiles:1,
            uploadMultiple:false,
           
        });
        dropzone.on("success",function (file,response){
            console.log(response);
            // asigna al campo name el nombre de la imagen
            document.querySelector('[name="urlimg"]').value=response.nameImage;
        })
        dropzone.on("error",function (file,message){
            console.log(message);
        })
        dropzone.on("removedfile",function (){
            // console.log('Eliminado');
            // Si elimina la imagen debe cambiar el valor del value
            document.querySelector('[name="urlImg"]').value="";
        })
    }
}
function swi(){
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