<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/HeavyMetalCSS.css">
        <title>The Random Riff</title>
    </head>
    <body>
        
        <h>The Random Riff</h>
        <br>
        <p>Just a simple random riff with a very simple audio player.</p> 
        <p>Hope you enjoy. \m/</p>
        
        <audio id="riff" onended="replay()">
            <source src="music/Random Riffage.mp3">
            <source src="music/Random Riffage.ogg">
            Sorry, your browser does not support this audio player.
        </audio>    
            
        <div id="audioPlayer">
            <button id="btn" class="playBtn" type="button" onclick="playPause()"></button>
        </div>
        
        <script type="text/javascript" src="JS/HeavyMetalJS.js"></script>
        
    </body>
</html>
