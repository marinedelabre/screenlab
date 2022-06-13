const button=document.querySelector(".btn-nav");
const oldnav=document.querySelector(".btn-nav.actif");


function toggleNav() {
    if(button.classList.contains('.actif')) {
        button.classList.remove('.actif');
    } else  {
        button.classList.add('.actif');
    }
  }

button.addEventListener('click', () => {
    oldnav.classList.remove('.actif');
    console.log(button);
    toggleNav()
});
