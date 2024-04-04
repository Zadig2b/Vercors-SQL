<!-- <?php
include 'includes/header.php';
// require_once '../../config.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion Admin</title>
  <link rel="stylesheet" href="./../../public/assets/style.css">
</head>
<body>
  <h1>Connexion</h1>
  <?php if (isset($error)) { ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php } ?>
  <form action="<?php echo HOME_URL; ?>connexion" method="post">
    <label for="email">Adresse Email :</label>
    <input type="email" name="email" id="email" required>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Connexion</button>
  </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
    <base id ="baseTag" href="https://vercorsmusicfestival.com/">
    <title>Vercors Music Festival</title>
    <meta name="description" content="Vercors Music Festival | Du 05 juillet au 07 juillet 2024 - Autrans (38)">

    <link rel="shortcut icon" href="/uploads/e12174288b852348f41300fa0c689fc00efb59fb.png">
    <link rel="icon" type="image/png" href="/uploads/e12174288b852348f41300fa0c689fc00efb59fb.png">

    <meta property="og:title" content="Vercors Music Festival">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://vercorsmusicfestival.com/uploads/26939e84c295392986aba951060c439ab285a146.png">
    <meta property="og:url" content="https://vercorsmusicfestival.com/">
    <meta property="og:description" content="Vercors Music Festival | Du 05 juillet au 07 juillet 2024 - Autrans (38)">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Vercors Music Festival">
    <meta name="twitter:description" content="website">
    <meta name="twitter:image" content="https://vercorsmusicfestival.com/uploads/26939e84c295392986aba951060c439ab285a146.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/css/c24ff79.css">



    <style>
        body {
            background-color: #FFFFFF;
            background-image: url('/uploads/1a669234843a563b2b6b977034b409f684fbad0c.jpeg');
            background-position: top center;
            background-repeat: no-repeat;
            min-height: 600px;
            background-size: cover;
        }

        .header .header__main-header-block {
            background-color: #57A1A6;
        }

        .header .header__logo-spedidam:before {
            background-color: #57A1A6;
        }

        .header .header__logo-spedidam .top-right-corner,
        .header .header__logo-spedidam .bottom-left-corner {
            background-color: #57A1A6;
            opacity: .5;
        }

        .menu-fill {
            fill: #FFFFFF !important;
        }

        .menu-color {
            color: #FFFFFF !important;
        }

        .menu-bg {
            background-color: #57A1A6 !important;
        }

        .menu-color svg {
            fill: #FFFFFF !important;
            height: 24px;
            width: 24px;
            transform: translateY(4px);
        }

        .header .header__main-header-block ul li ul {
            background: #FFFFFF !important;
        }

        .header .header__main-header-block ul li ul li {
            color: #57A1A6 !important;
        }

        #mobile_menu {
            background: #57A1A6 !important;
            color: #FFFFFF !important;
        }

        #mobile_menu svg {
            fill: #FFFFFF !important;
            height: 24px;
            width: 24px;
        }

        #home__vid-play svg {
            fill: #FFFFFF !important;
        }

        #home__vid-play {
            background: #57A1A6 !important;
        }

        #mobile_menu_btn {
            fill: #FFFFFF !important;
        }

        .site-color {
            color: #F7C468 !important;
        }

        .site-bg {
            background-color: #F7C468 !important;
        }

        .header .header__social a svg {
            fill: #F7C468 !important;
        }

        .header .header__social a.playlistlink svg {
            fill: #F7C468 !important;
        }

        .footer .footer__social a svg {
            fill: #F7C468 !important;
        }

        .site-active-color {
            color: #000917 !important;
        }

        .site-active-border {
            border-color: #000917 !important;
        }

        .site-active-fill {
            fill: #000917 !important;
        }

        .site-active-bg {
            background-color: #000917 !important;
        }

        .loader {
            border-left: 0.4em solid #000917 !important;
        }

        #mc_embed_signup .button {
            background-color: #000917 !important;
        }

        .programming ul.programming__menu li a.active,
        .programming ul.programming__menu li a:hover {
            color: #000917 !important;
        }

        .programming ul.artists__categories li a.active,
        .programming ul.artists__categories-list li a:hover {
            color: #000917 !important;
        }

        .container__text a,
        .accordeon__bloc-con a,
        .home__spedidam-text a,
        .artist__bloc-biography a {
            color: #000917 !important;
        }

        .btn-default.btn {
            color: #000917 !important;
            border-color: #000917 !important;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #000917;
        }

        .pagination>li>a:after,
        .pagination>li>span:after {
            background-color: #F7C468;
        }

        .pagination>.active>a,
        .pagination>.active>a:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span,
        .pagination>.active>span:hover,
        .pagination>.active>span:focus {
            background-color: #000917;
            border-color: #000917;
        }

        .pagination>li>a:hover,
        .pagination>li>a:focus,
        .pagination>li>span:hover,
        .pagination>li>span:focus {
            color: #000917;
        }


        /*Tarte au citron*/
        body #tarteaucitronRoot #tarteaucitronAlertBig {
            background-color: #fff;
        }

        body #tarteaucitronAlertBig #tarteaucitronPersonalize,
        body #tarteaucitron #tarteaucitronPrivacyUrl {
            background-color: #57A1A6;
            color: #FFFFFF;
        }
    </style>

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-794MX3G10R&amp;l=dataLayer&amp;cx=c"></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
    <script type="text/javascript" src="http://tags.crwdcntrl.net/c/11321/cc.js?ns=_cc11321" id="LOTCC_11321"></script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1559789060819990');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1559789060819990&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <meta name="facebook-domain-verification" content="yc783n2rjxawlldpqnm00vruv68835">

    <style type="text/css">
        .fancybox-margin {
            margin-right: 17px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/AmauriC/tarteaucitron.js@master/css/tarteaucitron.min.css">
    <script id="" async="" src="https://cdn.jsdelivr.net/gh/AmauriC/tarteaucitron.js@master/lang/tarteaucitron.fr.min.js"></script>
    <script id="" async="" src="https://cdn.jsdelivr.net/gh/AmauriC/tarteaucitron.js@master/tarteaucitron.services.min.js"></script>
    <script id="" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-137251925-13"></script>
</head>

<body class="">
    <div id="mobile_menu">
        <ul class="menu">
            <li><a href="/"><svg viewBox="0 0 24 24">
                        <path d="M12,3c0,0-6.186,5.34-9.643,8.232C2.154,11.416,2,11.684,2,12c0,0.553,0.447,1,1,1h2v7c0,0.553,0.447,1,1,1h3  c0.553,0,1-0.448,1-1v-4h4v4c0,0.552,0.447,1,1,1h3c0.553,0,1-0.447,1-1v-7h2c0.553,0,1-0.447,1-1c0-0.316-0.154-0.584-0.383-0.768  C18.184,8.34,12,3,12,3z"></path>
                    </svg></a></li>
            <li><a href="/p/presentation-du-festival/">Festival</a>
                <ul>
                    <li><a href="/p/presentation-du-festival/">Présentation</a></li>
                    <li><a href="/p/editos/">Éditos</a></li>
                    <li><a href="/p/reseau-spedidam/">Réseau Spedidam</a></li>
                    <li><a href="/p/le-vercors/">Le Vercors</a></li>
                </ul>
            </li>
            <li><a href="programmation/jours/">Programmation</a>
                <ul>
                    <li><a href="programmation/jours/">Jour</a></li>
                    <li><a href="programmation/artistes/">Artistes</a></li>
                </ul>
            </li>
            <li><a href="/p/infos-pratiques/">Infos</a>
                <ul>
                    <li><a href="/p/infos-pratiques/">Infos pratiques</a></li>
                    <li><a href="/p/accessibilite-pmr/">Accessibilité et handicap</a></li>
                    <li><a href="/p/faq/">FAQ</a></li>
                    <li><a href="/p/benevoles/">Devenir Bénévole</a></li>
                </ul>
            </li>
            <li><a href="/p/l-accueil-des-publics-en-situation-de-handicap/">Le festival s'engage</a>
                <ul>
                    <li><a href="/p/l-accueil-des-publics-en-situation-de-handicap/">L'accueil des publics en situation de handicap</a></li>
                    <li><a href="/p/developpement-durable/">Développement durable</a></li>
                    <li><a href="/p/valorisation-du-territoire/">Valorisation du territoire</a></li>
                </ul>
            </li>
        </ul>
        <ul class="menu">
            <li><a href="partenaires/">Partenaires</a></li>
            <li>
                <a href="contact/">Contact</a>
            </li>
            <li><a href="actualites/">Actualités</a></li>
            <li>
                <a href="galeries/">Photos/Vidéos</a>
            </li>
            <li>
                <a href="/p/newsletter/">Newsletter</a>
            </li>
            <li>
                <a href="presse/">Presse</a>
            </li>
            <li><a href="archives/">Archives</a></li>
            <li>
            <?php if (isset($_SESSION['connected'])) { ?>
                <a href="<?php echo HOME_URL; ?>" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Réservation</a>
                <a href="<?php echo HOME_URL; ?>deconnexion" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Déconnexion</a>
                <a href="<?php echo HOME_URL; ?>dashboard" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Tableau de Bord</a>
            <?php } else { ?>
                <a href="<?php echo HOME_URL; ?>" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Réservation</a>
                <a href="<?php echo HOME_URL; ?>test" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Test</a>
                <a href="<?php echo HOME_URL; ?>connexion" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Connexion</a>
                <a href="<?php echo HOME_URL; ?>registration" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Inscription</a>
            <?php } ?>
        </li>
    </ul>

    <script>
        function changeBaseHrefAndRedirect(newHref, element) {
            // Change base href
            document.getElementById("baseTag").href = newHref;
            // Redirect
            window.location.href = element.href;
            // Prevent default link behavior
            return false;
        }
    </script>
        </ul>
    </div>
    <div id="overlay"></div>
    <header class="header" id="header">
        <div class="header__pre-header-block">
            <div class="header__social">
                <a target="_blank" href="https://www.facebook.com/vercorsmusicfestival/?fref=ts">
                    <svg viewBox="0 0 56.693 56.693">
                        <path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"></path>
                    </svg>
                </a>
                <a target="_blank" href="https://www.instagram.com/vercorsmusicfestival/">
                    <svg viewBox="0 0 56.693 56.693">
                        <path d="M43.414,4.831H13c-5.283,0-9.581,4.297-9.581,9.58v10.12v20.295c0,5.283,4.298,9.58,9.581,9.58h30.415  c5.283,0,9.58-4.297,9.58-9.58V24.53v-10.12C52.994,9.127,48.697,4.831,43.414,4.831z M46.162,10.544l1.096-0.004v1.091v7.312  l-8.375,0.027l-0.029-8.402L46.162,10.544z M21.131,24.53c1.588-2.197,4.164-3.638,7.076-3.638s5.488,1.441,7.074,3.638  c1.033,1.434,1.652,3.188,1.652,5.088c0,4.811-3.918,8.725-8.727,8.725c-4.812,0-8.726-3.914-8.726-8.725  C19.481,27.718,20.098,25.964,21.131,24.53z M48.164,44.825c0,2.621-2.131,4.75-4.75,4.75H13c-2.62,0-4.751-2.129-4.751-4.75V24.53  h7.4c-0.639,1.572-0.998,3.289-0.998,5.088c0,7.473,6.08,13.557,13.556,13.557c7.475,0,13.555-6.084,13.555-13.557  c0-1.799-0.361-3.516-1-5.088h7.402V44.825z"></path>
                    </svg>
                </a>
                <a target="_blank" href="https://twitter.com/VercorsMusic">
                    <svg viewBox="0 0 56.693 56.693">
                        <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"></path>
                    </svg>
                </a>
                <a target="_blank" href="https://www.youtube.com/channel/UC7lRtMRascfBBlFw3e22CFw">
                    <svg viewBox="0 0 56.693 56.693">
                        <path d="M43.911,28.21H12.782c-4.948,0-8.959,4.015-8.959,8.962v7.201c0,4.947,4.011,8.961,8.959,8.961h31.129   c4.947,0,8.959-4.014,8.959-8.961v-7.201C52.87,32.225,48.858,28.21,43.911,28.21z M19.322,33.816h-2.894v14.38h-2.796v-14.38   H10.74V31.37h8.582V33.816z M27.497,48.196h-2.48v-1.36c-0.461,0.503-0.936,0.887-1.432,1.146c-0.496,0.27-0.975,0.396-1.441,0.396   c-0.576,0-1.004-0.183-1.297-0.555c-0.288-0.371-0.435-0.921-0.435-1.664V35.782h2.48v9.523c0,0.294,0.055,0.505,0.154,0.636   c0.107,0.135,0.277,0.197,0.51,0.197c0.18,0,0.412-0.086,0.691-0.26c0.281-0.176,0.537-0.396,0.77-0.668v-9.429h2.48V48.196z    M36.501,45.633c0,0.877-0.195,1.551-0.584,2.021c-0.387,0.47-0.953,0.701-1.686,0.701c-0.488,0-0.922-0.088-1.299-0.27   c-0.379-0.18-0.736-0.457-1.061-0.841v0.951h-2.51V31.37h2.51v5.419c0.336-0.375,0.691-0.666,1.062-0.861   c0.379-0.199,0.76-0.295,1.146-0.295c0.785,0,1.383,0.262,1.797,0.791c0.416,0.529,0.623,1.304,0.623,2.32V45.633z M45.104,42.288   h-4.746v2.339c0,0.652,0.08,1.106,0.242,1.359c0.166,0.254,0.445,0.378,0.842,0.378c0.412,0,0.697-0.107,0.863-0.321   c0.16-0.216,0.246-0.686,0.246-1.416v-0.565h2.553v0.637c0,1.272-0.309,2.231-0.936,2.878c-0.617,0.641-1.547,0.959-2.783,0.959   c-1.113,0-1.99-0.339-2.627-1.021c-0.635-0.678-0.959-1.619-0.959-2.815v-5.576c0-1.073,0.354-1.956,1.057-2.633   c0.701-0.677,1.604-1.015,2.715-1.015c1.137,0,2.01,0.313,2.619,0.941c0.609,0.629,0.914,1.529,0.914,2.706V42.288z"></path>
                        <path d="M41.466,37.646c-0.396,0-0.678,0.111-0.85,0.343c-0.176,0.218-0.258,0.591-0.258,1.112v1.255h2.193v-1.255   c0-0.521-0.088-0.895-0.262-1.112C42.122,37.758,41.843,37.646,41.466,37.646z"></path>
                        <path d="M32.909,37.604c-0.176,0-0.354,0.039-0.525,0.12c-0.174,0.079-0.344,0.21-0.512,0.38v7.733   c0.199,0.2,0.396,0.354,0.588,0.442c0.191,0.085,0.389,0.133,0.6,0.133c0.305,0,0.527-0.088,0.67-0.266   c0.141-0.176,0.213-0.457,0.213-0.854v-6.411c0-0.422-0.084-0.738-0.26-0.955C33.501,37.712,33.243,37.604,32.909,37.604z"></path>
                        <polygon points="16.858,23.898 20.002,23.898 20.002,16.208 23.663,5.36 20.467,5.36 18.521,12.77 18.323,12.77 16.28,5.36    13.113,5.36 16.858,16.554  "></polygon>
                        <path d="M27.923,24.243c1.27,0,2.266-0.333,2.992-0.999c0.721-0.669,1.082-1.582,1.082-2.752v-7.064   c0-1.041-0.369-1.898-1.104-2.559c-0.74-0.659-1.688-0.991-2.844-0.991c-1.27,0-2.281,0.314-3.033,0.941   c-0.75,0.627-1.127,1.468-1.127,2.531v7.088c0,1.163,0.367,2.083,1.1,2.773C25.722,23.898,26.702,24.243,27.923,24.243z    M26.765,13.246c0-0.297,0.107-0.537,0.316-0.725c0.217-0.184,0.492-0.273,0.834-0.273c0.369,0,0.668,0.089,0.896,0.273   c0.227,0.188,0.34,0.428,0.34,0.725v7.451c0,0.365-0.111,0.655-0.336,0.864c-0.223,0.21-0.523,0.313-0.9,0.313   c-0.369,0-0.654-0.1-0.854-0.31c-0.197-0.205-0.297-0.493-0.297-0.868V13.246z"></path>
                        <path d="M36.214,24.098c0.525,0,1.064-0.15,1.619-0.438c0.561-0.292,1.098-0.719,1.609-1.276v1.515h2.793V10.224h-2.793v10.38   c-0.26,0.297-0.549,0.541-0.859,0.735c-0.316,0.192-0.576,0.288-0.781,0.288c-0.262,0-0.455-0.072-0.568-0.221   c-0.115-0.143-0.18-0.377-0.18-0.698V10.224h-2.789v11.429c0,0.815,0.164,1.424,0.488,1.828   C35.083,23.891,35.565,24.098,36.214,24.098z"></path>
                    </svg>
                </a>
            </div>
            <div class="header__menu-header site-color">
                <ul class="menu">
                    <li><a href="partenaires/">Partenaires</a></li>
                    <li><a href="contact/">Contact</a></li>
                    <li><a href="actualites/">Actualités</a></li>
                    <li><a href="galeries/">Photos/Vidéos</a></li>
                    <li><a href="/p/newsletter/">Newsletter</a></li>
                    <li><a href="presse/">Presse</a></li>
                    <li><a href="archives/">Archives</a></li>
                </ul>
            </div>
        </div>
        <div class="header__main-header-block">
            <svg viewBox="0 0 459 459" id="mobile_menu_btn">
                <g>
                    <g>
                        <path d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z"></path>
                    </g>
                </g>
            </svg>
            <div class="header__logo-spedidam">
                <a href="http://www.reseau-spedidam.com/" target="_blank"><img src="/bundles/app/images/logo-spedidam.png" alt="spedidam"></a>
                <div class="top-right-corner"></div>
                <div class="bottom-left-corner"></div>
            </div>
            <a href="/" class="header__logo">
                <img src="/uploads/90996b12a44845050dc5e5c26f50138482459bcc.png" alt="Vercors Music Festival">
            </a>
            <div class="header__menu-principal menu-color">
                <ul class="menu">
                    <li><a href="/"><svg viewBox="0 0 24 24">
                                <path d="M12,3c0,0-6.186,5.34-9.643,8.232C2.154,11.416,2,11.684,2,12c0,0.553,0.447,1,1,1h2v7c0,0.553,0.447,1,1,1h3  c0.553,0,1-0.448,1-1v-4h4v4c0,0.552,0.447,1,1,1h3c0.553,0,1-0.447,1-1v-7h2c0.553,0,1-0.447,1-1c0-0.316-0.154-0.584-0.383-0.768  C18.184,8.34,12,3,12,3z">
                                </path>
                            </svg></a></li>

                    <li>
            <?php if (isset($_SESSION['connected'])) { ?>
<li>
                    <a href="<?php echo HOME_URL; ?>" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Réservation</a>
    
</li><li>
                    <a href="<?php echo HOME_URL; ?>deconnexion" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Déconnexion</a>
    
</li><li>
                    <a href="<?php echo HOME_URL; ?>dashboard" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Tableau de Bord</a>
    
</li>            <?php } else { ?>
                <a href="<?php echo HOME_URL; ?>" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Réservation</a>
<li>
                    <a href="<?php echo HOME_URL; ?>test" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Test</a>
    
</li><li>
                    <a href="<?php echo HOME_URL; ?>connexion" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Connexion</a>
    
</li><li>
                    <a href="<?php echo HOME_URL; ?>registration" onclick="changeBaseHrefAndRedirect('vercorsmvc', this)">Inscription</a>
    
</li>            <?php } ?>
        </li>

    <script>
        function changeBaseHrefAndRedirect(newHref, element) {
            // Change base href
            document.getElementById("baseTag").href = newHref;
            // Redirect
            window.location.href = element.href;
            // Prevent default link behavior
            return false;
        }
    </script>
                </ul>
            </div>
        </div>
    </header>
    <div class="body ">
        <div class="home">
            <div class="home__container">
                <div class="home__pic-con">
                    <div class="loader" style="opacity: 0; transform: matrix(-1.49723, -0.09098, 0.09098, -1.49723, 0, 200);"></div>

                </div>
                <div class="container">
                    <div class="home__news">

                        <div class="home__news-blocs posts">
                            <div class="posts__bloc"></div>
                            <div class="posts__bloc"></div>
                            <div class="posts__bloc"></div>
                        </div>
                    </div>
                </div>


                <div class="container">
                <h1>Liste des réservations - Page Utilisateur</h1>
  <table>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>E-mail</th>
      <th>Téléphone</th>
      <th>Adresse</th>
      <th>Nombre de résérvations</th>
      <th>Tarif</th>
      <th>Pass</th>
      <th>Prix</th>
      <th>Date(s)</th>
    </tr>
    <?php
                //Débogage : vérifiez si l'ID utilisateur est correctement récupéré
                echo "User ID: " . $_SESSION['userId']; //Afficher l'ID utilisateur
                
    ?>
  </table>
  </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            TweenMax.set($('.home__vid'), {
                scale: 1.1,
                y: 20
            });
            TweenMax.set($('#home__vid-play'), {
                y: -60
            });

            $('#home__vid-play').click(function(ev) {
                TweenMax.to($('.home__pic'), 1, {
                    opacity: 0,
                    scale: 1.1,
                    ease: Expo.easeOut,
                    y: 20
                });
                TweenMax.to($('.loader'), 1, {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    ease: Expo.easeOut
                });
                TweenMax.to($('.home__vid'), 0.8, {
                    autoAlpha: 1,
                    scale: 1,
                    delay: 1.3,
                    y: 0,
                    ease: Expo.easeOut
                });
                TweenMax.to($('.loader'), 1, {
                    opacity: 0,
                    y: 200,
                    scale: 1.5,
                    ease: Expo.easeOut,
                    delay: 1.5
                });
                $(".home__vid iframe")[0].src += "?autoplay=1";

            });
            $('.home__pic-con').mouseenter(function() {
                TweenMax.to($('#home__vid-play'), 1, {
                    opacity: 1,
                    y: 0,
                    ease: Expo.easeOut
                });
            });
            $('.home__pic-con').mouseleave(function() {
                TweenMax.to($('#home__vid-play'), 0.5, {
                    opacity: 0,
                    y: -60,
                    ease: Expo.easeOut
                });
            });
            $('.home__launch-video').click(function(ev) {
                ev.preventDefault();


            });
            $('.home__vid-close').click(function(ev) {
                TweenMax.to($('.home__vid'), 1, {
                    autoAlpha: 0,
                    scale: 1.1,
                    ease: Expo.easeOut,
                    y: 20
                });
                TweenMax.to($('.loader'), 1, {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    ease: Expo.easeOut
                });
                TweenMax.to($('.home__pic'), 0.8, {
                    opacity: 1,
                    scale: 1,
                    delay: 0.5,
                    y: 0,
                    ease: Expo.easeOut
                });
                TweenMax.to($('.loader'), 1, {
                    opacity: 0,
                    y: 200,
                    scale: 1.5,
                    ease: Expo.easeOut,
                    delay: 0.7
                });
            });

            $('.home__pic').css('height', $(window).height() - $('header').height());
            $(window).resize(function() {
                $('.home__pic').css('height', $(window).height() - $('header').height());
            });
            TweenMax.set($('.home__pic'), {
                scale: 1.1,
                y: 20
            });
            TweenMax.to($('.home__pic'), 1, {
                opacity: 1,
                scale: 1,
                ease: Expo.easeOut,
                delay: 0.7,
                y: 0
            });
            TweenMax.to($('.loader'), 1, {
                opacity: 0,
                y: 200,
                scale: 1.5,
                delay: 0.5,
                ease: Expo.easeOut
            });
        </script>
    </div>
    <script src="./../../assets/js/script.js"></script>

</body>
    <footer class="footer">
        <div class="container footer__container site-color">
            <div class="footer__logo">

            </div>
            <div class="footer__social">
                <a target="_blank" href="https://www.facebook.com/vercorsmusicfestival/?fref=ts">

                </a>
                <a target="_blank" href="https://www.instagram.com/vercorsmusicfestival/">

                </a>
                <a target="_blank" href="https://twitter.com/VercorsMusic">
                    <svg viewBox="0 0 56.693 56.693">

                    </svg>
                </a>
                <a target="_blank" href="https://www.youtube.com/channel/UC7lRtMRascfBBlFw3e22CFw">

                </a>
            </div>

        </div>
    </footer>

    <script type="text/javascript" src="/js/4575c21.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/AmauriC/tarteaucitron.js@master/tarteaucitron.js"></script>

    <script>
        tarteaucitron.init({
            "privacyUrl": "/p/mentions-legales/",
            "hashtag": "#tarteaucitron",
            "cookieName": "tartaucitron",
            "orientation": "bottom",
            "showAlertSmall": false,
            "cookieslist": true,
            "adblocker": false,
            "AcceptAllCta": true,
            "highPrivacy": false,
            "handleBrowserDNTRequest": false,
            "removeCredit": false,
            "moreInfoLink": true,
            "useExternalCss": false,
            "readmoreLink": "/p/mentions-legales/"
        });

        var tracking = '\x3Cscript\x20type\x3D\x22text\x2Fjavascript\x22\x20language\x3D\x22javascript\x22\x3E\x0D\x0A_cc11321.add\x28\x22act\x22,\x20\x22Sign\x20up\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22dem\x22,\x20\x22Gender\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22dem\x22,\x20\x22Age\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22geo\x22,\x22Country\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22geo\x22,\x20\x22City\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22act\x22,\x20\x22Sale\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Purchase\x20Amount\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Old\x2FNew\x20Client\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Postal\x20Code\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Number\x20of\x20Products\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Product\x20Name\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22act\x22,\x20\x22Social\x20Network\x20Sharing\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Facebook\x2FTwitter\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22act\x22,\x20\x22Content\x20Viewed\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Article\x2FVideo\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.add\x28\x22genp\x22,\x20\x22Sport\x2FMovies\x2FMusic\x20\x3A\x22\x29\x3B\x0D\x0A_cc11321.bcp\x28\x29\x3B\x3C\x2Fscript\x3E\x0D\x0A\x3Cimg\x20src\x3D\x22https\x3A\x2F\x2Fsecure.adnxs.com\x2Fpx\x3Fid\x3D954963\x26seg\x3D12165192\x26t\x3D2\x22\x20width\x3D\x221\x22\x20height\x3D\x221\x22\x20\x2F\x3E\x0D\x0A\x3Cmeta\x20name\x3D\x22facebook\x2Ddomain\x2Dverification\x22\x20content\x3D\x22yc783n2rjxawlldpqnm00vruv68835\x22\x20\x2F\x3E';

        tarteaucitron.services.crwdcntrlservice = {
            "key": "crwdcntrlservice",
            "type": "analytic",
            "name": "Crwdcntrl",
            "needConsent": true,
            "cookies": [],
            "js": function() {
                "use strict";
                $('body').append(tracking);
            },
            "fallback": function() {
                "use strict";
            }
        };

        // tarteaucitron.user.gtagCrossdomain = ['example.com', 'example2.com'];
        (tarteaucitron.job = tarteaucitron.job || []).push('gtag');
        (tarteaucitron.job = tarteaucitron.job || []).push('crwdcntrlservice');
        tarteaucitron.user.gtagUa = 'UA-137251925-13';
    </script>




</html>