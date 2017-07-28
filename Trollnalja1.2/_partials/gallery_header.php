<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/social.css">
    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>

    <noscript>
        <style>
            .es-carousel ul{
                display:block;
            }
        </style>
    </noscript>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    <script type='text/javascript'>
        function isHugarian() {
            var b = <?php echo(json_encode(basename($_SERVER['PHP_SELF']))); ?>;
            return (b.substr(b.length - 6) === "Sk.php") ? 0 : 1;
        }
            function  toHungarian() {
                if (!isHugarian()) {
                    var link2;
                    link2 = <?php echo(json_encode(basename($_SERVER['PHP_SELF'], 'Sk.php'))); ?>;
                    var a2 = document.getElementById("toHungarian"); //or grab it by tagname etc
                    a2.href = link2 + ".php";
                }
            }
            function toSLovak() {
            if (isHugarian())  {
                var link;
                link = <?php echo(json_encode(basename($_SERVER['PHP_SELF'], '.php'))); ?>;
                var a = document.getElementById("toSlovak"); //or grab it by tagname etc
                a.href = link + "Sk.php";
            }
        }
    </script>

    <title>Trollnalja |
        <?php
        echo $title;
        ?>
    </title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"><!--Navbar-->
    <div class="container"><!--Container-->
        <div class="navbar-header"><!--Navbar header-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"><!--Collapsing button-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $name = basename($_SERVER['PHP_SELF']);
            $newname = substr($name, -6);
            if ($newname == 'Sk.php'){

                echo '    <a href="indexSk.php" class="navbar-brand">Trollnaľa a okolie</a>';
            }
            else {
                echo '    <a href="index.php" class="navbar-brand">Trollnalja és vidéke</a>';
            }
            ?>

        </div><!--End navbar header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">

            <a id="toSlovak" onclick="toSLovak()"    > <img class="navbar-right" id="zaszloSk" src="../../_front-end/images/zaszlo_szlovakia.gif"  style="height: 50px"></a>
            <a id="toHungarian" onclick="toHungarian()"  href=  > <img class="navbar-right" id="zaszloHu" src="../../_front-end/images/magyar%20zaszlo.png" style="height: 50px; padding-right: 25px"></a>

            <ul  class="nav navbar-nav">
                <?php
                $name = basename($_SERVER['PHP_SELF']);
                $newname = substr($name, -6);
                if ($newname == 'Sk.php'){

                    echo '<li><a href= "../../indexSk.php">Hlavná stránka</a></li>
                          <li><a href="../../applications/ResponsiveImageGallery/gallerySk.php">Galéria</a></li>
                          <li><a href="../../gamesSk.php">Hry</a></li>
                          <li><a href= "../../aboutSk.php">O nás</a></li>';
                }
                else {
                    echo '<li><a href= "../../index.php">Főoldal</a></li>
                          <li><a href="../../applications/ResponsiveImageGallery/gallery.php">Galéria</a></li>
                          <li><a href="../../games.php">Játékok</a></li>
                          <li><a href= "../../about.php">Rólunk</a></li>';
                }
                ?>

            </ul>
        </div>
    </div><!--End container-->
</nav><!--End navbar-->

<div class="jumbotron"><!--Jumbotron-->
    <div class="container text-center"><!--Container-->
        <?php
        if ($newname == 'Sk.php'){

        echo ' <h1>Trollnaľa a okolie</h1>
        <p>Uvoľni sa a buď gemerský</p>
        <div class="btn-group">
            <a href="" class="btn btn-lg btn-danger">Obchod</a>
            <a href="" class="btn btn-lg btn-default">Aplikácia</a>
            <a href="" class="btn btn-lg btn-success">Zdielaj</a>
        </div>';
        }
        else {
        echo ' <h1>Trollnalja és vidéke</h1>
        <p>Engedd el magad, és légy gömöri!</p>
        <div class="btn-group">
            <a href="" class="btn btn-lg btn-danger">Bolt</a>
            <a href="" class="btn btn-lg btn-default">Aplikáció</a>
            <a href="" class="btn btn-lg btn-success">Oszd meg!</a>
        </div>';
        }
        ?>
    </div><!--End container-->
</div><!--End jumbotron-->
<?php
if ($newname == 'Sk.php'){

    echo ' 
<div class="container">

    <div class="content">
        <h1>Trollnaľa galéria<span>Všetko, čo je Gemer</span></h1>';
}
else {
    echo ' 
<div class="container">

    <div class="content">
        <h1>Trollnalja galéria<span>Minden, ami Gömör!</span></h1>';
}
?>


