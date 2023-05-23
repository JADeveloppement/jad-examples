module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.scss",
    ],
    theme: {
      extend: {
        colors: {
            'demo-green': '#28a745',
            'demo-orange' : "#ffc107",
        },
        gridTemplateColumns: {
            '5bis' : 'repeat(5, 18px)',
        },
        gridTemplateRows: {
            '5bis' : 'repeat(5, 18px)',
        },
        transitionDuration: {
          '60000': '60000ms',
        }
      },
    },
    plugins: [],
  }