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
                cairo: ['cairo', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "color-bg": "#F4F7FB",
                "color-primary": "#1D3557",
                "color-secondary": "#E3EDF3",
                "color-title": "#000000",
                "color-sub-title": "#2E496F",
            }
        },
    },

    plugins: [forms],
};
