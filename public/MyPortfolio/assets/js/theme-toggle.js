// Theme toggle script for gold/black and light/dark mode
(function() {
  // Set theme on load
  function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    document.cookie = 'theme=' + theme + '; path=/; max-age=31536000';
    var btn = document.getElementById('themeToggle');
    if (btn) {
      btn.classList.toggle('active', theme === 'dark');
      btn.querySelector('.theme-icon').textContent = theme === 'dark' ? '☀️' : '🌓';
    }
  }

  // Detect system preference
  function getPreferredTheme() {
    // Check cookie instead of localStorage
    var match = document.cookie.match(/(?:^|; )theme=([^;]*)/);
    if (match) {
      return match[1];
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }

  // On DOM ready
  document.addEventListener('DOMContentLoaded', function() {
    setTheme(getPreferredTheme());
    var btn = document.getElementById('themeToggle');
    if (btn) {
      btn.addEventListener('click', function() {
        var current = document.documentElement.getAttribute('data-theme');
        setTheme(current === 'dark' ? 'light' : 'dark');
      });
    }
  });
})();
