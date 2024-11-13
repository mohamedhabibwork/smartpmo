import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ['selector', '[data-mode="dark"]','class'],

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
            colors: {
                primary: {
                    50: '#e0f2f1',
                    100: '#b2dfdb',
                    200: '#80cbc4',
                    300: '#4db6ac',
                    400: '#26a69a',
                    500: '#009688', // Primary color
                    600: '#00897b',
                    700: '#00796b',
                    800: '#00695c',
                    900: '#004d40',
                },
                secondary: {
                    50: '#f9f4f1',
                    100: '#f2e4d9',
                    200: '#e5c8b3',
                    300: '#d8a98d',
                    400: '#cc8a67',
                    500: '#995626', // Primary color
                    600: '#8a4e22',
                    700: '#7b451e',
                    800: '#6c3c1a',
                    900: '#5d3316',
                },
            }
        },
    },

    plugins: [
        forms,
    ],
};
