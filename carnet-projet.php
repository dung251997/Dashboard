<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('global/template-components/head_general.php'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
</head>

<body>
    <?php require('global/template-components/header.php'); ?>

    <div class="app-dashboard shrink-medium">

        <div class="app-dashboard-body off-canvas-wrapper">
            <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium"
                data-off-canvas style="padding-top: 100px;">
                <div class="app-dashboard-sidebar-title-area">
                    <div class="app-dashboard-close-sidebar">
                        <!-- <h3 class="app-dashboard-sidebar-block-title">GlobeDreamers</h3> -->
                        <!-- Close button -->
                        <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium"
                            aria-label="Close menu" type="button">
                            <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
                        </button>
                    </div>
                    <div class="app-dashboard-open-sidebar">
                        <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium"
                            aria-label="open menu" type="button">
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
                                <i class="large fa fa-industry"></i><span class="app-dashboard-sidebar-text">Entreprise</span>
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
                        <div class="content">
                            <div class="container-fluid jumbotron jumbotron-billboard">
                                <div class="row text-content">
                                    <div class="colums large-6 backgroundText">
                                        <h1 class="text-title">Aline</h1>
                                        <p class="text-more">J'avais dessiné sur le sable, Son doux visage qui me souriait,Puis
                                            il a
                                            plu sur cette plag, Dans cet orage, elle a disparu</p>
                                        <p id="texttoggle1" class="expland text-more">
                                            Et j'ai crié, crié, Aline, pour qu'elle revienne.Et j'ai pleuré,
                                            pleuré, oh! j'avais trop de peine. Je me suis assis près de son
                                            âme.
                                            Mais la belle dame s'était enfuie. Je l'ai cherchée sans plus y
                                            croire.
                                            Et sans un espoir, pour me guider. Et j'ai crié, crié, Aline, pour
                                            qu'elle revienne. Et j'ai pleuré, pleuré, oh! j'avais trop de
                                            peine. Je
                                            n'ai gardé que ce doux visage. Comme une épave sur le sable
                                            mouillé. Et
                                            j'ai crié, crié, Aline, pour qu'elle revienne. Et j'ai pleuré,
                                            pleuré,
                                            oh! j'avais trop de peine. Et j'ai crié, crié, Aline, pour qu'elle
                                            revienne. Et j'ai pleuré, pleuré, oh! j'avais trop de peine.<br>
                                        </p>
                                        <a id="toggle1" class="btn btn-primary btn-lg" role="button">Read more</a>
                                    </div>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                </div>
                                <div class="img" id="pic1"></div>
                            </div>
                            <div class="container-fluid jumbotron jumbotron-billboard" id="rand-images">
                                <div class="row text-content">
                                    <div class="colums large-6 backgroundText">
                                        <h1 class="text-title">Aline</h1>
                                        <p class="text-more">J'avais dessiné sur le sable, Son doux visage qui me souriait,Puis
                                            il a
                                            plu sur cette plag, Dans cet orage, elle a disparu</p>
                                        <p id="texttoggle2" class="expland text-more">
                                            Et j'ai crié, crié, Aline, pour qu'elle revienne.Et j'ai pleuré,
                                            pleuré, oh! j'avais trop de peine. Je me suis assis près de son
                                            âme.
                                            Mais la belle dame s'était enfuie. Je l'ai cherchée sans plus y
                                            croire.
                                            Et sans un espoir, pour me guider. Et j'ai crié, crié, Aline, pour
                                            qu'elle revienne. Et j'ai pleuré, pleuré, oh! j'avais trop de
                                            peine. Je
                                            n'ai gardé que ce doux visage. Comme une épave sur le sable
                                            mouillé. Et
                                            j'ai crié, crié, Aline, pour qu'elle revienne. Et j'ai pleuré,
                                            pleuré,
                                            oh! j'avais trop de peine. Et j'ai crié, crié, Aline, pour qu'elle
                                            revienne. Et j'ai pleuré, pleuré, oh! j'avais trop de peine.<br>
                                        </p>
                                        <a id="toggle2" class="btn btn-primary btn-lg" role="button">Read more</a>

                                    </div>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                </div>
                                <div class="img" id="pic2"></div>
                            </div>
                            <div class="container-fluid jumbotron jumbotron-billboard" id="rand-images">
                                <div class="row text-content">
                                    <div class="colums large-6 backgroundText">
                                        <h1 class="text-title">Aline</h1>
                                        <p class="text-more">J'avais dessiné sur le sable, Son doux visage qui me souriait,Puis
                                            il a
                                            plu sur cette plag, Dans cet orage, elle a disparu</p>
                                        <p id="texttoggle3" class="expland text-more">
                                            Et j'ai crié, crié, Aline, pour qu'elle revienne.Et j'ai pleuré,
                                            pleuré, oh! j'avais trop de peine. Je me suis assis près de son
                                            âme.
                                            Mais la belle dame s'était enfuie. Je l'ai cherchée sans plus y
                                            croire.
                                            Et sans un espoir, pour me guider. Et j'ai crié, crié, Aline, pour
                                            qu'elle revienne. Et j'ai pleuré, pleuré, oh! j'avais trop de
                                            peine. Je
                                            n'ai gardé que ce doux visage. Comme une épave sur le sable
                                            mouillé. Et
                                            j'ai crié, crié, Aline, pour qu'elle revienne. Et j'ai pleuré,
                                            pleuré,
                                            oh! j'avais trop de peine. Et j'ai crié, crié, Aline, pour qu'elle
                                            revienne. Et j'ai pleuré, pleuré, oh! j'avais trop de peine.<br>
                                        </p>
                                        <a id="toggle3" class="btn btn-primary btn-lg" role="button">Read more</a>

                                    </div>
                       
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                </div>
                                <div class="img" id="pic3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var imgCount = 4;
        //        var dir = 'images/';
        var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
        var images = new Array
        images[1] = "https://tinyurl.com/moalryp",
            images[2] = "https://tinyurl.com/ovh8jdz",
            images[3] = "https://tinyurl.com/lezrd4y",
            images[4] = "https://tinyurl.com/krmp6cz",
            document.getElementById("pic1").style.backgroundImage = "url(" + images[randomCount] + ")";
    </script>
    <script type="text/javascript">
        var imgCount = 4;
        //        var dir = 'images/';
        var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
        var images = new Array
        images[1] = "https://tinyurl.com/moalryp",
            images[2] = "https://tinyurl.com/ovh8jdz",
            images[3] = "https://tinyurl.com/lezrd4y",
            images[4] = "https://tinyurl.com/krmp6cz",
            document.getElementById("pic2").style.backgroundImage = "url(" + images[randomCount] + ")";
    </script>
    <script type="text/javascript">
        var imgCount = 4;
        //        var dir = 'images/';
        var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
        var images = new Array
        images[1] = "https://tinyurl.com/moalryp",
            images[2] = "https://tinyurl.com/ovh8jdz",
            images[3] = "https://tinyurl.com/lezrd4y",
            images[4] = "https://tinyurl.com/krmp6cz",
            document.getElementById("pic3").style.backgroundImage = "url(" + images[randomCount] + ")";
    </script>






    <?php require('global/template-components/footer.php');?>
    <?php require('global/template-components/scripts_index.php'); ?>
    <script src="global/tinymce/vendor/jquery.js"></script>
    <script src="global/tinymce/vendor/what-input.js"></script>
    <script src="global/tinymce/vendor/foundation.js"></script>
    <script src="global/tinymce/app.js"></script>
</body>

</html>