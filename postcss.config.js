module.exports = {
  plugins: {
    "postcss-import": {},
    "tailwindcss/nesting": {},
    tailwindcss: {},
    "postcss-prefix-selector": {
      prefix: "#tailwind",
      transform: function (prefix, selector, prefixedSelector, filepath) {
        if (selector.match(/^(html|body)/)) {
          return selector.replace(/^([^\s]*)/, `$1 ${prefix}`);
        } else {
          return prefixedSelector;
        }
      },
    },
    autoprefixer: {},
  },
};
