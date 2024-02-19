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
                'primary': '#5F78F4',
                'secondary': '#9fb4feff',
                'slate-main': '#efeff1'
            },
            backgroundColor: {
                'primary': '#5F78F4',
                'secondary': '#9fb4feff',
                'slate-main': '#efeff1'
            },
            borderColor: {
                'primary': '#5F78F4',
                'secondary': '#9fb4feff',
                'slate-main': '#efeff1'
            },
            divideColor: {
                'primary': '#5F78F4',
                'secondary': '#9fb4feff',
                'slate-main': '#efeff1'
            },
            fill: {
                'primary': '#5F78F4',
                'secondary': '#9fb4feff',
                'slate-main': '#efeff1'
            },
            stroke: {
                'primary': '#5F78F4',
                'secondary': '#9fb4feff',
                'slate-main': '#efeff1'
            }

        },
    },
    plugins: [require("daisyui")],plugins: [require("daisyui")],
    daisyui: { themes: ["light", "dark"] },

}

