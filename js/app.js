function tocarMusica() {
    

    let audioPlayer = document.getElementById('audioPlayer');
    let playBtn = document.getElementById('playBtn');
    let pauseBtn = document.getElementById('pauseBtn');
    document.getElementById('pauseBtn').addEventListener('click', (e) => {
        e.preventDefault();//Cancelar ação do Scroll
    
        playBtn.style.display = 'inline';
        pauseBtn.style.display = 'none';
    
        audioPlayer.pause()
    
    });
    
    
    document.getElementById('playBtn').addEventListener('click', (e) => {
        e.preventDefault();//N
    
        playBtn.style.display = 'none';
        pauseBtn.style.display = 'inline';
    
        audioPlayer.play()
    
    
    
    });
    
    const playSong = (file) => {
        
    
        audioPlayer.src = file
    
        audioPlayer.play();
    
        playBtn.style.display = "none";
        pauseBtn.style.display = "inline";
    }
    
    document.querySelectorAll('div.card_music').forEach(item =>{
        item.addEventListener('click',event =>{
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
    
    
    hello();
    tocarMusica()