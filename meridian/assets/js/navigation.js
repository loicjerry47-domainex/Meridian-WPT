// Navigation toggles
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-navigation ul');
    if(menuToggle && nav) {
        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('toggled');
            const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
            menuToggle.setAttribute('aria-expanded', !expanded);
        });
    }
});
