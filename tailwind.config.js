/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "**/*.php",
    "./js/*.js",
    "html-template/**/*.html",
    "!node_modules/**/*",
    "!vendor/**/*",
    "!languages/**/*",
    "!sass/**/*"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}