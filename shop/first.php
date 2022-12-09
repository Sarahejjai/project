<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>onlin shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/css55.css">
    <link rel="stylesheet" href="css/prodcard.css">
    
    <script src="js/validation.js"></script>
    <script type="text/javascript" src="js.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
        
    <header>
            <nav >
    <label for="toggle" class="menu">&#9776</label>
    <input type="checkbox" id="toggle">
    <ul>
        <li> <a href="" >home</a></li>
        <li> <a href="register.php" >sign up</a></li>
        <li><a href="contact.php"  >contact us</a></li>
    </ul>

    <form class="search" action="search.php" method="post">
        <input type="text" placeholder="Search">
        <button><img src="icon/search_icon.png" class="search-icon"></button>
    </form>
    
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'serch.php?key=%QUERY',
        limit : 10
    });
});
    </script>
    <label>onlin shop</label>
    
</header>
</nav>

    </div>
    </div>

<center>
    <div class="products">

<center><h1 class="heading">أحدث المنتجات</h1></center>

<div class="box-container">

<?php
include('config.php');
$result = mysqli_query($conn, "SELECT * FROM products");      
while($row = mysqli_fetch_array($result)){
?>
   <form method="post" class="box" action="login.php">
      <img src="admin/<?php echo $row['image']; ?>"  width="200">
      <div class="name"><?php echo $row['name']; ?></div>
      <div class="price"><?php echo $row['price']; ?></div>
      <input type="number" min="1" name="product_quantity" value="1">
      <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
      <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
<?php
   };
?>

</div>

</div>

</center>


<footer>
    <div class="footer-top">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 one">
                <div class="for-box">
                <h3 class="contact"> find us at </h3>
                <ul>
                        <li><img src="icon/fb.png" alt="icon" class="contact_icon"/></li>
                        <li><img src="icon/tw.png" alt="icon" class="contact_icon"/></li>
                        <li><img src="icon/lin.png" alt="icon" class="contact_icon"/></li>
                        <li><img src="icon/instagram.png" alt="icon" class="contact_icon"/></li>
                    </ul>
                    </div>
            </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 two">
                <div class="for-box">
                <h3>contact us</h3>
                
                <ul>
                    <li><img src="icon/1.png" alt="icon" />khartoum , Sudan</li>
                    <li><img src="icon/2.png" alt="icon" />Phone : ( +249110708207)</li>
                    <li><img src="icon/3.png" alt="icon" />Email : sarahejjai12345@gmail.com</li>

                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
        <p> &copy 2022 all rights reserved <a href="index.html"></a>onlin shop</a></p>
    </div>
</footer>
</body>
</html>
