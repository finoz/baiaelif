<?php
// setup per dev vite
require_once __DIR__ . '/vite_helpers.php';
require_once __DIR__ . '/tpl_helpers.php';
// Caricamento dei testi dal file JSON
$texts = json_decode(file_get_contents('texts.json'), true);
$dev = ($_SERVER['SERVER_NAME'] === 'localhost');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corso di Alta Formazione</title>

    <!-- Open Graph metatag per WhatsApp -->
    <meta property="og:title" content="<?php echo $texts['hero']['title']; ?>">
    <meta property="og:description" content="<?php echo $texts['hero']['subtitle']; ?>">
    <meta property="og:image" content="https://altaformazione.agricola2000.com/img/og-image.jpg">
    <meta property="og:url" content="https://altaformazione.agricola2000.com">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="./img/ico.png">
    <?php if ($dev) { ?>
        <?= vite('main.js') ?>
    <?php } else { ?>
        <link rel="stylesheet" href="dist/main.css">
    <?php }; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Trirong&display=swap" rel="stylesheet">
    <?php if (!$dev) { ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WJKNDRS3');</script>
        <!-- End Google Tag Manager -->
         <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MELHCB9Z14"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-MELHCB9Z14');
        </script>
        <!-- End Google tag (gtag.js) -->
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '489157446897278');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=489157446897278&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
    <?php } ?>
</head>
<body>
    <?php if (!$dev) { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJKNDRS3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php } ?>
    <?php include 'partials/header.php'; ?>
    <?php include 'partials/info.php'; ?>
    <?php include 'partials/hero.php'; ?>
    <?php include 'partials/objective.php'; ?>
    <?php include 'partials/focus.php'; ?>
    <?php include 'partials/advantages.php'; ?>
    <?php include 'partials/program.php'; ?>
    <?php include 'partials/overview.php'; ?>
    <?php include 'partials/teachers.php'; ?>
    <?php include 'partials/pricing.php'; ?>
    <?php include 'partials/partners.php'; ?>
    <?php include 'partials/registration.php'; ?>
    <?php include 'partials/about.php'; ?>
    <?php include 'partials/contact.php'; ?>
    <?php include 'partials/footer.php'; ?>
</body>
<?php if (!$dev) { ?>
    <script src="dist/main.js"></script>
    <?php }; ?>
</html>
