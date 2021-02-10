<?php

// définition tableau d'erreur
$formError = array();

// définition des regexs

$lastnameReg = '/^[\w]+$/';
$firstnameReg = '/^[\w]+$/';
$ageReg = '/[0-9]+$/';
$zipcodeReg = '/[0-9]+$/';
$mailReg = '/[\w._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/';


// si présence de la valeur du bouton de validation
if (isset($_POST['submit']))
{
    // vérification des champs de saisies

    // lastname
    if (!empty($_POST['lastname']))
    {
        if (preg_match($lastnameReg, $_POST['lastname']))
        {
            $firstname = $_POST['lastname'];
        }
        else
        {
            $formError['lastname'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['lastname'] = 'Vous devez remplir ce champs !!!';
    }
    // firstname
    if (!empty($_POST['firstname']))
    {
        if (preg_match($firstnameReg, $_POST['firstname']))
        {
            $lastname = $_POST['firstname'];
        }
        else
        {
            $formError['firstname'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['firstname'] = 'Vous devez remplir ce champs !!!';
    }
    // age
    if (!empty($_POST['age']))
    {
        if (preg_match($ageReg, $_POST['age']))
        {
            $age = $_POST['age'];
        }
        else
        {
            $formError['age'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['age'] = 'Vous devez remplir ce champs !!!';
    }
    


    // genre
    if (empty($_POST['gender']))
    {
        $formError['gender'] = 'Vous devez choisir une option !!!';
        
            }
    else
    {
        $gender = $_POST['gender'];
    }

    // zipcode
    if (!empty($_POST['zipcode']))
    {
        if (preg_match($zipcodeReg, $_POST['zipcode']))
        {
            $zipcode = $_POST['zipcode'];
        }
        else
        {
            $formError['zipcode'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['zipcode'] = 'Vous devez remplir ce champs !!!';
    }


    // mail
    if (!empty($_POST['mail']))
    {
        if (preg_match($mailReg, $_POST['mail']))
        {
            $mail = $_POST['mail'];
        }
        else
        {
            $formError['mail'] = 'Erreur de saisie !!';
        }
    }
    else
    {
        $formError['mail'] = 'Vous devez remplir ce champs !!!';
    }

    // search
    if (empty($_POST['search']))
    {
        $formError['search'] = 'Vous devez choisir une option !!!';
        
            }
    else
    {
        $search = $_POST['search'];
    }
}
// }
//     elseif(isset ($_COOKIE["homme"])){
//     $data = array('lastname' => $lastname, 'firstname' =>$firstname, 'age' =>$age, 'gender' =>$gender, 'mail' => $mail, 'zipcode' => $zipcode );
//     $profil = file_get_contents('hommes.json');
//     $profil = json_decode($profil, true);
//     $profil[] = $data;
//     $profil = json_encode($profil);
//     file_put_contents('hommes.json', $profil); 
//     }  









