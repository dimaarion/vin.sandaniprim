const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
        './node_modules/tw-elements-react/dist/js/**/*.js',
        './node_modules/flowbite-react/lib/esm/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'serif': ['Cormorant', 'serif'],
                'alice': ['Alice', 'serif'],
                'cinzel': ['Cinzel', 'serif'],
            },
            flexBasis: {
                '1/7': '14.2857143%',
                '2/7': '28.5714286%',
                '3/7': '42.8571429%',
                '4/7': '57.1428571%',
                '5/7': '71.4285714%',
                '6/7': '85.7142857%',
            },
            colors: {
                'blue': '#1fb6ff',
                'purple': '#7e5bef',
                'pink-hov': '#470D0D',
                'orange': '#ff7849',
                'green': '#13ce66',
                'yellow': '#ffc82c',
                'gray-dark': '#232323',
                'gray-light': '#d3dce6',
                'white': '#fff',
                'black': '#000',
                'amber-50': '#fffbeb',
                'amber-100': '#fef3c7',
                'amber-200': '#fde68a',
                'yellow-200': '#FFFD52',

                brown: {
                    50: '#fdf8f6',
                    100: '#f2e8e5',
                    200: '#eaddd7',
                    300: '#e0cec7',
                    400: '#d2bab0',
                    500: '#bfa094',
                    600: '#a18072',
                    700: '#977669',
                    800: '#846358',
                    900: '#43302b',
                },
                'gray': {
                    '50': '#f5f7f8',
                    '100': 'rgba(236,241,243,0.34)',
                    '200': '#dde4e8',
                    '300': '#c7d3da',
                    '400': '#b0bec9',
                    '500': '#9baab9',
                    '600': '#8492a6',
                    '700': '#717d91',
                    '800': '#5d6776',
                    '900': '#4f5760',
                    '950': '#2e3238',
                },
                'pink': {
                    '50': '#fef2f2',
                    '100': '#fde3e3',
                    '200': '#fccccc',
                    '300': '#f9a8a8',
                    '400': '#f37676',
                    '500': '#e84b4b',
                    '600': '#d52d2d',
                    '700': '#b32222',
                    '800': '#942020',
                    '900': '#7b2121',
                    '950': '#621212',
                },


            },
        },
        fontSize: {
            sm: '0.8rem',
            base: '1rem',
            xl: '1.25rem',
            '2xl': '1.563rem',
            '3xl': '1.953rem',
            '4xl': '2.441rem',
            '5xl': '3.052rem',
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
        listStyleType: {
            none: 'none',
            disc: 'disc',
            decimal: 'decimal',
            square: 'square',
            roman: 'upper-roman',
        },

        screens: {
            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
        },
        cursor: {
            'fancy': 'url(hand.cur), pointer',
            'pointer': 'pointer',
        }

    },

    plugins: [
        require('@tailwindcss/forms'),
        require("tw-elements-react/dist/plugin.cjs"),
        require('flowbite/plugin')
    ],
};
