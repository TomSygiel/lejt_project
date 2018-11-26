<?php include 'siteurl.php';?>
<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light navigation_bar">
        <a class="navbar-brand" href="#"><i class="fas fa-user header_icons"></i></a>
        <a class="navbar-brand" href="#"><i class="fas fa-pen header_icons"></i></a>
        <a class="navbar-brand" href="index.php"><img class="navbar_logo" src="<?= $SITE_URL ?>/images/logo_dark.png" alt="Millhouse logo"></a>
               
        <button class="navbar-toggler header_button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars header_icons"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item nav_item_top">
                    <a class="nav-link text-uppercase header_links" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase header_links" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase header_links" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>