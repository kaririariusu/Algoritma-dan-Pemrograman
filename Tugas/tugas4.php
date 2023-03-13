<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tugas 4</title>
</head>

<body>
    <?php
        require "main/Navbar.php";
    ?>
<div class="row">
        <!--Coloumb Soal Tugas-->
        <div class="col-4">
            <h2 class="fw-semibold fst-italic">
                Tugas 4
            </h2>
            <hr class="borde border-black border-1 opacity-75">
            <ol class="list-group list-group-flush list-group-numbered">
                <li class="list-group-item fst-italic">
                    Memahami Tentang IF dan ELSE!
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
            <ol class="list-group list-group-flush list-group-numbered">
                <li class="list-group-item">
                    <?php
                    $d=date("d-m-Y");
                    echo $d;
                    echo "<br>"."<br>";
                    if($d=="Fri")
                        echo "Rung Prei!";
                    else
                        echo "Lembur OI!";
                    ?>
                </li>
                <!--Umur-->
                <li class="list-group-item">
                    <?php
                    function hitung_umur($tanggal_lahir){
                        $birthDate = new DateTime($tanggal_lahir);
                        $today = new DateTime("today");
                        if ($birthDate > $today) { 
                            exit("0 tahun 0 bulan 0 hari");
                        }
                        $y = $today->diff($birthDate)->y;
                        $m = $today->diff($birthDate)->m;
                        $d = $today->diff($birthDate)->d;
                        return $y." tahun ".$m." bulan ".$d." hari";
                    }
                    
                    echo hitung_umur("2002-01-14");
                    ?>
                </li>
                <!--Hari & Tanggal-->
                <li class="list-group-item">
                    <?php
                    $tanggal = '2023-03-11';
                    $day = date('D', strtotime($tanggal));
                    $dayList = array(
                        'Sun' => 'Minggu',
                        'Mon' => 'Senin',
                        'Tue' => 'Selasa',
                        'Wed' => 'Rabu',
                        'Thu' => 'Kamis',
                        'Fri' => 'Jumat',
                        'Sat' => 'Sabtu',
                    );
                    echo "Tanggal {$tanggal} adalah hari : " . $dayList[$day];
                    ?>
                </li>
                <!--Hari-->
                <li class="list-group-item">
                    <?php
                    function getHari($date)
                    {
                    $datetime = DateTime::createFromFormat('Y-m-d', $date);
                    $day = $datetime->format('l');
                    switch ($day)
                        {
                            case 'Sunday':
                                $hari = 'Minggu';
                            break;
                            case 'Monday':
                                $hari = 'Senin';
                            break;
                            case 'Tuesday':
                                $hari = 'Selasa';
                            break;
                            case 'Wednesday':
                                $hari = 'Rabu';
                            break;
                            case 'Thursday':
                                $hari = 'Kamis';
                            break;
                            case 'Friday':
                                $hari = 'Jum\'at';
                            break;
                            case 'Saturday':
                                $hari = 'Sabtu';
                            break;
                            default:
                                $hari = 'Tidak ada';
                            break;
                        }

                        return $hari;
                    }

                    $date='2023-03-13';
                    echo getHari($date);
                    ?>
                </li>
                <li class="list-group-item">
                    <?php
                    ?>
                </li>
            </ol>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>