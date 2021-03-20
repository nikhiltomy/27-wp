<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organism</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <!----------Header------------------>
    <header class="ts-org-header">
        <div class="ts-content-container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand " href="#"><img class="ts-atom-logo" src="<?php echo get_template_directory_uri(); ?>/images/adaptable-blk-fade.svg"></a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center justify-content-lg-end ts-molc-header
            " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active ">
                            <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="#">How it works </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Use Cases
                            </a>
                            <ul class="dropdown-menu nav-drop-content ps-0" aria-labelledby="navbarDropdown">
                                <li><a class="nav-link ts-atom-header-link" href="/agencies.html">For Agencies</a></li>
                                <li><a class="nav-link ts-atom-header-link" href="#">For Inbound teams</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="#">Plans</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="/about.html">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link ts-atom-header-link ts-atom-header-link--me border-start" href="#">Signin</a>
                        </li>
                        <li class="ts-molc-header-button">
                            <button class=" btn-dark my-2 my-sm-0 ts-atom-button " data-bs-toggle="modal" onclick="myFunction()" data-bs-target="#staticBackdrop" type="submit">Book demo </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


    </header>
    <!----------Header------------------>