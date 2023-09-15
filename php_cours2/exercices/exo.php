<?php 

    echo "<hr>";

    $a = 2 ;
    $b = 12;
    $r = $a + $b ;

    echo $a . "+" . $b . "=" . $r . " " ."\"by echo\"";

    echo "<br>"; 

    echo "\$a" . "+" . "\$b" . "=" . "14" . " " ."\"by echo\"";

    echo "<br> <hr>"; 

    $phrase = "ceci est une phrase ";


    $mots = explode(' ', $phrase);
    
    
    $nouvellePhrase = '';
    
    
    foreach ($mots as $mot) {
        $nouveauMot = ucfirst($mot);
        $nouvellePhrase .= $nouveauMot . ' ';
    }
    
    $nouvellePhrase = trim($nouvellePhrase);
    
    echo $nouvellePhrase;

    echo "<hr>";

    $page1 = "Structure de base";
    $page2 = "Les classes";
    $num1 = 1;
    $num2 = 5;

    echo "<pre>";

    echo str_pad("Chapitres",20," ") . str_pad("Pages",20," ",STR_PAD_LEFT) . "<br>"; 
    echo str_pad($page1,20," ") . str_pad($num1,20,".",STR_PAD_LEFT) . "<br>";
    echo str_pad($page2,20," ") . str_pad($num2,20,".",STR_PAD_LEFT) ; 

    echo "</pre>";

    echo "<hr>";

    echo htmlspecialchars( "<ul>
    <li>item 1</li>
    <li>item 2</li>
    </ul>" );

    echo "<br><br>";

    echo htmlentities("<ul>
    <li>item 1</li>
    <li>item 2</li>
    </ul>" );

    echo "<hr>";

    $note = array(
        
        'said' => 13,
        'badr' => 16,
        'najat' => 15,

    );

    $note ['guigui'] = 19;
    $note ['ok'] = 10;

    $valeurMax = max($note);

    $valeurMin = min($note);

    echo "La note maximal est :" . min($note);

    echo "<br>";

    echo "La note maximal est :" . max($note);

    echo "<hr>";

    unset($note['badr']);

    echo "<br>";

    print_r($note);

    ksort($note);

    echo "<br>";

    print_r($note);

    echo "<br>";    

    asort($note);

    print_r($note);

    echo "<br>";

    echo array_sum($note) / count($note);
    
?>
