module.exports = {
  purge: [
    './**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      screens: {
         sm: "640px",
         md: "768px",
         lg: "1024px",
         xl: "1280px"
      }
    },
    extend: {
      width: {
        '3/10': '30%',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')
  ],
}
