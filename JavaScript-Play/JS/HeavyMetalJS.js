/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var riff = document.getElementById('riff');
var btn = document.getElementById('btn');

function playPause(){
    if(riff.paused){
        riff.play();
        btn.className = "pauseBtn";
    }
    
    else{
        riff.pause();
        btn.className = "playBtn";
    }
}

function replay(){ 
    btn.className = "replayBtn";
}