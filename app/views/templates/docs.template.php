<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Page Title -->
        <title>PHP Mini Framework - <?= $pageTitle ?></title>

        <!-- SEO Tags -->
        <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1" />
        <meta name="description" content="<?= $pageDesc ?>" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= URL ?>" />
        <meta property="og:site_name" content="PHP Mini Framework" />
        <meta property="og:title" content="PHP Mini Framework - <?= $pageTitle ?>" />
        <meta property="og:description" content="<?= $pageDesc ?>" />
        <meta property="og:image" content="<?= App::path('/resources/images/php-logo.png') ?>" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="670" />

        <!-- Resources -->
        <link id="bs_styles" href="<?= App::path('/resources/css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- <link id="bs_styles" href="<?= App::path('/resources/css/bootstrap/bootstrap.dark.min.css') ?>" rel="stylesheet"> -->
        <link href="<?= App::path('/resources/css/styles.css') ?>" rel="stylesheet">
        <link id="syntax_styles" href="<?= App::path('/resources/css/highlight_js.css') ?>" rel="stylesheet">

        <!-- Scripts -->
        <script src='<?= App::path('/resources/js/jquery.min.js') ?>' type='text/javascript'  ></script>
        <script src='<?= App::path('/resources/js/highlight.js') ?>' type='text/javascript'  ></script>
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/default.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script> -->
    </head>
    <body class="bg-light" id="body">
        <div id="contentContainer" class="">
            <?php
            // Content View
            App::view($view, $data, null);
            ?>
        </div>

        <!-- Script Resources -->
        <script src="<?= App::path('/resources/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
        <script>
            var scrollSpy = new bootstrap.ScrollSpy(document.body, {
                target: '#doc-list'
            })
        </script>

        <script>
            $("#lightDarkToggle").change(function() {
                if (this.checked) {
                    document.getElementById('bs_styles').setAttribute('href', '<?= App::path('/resources/css/bootstrap/bootstrap.dark.min.css') ?>');
                    document.getElementById('syntax_styles').setAttribute('href', '<?= App::path('/resources/css/highlight_js.dark.css') ?>');
                    $('#body').removeClass('bg-light');
                    //$('#body').addClass('bg-dark');
                } else {
                    document.getElementById('bs_styles').setAttribute('href', '<?= App::path('/resources/css/bootstrap/bootstrap.min.css') ?>');
                    document.getElementById('syntax_styles').setAttribute('href', '<?= App::path('/resources/css/highlight_js.css') ?>');
                    //$('#body').removeClass('bg-dark');
                    $('#body').addClass('bg-light');
                }
            });
        </script>

    </body>
</html>