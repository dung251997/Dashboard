    <meta charset="utf-8"><meta http-equiv="x-ua-compatible"content="ie=edge"><meta name="viewport"content="width=device-width, initial-scale=1.0"><link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"crossorigin="anonymous"><?php $whitelist=array('127.0.0.1',
    '::1'
    );

    if( !in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        $urlLink="http://html.globedreamers.com/montage-css-gd-v2/";
    }

    else {
        $urlLink="http://127.0.0.1/html-v2/";
    }

    $URL_S3="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/";

    ?><link rel="stylesheet"href="<?php echo $URL_S3; ?>css/foundation/foundation.min.css"/><link rel="stylesheet"href="<?php echo $URL_S3; ?>css/foundation/foundation-datepicker.min.css"/><link rel="stylesheet"href="global.css?<?php echo time(); ?>"/><link rel="stylesheet"href="animate.css"/><link rel="stylesheet"href="reward.css"/><link href="https://fonts.googleapis.com/css?family=Comfortaa|Open+Sans"rel="stylesheet"><style type="text/css">@font-face {
        font-family: 'OpenSans';
        src: url('<?php echo $URL_S3; ?>fonts/opensans-regular-webfont.eot?');
        src: local('☺'),
            url('<?php echo $URL_S3; ?>fonts/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
            url('<?php echo $URL_S3; ?>fonts/opensans-regular-webfont.woff2') format('woff2'),
            url('<?php echo $URL_S3; ?>fonts/opensans-regular-webfont.woff') format('woff'),
            url('<?php echo $URL_S3; ?>fonts/opensans-regular-webfont.ttf')format('truetype'),
            url('<?php echo $URL_S3; ?>fonts/opensans-regular-webfont.svg#opensans-regular-webfont') format('svg');
        font-weight: 400;
        font-style: normal;
    }



    @font-face {
        font-family: 'OpenSans';
        src: url('opensans-regular-webfont.woff2') format('woff2'),
            url('opensans-regular-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;

    }

    @font-face {
        font-family: 'Open Sans';
        src: url('opensans-regular-webfont.woff2') format('woff2'),
            url('opensans-regular-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;

    }


    .gd-logo,
    .gd-logo-mobile,
    .gd-logo-white,
    .gd-financement-participatif,
    .gd-mongopay,
    .gd-footer-facebook,
    .gd-footer-insta,
    .gd-footer-twitter,
    .gd-footer-youtube,
    .gd-search,
    .gd-en,
    .gd-homepage-1,
    .gd-homepage-2,
    .gd-homepage-3,
    .gd-homepage-4,
    .gd-circle-orange,
    .gd-circle-orange-splash,
    .gd-artistique,
    .gd-sportif,
    .gd-professionnel,
    .gd-aventurier,
    .gd-solidaire,
    .gd-eco,
    .gd-days,
    .gd-group,
    .gd-tirelire,
    .gd-circle,
    .gd-square,
    .gd-triangle,
    .gd-help,
    .gd-arrow-top,
    .gd-video-sound-off,
    .gd-video-sound,
    .gd-video-play,
    .gd-slider-arrow-right,
    .gd-slider-arrow-left,
    .gd-slider-arrow-bottom,
    .gd-footer-arrow-bottom,
    .gd-step-round-active,
    .gd-single-user,
    .gd-multiple-users,
    .gd-calendar,
    .gd-user,
    .gd-star,
    .gd-facebook,
    .gd-photo,
    .gd-book,
    .gd-smile,
    .gd-angel,
    .gd-challenge,
    .gd-profil-fb,
    .gd-profil-insta,
    .gd-profil-youtube,
    .gd-man,
    .gd-woman,
    .gd-arrow-upload,
    .gd-signup-traveller,
    .gd-signup-association,
    .gd-signup-compagny,
    .gd-social-instagram,
    .gd-social-facebook,
    .gd-social-twitter,
    .gd-social-youtube,
    .gd-social-pinterest,
    .gd-social-linked-in,
    .gd-in-travel,
    .gd-info,
    .gd-live,
    .gd-share {
        background-image: url(<?php echo $URL_S3; ?>images/sprite.png)
    }

    .gd-logo {
        background-repeat: no-repeat;
        background-position: -35px -214px;
        width: 164px;
        height: 67px;
    }

    .gd-logo-mobile {
        background-repeat: no-repeat;
        background-position: -14px -452px;
        width: 124px;
        height: 49px;
    }

    .gd-logo-white {
        background-repeat: no-repeat;
        background-position: -224px -214px;
        width: 164px;
        height: 67px;
    }

    .gd-in-travel {
        background-repeat: no-repeat;
        background-position: -411px -248px;
        width: 25px;
        height: 23px;
    }

    .gd-financement-participatif {
        background-repeat: no-repeat;
        background-position: -114px -130px;
        width: 116px;
        height: 59px;
    }

    .gd-mongopay {
        background-repeat: no-repeat;
        background-position: -244px -127px;
        width: 84px;
        height: 61px;
    }

    .gd-footer-facebook {
        background-repeat: no-repeat;
        background-position: -1px -1021px;
        width: 97px;
        height: 80px;
    }


    .gd-footer-twitter {
        background-repeat: no-repeat;
        background-position: -123px -1020px;
        width: 99px;
        height: 82px;
    }

    .gd-footer-youtube {
        background-repeat: no-repeat;
        background-position: -231px -1021px;
        width: 99px;
        height: 82px;
    }


    .gd-footer-insta {
        background-repeat: no-repeat;
        background-position: -357px -1025px;
        width: 87px;
        height: 81px;
    }

    .gd-search {
        background-repeat: no-repeat;
        background-position: -332px -466px;
        width: 28px;
        height: 29px;
    }

    .gd-en {
        background-repeat: no-repeat;
        background-position: -209px -338px;
        width: 34px;
        height: 34px;
    }


    .gd-homepage-1 {
        background-repeat: no-repeat;
        background-position: -69px -808px;
        width: 66px;
        height: 75px;
    }


    .gd-homepage-2 {
        background-repeat: no-repeat;
        background-position: -159px -806px;
        width: 70px;
        height: 75px;
    }

    .gd-homepage-3 {
        background-repeat: no-repeat;
        background-position: -169px -723px;
        width: 63px;
        height: 73px;
    }


    .gd-homepage-4 {
        background-repeat: no-repeat;
        background-position: -63px -717px;
        width: 93px;
        height: 75px;
    }

    .gd-circle-orange {
        background-repeat: no-repeat;
        background-position: -285px -820px;
        width: 59px;
        height: 58px;
    }

    .gd-circle-orange-splash {
        background-repeat: no-repeat;
        background-position: -276px -721px;
        width: 75px;
        height: 73px;
    }

    .gd-artistique {
        background-repeat: no-repeat;
        background-position: -4px -111px;
        width: 88px;
        height: 88px;
    }

    .gd-sportif {
        background-repeat: no-repeat;
        background-position: 0px -0px;
        width: 91px;
        height: 92px;
    }

    .gd-professionnel {
        background-repeat: no-repeat;
        background-position: -215px -0px;
        width: 92px;
        height: 93px;
    }

    .gd-aventurier {
        background-repeat: no-repeat;
        background-position: -416px -12px;
        width: 92px;
        height: 88px;
    }

    .gd-solidaire {
        background-repeat: no-repeat;
        background-position: -104px -9px;
        width: 92px;
        height: 84px;
    }

    .gd-eco {
        background-repeat: no-repeat;
        background-position: -318px -11px;
        width: 92px;
        height: 82px;
    }

    .gd-days {
        background-repeat: no-repeat;
        background-position: -275px -592px;
        width: 33px;
        height: 33px;
    }

    .gd-group {
        background-repeat: no-repeat;
        background-position: -218px -596px;
        width: 37px;
        height: 27px;
    }

    .gd-tirelire {
        background-repeat: no-repeat;
        background-position: -163px -588px;
        width: 35px;
        height: 35px;
    }

    .gd-circle {
        background-repeat: no-repeat;
        background-position: -302px -344px;
        width: 27px;
        height: 27px;
    }

    .gd-square {
        background-repeat: no-repeat;
        background-position: -346px -345px;
        width: 27px;
        height: 27px;
    }

    .gd-triangle {
        background-repeat: no-repeat;
        background-position: -259px -343px;
        width: 34px;
        height: 29px;
    }


    .gd-help {
        background-repeat: no-repeat;
        background-position: -355px -119px;
        width: 38px;
        height: 38px;
    }

    .gd-arrow-top {
        background-repeat: no-repeat;
        background-position: -27px -321px;
        width: 64px;
        height: 64px;
    }

    .gd-video-sound-off {
        background-repeat: no-repeat;
        background-position: -399px -338px;
        width: 40px;
        height: 36px;
    }

    .gd-video-sound {
        background-repeat: no-repeat;
        background-position: -399px -338px;
        width: 26px;
        height: 36px;
    }

    .gd-video-play {
        background-repeat: no-repeat;
        background-position: -176px -419px;
        width: 84px;
        height: 85px;
    }

    .gd-slider-arrow-right {
        background-repeat: no-repeat;
        background-position: -71px -397px;
        width: 19px;
        height: 34px;
    }

    .gd-slider-arrow-left {
        background-repeat: no-repeat;
        background-position: -31px -396px;
        width: 20px;
        height: 36px;
    }

    .gd-slider-arrow-bottom {
        background-repeat: no-repeat;
        background-position: -333px -421px;
        width: 40px;
        height: 17px;
    }

    .gd-footer-arrow-bottom {
        background-repeat: no-repeat;
        background-position: -333px -421px;
        transform: scale(0.5);
        width: 40px;
        height: 17px;
    }

    .gd-step-round-active {
        background-repeat: no-repeat;
        background-position: -18px -903px;
        width: 134px;
        height: 110px;
    }

    .gd-single-user {
        background-repeat: no-repeat;
        background-position: -249px -942px;
        width: 47px;
        height: 60px;
    }

    .gd-multiple-users {
        background-repeat: no-repeat;
        background-position: -163px -938px;
        width: 70px;
        height: 61px;
    }

    .gd-calendar {
        background-repeat: no-repeat;
        background-position: -273px -389px;
        width: 29px;
        height: 33px;

    }

    .gd-user {
        background-repeat: no-repeat;
        background-position: -375px -467px;
        width: 21px;
        height: 26px;
    }

    .gd-star {
        background-repeat: no-repeat;
        background-position: -401px -472px;
        width: 26px;
        height: 22px;
    }

    .gd-photo {
        background-repeat: no-repeat;
        background-position: -431px -472px;
        width: 28px;
        height: 25px;
    }

    .gd-book {
        background-repeat: no-repeat;
        background-position: -463px -470px;
        width: 20px;
        height: 26px;
    }

    .gd-smile {
        background-repeat: no-repeat;
        background-position: -368px -500px;
        width: 26px;
        height: 26px;
    }

    .gd-angel {
        background-repeat: no-repeat;
        background-position: -400px -502px;
        width: 28px;
        height: 33px;
    }

    .gd-challenge {
        background-repeat: no-repeat;
        background-position: -434px -506px;
        width: 27px;
        height: 27px;
    }

    .gd-facebook {
        background-repeat: no-repeat;
        background-position: -388px -1136px;
        width: 16px;
        height: 26px;
    }



    .gd-profil-fb {

        background-repeat: no-repeat;
        background-position: -464px -502px;
        width: 31px;
        height: 32px;
    }

    .gd-profil-insta {

        background-repeat: no-repeat;
        background-position: -365px -539px;
        width: 32px;
        height: 32px;
    }


    .gd-profil-youtube {

        background-repeat: no-repeat;
        background-position: -400px -540px;
        width: 31px;
        height: 32px;
    }

    .gd-woman {
        background-repeat: no-repeat;
        background-position: -432px -618px;
        width: 65px;
        height: 65px;
    }

    .gd-man {
        background-repeat: no-repeat;
        background-position: -429px -849px;
        width: 73px;
        height: 72px;
    }

    .gd-arrow-upload {

        background-repeat: no-repeat;
        background-position: -439px -544px;
        width: 61px;
        height: 62px;
    }


    .gd-signup-traveller {
        background-repeat: no-repeat;
        background-position: -105px -1190px;
        width: 80px;
        height: 80px;
    }

    .gd-signup-association {
        background-repeat: no-repeat;
        background-position: -175px -1112px;
        width: 83px;
        height: 67px;
    }

    .gd-signup-compagny {
        background-repeat: no-repeat;
        background-position: -23px -1112px;
        width: 69px;
        height: 69px;
    }

    .gd-social-instagram {
        background-repeat: no-repeat;
        background-position: -442px -1227px;
        width: 43px;
        height: 43px;
    }

    .gd-social-facebook {

        background-repeat: no-repeat;
        background-position: -442px -1116px;
        width: 43px;
        height: 43px;
    }


    .gd-social-twitter {
        background-repeat: no-repeat;
        background-position: -442px -1282px;
        width: 43px;
        height: 43px;
    }

    .gd-social-youtube {
        background-repeat: no-repeat;
        background-position: -443px -1172px;
        width: 43px;
        height: 43px;
    }

    .gd-social-linked-in {
        background-repeat: no-repeat;
        background-position: -442px -1335px;
        width: 43px;
        height: 43px;
    }

    .gd-social-pinterest {
        background-repeat: no-repeat;
        background-position: -443px -1385px;
        width: 44px;
        height: 43px;
    }


    .gd-live {
        background-repeat: no-repeat;
        background-position: -269px -1204px;
        width: 41px;
        height: 45px;
    }

    .gd-info {
        background-repeat: no-repeat;
        background-position: -203px -1203px;
        width: 45px;
        height: 45px;
    }

    .gd-share {
        background-repeat: no-repeat;
        background-position: -327px -1209px;
        width: 34px;
        height: 34px;

    }

    /* LES ICONES EN :AFTER */






    .menu a.withArrow:after,
    .bio .loadMore:after,
    .projects .titleFieldset:after,
    .projects .loadMore:after,
    .projects .iconBlock .radioHiddenChoice+label div.description:before,
    nav.searchExplorer .containerInput:before {
        background-image: url(<?php echo $URL_S3; ?>images/sprite.png)
    }

    .projects .iconBlock:nth-child(1) .radioHiddenChoice+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -302px -344px;
        width: 27px;
        height: 27px;
    }

    .projects .iconBlock:nth-child(2) .radioHiddenChoice+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -346px -345px;
        width: 27px;
        height: 27px;
    }


    .projects .iconBlock:nth-child(3) .radioHiddenChoice+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -259px -343px;
        width: 34px;
        height: 29px;
    }



    .projects .iconBlock:nth-child(1) .radioHiddenChoice:checked+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -302px -304px;
        width: 27px;
        height: 27px;
    }

    .projects .iconBlock:nth-child(2) .radioHiddenChoice:checked+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -346px -305px;
        width: 27px;
        height: 27px;
    }


    .projects .iconBlock:nth-child(3) .radioHiddenChoice:checked+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -259px -303px;
        width: 34px;
        height: 29px;
    }



    .projects .iconBlock:nth-child(1) .radioHiddenChoice:hover+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -302px -304px;
        width: 27px;
        height: 27px;
    }

    .projects .iconBlock:nth-child(2) .radioHiddenChoice:hover+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -346px -305px;
        width: 27px;
        height: 27px;
    }


    .projects .iconBlock:nth-child(3) .radioHiddenChoice:hover+label div.description:before {
        position: absolute;
        top: 5px;
        left: -35px;
        content: '';
        transform: scale(0.7);
        background-repeat: no-repeat;
        background-position: -259px -303px;
        width: 34px;
        height: 29px;
    }



    nav.searchExplorer .containerInput:before {
        position: absolute;
        top: 45px;
        left: -40px;
        content: '';
        background-repeat: no-repeat;
        background-position: -443px -419px;
        width: 34px;
        height: 42px;
    }


    .projects .titleFieldset:after {
        position: absolute;
        top: 6px;
        right: 0;
        content: '';
        transform: scale(0.7);
        width: 20px;
        height: 11px;
        background-repeat: no-repeat;
        background-position: -430px -195px;
    }

    .bio .loadMore:after {
        position: absolute;
        top: 6px;
        margin-left: 6px;
        content: '';
        transform: scale(0.7);
        width: 20px;
        height: 11px;
        background-repeat: no-repeat;
        background-position: -430px -195px;
    }

    .projects .loadMore:after {
        position: absolute;
        top: 8px;
        margin-left: 10px;
        content: '';
        width: 20px;
        height: 11px;
        background-repeat: no-repeat;
        background-position: -430px -195px;
    }



    /* @media screen and (max-width: 1939px) {.special_bg { background-image: url(<?php echo $URL_S3; ?>images/bg-right.png),url(<?php echo $URL_S3; ?>images/bg-left.png),linear-gradient(to bottom, #ffffff 0%,#f4f3f3 15%,#f4f3f3 100%); }}

        @media screen and (min-width: 1940px) {.special_bg {background-image: url(<?php echo $URL_S3; ?>images/bg-right.png),url(<?php echo $URL_S3; ?>images/bg-left.png),linear-gradient(to bottom, #ffffff 0%,#f4f3f3 15%,#f4f3f3 100%);   }}

        @media screen and (max-width: 1939px) {.special_bg_white {background-image: url(<?php echo $URL_S3; ?>images/bg-right.png),url(<?php echo $URL_S3; ?>images/bg-left.png),linear-gradient(to bottom, #ffffff 0%,#fff 15%,#fff 100%);   }}

        @media screen and (min-width: 1940px) {.special_bg_white {background-image: url(<?php echo $URL_S3; ?>images/bg-right.png),url(<?php echo $URL_S3; ?>images/bg-left.png),linear-gradient(to bottom, #ffffff 0%,#fff 15%,#fff 100%);  }}
 */

    </style>