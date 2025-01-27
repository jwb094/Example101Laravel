/** @type {import('tailwindcss').Config} */// tailwind.config.js
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue', // If you're using Vue
    ],
    theme: {
      extend: {
        spacing: {
          '128': '32rem', // Adds a new spacing utility like p-128
        },
        colors: {
          customGray: '#6B7280', // Adds a custom color like bg-customGray
        },
      },
    },
    plugins: [
       function({ addUtilities,addBtns }) {
    //     addUtilities({
    //       '.rotate-15': {
    //         transform: 'rotate(15deg)',
    //       },
    //       '.rotate-30': {
    //         transform: 'rotate(30deg)',
    //       },
    //       '.skew-20': {
    //         transform: 'skewY(20deg)',
    //       },
    //     }, ['responsive', 'hover']);
        // addBtns({
        //     '.customGrayd': {
        //       color: '#6B7280',
        //     },
        //     '.customRedd': {
        //         color: '#6B7280',
        //     },
        //     '.customGreend': {
        //         color: '#6B7280',
        //     },
        //   });

      }
    ],
  };
  
