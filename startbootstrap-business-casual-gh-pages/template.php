<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Casual - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

    <?php
    include '../common/header.php';
    include '../common/navbar.php';

    if (!isset($page)) {
        # code...
        $page = "actu";
    }
    switch ($page) {
        case 'actu':
            # code...
            include '../content/index_content.php';
            break;
        case 'stage':
            # code...
            include '../content/product_content.php';
            break;
        case 'creneaux':
            # code...
            include '../content/store_content.php';
            break;
        case 'equipe':
            # code...
            include '../content/about_content.php';
            break;
        default:
            include '../content/404.php';
            break;
    }

    include '../common/footer.php';

    $array = [
        "lundi" => "18h à 22h",
        "mardi" => "18h à 20h",
        "mercredi" => "16h30 à 18h",
        "jeudi" => "19h30 à 22h",
        "vendredi" => "18h à 22h",
    ];


    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>