/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
       colors: {
        'primario': '#1B396A', // color principal del sitio y de la navbar
        'secundario': '#85C441', // color de los botones de aceptar, inicio de secion, etc
        'terciario': '#000000', //el terciario es de los titulos como el del login, y dentro de ventanas de administacion
        'BotonesVolver': '#807E82', //botones de volver del administrador
        'BotonesVerMas': '#807E82', //botones ver mas de las publicaciones o eventos
        'huevo': '#F2BB4D',
        'lila': '#B99AEE',
        'FondoPanelAdministracion': '#1B396A', //fondo del panel de administracion
        'PanelAdministracionBTN': '#1B396A', // color de fondo de la lista de opciones de administrador
        'BlancoBTN': '#FFFFFF', // color de fondo de los iconos de redes en el home
        'TituloSecciones': '#000000', // color titulo secciones principales publicaciones,administracion,ect.
        'Line': '#807E82', // Linea de las tablas

        'cPrimario':'#00243b',
        'cSecundario':'#dbc613',
        'cTerciario': '#807E82',
      },
    },
  },
  plugins: [],
}
