import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'bege':'#F5DEB3',
            'begeE':'#DEB887',
            'branco':'#F8F8FF',
            'rosa':'#FF69B4',
            'rosaH': '#DB7093',
            'trevoso':'#800000',
          }
    },

    plugins: [forms],

};
