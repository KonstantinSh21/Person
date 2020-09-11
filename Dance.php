<?php
//    Люди которые посетят бар
$personList = [];

$musicArr = [];

$personName = ["Nasty", "Ivan", "Irina", "Marina", "Dad", "Mike", "Bob", "Mary"];
$music = ["Jazz", "Pock", "Pop"];



function createRandomRerson(&$personList, $personName, $music)
{   //Число клиенов которое зайдет в бар
    $randomAmountRerson = rand(2, 7);
    $personList = [];
//    for ($i = 0; $i < $randomAmountRerson; $i++){
//        if ($personList[$i]["inBar"] == false) {
//            unset($personList[$i]);
//            var_dump("del");
//        }
//    }
    var_dump(count($personList));
    for ($i = 0; $i < $randomAmountRerson; $i++) {
        $randomName = array_rand($personName, $randomAmountRerson + 1);

        $randomMusic = $music[rand(0, 2)];
        $personList[] = [
            "name" => $personName[$randomName[$i]],
            "music" => $randomMusic,
            "inBar" => false,
            "dance" => false
        ];

    }
}

createRandomRerson($personList, $personName, $music);

function situatedInBar($personList)
{
    $randomAmountRerson = count($personList);


    for ($i = 0; $i < $randomAmountRerson; $i++) {
        $personList[$i]["inBar"] = !$personList[$i]["inBar"];

    }

    return $personList;
}

$personInBar = situatedInBar($personList);


function getMusic($personInBar, $musicArr)
{
    for ($i = 0; $i < count($personInBar); $i++) {
        array_push($musicArr, $personInBar[$i]["music"]);
    }
    return ($musicArr);
}


$musicArr = getMusic($personInBar, $musicArr);

// Тут нужно будет обновлять количество людей с каким-то циклом
for ($i = 0; $i < 100; $i++) {
//    sleep(10);
    createRandomRerson($personList, $personName, $music);
    //
    $personInBar = situatedInBar($personList);
    $musicArr = getMusic($personInBar, $musicArr);
    personInDance($personInBar, $musicArr);
}


function personInDance($personInBar, $musicArr)
{

//    var_dump($personInBar);
    foreach ($musicArr as $k => $v) {
        $cnt = 0;

        foreach ($personInBar as $key => &$value) {
            sleep(0);
            //Pock == Jazz Rap Pock
//            var_dump($value);
            if ($v == $value["music"]) {
                var_dump("-----");
                var_dump($v);
                $cnt++;
                var_dump($value["music"]);
                var_dump("-----");
                $value["dance"] = true;

            } else {
                $value['dance'] = false;
            }
        }

        echo "personInBar: " . count($personInBar) . " ";
        echo $cnt . " cnt: " . $cnt . "\n";
    }
    return ($personInBar);
}

$personList = personInDance($personInBar, $musicArr);























//Хранит в себе занчение людей в баре


//$rand_rey = array_rand($numberClients, 1);
//
////Количество клиентов
//$amountClients = $numberClients[$rand_rey];
//$newAmountClients = $amountClients;
////Какие именно клиенты
//$rand_reyPerson = array_rand($person, $newAmountClients);
//
////Поменял значение true на false
//for ($i = 0; $i < $newAmountClients; $i++) {
//    $person[$rand_reyPerson[$i]]["inBar"] = !$person[$rand_reyPerson[$i]]["inBar"];
//}
//
//
//for ($i = 0; ; $i++) {
//
//    sleep(1);
//    var_dump($i);
//
//    if ($i > 19 || $person[0]["inBar"] == false &&
//        $person[1]["inBar"] == false &&
//        $person[2]["inBar"] == false &&
//        $person[3]["inBar"] == false &&
//        $person[4]["inBar"] == false &&
//        $person[5]["inBar"] == false &&
//        $person[6]["inBar"] == false &&
//        $person[7]["inBar"] == false &&
//        $person[8]["inBar"] == false
//    ) {
//        var_dump("stop");
//        break;
//    } else {
//        $numberClients = [1, 2, 3, 4, 5, 6, 7, 8];
//
//        $rand_rey = array_rand($numberClients, 1);
//
//        //Количество клиентов
//        $amountClients = $numberClients[$rand_rey];
//
//        //Какие именно клиенты
//        $rand_reyPerson = array_rand($person, $amountClients);
//
//        for ($a = 0; $a <= $amountClients; $a++) {
//
//            $person[$rand_reyPerson[$a]]["inBar"] = !$person[$rand_reyPerson[$a]]["inBar"];
//            var_dump($amountClients);
//            if ($person[$rand_reyPerson[$a]]["inBar"] == true) {
//                array_push($musicArr, $person[$rand_reyPerson[$a]]["music"]);
//            }
//            $clearMusicArr = array_diff($musicArr, array(''));
//
//        }
//        for ($p = 0; $p <= $amountClients; $p++) {
////                var_dump("p " .$p);
////                sleep(1)
//
//            for ($f = 0; $f <= $amountClients; $f++) {
////                    var_dump("f " .$f);
//
//                if ($clearMusicArr[$p] == $person[$rand_reyPerson[$f]]["music"] &&
//                    $person[$rand_reyPerson[$f]]["inBar"] == true) {
//                    $person[$rand_reyPerson[$f]]["dance"] = true;
//                } else {
//                    $person[$rand_reyPerson[$f]]["dance"] = false;
//                }
//            }
//        }
//
//    }
//}
//
//
//array_pop($person);
//
//var_dump($person);



