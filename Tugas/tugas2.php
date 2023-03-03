<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
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
                Tugas 2
            </h2>
            <hr class="borde border-black border-1 opacity-75">
            <ol class="list-group list-group-flush list-group-numbered">
                <li class="list-group-item fst-italic">
                    Buatlah Flowchart Rumus Luas Segitiga!
                </li>
                <li class="list-group-item fst-italic">
                    Buatlah Sintax Rumus Luas Segitiga Dalam Format php!
                </li>
                <li class="list-group-item fst-italic">
                    Buatlah Sintax Rumus Untuk Mencari Sisi Panjang Segitiga Tersebut Dalam Format php!
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
                <!--INI JAWABAN NO.1-->
                <div class="justify-content-start">
                    <a class="btn btn-primary disabled" role="button"  href="/Pdf_Docx/Menghitung Luas Segitiga.docx">
                        File 1
                    </a>
                </div>
                <br>
                <hr class="border border-black border-1 opacity-75">
                <br>
                <!--INI JAWABAN NO.2-->
                <div class="fs-6">
                    <?php
                    $cm="cm";
                    $a= 100;
                    $t= 50;
                    $L= 1/2*$a*$t;
            
                    echo "Diketahui segitiga dengan Alas ".$a.$cm." dan Tingginya ".$t.$cm.". Berapakah Luas segitiga tersebut?";
                    echo "<br>"."<br>"; 
                    echo "Diket :"."<br>"."Alas : ".$a.$cm."<br>"."Tinggi : ".$t.$cm;
                    echo "<br>"."<br>";
                    echo "Jawaban :"."<br>";
                    echo "L = 1/2 x a x t"."<br>"."L = 1/2 x ".$a.$cm." x ".$t.$cm."<br>"."L = ". 1/2*$a.$cm." x ".$t.$cm."<br>"."L = ".$L.$cm."^2";
                    ?>
                </div>
                <br>
                <hr class="border border-black border-1 opacity-75">
                <br>
                <!--INI JAWABAN NO.3-->
                <div class="fs-6">
                    <?php
                    $cm="cm";
                    $a= 400;
                    $t= 150;
                    $L= 1/2*$a*$t;
                    $c2= round(sqrt(pow($a,2) + pow($t,2)));

                    echo "Diketahui segitiga dengan Alas ".$a.$cm." dan Tinggi ".$t.$cm.". Hitunglah berapa cm sisi miringnya!";
                    echo "<br>"."<br>";
                    echo "Diket :"."<br>"."Alas : ".$a.$cm."<br>"."Tinggi : ".$t.$cm;
                    echo "<br>"."<br>";
                    echo "Jawaban :"."<br>";
                    echo "C^2 = A^2 + B^2"."<br>"."C^2 = ".$t."^2".$cm." + ".$a."^2".$cm."<br>"."C^2 = ". pow($t,2).$cm." + ". pow($a,2).$cm."<br>"."C^2 = ". pow($t,2) + pow($a,2).$cm."<br>"."C = ". sqrt(pow($t,2) + pow($a,2)).$cm."<br>"."C = ".$c2.$cm;
                    ?>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>