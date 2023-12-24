/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/*.{php, html}", "./notfound.php"],
  theme: {
    extend: {},
  },
  plugins: [
    function ({ addVariant }) {
      addVariant("child", "& > *");
    },
  ],
};
