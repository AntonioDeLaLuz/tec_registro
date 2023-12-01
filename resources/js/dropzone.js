// Dropzone
import Dropzone from "dropzone";

// No buscar elemento con esa clase
Dropzone.autoDiscover=false;

export function drop(){
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