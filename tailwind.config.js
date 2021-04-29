/*
    Este archivo nos permitira modificar las clases de Tailwindcss
    Para crear ejecutamos el siguiente comando
    *npx tailwindcss init
*/
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
        center: true,
    },
    extend: {
        // Simple 16 column grid
        '16': 'repeat(16, minmax(0, 1fr))',

          // Complex site-specific column configuration
        'footer': '200px minmax(900px, 1fr) 100px',
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
