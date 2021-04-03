module.exports = {
  env: {
    browser: true,
    es2021: true
  },
  extends: [
    'standard',
    "eslint:recommended",
    "plugin:vue/recommended"
  ],
  parserOptions: {
    ecmaVersion: 12,
    sourceType: 'module'
  },
  plugins: [
    'vue',
    'html'
  ],
  rules: {
  }
}
