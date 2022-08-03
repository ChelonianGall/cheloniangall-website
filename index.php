<?php include 'elements/init.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>ChelonianGall</title>
       
    <meta charset = "utf-8"/>
	
	<link
        type = "image/png"
        rel = "icon"
        href = "images/icon.png"
    />
	<link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/global.css"
    />
	<link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/account_bar.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/webchat.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/home.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "styles/footer.css"
    />
    <link
        type = "text/css"
        rel = "stylesheet"
        href = "converse/converse.min.css"
        media = "all"
    />

    <script src = "converse/converse.min.js"></script>
</head>
<body>
    <?php include 'elements/account_bar.php'; ?>
    <?php include 'elements/home.php'; ?>
    <?php include 'elements/footer.php'; ?>
</body>
<?php include 'elements/chat.php' ?>
</html>