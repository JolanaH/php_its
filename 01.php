<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
    
</head>
<body>
    
    <h1>Harjutused04</h1>
  <?php
        $p = 5;
        switch ($p) {
            case ($p > 10):
            echo "SUPER";
            break;
            case ($p>=5 && $p<=9):
            echo "Tehtud!";
            break; 
            case ($p>5):
            echo "Kasin!";
            break;       
            default:
            echo "Punkte pole lisatud!";
     
            break;
        }   

        ?>

        $nr1 = 5;
        $nr2 = 4;
        // < > >= <= == != True False
        // OR - VÕI || - üks õige
        // AND - NING && - mõlemad õiged
        if ($nr2 != 0 && $nr1 != 0) {
            $tehe = $nr1 / $nr2;
            echo $tehe; 

        } else {
            echo "Nulliga ei saa jagada";
        } 

        ?>

    <h1>Harjutused03</h1>

    <form action="" method="GET">
        Toode 1: <input type="numer" name="toode1"><br>
        Toode 2: <input type="numer" name="toode2"><br>
        Toode 3: <input type="numer" name="toode3"><br>

        <input type="submit" value="Arvuta">
    </form>
    <?php
        if (!empty($_GET['toode1']) &&
            !empty($_GET['toode1']) &&
            !empty($_GET['toode1'])) {
                # code...
        

        //GETiga saatsin, GETiga võtan
        $t1 = $_GET['toode1'];
        $t2 = $_GET['toode2'];
        $t3 = $_GET['toode3'];
        $kokku = $t1+$t2+$t3;

        echo "toode1: $t1 tk<br>";
        echo "toode2: $t2 tk<br>";        
        echo "toode3: $t3 tk<br>";
        echo "Kõik kokku: $kokku tk";
    }
        ?>

    <h1>Harjutused02</h1>
    <?php
    $arv1 = 5;                //int
    $arv2 = 3;                //float
    $tehe = $arv1/$arv2;    
    $jaak = $arv1 % $arv2;    //jääk

    echo "Vastus: $tehe<br>";
    printf("Vastus: %d / %0.7f =%0.2f<br>", $arv1, $arv2, $tehe);
    echo $jaak;

    ?>


    <h1>Harjutused01</h1>

    <?php
    /*
    Harjutus 01
    8.2.24
    Lihtsalt harjutan
    */

    $enimi = "Jolana";
    $pnimi = "Hiiekas";
    $v = 22; 
    $pikkus = 1600;
    // $enimi = "Loola";
    $hyydnimi = "THE BOSS";
    $lugu = 'Dr.Alban - "It\'s my life"';

    echo "<p>Tere, $enimi \"$hyydnimi\" $pnimi!<br>";
    echo "Vanus: $v<br>Pikkus: $pikkus</p>";
    echo '<p>Lemmik lugu on: '.$lugu. '</p>'; //punkt on kokkuliitmiseks

    ?>
</body>
</html>