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
        'leads': "url('../assets/img/hero-leads.png')",
      },
    },
    container: {
      padding: {
        DEFAULT: '0.5rem',
        sm: '1rem',
        lg: '1rem',
        xl: '1rem',
        '2xl': '1rem',
      },
    },
  },
  plugins: [],
}