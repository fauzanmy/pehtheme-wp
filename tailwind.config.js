/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "**/*.php",
    "./js/*.js",
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