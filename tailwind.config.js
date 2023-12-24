/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/*.{php, html}",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    function ({ addVariant }) {
      addVariant("child", "& > *");
    },
  ],
};
