// JavaScript reserved for future interactions
document.addEventListener('DOMContentLoaded', function() {
  const logo = document.getElementById('logoMenuToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  logo.addEventListener('click', function(e) {
    e.preventDefault();
    if (mobileMenu.style.display === 'none') {
      mobileMenu.style.display = 'flex';
    } else {
      mobileMenu.style.display = 'none';
    }
  });
});
