const menu = document.querySelector('#mobile-menu')
const toggle = document.querySelector('#toggle')

toggle.addEventListener("click", 
function() {
  console.log('Clicked!!!!');
  if(menu.classList.contains('hidden')) {
    menu.classList.remove('hidden')
    toggle.setAttribute('aria-expanded', 'true')
  } else {
    menu.classList.add('hidden')
    toggle.setAttribute('aria-expanded', 'false')
  }
})
