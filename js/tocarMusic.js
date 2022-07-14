function tocarMusica() {
    

    let audioPlayer = document.getElementById('audioPlayer');
  
    
 
    
    const playSong = (file) => {
        
    
        audioPlayer.src = file
    
        audioPlayer.play();
    

    }
    
    document.querySelectorAll('div.box-2 div.cards div.card div.icons').forEach(item =>{
        item.addEventListener('click',event =>{
            console.log('teste')
            let image = item.getAttribute('data-image');
            let artist = item.getAttribute('data-artist');
            let song = item.getAttribute('data-song');
            let file = item.getAttribute('data-file');
    
            let PlayerArtsitComponent = document.getElementById('player_artist')
    
            PlayerArtsitComponent.innerHTML = `<img src ="`+image+`" /> <h3>`+artist+`<br><span>`+song+`</span></h3>`
    
            playSong(file);
    
            let player = document.querySelector('div.player');
            player.style.visibility = 'visible';
            
        })
    })
    }
    
    
 tocarMusica();