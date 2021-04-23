<?php
if(isset($_POST['name'])) {

    $name=htmlspecialchars($_POST["name"], ENT_QUOTES);
    $number=htmlspecialchars($_POST["number"], ENT_QUOTES);
    $member=htmlspecialchars($_POST["member"], ENT_QUOTES);
    $day=htmlspecialchars($_POST["day"], ENT_QUOTES);

            //「予約フォーム」からの情報をそれぞれ変数に格納しておく↑


    $dsn="mysql:host=localhost;dbname=c_db;charset=utf8";
    $user="root";
    $pass="root";


    try{

    $db = new PDO($dsn,$user,$pass);
    $db->query("INSERT INTO reservation (ban,name,number,member,day)
                VALUES (NULL,'$name','$number','$member','$day')");

    }catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    }

            header("Location: index.php");
            exit;

function getreservation(){

    $dsn="mysql:host=localhost;dbname=c_db;charset=utf8";
    $user="root";
    $pass="root";
    $db = new PDO($dsn,$user,$pass);
    $ps = $db->query("SELECT * FROM reservation");
    $reservation_member = array();

    foreach($ps as $out){

        $day_out = strtotime((string) $out['day']);

        $member_out = (string) $out['member'];

        $reservation_member[date('Y-m-d', $day_out)] = $member_out;

    }
        ksort($reservation_member);
        return $reservation_member;
}

}
?>