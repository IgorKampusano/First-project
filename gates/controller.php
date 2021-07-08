<?php
    require(__DIR__ . '/connect.php');


    $width = $_POST["ширина"];
    $height = $_POST["высота"];
    // var_dump($_POST);
    // $height = $_POST["высота"];



    $gateSmallCount = 0;



    // $works = [];
    // $works[0] = $_POST["работы-1"];
    // $works[1] = $_POST["работы-2"];
    // $works[2] = $_POST["работы-3"];
    $sum = 0;

//    for (int $i=0; $i < $works.length(); $i++) {
//        $works[i] = $_POST[]
//    }

$gates = mysqli_query($connect, "SELECT * FROM `gates-price`");
$gates = mysqli_fetch_all($gates);
//$proflist = mysqli_query($connect, "SELECT * FROM `proflist`");
//$proflist = mysqli_fetch_all($proflist);


// var_dump($width);
// var_dump($height);
?>


<?php
    // var_dump($gates);

    $widthCount = 0;
    $heightCount = 0;
    $typeCount = 0;
    $automaticCount = 0;
    $worksCount = 0;
    $widthHeightCount = 0;

?>


            <?php
                // $heightCount = mysqli_query($connect, "SELECT `id`,`Высота` FROM `gates-price` WHERE `Высота`=2000");
                // $heightCount = mysqli_fetch_all($heightCount);
                // var_dump($heightCount);
            ?>
        
<?php
$proflist = [
        2625,
        2830,
        3000
];

    foreach ($gates as $gate) {
        if ($height <= 1500) {
    //         // $heightCount = mysqli_query($connect, "SELECT `Высота` FROM `gates-price` WHERE `Высота`=$height");
    //         // $heightCount = $gate[1];
            $heightCount = 1500;
        }
        else if ($height >= 1500 && $height <= 2000) {
            $heightCount = 2000;
        }
        else if ($height >= 2000 && $height <= 2500) {
            $heightCount = 2500;
        }
        else {
            $heightCount = 3000;
        }

        if ($width <= 3000) {
    //         // $widthCount = mysqli_query($connect, "SELECT `Ширина` FROM `gates-price` WHERE `Ширина`=$width");
            $widthCount = 3000;
        }
        else if ($width >= 3000 && $width <= 3500) {
            $widthCount = 3500;
        }
        else if ($width >= 3500 && $width <= 4000) {
            $widthCount = 4000;
        }
        else if ($width >= 4000 && $width <= 4500) {
            $widthCount = 4500;
        }
        else if ($width >= 4500 && $width <= 5000) {
            $widthCount = 5000;
        }
        else if ($widthCount >= 5000 && $widthCount <= 5500) {
            $widthCount = 5500;
        }
        else {
            $widthCount = 6000;
        }
        if ($widthCount == $gate[2] && $heightCount == $gate[1]) {
            $widthHeightCount = $gate[9];
        }
        $sum = (int)$widthHeightCount;

        if (array_key_exists("полотно", $_POST) == true) {
            $type = $_POST["полотно"];

            if ($type == "Обшивка из профнастила" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
                // $typeCount = mysqli_query($connect, "SELECT `односторонняя с-8` FROM `gates-price`");
                $typeCount = $gate[12];
            }
            if ($type == "Обшивка из обрешетки" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
                // $typeCount = mysqli_query($connect, "SELECT `евроштакетник с зазором 30мм с одной стороны (цвета стандартные)` FROM `gates-price`");
                $typeCount = $gate[15];
            }

            //$typeCount = (int)$typeCount;
                //$typeCount=(string)$typeCount;
                //$typeCount=substr("$typeCount", -30, 4);

                $sum = $widthHeightCount + $typeCount;
        }
        //0000000000000000000000554000000
        //0000000000000000000000701000000
        //0000000000000000035380000000000
        //2625000000000000000000000000000

        if (array_key_exists("автоматизация", $_POST) == true) {
            $automatic = $_POST["автоматизация"];

            if ($automatic == "FAAC" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
                // $automaticCount = mysqli_query($connect, "SELECT `FAAC` FROM `gates-price`");
                $automaticCount = $gate[8];
            }
            if ($automatic == "Nice" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
                // $automaticCount = mysqli_query($connect, "SELECT `NICE` FROM `gates-price`");
                $automaticCount = $gate[4];
            }
            if ($automatic == "CAME" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
                // $automaticCount = mysqli_query($connect, "SELECT `CAME` FROM `gates-price`");
                $automaticCount = $gate[6];
            }
            //echo "$automaticCount";
            $sum = $widthHeightCount + $typeCount + $automaticCount + $worksCount + $gateSmallCount;
        }

//        for ($i=0; $i<count($proflist); $i++) {
//            //$typeCount = 0;
//            $typeCou = 0;
//            if (array_key_exists("полотно", $_POST) == true) {
//                $type = $_POST["полотно"];
//
//                if ($type == "Обшивка из профнастила" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
//                    // $typeCount = mysqli_query($connect, "SELECT `односторонняя с-8` FROM `gates-price`");
//                    $typeCou = 2625;
//                }
//                if ($type == "Обшивка из обрешетки" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
//                    // $typeCount = mysqli_query($connect, "SELECT `евроштакетник с зазором 30мм с одной стороны (цвета стандартные)` FROM `gates-price`");
//                    $typeCou = 2625;
//                }
//
//                //$typeCount = (string)$typeCount;
//                //$typeCount = substr($typeCount, 0, 4);
//

//            }
//
//            $sum = $widthHeightCount + $typeCou + $worksCount + $gateSmallCount;
//        }
        //echo "$typeCou";

        //var_dump($typeCount);

//        foreach ($proflist as $prof) {
//            if (array_key_exists("полотно", $_POST) == true) {
//                $type = $_POST["полотно"];
//                $typeCount = 0;
//                if ($type == "Обшивка из профнастила" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
//                    // $typeCount = mysqli_query($connect, "SELECT `односторонняя с-8` FROM `gates-price`");
//                    $typeCount = $prof[0];
//                }
//                if ($type == "Обшивка из обрешетки" && $heightCount == $gate[1] && $widthCount == $gate[2]) {
//                    // $typeCount = mysqli_query($connect, "SELECT `евроштакетник с зазором 30мм с одной стороны (цвета стандартные)` FROM `gates-price`");
//                    $typeCount = $prof[0];
//                }
//
//                //$typeCount = (string)$typeCount;
//                //$typeCount = substr($typeCount, 0, 4);
//
//                var_dump($typeCount);
//                $sum = $widthHeightCount + $typeCount + $worksCount + $gateSmallCount;
//
//            }
//        }
         if (array_key_exists(""))
         if (($works[0] == "Монтаж ворот" || $works[1] == "Монтаж ворот" || $works[2] == "Монтаж ворот") && $heightCount == $gate[1] && $widthCount == $gate[2]) {
             $worksCount = $worksCount + $gate[18];
         }
         if (($works[0] == "Выемка грунта + бетонирование основания" || $works[1] == "Выемка грунта + бетонирование основания" || $works[2] == "Выемка грунта + бетонирование основания") && $heightCount == $gate[1] && $widthCount == $gate[2]) {
             $worksCount = $worksCount + $gate[21];
         }
         if (($works[0] == "Бетонирование отдельно стоящих столбов" || $works[1] == "Бетонирование отдельно стоящих столбов" || $works[2] == "Бетонирование отдельно стоящих столбов") && $heightCount == $gate[1] && $widthCount == $gate[2]) {
             $worksCount = $worksCount + $gate[20];
         }

    }
    if (array_key_exists("калитка", $_POST) == true) {
        $gateSmall = $_POST["калитка"];
        if ($gateSmall == "Да") {
            $gateSmallCount = 9000;
        }
    }



        // var_dump($widthCount);
        // var_dump($heightCount);
        // var_dump($typeCount);

        
        // var_dump($widthHeightCount);
        ?>
        
        <?php
        // var_dump($heightCount);
        // var_dump($heightCount);
        
        // if ($works.length() != 0) {
        //     for ($i=0; $i < $works.length(); $i++) {
        //         if ($works[$i] == "Монтаж ворот") {
        //             $worksCount = mysqli_query($connect, "SELECT `Цена на монтаж ворот` FROM `gates-price`");
        //         }
        //         if ($works[$i] == "Выемка грунта + бетонирование основания") {
        //             $worksCount = $worksCount + mysqli_query($connect, "SELECT `бетонируемый фундамент` FROM `gates-price`");
        //         }
        //         if ($works[$i] == "Бетонирование отдельно стоящих столбов") {
        //             $worksCount = $worksCount + mysqli_query($connect, "SELECT `свайный фундамент` FROM `gates-price`");
        //         }
        //     }

        // }

    // }
    
    
    
    

    // var_dump($widthCount);
    // var_dump($heightCount);
    
    // var_dump($typeCount);
    // var_dump($automaticCount);
    // var_dump($gateSmallCount);
    // var_dump($worksCount);

    
    
    //$sum = $widthHeightCount + $typeCount + $automaticCount + $worksCount + $gateSmallCount;
    
    
    //echo json_encode($sum);
    //echo "$typeCount";
        $sum = $widthHeightCount + $typeCount + $gateSmallCount + $automaticCount + $worksCount;
    $sum = json_encode($sum);
    //$sum = json_encode(["value" => $sum]);
    //$sum = json_encode(["value"]);
    echo $sum;

   
    
?>

