<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sass_inte</title>
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/static/external/bower_components/bootstrap/dist/css/bootstrap.css"';  ?>>
    <link rel="stylesheet" href="./static/external/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/style.css"';  ?>>

<?php wp_head(); ?>
</head>
<body>
<div class="container-fluid">
    <div class="row monHeader">
        <div class="col-md-12 text-center">
            <ul class="list-inline text-center">
                <li><a href="<?php echo get_page_link(22) ?>">Catalog</a></li>
                <li>About Us</li>
                <li>Store</li>
                <li><a href="<?php echo get_page_link(24) ?>">Blog</a></li>
                <li><a href="panier.html">Cart</a></li>
                <li class="pull-right"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></li>
                <li class="pull-right"><a href="contact.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            </ul>
            <div class="marginHeader">
                <h1 class="text-center">Sundays</h1>
                <h2 class="text-center">We craft ocean <br> friendly apparel</h2>
                <button type="button" name="button">Browse our products</button>
            </div>
            <div class=" glyphicon glyphicon-menu-down pull-right"></div>
        </div>
    </div>
</div>
