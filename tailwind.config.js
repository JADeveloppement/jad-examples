module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.scss",
    ],
    theme: {
      extend: {
        transitionDuration: {
          '60000': '60000ms',
        }
      },
    },
    plugins: [],
  }