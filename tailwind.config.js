import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import lineClamp from '@tailwindcss/line-clamp';
import { defineConfig } from 'vite';

const colors = require('tailwindcss/colors');

export default defineConfig({
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent:'transparent',
                current: 'currentColor',
                black: colors.black,
                white: colors.white,
                gray: colors.gray,
                'gray-background':'#f7f8fc',
                'blue':'#328af1',
                'blue-hover':'#2879bd',
                'yellow':'#fffc73c',
                'red':'#ec454f',
                'green':'#1aab8b',
                'purple':'#8b60ed',
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            maxWidth:{
                custom:'62.5rem',
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        // Other plugins...
      ],
});
