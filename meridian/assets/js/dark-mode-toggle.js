document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('dark-mode-toggle');
    const body = document.body;
    
    // Check local storage or system preference
    const currentTheme = localStorage.getItem('meridian_theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (currentTheme === 'dark' || (!currentTheme && prefersDark)) {
        body.classList.add('dark-mode');
    }
    
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('meridian_theme', 'dark');
            } else {
                localStorage.setItem('meridian_theme', 'light');
            }
        });
    }
});
