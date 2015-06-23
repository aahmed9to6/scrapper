<?php 
/**
 *  @author     Abdullah A
 *  @email      abdullah.a@allshoreresources.com
 *  @project    Web Scrapper
 *  @version    1.0
 *  @copyright  2015
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Scrapper">
    <meta name="author" content="Abdullah A">
    <title>Scrapper - Sample App</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/scrapper.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <form class="form-scrapper" id="scrapperForm" method="post">
        <h2 class="heading">Add Links (one link per line)</h2>
        <label for="inputLinks" class="sr-only">Links</label>
        <textarea id="inputLinks" class="form-control" placeholder="Web Links" cols="20" rows="5" required autofocus></textarea>
        <br />
        <input type="hidden" value="" name="arrayRecords" id="arrayRecords" />
        <button id="scrapperFormButton" class="btn btn-default btn-primary btn-block" type="button">Process</button>
    </form>
    <div id="captcha-container" style="display: none;">
        <iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="" tabindex="0" title="recaptcha widget" role="presentation" id="captcha" src="" ></iframe>
    </div>
</div> <!-- /container -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/scrapper.js"></script>
</body>
</html>