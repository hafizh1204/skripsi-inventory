/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/**/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/*.php",
    "./app/Views/*.php",
    "./node_modules/flowbite/**/*.js"
  ],


  // daisyui: {
  //   themes: [
  //     {
  //       myTheme: {
  //         "primary" : "#00A500"
  //       }
  //     }
  //   ]
  // }
  theme: {
    extend: {
      colors: {
        'primary-green': '#00A500',
      },

    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("daisyui"),
    // require('@tailwindcss/forms')

  ],
}

