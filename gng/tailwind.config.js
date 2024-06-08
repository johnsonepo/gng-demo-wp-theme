/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./components/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        primary: '#ED9507'
      },
      fontFamily: {
        'josefinSans': ['"Josefin Sans"', 'sans-serif'],
      },
      fontSize: {
        'ns': '1.1rem', 
      },
      backgroundPosition: {
        'top-minus-25': 'center top -15px',
      },
    },
  },
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
  ],
}

