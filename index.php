<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約フォーム</title>
</head>
<body>

<form action="reservation_calender.php" method="post">
    お名前
    <div><input type="text" name="name" placeholder="山田太郎"></div>
    電話番号
    <div><input type="tel" name="number" placeholder="08012349876"></div>
    人数
    <div><input name="member"></div>
    日付
    <div>
    <input type="date" name="day" list="daylist" min="">
    </div>


    <div class="submit">
        <input type="submit" value="送信">
    </div>
    <div class="reset">
        <input type="reset" value="リセット">
    </div>

</form>

</body>
</html>