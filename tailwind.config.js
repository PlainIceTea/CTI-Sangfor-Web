/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontSize: {
            // Font sizes untuk desktop
            '50': '50px',
            '46': '46px',
            '30': '30px',
            '26': '26px',
            '22': '22px',
            '18': '18px',
          },

          colors: {
            nav: "#00008E",
            textBlue: "#293660",
            button: "#04BE02",
            'button-dark': '#03A300',
            
        },
      },

      fontFamily: {
        sans: ['Rubik', 'sans-serif'],
    },
    },
    plugins: [
        require('daisyui'),
      ],
  }