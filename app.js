//Hiding the Sign In/Register window

var sign = document.getElementById('sign');

window.onclick = function(event){
    if(event.target == sign)
        sign.style.display = 'none';
}