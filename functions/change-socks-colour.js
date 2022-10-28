const COLOR_BTNS = document.querySelectorAll('.color');
COLOR_BTNS.forEach(color => {
    color.addEventListener('click', () => {
        let colorNameClass = color.className;
        if(!color.classList.contains('active-color')){
            let colorName = colorNameClass.slice(colorNameClass.
            indexOf('-') +1, colorNameClass.length);
            console.log(colorName);
            setNewColor(colorName)
        }
    });
})
function resetActivebtns(){
    COLOR_BTNS.forEach(color => {
        color.classList.remove('active-color');
    });
}
// set new color image
function setNewColor(color){
    document.querySelector('.uni-types img').src =`img/Sunny_socks_uni_${color}.jpg`;
}