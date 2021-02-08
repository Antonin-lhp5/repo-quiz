module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        body: ['Nunito', 'sans-serif'],
        title: ['Manrope', 'sans-serif'],
      }
    },
  },
  variants: {
    extend: {

    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
