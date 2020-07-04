const menuButton = document.getElementById('menu-button');
const navBar = document.querySelector('.navbar');

menuButton.addEventListener('click', () => {
  navBar.classList.toggle('display');
});
