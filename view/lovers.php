<?php
include 'header.php';
include '../controller/lovers_control.php';
?>

<body>
    <!-- navbar -->
    <div id="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-info  fixed-top ">

            <?php
            if (isset($_COOKIE['prénom'])) {
                echo "bonjour " . $_COOKIE['prénom'];
            }

            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="lovers.php"><strong>nos célibataires</strong><span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php"><strong>mes informations</strong></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><br>

    <!-- fin de navbar -->

    <!-- tableau -->
    <div class="container">
        <div class="row">
            <?php
            if ($_COOKIE['search'] == 'femmes') {

                $i = 0;
                foreach ($femme_list as $member) {
                    $i++;
            ?>
            <div class="col-6 col-md-4">
                    <div class="card">
                    <img class="card-img-top mx-auto d-block" src="../<?php echo $_member['picture'];?>"  style="width:150px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $member['lastname'] . " " . $member['firstname'] ?></h5>
                            <p class="card-text"><?= $member['zipcode'] ?></p>
                            <p class="card-text"><?= $member['description'] ?></p>

                        </div>
                    </div>
            </div>
    <?php
                }
            } else {
                $i = 0;
                foreach ($homme_list as $member) {
                    $i++;
    ?>
    <div class="col-6 col-md-4">
        <div class="card">
        <img class="card-img-top mx-auto d-block" src="../<?php echo $member['picture'];?>"  style="width:150px;">
            <div class="card-body">
                <h5 class="card-title"><?= $member['lastname'] . " " . $member['firstname'] ?></h5>
                <p class="card-text"><?= $member['zipcode'] ?></p>
                <p class="card-text"><?= $member['description'] ?></p>

            </div>
        </div>
    </div>
<?php
                }
            }
?>
    </div>
    </div>
    <?php
    include 'footer.php';
    ?>