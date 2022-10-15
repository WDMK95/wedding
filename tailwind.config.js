/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          fontFamily: {
            'sans': ['linbiolinum', 'constan', 'lovelygrace', 'palai', 'Helvetica', 'Arial', 'sans-serif']
          }
        },
      },
    plugins: [],
  }