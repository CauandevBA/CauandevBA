let x=true;
const menuHeader = document.querySelector('.header');
const headerCell = menuHeader.querySelector('.header-cell');


headerCell.addEventListener('click', () => {
    menuHeader.classList.toggle('on', x)
    x = !x
})
