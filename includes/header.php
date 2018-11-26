<?php include 'siteurl.php';?>
    <header>
                <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> vill ändra färgen på navbaren ...gör en egen klass och ta bort bottstrap stylingen-->
               <nav class="navbar sticky-top navbar-expand-lg navbar-light navigation_bar">
               
                <!--ändra färgerna på rubrikerna i navbaren, jobba med egna klasser eller använd deras vilket är bäst-->
                <a class="navbar-brand" href="#"><i class="fas fa-user header_icons"></i></a> 
                <a class="navbar-brand d-none d-lg-block" href="#"><i class="fas fa-pen header_icons"></i></a>
                <img src="<?= $SITE_URL ?>/images/logo_dark.png" alt="Millhouse logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars header_icons"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item nav_item_top">
                            <a class="nav-link text-uppercase" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Links</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>