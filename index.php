<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php $now = new DateTime(); ?>
    <p>"coucou nous somme le
        <?php echo $now->format('d-m-Y'); ?> il est
        <?php echo $now->format('H:i:s'); ?>
    </p>
    <?php

    function dateCountBetweenTwodate(DateTime|string $beginDate, DateTime|string $endDate, $salaire): float
    {
        try {
            $start = gettype($beginDate) == 'string' ? new DateTime($beginDate) : $beginDate;
            $end = gettype($endDate) == 'string' ? new DateTime($endDate) : $endDate;

            $interval = new DateInterval('P1D');
            $periode = new DatePeriod($start, $interval, $end);
            $heurstot = 0;

            foreach ($periode as $date) {
                $jourssem = $date->format('N');
                if ($jourssem != 6 && $jourssem != 7) {
                    $heurstot += 8;
                }
            }

            $totalSalary = $heurstot * $salaire;
            return $totalSalary;
        } catch (Exception $e) {
            throw new Exception("Ta fonction n'a pas de jambes");
        }
    }







    // $d1 = $_POST['beginDate'];
    // $d2 = $_POST['endDate'];
    // echo dateCountBetweenTwodate("1947-02-01", "2010-02-01");
    // echo dateCountBetweenTwodate($d1, $d2);
    // echo dateCountBetweenTwodate("Ton chien.", "kamoulox");
    ?>
    <form action="index.php" method="post">
        <label for="beginDate">Date de début :</label>
        <input type="date" id="beginDate" name="beginDate" required><br><br>

        <label for="endDate">Date de fin :</label>
        <input type="date" id="endDate" name="endDate" required><br><br>

        <label for="salaire">Taux horaire :</label>
        <input type="number" id="salaire" name="salaire" required step="0.01"><br><br>

        <input type="submit" value="Calculer le salaire">
    </form>

    <?php

    $d1 = $_POST['beginDate'];
    $d2 = $_POST['endDate'];
    $salaire = $_POST['salaire'];
    $netcomp = 23;

    try {
        $salary = dateCountBetweenTwodate($d1, $d2, $salaire);
        $salarynetb = $salary * ($netcomp / 100);
        $salarynet = $salary - $salarynetb;
        echo '<span>' . $salary . ' €</span>';
        echo '<br>';
        echo '<span>' . $salarynet . '€</span>';
    } catch (Exception $e) {
        echo '<span>Une erreur est survenue : ' . $e->getMessage() . '</span>';
    }



    ?>
    <div class="damier">
        <?php
        // for ($i=0; $i < 6; $i++) { 
        //     echo $cblack = "<div class='cblack'></div>";
        //     echo $cwhite = "<div class='cwhite'></div>";
        // }
        // for ($i=0; $i < 25; $i++) { 
        //     if( $i % 2 == 0){
        //         echo $cblack = "<div class='cblack'></div>";
        //     }else{
        //         echo $cwhite = "<div class='cwhite'></div>";
        //     }
        // }
        // echo "</div>";
        // for ($i=0; $i < 50; $i++) { 
        //     echo (rand(0,100)) . ", ";
        // }
        
        $g = [14, 19, 245, 89, 78];

        for ($i = 0; $i < (count($g)); $i++) {
            if ($i % 2 == 0) {
                echo "-" . $g[$i] . "<br>";
            } else {
                echo $g[$i] . "<br>";
            }
        }
        ?>
        <table>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    for ($in = $i; $in <= ($i * 10); $in += $i) {
                        echo '<td>' . $in . '</td>';
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        $result = 0;
        function factoriel($nbr)
        {
            $result = 1;
            for ($i = 1; $i <= $nbr; $i++) {
                $result = $result * $i;
                
            }
            return $result;
        }
        echo factoriel(10);
        ?>
</body>

</html>