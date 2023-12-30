/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'satoshi': ['Satoshi', 'sans-serif'], // Use a generic font fallback
      },
      colors: {
        primary: {
          DEFAULT: '#FF9500',
          dark: '#FF7A00',
          darker: '#FF9E16'
        },
        secondary: {
          DEFAULT: '#00263D',
        },
        text: {
          DEFAULT: '#262626',
        },
      },
      backgroundImage: {
        'leads': "linear-gradient(90deg, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.00) 71.84%), linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('../assets/img/hero-leads.jpeg')",
      },
    },
    container: {
      padding: {
        DEFAULT: '0.5rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [],
}