<?php
if ((!empty($_POST['user'])) && (!empty($_POST['content']))) {
    $fa = fopen("message.tsv", 'a');
    $comment = $_POST['user'] . "\t" . date('Y-m-d') . "\t" . $_POST['content'] . "\n";
    fwrite($fa, $comment);
    fclose($fa);
} else {
    echo 'username or content is empty';
}


 