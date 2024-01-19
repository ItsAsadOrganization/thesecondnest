<?php

$ROUTES = array(
    array(
        "route" => "/",
        "label" => "Home",
    ),
    array(
        "route" => "/",
        "label" => "About",
    ),
    array(
        "route" => "/",
        "label" => "Exploratrium",
    ),
    array(
        "route" => "/",
        "label" => "Curriculum",
    ),
    array(
        "route" => "/",
        "label" => "Facilities",
    ),
    array(
        "route" => "/",
        "label" => "Summer Camp",
    ),
    array(
        "route" => "/",
        "label" => "Join Our Team",
    ),
);

?>

<nav class="navbar navbar-expand-sm navbar-shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo MEDIA."/logo.webp"?>" width="100px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <?php
                foreach ($ROUTES as $key => $value) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL.$ROUTES[$key]["route"]; ?>"><?php echo $ROUTES[$key]["label"]; ?></a>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</nav>