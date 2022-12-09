

<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shahid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/validate_contact.js"></script>
</head>
<body>
        
    <header>
            <nav >
    <label for="toggle" class="menu">&#9776</label>
    <input type="checkbox" id="toggle">
    <ul>
        <li> <a href="first.php" >home</a></li>
        <li> <a href="register.php" >sign up</a></li>
    </ul>
<form class="search" action="index.php" method="post">
        <input type="text" placeholder="Search">
        <button><img src="icon/search_icon.png" class="search-icon"></button>
    </form>
    <label>onlin shop</label>
    
</header>
</nav>
<div class="contact-us">
        <form method="POST" name="contact" onsubmit="return(validation())">
            <h4>leave your message right here !</h4>
            <label>full name</label>
            <input type="text" placeholder="enter your full name" name="name">
            <label>email address</label>
            <input type="text" placeholder="enter your email address" name="email">
            <label>message</label>
            <textarea placeholder="message" name="message"></textarea>
                <button type="submit" class="send-button">send</button>
                <button type="reset" class="reset-button">reset</button>
        
        </form>
  
  </div>
 
</body>
</html>
