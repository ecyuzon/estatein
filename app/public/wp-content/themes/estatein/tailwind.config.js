/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      colors: {
        'primary': 'var(--color-primary)',
        'secondary': 'var(--color-secondary)',
        'accent': 'var(--color-accent)',
        'background': 'var(--color-background)',
        'card': 'var(--color-card-bg)',
        'border': 'var(--color-border)',
        'text': 'var(--color-text)',
      },
    },
  },
  plugins: [],
};
