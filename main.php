<?php
$data = $_POST['email'];
if(isset($data))
{
    $_POST['email']=htmlspecialchars($data);
    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $data))
    {
        echo 'Adresse email valide';
        file_put_contents('emailsconfirm.txt', "email valide: " . $data . "\n", FILE_APPEND);
    }
    else
    {
        echo 'Adresse e-mail non valide';
        file_put_contents('emailsdenied.txt', "email non-valide: " . $data . "\n", FILE_APPEND);
    }
}
?>