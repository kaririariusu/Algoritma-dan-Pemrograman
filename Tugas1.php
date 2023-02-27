<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="table">

    </div>
    <div class="p-3 mb-2 bg-success text-white bg-opacity-75">
        <div class="text-center">
            <h1 class="fst-italic">
                STIKes Mitra Husada Karanganyar
            </h1>
        </div>
    </div>

    <?php
        $format1="
        <h3>
            Saya Sedang Belajar Algoritma dan Pemrograman
        </h3>
        ";
        echo $format1;
    ?>

    <br>
    <hr class="border border-danger border-2 opacity-50">

    <?php
        //Perkalian & Pembagian
        $cm="cm";
        $a= 100;
        $t= 50;
        $L= 1/2*$a*$t;
        $diketahui= "Diket: <br>";
        
        echo $diketahui;
        echo "alas ".$a.$cm."<br>";
        echo "tinggi ".$t.$cm."<br><br>";   
        echo "Luas alas segitiga dengan Alas ".$a.$cm." dan Tinggi ".$t.$cm." adalah = ".$L."cm^2";
    ?>
    
    <br>
    <hr class="border border-danger border-2 opacity-50">

    <?php
        //Perpangkatan
        $cm="cm";
        $a= 400;
        $t= 150;
        $L= 1/2*$a*$t;
        $c2= round(sqrt(pow($a,2) + pow($t,2)));

        echo "Diketahui segitiga dengan alas ".$a.$cm." dan tinggi ".$t.$cm." adalah = ".$c2.$cm;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>