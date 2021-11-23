//Hiding the Sign In/Register window

var sign = document.getElementById('sign');

window.onclick = function(event){
    if(event.target == sign)
        sign.style.display = 'none';
}

//Player
let playing = false;
document.querySelectorAll(".music_link").forEach(function(link){
    link.addEventListener("click", function (){
        /*
        let m = link.querySelector('source');
        console.log(link);
        m.setAttribute('id','musicFile');
        */
        console.log(link);

        console.log('working');
        play();
    });
});

function play(){
    if(playing)
        musicFile.pause();

    console.log('Playing');
    let musicFile = document.getElementById('musicFile');
   // musicFile.play();
    document.getElementById('player_state').innerHTML = '<i class="fas fa-pause"></i>';
    playing = true;
}

function player(){

}