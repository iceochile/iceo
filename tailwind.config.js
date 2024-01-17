import colors from 'tailwindcss/colors';
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import tailwindForms from '@tailwindcss/forms';
import tailwindTypography from '@tailwindcss/typography';
import postcssImport from 'postcss-import';
import tailwindAspectRatio from '@tailwindcss/aspect-ratio';

export default {
    //mode: 'jit',
    content: [
          // Example content paths...
        './public/**/*.html',
        './src/**/*.{js,jsx,ts,tsx,vue}',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css",'./src/**/*.{html,js}'
    ],
    
    theme: {
        extend: {
            colors: {
                gray: colors.blueGray,
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    separator: '_',

   

    plugins: [
        forms,
        colors,
        tailwindcss,
        autoprefixer,
        tailwindForms,
        tailwindTypography,
        postcssImport,
        tailwindAspectRatio,
    ],
    corePlugins: {
        preflight: false,
       container: false,
    },
                
};