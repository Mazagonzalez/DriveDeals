/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#6225E6',
                'secondary': '#FBC638',
                'dark': '#333333ff'
            },
            backgroundColor: {
                'primary': '#6225E6',
                'secondary': '#FBC638',
                'dark': '#333333ff'
            },
            borderColor: {
                'primary': '#6225E6',
                'secondary': '#FBC638',
                'dark': '#333333ff'
            },
            divideColor: {
                'primary': '#6225E6',
                'secondary': '#FBC638',
                'dark': '#333333ff'
            },
            fill: {
                'primary': '#6225E6',
                'secondary': '#FBC638',
                'dark': '#333333ff'
            },
            stroke: {
                'primary': '#6225E6',
                'secondary': '#FBC638',
                'dark': '#333333ff'
            },
            boxShadow: {
                'button': '6px 6px 0 black',
                'button-h': '10px 10px 0 #FBC638',
                'input': '7px 7px 0px 0px black'
            }

        },
    },
    plugins: [require("daisyui")],plugins: [require("daisyui")],
    daisyui: { themes: ["light", "dark"] },

}

