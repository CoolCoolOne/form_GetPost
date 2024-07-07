<?php 
error_reporting(-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-get</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="action.php" method="post">
        <h1 class="title">Форма</h1>
        <div class="inp">
            <!-- <label for="">ввод</label> -->
            <input class="inp_itself" type="text" name="name">
            <label class="lbl_itself" for="">секретное слово</label>
        </div>
        <br>
        <div class="but">
            <button name="send" value="buttonData" class="but_itself" type="submit">Отправить</button>
        </div>
    </form>
</body>
</html>