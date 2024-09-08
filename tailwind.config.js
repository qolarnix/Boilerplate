/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./pages/**/*.php",
        "./components/**/*.php"
    ],
    theme: {
        fontFamily: {
            display: ['Space\\ Grotesk', 'system-ui'],
            sans: ['Inter', 'system-ui'],
        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}