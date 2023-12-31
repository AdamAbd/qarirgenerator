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
          darker: '#FF9E16',
          light: '#FFF3E3'
        },
        secondary: {
          DEFAULT: '#00263D',
          light: '#084264'
        },
        text: {
          DEFAULT: '#262626',
          light: '#A5A5A5'
        },
        chips: {
          DEFAULT: '#00A053',
        },
        body: {
          DEFAULT: '#FFFCF9',
        },
      },
      backgroundImage: {
        'leads': "url('../assets/img/hero-leads.png')",
        'ai': "url('../assets/img/hero-ai.png')",
        'container-icon': 'linear-gradient(135deg, #FFB72B 0%, #FFA01B 100%)'
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