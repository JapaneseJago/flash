<?php
$gameurl = $_GET['game']
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.U.U.G</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="assets/css/styles.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta name="robots" content="noindex">
<script src="jquery-handler.js"></script>

<!--***NAVBAR STARTS HERE-->
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgb(38,37,37);">
        <div class="container"><a class="navbar-brand" href="index.html" style="font-size:35px;font-family:Aldrich, sans-serif;color:rgb(130,127,127);">C.U.U.G</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="games.html" style="color:#827f7f;">Games</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="updates.html" style="color:#827f7f;">Updates</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="stealth-tips.html" style="color:#827f7f;">Stealth-Tips</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="sound-board.html" style="color:#827f7f;">SoundBoard</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #827f7f;">Extra</a>
                        <div class="dropdown-menu" role="menu" style="background-color: #827f7f;"><a class="dropdown-item" role="presentation" href="chat.html">Chat</a><a class="dropdown-item" role="presentation" href="prox.html">Proxy</a></div>
                    </li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
        </div>
        </div>
    </nav>
<!--***NAVBAR ENDS HERE-->
</head>

<body id="MainBody" style="background-color:#262525;"><div dir="ltr" style="text-align: center;" trbidi="on">
<embed height="650" pluginspage=" http://www.macromedia.com/go/getflashplayer" src="<?php echo $gameurl; ?>" type="application/x-shockwave-flash" width="750">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>