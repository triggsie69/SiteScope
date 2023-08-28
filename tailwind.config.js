const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "deep-orange": "#ff5722",
                "deep-orange-50": "#fbe9e7",
                "deep-orange-100": "#ffccbc",
                "deep-orange-200": "#ffab91",
                "deep-orange-300": "#ff8a65",
                "deep-orange-400": "#ff7043",
                "deep-orange-500": "#ff5722",
                "deep-orange-600": "#f4511e",
                "deep-orange-700": "#e64a19",
                "deep-orange-800": "#d84315",
                "deep-orange-900": "#bf360c",
            },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
