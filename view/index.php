<?php
include 'header.php';
include '../controller/index_control.php';
if (isset($_POST['submit']) && count($formError) === 0)
{
 setcookie('nom', $lastname, time()+3600*24);
 setcookie('prénom', $firstname, time()+3600*24) ;
 setcookie('age', $age, time()+3600*24) ;
 setcookie('genre', $gender, time()+3600*24) ; 
 setcookie('zipcode', $zipcode, time()+3600*24) ; 
 setcookie('mail', $mail, time()+3600*24) ; 
 setcookie('search', $search, time()+3600*24) ; 

header('location:lovers.php');
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <div class="container text-warning" id="container">
        <form method="POST" action="#" class="row shadow-lg p-1 mb-2 ">
            <div class="col-12 text-success text-center" id="title"><strong>
                    <h2>merci de renseigner le formulaire de contact &#128578; </h2>
                </strong>
            </div>
            <div class="col-6 ">
                <div>
                    <label for="lastname">nom</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="SIMPSON" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                    <?php
                    if (isset($formError['lastname'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['lastname'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="firstname">prénom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Homer" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                    <?php
                    if (isset($formError['firstname'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['firstname'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="age">age</label>
                    <input type="text" class="form-control" name="age" id="age" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>">
                    <?php
                    if (isset($formError['age'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['age'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="gender">genre</label><br>
                    <select class="form-control form-control-sm" name="gender" required>
                        <option>homme</option>
                        <option>femme</option>

                    </select><br>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <label for="zipcode">zipcode</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="80100" value="<?= isset($_POST['zipcode']) ? $_POST['zipcode'] : '' ?>">
                    <?php
                    if (isset($formError['zipcode'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['zipcode'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>

                <div>
                    <label for="mail">mail</label>
                    <input type="text" class="form-control" name="mail" id="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                    <?php
                    if (isset($formError['mail'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['mail'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="search">type de recherche</label><br>
                    <select class="form-control form-control-sm" name="search" required>
                        <option>hommes</option>
                        <option>femmes</option>
                    </select><br>
                </div>
                <div id="bouton">
                <input type="submit" name="submit" class="btn btn-outline-success" value="rencontrer nos célibataires" aria-invalid="false">
            </div>
            </div>
            
    </div>
    </form>
    </div>

    </div>
    <?php
    include 'footer.php';
                }
    ?>
</body>

</html>