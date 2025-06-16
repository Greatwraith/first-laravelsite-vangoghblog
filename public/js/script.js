const navToggle = document.getElementById('nav-toggle');
const navMenu = document.getElementById('nav-menu');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

const galleryToggle = document.getElementById('gallery-toggle');
const galleryContent = document.getElementById('gallery-content');

galleryToggle.addEventListener('click', () => {
    galleryContent.classList.toggle('active');
    if (galleryContent.classList.contains('active')) {
        galleryToggle.querySelector('.toggle-text').textContent = 'HIDE COLLECTION';
        galleryToggle.querySelector('.toggle-icon').textContent = '▲';
    } else {
        galleryToggle.querySelector('.toggle-text').textContent = 'REVEAL COLLECTION';
        galleryToggle.querySelector('.toggle-icon').textContent = '▼';
    }
});

const scrollIndicator = document.querySelector('.scroll-indicator');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        scrollIndicator.style.display = 'none';
    } else {
        scrollIndicator.style.display = 'flex';
    }
});
