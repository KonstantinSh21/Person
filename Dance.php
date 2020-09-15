<?php

class Person
{
    public $name;
    public $music;
    public $state;

    public function __construct($name, $music, $state)
    {
        $this->name = $name;
        $this->music = $music;
        $this->state = $state;
    }
}

abstract class createNewPerson
{

    private static $personName = ["Nasty", "Ivan", "Irina", "Marina", "Dad", "Mike", "Bob", "Mary"];
    private static $music = ["Jazz", "Pock", "Pop"];

    public static function generatePerson($count)
    {

        $personList = [];
        for ($i = 0; $i < $count; $i++) {

            $randomNameIndex = rand(0, count(self::$personName) - 1);
            $personList[] = new Person(self::$personName[$randomNameIndex], self::$music[rand(0, 2)], "noneInBar");
        }

        return $personList;
    }
}

class Bar
{

    public function inBar($persons)
    {
        foreach ($persons as &$person) {
            if ($person->state === "noneInBar") {
                $person->state = "inBar";
            } else {
                $person->state = "noneInBar";
            }
        }
        return $persons;
    }
}

class DanceFloor
{
    public function listenMusic($personInBar)
    {
        $musicArr = [];
        foreach ($personInBar as &$person) {
            $musicArr[] = $person->music;
        }
        return($musicArr);
    }
    public function personDance($personInBar, $musicArrDance){
        foreach ($musicArrDance as $k => $v) {
            $cnt = 0;
            foreach ($personInBar as $key => &$value) {
                var_dump($v);
                var_dump("--------");
                var_dump($value);
                if($v == $value->music){
                    $cnt++;
                    $value->state = "Dance";
                } else {
                    $value->state = "inBar";
                }
            }
            var_dump($cnt);
        }

    }

}


//создаем рандомных людей
$amountRandomPerson = rand(0, 7);
$persons = createNewPerson::generatePerson($amountRandomPerson);



//Люди в баре


    $person1 = new Bar();
    $personInBar = $person1->inBar($persons);




//Люди танцуют и меняется песня
    for ($i = 0; $i < 100 ; $i++){
        sleep(1);
        $person1 = new Bar();
        $personInBar = $person1->inBar($persons);
        $dance = new DanceFloor();
        $musicArrDance = $dance -> listenMusic($personInBar);
        $dance->personDance($personInBar, $musicArrDance);
    }















////class CreateNewRerson
//{
//
//    function createRandomRerson()
//    {
//        $personName = ["Nasty", "Ivan", "Irina", "Marina", "Dad", "Mike", "Bob", "Mary"];
//        $music = ["Jazz", "Pock", "Pop"];
//
//        for ($i = 0; $i < count($personName); $i++) {
//
//            $randomMusic = $music[rand(0, 2)];
//            $personList[] = [
//                "name" => $personName[$i],
//                "music" => $randomMusic,
//                "state" => "noneInBar"
//            ];
//
//        }
//        return $personList;
//    }
//}
//
//
//$person = new CreateNewRerson();
//$person->createRandomRerson();
//
//
//class InBar
//{
//    function personInBar($person)
//    {
//        $randomAmountRerson = rand(1, 7);
//
//        $randomIndex = array_rand($person, $randomAmountRerson);
//
////        Дописать условие чтобы менять люди выходи из бара
//        for ($i = 0; $i < count($randomIndex); $i++){
//            $person[$randomIndex[$i]]['state'] = "inBar";
//        }
//
//        return $person;
//    }
//}
//
//$personInBar = new InBar();
//$personInBar->personInBar($person->createRandomRerson());
//var_dump($personInBar->personInBar($person->createRandomRerson()));
//$personListInBar = $personInBar->personInBar($person->createRandomRerson());
//
//
//
//class DanceFloor {
//
//    function personDance ($person) {
//
//    }
//
//}
//
//$personDance = new DanceFloor;
//$personDance->personDance($personListInBar);
//
//
//
//


//$personName = ["Nasty", "Ivan", "
//Irina", "Marina", "Dad", "Mike", "Bob", "Mary"];
//$music = ["Jazz", "Pock", "Pop"];
//
//
//$personList = new CreateNewRerson();
//$personList->createRandomRerson($personName, $music);
//var_dump($personList);


//    Люди которые посетят
//$personList = [];
//
//$musicArr = [];
//
//$personName = ["Nasty", "Ivan", "Irina", "Marina", "Dad", "Mike", "Bob", "Mary"];
//$music = ["Jazz", "Pock", "Pop"];
//
//
//
//function createRandomRerson(&$personList, $personName, $music)
//{   //Число клиенов которое зайдет в бар
//    $randomAmountRerson = rand(2, 7);
//    $personList = [];
////    for ($i = 0; $i < $randomAmountRerson; $i++){
////        if ($personList[$i]["inBar"] == false) {
////            unset($personList[$i]);
////            var_dump("del");
////        }
////    }
//    var_dump(count($personList));
//    for ($i = 0; $i < $randomAmountRerson; $i++) {
//        $randomName = array_rand($personName, $randomAmountRerson + 1);
//
//        $randomMusic = $music[rand(0, 2)];
//        $personList[] = [
//            "name" => $personName[$randomName[$i]],
//            "music" => $randomMusic,
//            "inBar" => false,
//            "dance" => false
//        ];
//
//    }
//}
//
//createRandomRerson($personList, $personName, $music);
//
//function situatedInBar($personList)
//{
//    $randomAmountRerson = count($personList);
//
//
//    for ($i = 0; $i < $randomAmountRerson; $i++) {
//        $personList[$i]["inBar"] = !$personList[$i]["inBar"];
//
//    }
//
//    return $personList;
//}
//
//$personInBar = situatedInBar($personList);
//
//
//function getMusic($personInBar, $musicArr)
//{
//    for ($i = 0; $i < count($personInBar); $i++) {
//        array_push($musicArr, $personInBar[$i]["music"]);
//    }
//    return ($musicArr);
//}
//
//
//$musicArr = getMusic($personInBar, $musicArr);
//
//// Тут нужно будет обновлять количество людей с каким-то циклом
//for ($i = 0; $i < 100; $i++) {
////    sleep(10);
//    createRandomRerson($personList, $personName, $music);
//    //
//    $personInBar = situatedInBar($personList);
//    $musicArr = getMusic($personInBar, $musicArr);
//    personInDance($personInBar, $musicArr);
//}
//
//
//function personInDance($personInBar, $musicArr)
//{
//
////    var_dump($personInBar);
//    foreach ($musicArr as $k => $v) {
//        $cnt = 0;
//
//        foreach ($personInBar as $key => &$value) {
//            sleep(0);
//            //Pock == Jazz Rap Pock
////            var_dump($value);
//            if ($v == $value["music"]) {
//                var_dump("-----");
//                var_dump($v);
//                $cnt++;
//                var_dump($value["music"]);
//                var_dump("-----");
//                $value["dance"] = true;
//
//            } else {
//                $value['dance'] = false;
//            }
//        }
//
//        echo "personInBar: " . count($personInBar) . " ";
//        echo $cnt . " cnt: " . $cnt . "\n";
//    }
//    return ($personInBar);
//}
//
//$personList = personInDance($personInBar, $musicArr);