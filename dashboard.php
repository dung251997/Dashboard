<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
       <?php require('global/template-components/head_general.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeDreamers's Table de bord</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<?php require('global/template-components/header.php'); ?>
<div class="app-dashboard shrink-medium">
    <div class="row expanded app-dashboard-top-nav-bar">
        <div class="columns medium-2">
            <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
            <a class="app-dashboard-logo">GlobeDreamers</a>
        </div>
        <div class="columns show-for-medium">
            <div class="app-dashboard-search-bar-container">
                <input class="app-dashboard-search" type="search" placeholder="Search">
                <i class="app-dashboard-search-icon fa fa-search"></i>
            </div>
        </div>
        <div class="columns shrink app-dashboard-top-bar-actions">
            <button href="#" class="button hollow">Logout</button>
            <a href="#" height="30" width="30" alt=""><i class="fa fa-info-circle"></i></a>
        </div>
    </div>

    <div class="app-dashboard-body off-canvas-wrapper">
        <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
            <div class="app-dashboard-sidebar-title-area">
                <div class="app-dashboard-close-sidebar">
                    <!-- <h3 class="app-dashboard-sidebar-block-title">GlobeDreamers</h3> -->
                    <!-- Close button -->
                    <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
                    </button>
                </div>
                <div class="app-dashboard-open-sidebar">
                    <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
                    </button>
                </div>
            </div>
            <div class="app-dashboard-sidebar-inner">
                <ul class="menu vertical">
                    <li><a href="index.html" class="is-active">
                        <i class="large fa fa-chart-line"></i><span class="app-dashboard-sidebar-text">Dashboard</span>
                    </a></li>
                        <li><a href="utilisateur.php">
                        <i class="large fa fa-user"></i><span class="app-dashboard-sidebar-text">Utilisateur</span>
                    </a></li>
                    <li><a href="entreprise.php">
                        <i class="large fa fa-institution"></i><span class="app-dashboard-sidebar-text">Entreprise</span>
                    </a></li>
                    <li><a href="projet-dashboard.php">
                        <i class="large fa fa-table"></i><span class="app-dashboard-sidebar-text">Projets</span>
                    </a></li>
                    <li><a>
                        <i class="large fa fa-magic"></i><span class="app-dashboard-sidebar-text">UI</span>
                    </a></li>
                </ul>
            </div>
        </div>

        <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>

            <div class="row margin-1">
                <div class="columns">
                    <a class="dashboard-nav-card" href="#">
                        <i class="dashboard-nav-card-icon fa fa-users" aria-hidden="true"></i>
                        <p class="dashboard-nav-card-value">2499</p>
                        <h3 class="dashboard-nav-card-title">Visiteurs</h3>
                    </a>
                </div>
                <div class="columns">
                    <a class="dashboard-nav-card" href="#">
                        <i class="dashboard-nav-card-icon fa fa-shopping-bag" aria-hidden="true"></i>
                        <p class="dashboard-nav-card-value">390</p>
                        <h3 class="dashboard-nav-card-title">Ventres</h3>
                    </a>
                </div>
                <div class="columns">
                    <a class="dashboard-nav-card" href="#">
                        <i class="dashboard-nav-card-icon fa fa-cart-plus" aria-hidden="true"></i>
                        <p class="dashboard-nav-card-value">150</p>
                        <h3 class="dashboard-nav-card-title">Attirer</h3>
                    </a>
                </div>
                <div class="columns">
                    <a class="dashboard-nav-card" href="#">
                        <i class="dashboard-nav-card-icon fa fa-users" aria-hidden="true"></i>
                        <p class="dashboard-nav-card-value">99</p>
                        <h3 class="dashboard-nav-card-title">Utilisateur</h3>
                    </a>
                </div>
            </div>

            <div class="row margin-1">
                <div class="columns large-8">
                    <div class="product-feature-section">
                        <div class="product-feature-section-outer">
                            <div class="product-feature-section-inner">
							    <div class="product-feature-section-feature top-right">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    <div>
                                        <p class="feature-title">Like la page</p>
                                        <p class="feature-desc">Great at code and hugs</p>
                                    </div>
                                </div>
                                <div class="product-feature-section-feature top-left">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                    <div>
                                        <p class="feature-title">Prendre une photo avec la Team</p>
                                        <p class="feature-desc">Can withstand extreme cold</p>
                                    </div>
                                </div>
                                <div class="product-feature-section-feature bottom-left">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <div>
                                        <p class="feature-title">Boire du thé</p>
                                        <p class="feature-desc">Makes any hole a home</p>
                                    </div>
                                </div>

                                <div class="product-feature-section-feature bottom-right">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div>
                                        <p class="feature-title">Et Voyager</p>
                                        <p class="feature-desc">Hails from the Himalayans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns large-4">
                    <div class="columns">
                        <div class="dashboard-number-card positive">
                            <h5 class="dashboard-number-value">€200.00</h5>
                            <div>
                                <p class="dashboard-number-area">Category</p>
                                <p class="dashboard-number-delta">
                                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    €3000(10%)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="dashboard-number-card primary">
                            <h5 class="dashboard-number-value">€10,000</h5>
                            <div>
                                <p class="dashboard-number-area">Category</p>
                                <p class="dashboard-number-delta">
                                    €3000(10%)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="dashboard-number-card negative">
                            <h5 class="dashboard-number-value">€10,000</h5>
                            <div>
                                <p class="dashboard-number-area">Category</p>
                                <p class="dashboard-number-delta">
                                    <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                    €3000(10%)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('global/template-components/footer.php');?>
<?php require('global/template-components/scripts_index.php'); ?>
<script src="global/tinymce/vendor/jquery.js"></script>
<script src="global/tinymce/vendor/what-input.js"></script>
<script src="global/tinymce/vendor/foundation.js"></script>
<script src="global/tinymce/app.js"></script>

<script type="text/javascript">
    $(document).foundation();

    $(function() {
        $('.search')
            .bind('click', function(event) {
                $(".search-field").toggleClass("expand-search");
                $(".search-field").focus();
            })
    });
</script>

</body>
</html>
