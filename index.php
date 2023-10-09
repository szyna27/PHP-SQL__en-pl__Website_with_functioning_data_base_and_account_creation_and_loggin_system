<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szyndlar Kacper project</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <div class="pusty"></div>
        <div id="logo">
            Not spying site
        </div>
        <nav>
            <div class="nav_button" id="home" onclick="open('index.php')">
                Home
            </div>
            <div class="nav_button" id="login" onclick="open('loginsite.php')">
                Log in
            </div>
            <div class="nav_button" id="signup" onclick="open('signupsite.php')">
                Sign up
            </div>
        </nav>
        <div class="pusty"></div>
    </header>

</body>
</html>