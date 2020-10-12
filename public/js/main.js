/*ScrollReveal().reveal('.main-text', { 
    delay: 120, 
    distance: '70px'
 });

ScrollReveal().reveal('.player-image', { 
    delay: 200, 
    distance: '40px'
 });
*/
const path = window.location.pathname;

if(path == '/') {
    document.getElementById('nav').classList.add('navbar-welcome');
}
