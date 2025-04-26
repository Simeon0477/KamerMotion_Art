// Fonction pour activer/désactiver le menu de navigation sur mobile
function toggleNav() {
    const navList = document.querySelector('.nav-list');
    navList.classList.toggle('active');
}
  
  // Gérer la transparence de la navbar en fonction du scroll
window.addEventListener("scroll", () => {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("navbar-visible");
  } else {
    navbar.classList.remove("navbar-visible");
  }
});

const textarea = document.getElementById('autoResize');
const initialHeight = textarea.clientHeight;

textarea.addEventListener('input', function() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight > initialHeight ? this.scrollHeight : initialHeight) + 'px';
});