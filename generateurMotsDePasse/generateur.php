<?php
$lengh = $_POST["longueur"];
$wordNbr = $_POST["nombreMots"];
$compl = $_POST["complexite"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://random-word-api.herokuapp.com/word?length=$lengh&number=$wordNbr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$randword = json_decode(curl_exec($ch), true);

curl_close($ch);

$randwor = count($randword) - 1;
$symbole = ["⎊", "⌫", "⌤", "▽", "⌘", "⏩", "🏡", "✂", "↹", "→", "⎈", "✦"];
$alea = rand(0, count($symbole) - 1);
    for ($i=0; $i < $wordNbr; $i++) { 
        echo $randword[$i];
        if ($compl == 1){
            echo $symbole[rand(0, count($symbole) - 1)];
        }elseif($compl == 2){
            echo $symbole[rand(0, count($symbole) - 1)];
            echo $symbole[rand(0, count($symbole) - 1)];
        }elseif($compl == 3){
            echo $symbole[rand(0, count($symbole) - 1)];
            echo $symbole[rand(0, count($symbole) - 1)];
            echo $symbole[rand(0, count($symbole) - 1)];
        }else{
            echo "t'a race ça marche pas";
        }
    }
