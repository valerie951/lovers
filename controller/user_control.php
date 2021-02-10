
<?php


if (isset($_POST['submit']) && count($formError) === 0)
{
 setcookie('nom', $lastname, time()+3600*24);
 setcookie('prénom', $firstname, time()+3600*24) ;
 setcookie('age', $age, time()+3600*24) ;
 setcookie('genre', $gender, time()+3600*24) ; 
 setcookie('zipcode', $zipcode, time()+3600*24) ; 
 setcookie('mail', $mail, time()+3600*24) ; 
 setcookie('search', $search, time()+3600*24) ;
}

 if (isset($_POST["deconnexion"])) {

    unset($_COOKIE['gender']);
    unset($_COOKIE['mail']);
    unset($_COOKIE['zipcode']);
    unset($_COOKIE['firstname']);
    unset($_COOKIE['lastname']);
    unset($_COOKIE['age']);
    unset($_COOKIE['search']);
    header('location:index.php');
 }
?>  
