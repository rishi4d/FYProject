//Hiding the Sign In/Register window

var sign = document.getElementById('sign');

window.onclick = function(event){
    if(event.target == sign)
        sign.style.display = 'none';
}



//Player Stuff
let playing = false;
document.querySelectorAll(".music_link").forEach(function(link){
    link.addEventListener("click", function (){
        let m = link.querySelector('audio');
        console.log(link);
        m.setAttribute('id','musicFile');
        play();
    });
});

function play(){
    if(playing)
        musicFile.pause();

    console.log('Playing');
    let musicFile = document.getElementById('musicFile');
    musicFile.play();
    playing = true;
}

function player(){

}