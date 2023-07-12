/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./pages/**/*.php",
        "./components/**/*.php"
    ],
    theme: {
        fontFamily: {
            'sans': ['Plus\\ Jakarta\\ Sans', 'system-ui'],
        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}