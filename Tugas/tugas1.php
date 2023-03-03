<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
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
                Tugas 1
            </h2>
            <hr class="borde border-black border-1 opacity-75">
            <ol class="list-group list-group-flush list-group-numbered">
                <li class="list-group-item fst-italic">
                    Buatlah heading (h1-h6) dengan tulisan "STIKes Mitra Husada Karanganyar" dalam format php !
                </li>
                <li class="list-group-item fst-italic">
                    Buatlah paragraf/h3 (p/h3) dengan tulisan "Saya Sedang Belajar Algoritma dan Pemrograman" dalam format php !
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
                <div class="fst-italic text-center">
                    <?php
                    $format1="<h1>STIKes Mitra Husda Karanganyar</h1>";

                    echo $format1;
                    ?>
                </div>
                <br>
                <hr class="borde borde-black borde-1 ocacity-75">
                <br>
                <!--INI JAWABAN NO.2-->
                <div class="fst-italic text-capitalized fs-5 text-center">
                    <?php
                    $paragraph1="saya sedang belajar algoritma dan pemrograman";

                    echo $paragraph1;
                    ?>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>