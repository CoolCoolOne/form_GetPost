<?php

error_reporting(-1);
// or use isset func!
if ((!empty($_GET)) and (!empty($_POST))) {
    print "содержимое get и post отсутствует!";
} elseif ((!empty($_POST)) and (empty($_GET))) {
    print "содержимое post <br/>";
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
} elseif ((empty($_POST)) and (!empty($_GET))) {
    print "содержимое get <br/>";
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
} else {
    print "есть и GET и POST массивы не 0";
}

?>

<p><a href="./index.php"> вернуться на форму</a></p>