<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nehob Serviced Apartment</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Content-Language" content=""/>
    <meta name="description" content="Nehob Serviced Apartment"/>
    <meta name="keywords" content="serviced apartment, studio apartment, cheap serviced apartment"/>
    <meta property="og:site_name" content="companyname">
    <meta property="og:url" name="og:url" content="" data-app>
    <meta property="og:type" name="og:type" content="website" data-app>
    <meta property="og:description" name="og:description" content="Nehob Serviced Apartment" data-app>
    <meta property="og:title" name="og:title" content="Nehob Serviced Apartment" data-app>
    <meta property="og:image" name="og:image" content="" data-app>
    <link href="favicon.png" rel="shortcut icon"/>
    <meta http-equiv="REFRESH" content="5400"/>
</head>
<div id="page">
    <div class="content">
        <?php include_component('moduleMenu','header') ?>

        <?php echo $sf_content; ?>

    </div>

    <?php include_component('moduleMenu','headerMobile') ?>
    <?php include_component('moduleMenu','contentFooter') ?>
</div>
<script type="text/javascript">
    $(function () {
        $('#menu').mmenu();
    });
</script>
</body>
</html>