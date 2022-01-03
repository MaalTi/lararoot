const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: 'class',
    purge: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            screens: {
                "2xl": "1536px",
                "3xl": "2160px",
                "4xl": "3440px",
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            width: {
                "1/7": "14.2857143%",
                "2/7": "28.5714286%",
                "3/7": "42.8571429%",
                "4/7": "57.1428571%",
                "5/7": "71.4285714%",
                "6/7": "85.7142857%",
            },
            maxWidth: {
                "2xs": "10rem",
            },
            height: {
                "screen/4": "25vh",
                "screen/3": "33.334vh",
                "screen/2": "50vh",
            },
            maxHeight: {
                "screen/4": "25vh",
                "screen/3": "33.334vh",
                "screen/2": "50vh",
                "screen-2/3": "66.667vh",
                "screen-3/4": "75vh",
            },
            scale: {
                200: "2",
                250: "2.5",
                300: "3",
                350: "3.5",
                400: "4",
                500: "5",
            },
            padding: {
                "1/4": "25%",
                "1/2": "50%",
                "1/3": "33.3333%",
                "2/3": "66.6666%",
                "3/4": "75%",
                full: "100%",
            },
            zIndex: {
                "-1": "-1",
                "-10": "-10",
                "-20": "-20",
                "-30": "-30",
                "-40": "-40",
                "-50": "-50",
                1: "1",
                60: "60",
                70: "70",
                80: "80",
                90: "90",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/line-clamp"),
    ],
}