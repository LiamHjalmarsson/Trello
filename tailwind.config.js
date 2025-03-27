/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#763aff",
                    hover: "",
                    active: "",
                    focus: "",
                    disabled: ""
                },
                secondary: {
                },
                success: {
                },
                danger: {
                },
                warning: {
                },
                neutral: {
                },
                accent: {
                },
                text: {
                },
            },
        },
    },
};
