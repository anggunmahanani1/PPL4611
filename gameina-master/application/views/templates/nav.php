<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.min.css">
    <link href=" https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <title>GAME SET SCHDULE - Web Game Portal Indonesia</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-colour" id="nav">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('welcome') ?>">GAME SET SCHDULE</a>
            <script src="<?= base_url('assets/'); ?>js/myscript.js"></script>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('welcome') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Toko</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('games') ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Game
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/fps') ?>">First Person Shooter</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/balapan') ?>">Racing</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/misteri') ?>">Mistery</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/edukasi') ?>">Education</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/olahraga') ?>">Sports</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/petualangan') ?>">Adventure</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/arcade') ?>">Arcade</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/aksi') ?>">Action</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/multiplayer') ?>">Multiplayer</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Topup
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color:#d6011d !important;" href="<?= base_url('topup/mobile_legends') ?>">Mobile Legends</a>
                            <a class="dropdown-item" style="color:#d6011d !important;" href="
                            <?= base_url('topup/free_fire') ?>">Free Fire</a>
                            <a class="dropdown-item" style="color:#d6011d !important;" href="
                            <?= base_url('topup/aov') ?>">Arena of valor</a>
                            <a class="dropdown-item" style="color:#d6011d !important;" href="
                            <?= base_url('topup/pubg') ?>">PUBG</a>
                            <a class="dropdown-item" style="color:#d6011d !important;" href="
                            <?= base_url('topup/marvel') ?>">Marvel Super Wars</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="cta text-decoration-none" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                            <span class="my-auto"><i class="font-lol">LOGIN</i></span>
                            <span class="shape-login">
                                <svg width="44px" height="36px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" style="height: 20px!important;">
                                        <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                        <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                        <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- end navbar -->