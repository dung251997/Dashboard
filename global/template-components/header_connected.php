<head>
    <style>
        .menuLeft {
            /* text-align: right; */
        }

        .menuRight {
            /* text-align: left; */
        }
        .menuCenter{
            text-align: center;
        }

        .containerLeft {
            /* left: 79%; */
        }

        .containerRight {
            /* left: 38%; */
        }
    </style>
</head>


<header class="headerMobile">

    <div class="flexBoxHeaderMobile">
        <div class="flexBoxItem logoMenu">
            <div class="barreMenu"></div>
            <div class="barreMenu"></div>
            <div class="barreMenu"></div>
        </div>
        <div class="flexBoxItem logoGD">
            <div class="gd-logo-mobile"></div>
        </div>
        <div class="flexBoxItem logoProfil">
            <div class="containerImgTag">
                <div class="tagCount">1</div>
                <img src="https://placehold.it/40x40/888?text=GD">
            </div>
        </div>
    </div>

</header>

<div class="menuLeftMobile">
    <ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
        <li>
            <a href="#">Item 1</a>
            <ul class="vertical menu">
                <li>
                    <a href="#">Item 1A</a>
                    <ul class="vertical menu">
                        <li><a href="#">Item 1A</a></li>
                        <li><a href="#">Item 1B</a></li>
                        <li><a href="#">Item 1C</a></li>
                        <li><a href="#">Item 1D</a></li>
                        <li><a href="#">Item 1E</a></li>
                    </ul>
                </li>
                <li><a href="#">Item 1B</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Item 2</a>
            <ul class="vertical menu">
                <li><a href="#">Item 2A</a></li>
                <li><a href="#">Item 2B</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Item 3</a>
            <ul class="vertical menu">
                <li><a href="#">Item 3A</a></li>
                <li><a href="#">Item 3B</a></li>
            </ul>
        </li>
    </ul>


</div>


<header class="headerPC headerNoConnect">
    <div class="containerHeader">
        <div class="top-bar" id="example-animated-menu" data-options="sticky_on: large">
            <ul class="dropDown menu centering" data-dropdown-menu>
                <div class="flexBoxHeader verticalAlign">
                    <div class="verticalAlignItem blockMenu">
                        <li class="subMenuLink animated fadeInLeft menuCenter">
                            <a href="#" class="lienMenu">Explorer</a>
                            <div class="subMenu subMenu1">
                                <div class="containerSubMenu containerLeft">
                                    <a href="#">Sous menu</a>
                                    <a href="#">Sous menu</a>
                                    <a href="#">Sous menu</a>
                                    <a href="#">Sous menu</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="gd-logo animated fadeInDown"></div>
                            </a>
                        </li>
                        <li class="subMenuLink animated fadeInRight menuCenter">
                            <a href="#" class="lienMenu ">Soutenir un projet</a>
                            <div class="subMenu subMenu2">
                                <div class="containerSubMenu containerRight">
                                    <a href="#"> Sous menu 2</a>
                                    <a href="#"> Sous menu 2</a>
                                    <a href="#"> Sous menu 2</a>
                                    <a href="#"> Sous menu 2</a>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="top-bar-right">
        <div class="flexName">
            <div class="containerImgTag">
                <div class="tagCount">2</div>
                <img src="https://gd-v2-staging.s3.amazonaws.com/storage/user-default.png">
            </div>
            <ul class="dropDown menu centering" data-dropdown-menu>
                <li class="subMenuLink animated fadeInLeft">
                    <a href="#" class="lienMenu ">John Doe</a>
                    <div class="subMenu subMenu1">
                        <div class="containerSubMenu">
                            <a href="#" class="linkSubProfil"> Messagerie </a>
                            <a href="#" class="linkSubProfil"> Mes voyages </a>
                            <a href="#" class="linkSubProfil"> Mes contributions </a>
                            <a href="#" class="linkSubProfil"> Se deconnect </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>