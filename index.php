<?php
    $handle = fopen(__DIR__ . "/assets/count.txt", "r");
    if($handle)
    {
        $counter = (int )
        fread($handle,20);
        fclose ($handle); $counter++;
        $handle = fopen(__DIR__ . "/assets/count.txt", "w" );
        fwrite($handle,$counter) ;
        fclose ($handle) ;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="lethal.network, stantastic, stan, richter, konga">
        <meta name="description" content="Claim your free Discord Nitro sponsored by lethal.network! Claims left: <?php echo $counter;?>">
        <link rel="stylesheet" href="assets/reset.min.css">
        <link rel="stylesheet" href="assets/konga.css">

        <title>Free Nitro - lethal.network</title>
    </head>
    <body>
    <img id="doge" src="assets/doge.png" class="rythm-bass doge" style="visibility: hidden;">

    <div id="claim" class="btn-wrapper">
        <button class="btn" type="button" onclick="claimNitro()">CLAIM FREE NITRO</button>
    </div>
    <script src="assets/konga.js"></script>
    <script>
        function claimNitro() {
            document.getElementById("claim").style.visibility = "hidden";
            document.title = "CONGA!";
            setTimeout(function (){
                document.getElementById("doge").style.visibility = "visible";
                var rythm = new Rythm()
                rythm.addRythm('rythm-bass', 'pulse', 0, 20,{min: 0.75, max: 2.5})
                rythm.setMusic('assets/konga.mp3')
                rythm.start()
            },1000);
        }
    </script>
    </body>
</html>