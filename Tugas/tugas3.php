<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
        require "Navbar.php";
    ?>
    
    <div class="row">
        <!--Coloumb Soal Tugas-->
        <div class="col-4">
            <h2 class="fw-semibold fst-italic">
                Tugas 3
            </h2>
            <hr class="borde border-black border-1 opacity-75">
            <ol class="list-group list-group-flush list-group-numbered">
                <li class="list-group-item fst-italic">
                    Buatlah Sintax Rumus Keliling, Luas, Volume Bangun Ruang Dengan Format php!
                </li>
            </ol>
        </div>
        <!--Coloumb Jawaban-->
        <div class="col-8">
            <h2 class="fw-semibold fst-italic">
                Jawaban :
            </h2>
            <hr class="borde border-black border-1 opacity-75">
                <br>
                <!--INI JAWABAN-->
                <div>
                    <img src="Picture/Lingkaran_42cm.jpg" alt="Lingkaran">
                    <p class="fst-italic">
                        Sumber: https://www.selasar.com/luas-lingkaran/
                    </p>
                </div>
                <br>
                <ol class="list-group list-group-flush list-group-numbered">
                    <li class="list-group-item">
                        <?php
                        $cm="cm";
                        $phi=3.14;
                        $r=42/2;
                        $K=2*$phi*$r;

                        echo "Diketahui lingkaran dengan diameter 42".$cm.". Hitunglah Keliling lingkaran tersebut!";
                        echo "<br>"."<br>";
                        echo "Diket : "."<br>"."d = 42".$cm."<br>"." r = ".$r.$cm."<br>"."Phi = ".$phi.$cm;
                        echo "<br>"."<br>";
                        echo "Jawaban : "."<br>";
                        echo "K = 2 x Phi x r"."<br>"."K = 2 x ".$phi.$cm." x ".$r.$cm."<br>"."K = ". 2*$phi.$cm." x ".$r.$cm."<br>"."K = ".$K.$cm;
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                        $cm="cm";
                        $phi=3.14;
                        $r=42/2;
                        $L=$phi*$r*$r;
                        
                        echo "Diketahui lingkaran dengan diameter 42".$cm.". Hitunglah Luas lingkaran tersebut!";
                        echo "<br>"."<br>";
                        echo "Diket : "."<br>"."d = 42".$cm."<br>"." r = ".$r.$cm."<br>"."Phi = ".$phi.$cm;
                        echo "<br>"."<br>";
                        echo "Jawaban : "."<br>";
                        echo "L = Phi x r x r"."<br>"."L = ".$phi.$cm." x ".$r.$cm." x ".$r.$cm."<br>"."L = ".$phi*$r.$cm." x ".$r.$cm."<br>"."L = ".$L.$cm."^2";
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                        $cm="cm";
                        $phi=3.14;
                        $r=42/2;
                        $V=4/3*$phi*$r*$r*$r;
                        
                        echo "Diketahui bola dengan diameter 42".$cm.". Hitunglah volume bola tersebut!";
                        echo "<br>"."<br>";
                        echo "Diket : "."<br>"."d = 42".$cm."<br>"." r = ".$r.$cm."<br>"."Phi = ".$phi.$cm;
                        echo "<br>"."<br>";
                        echo "Jawaban : "."<br>";
                        echo "V = 4/3 x Phi x r x r x r"."<br>"."V = 4/3 x ".$phi.$cm." x ".$r.$cm." x ".$r.$cm." x ".$r.$cm."<br>"."V = ". 4/3 * $phi.$cm." x ".$r.$cm." x ".$r.$cm." x ".$r.$cm."<br>"."V = ". 4/3*$phi*$r.$cm." x ".$r.$cm." x ".$r.$cm."<br>"."V = ". 4/3*$phi*$r*$r.$cm." x ".$r.$cm."<br>"."V = ".$V.$cm."^3";
                        ?>
                    </li>
                </ol>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>