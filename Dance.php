<?php
//    Люди которые посетят бар
$person = [
//         0 Jack Rap
    [
        "name" => "Jack",
        "music" => "Rap",
        "inBar" => false,
        "dance" => false,
    ],
//        1 Bob Pock
    [
        "name" => "Bob",
        "music" => "Pock",
        "inBar" => false,
        "dance" => false,
    ],
//        2 Mary Jazz
    [
        "name" => "Mary",
        "music" => "Jazz",
        "inBar" => false,
        "dance" => false,
    ],
//        3 Anna Rap
    [
        "name" => "Anna",
        "music" => "Rap",
        "inBar" => false,
        "dance" => false,
    ],
//        4 Marina Pock
    [
        "name" => "Marina",
        "music" => "Pock",
        "inBar" => false,
        "dance" => false,
    ],
//        5 Irina Pop
    [
        "name" => "Irina",
        "music" => "Pop",
        "inBar" => false,
        "dance" => false,
    ],
//         6 Artem Pock
    [
        "name" => "Artem",
        "music" => "Pock",
        "inBar" => false,
        "dance" => false,
    ],
//          7 Ivan Pop
    [
        "name" => "Ivan",
        "music" => "Pop",
        "inBar" => false,
        "dance" => false,
    ],
//
    [
        "name" => "Nasty",
        "music" => "Jazz",
        "inBar" => false,
        "dance" => false,
    ],
];

class Person
{
    function __construct($name, $music)
    {
        [
            "namePerson" => $name,
            "musicPerson"  => $music,
            "inBar" => false,
            "dance" => false
        ];
    }
}

//$musicArr = [];

$numberClients = [1, 2, 3, 4, 5, 6, 7, 8];
$personName = ["Nasty", "Ivan", "Irina", "Marina", "Dad", "Mike", "Bob", "Mary"];
$music = ["Jazz", "Pock", ];

function createRandomRerson($numberClients, $class='Person'){
    $randomAmountRerson = array_rand($numberClients, 1);//3




}


createRandomRerson($numberClients, $person);


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



