<?php
include 'header.php';
include '../controller/user_control.php';
?>

<!-- navbar -->
<div id="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-info  fixed-top ">
            <?php
            if (isset($_COOKIE['prénom'])) {
                echo "bonjour " . $_COOKIE['prénom'];

            ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../view/lovers.php"><strong>nos célibataires</strong><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" #Compétences"><strong>mes informations</strong></a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div><br>
    <!-- fin de navbar -->
    <!-- infos user -->
    <div class="container" id="container">
        <h2>vos informations</h2>
        <?php
                echo 'vous vous appelez' . ''  . $_COOKIE['prénom'] . $_COOKIE['nom'] . "<br/>";
                echo 'vous avez' . $_COOKIE['age'] . "<br/>";
                echo 'vous êtes un(e)' . ' ' . $_COOKIE['genre'] . "<br/>";
                echo 'votre code postal ' . ' ' . $_COOKIE['zipcode'] . "<br/>";
                echo 'votre e mail ' . ' ' . $_COOKIE['mail'] . "<br/>";
                echo 'vous recherchez des' . ' ' . $_COOKIE['search'] . "<br/>";
        ?>
    <?php
            }
    ?>
    <form method="POST" action="#" class="row shadow-lg p-1 mb-2 ">
        <div id="deconnexion">
            <input type="submit" name="deconnexion" class="btn btn-outline-danger" value="deconnexion" aria-invalid="false">
            <a href="https://www.meetic.fr/" title="mon cv" class="btn btn-outline-info">Meetic</a>
        </div>
    </form>
    </div>
<?php
include 'footer.php';
?>