/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        'my-gray': '#F1F1F1',
        'my-orange': '#ff9935'
        // Ajoutez d'autres couleurs personnalisées selon vos besoins
      },
      fontFamily: {
        'roboto': ["Roboto","sans-serif"],
        'poppins': ["Poppins","sans-serif"],
        'archivo': ["Archivo","sans-serif"]
      },
    },
  },
  plugins: [],
}

