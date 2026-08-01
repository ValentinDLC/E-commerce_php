/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        crimson: {
          DEFAULT: '#DC143C',
          dark: '#B01030',
          light: '#E84560',
        },
        forest: {
          DEFAULT: '#2E7D32',
          dark: '#1B5E20',
          light: '#4CAF50',
        },
        gold: {
          DEFAULT: '#FFD700',
          dark: '#D4AF37',
          light: '#FFED4A',
        },
      },
      fontFamily: {
        heading: ['Poppins', 'sans-serif'],
        body: ['Inter', 'sans-serif'],
        cta: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
