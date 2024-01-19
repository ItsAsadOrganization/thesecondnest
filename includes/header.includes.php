<?php
define("BASE_URL", "http://localhost/projects/nest");
define("ASSETS", BASE_URL . "/assets");
define("MEDIA", ASSETS . "/media");
define("STYLES", ASSETS . "/styles");
define("FONTS", ASSETS . "/fonts");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daycare Center Early Childhood - The Second Nest</title>
    <meta name="description" content="The Second Nest is more than a daycare center.... Learn more about our unique approach and Early Education childcare schools today!" />
    <!-- Adding bootstrap 5 stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo STYLES . '/index.css'; ?>" rel="stylesheet">

    <!-- Adding boostrap script as perload -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="preload" as="script">

    <!-- adding fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

</head>

<body>

    <section class="main-background-section">
        <?php require_once("components/nav.component.php") ?>
        <!-- <div class="video-container">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/y7J132K8NeE?autoplay=1&mute=1&controls=0" title="A Virtual Visit to Kidz Republic" autoplay="true" frameborder="0" allow="autoplay"></iframe>
        </div> -->

    </section>