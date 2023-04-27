<?php

if(isset($_POST['submit']))

{
    if (!empty($_POST['submit'])){
        $submit=$_POST['submit'];
    }

    $erreurEmail=0;
    if (!empty($_POST['Email'])){
        $Email=$_POST['Email'];
    }else{
        $erreurEmail=1;
    }

    $erreurMessage=0;

    if (!empty($_POST['Message'])){
        $Message=$_POST['Message'];
    }else{
        $erreurMessage=1;
    }

    $erreurMerci=0;

   

    if(empty($erreurEmail) && empty($erreurMessage)){
        // header("Location: contact.php?&submit=$submit");
        header("Location: contact.php?sucess");
        die;
    }else{
        header("Location: contact.php?erreurEmail=$erreurEmail&erreurMessage=$erreurMessage");
        die;
    }
    
}
