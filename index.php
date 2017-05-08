
<?php include_once "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/grancvel.js"></script>

</head>
<body>

<div class="reg">
<form action="" method="post" id="form">

   <p> <label for="name">ԱՆՈՒՆ<span>*</span></label></p>
   <p> <input type="text" id="name" name="name" ></p>
   <p> <label for="surname">ԱԶԳԱՆՈՒՆ <span>*</span></label></p>
  <p>  <input type="text" id="surname" name="surname" >
   <p> <label for="email">ՁԵՐ ԷԼ.ՀԱՍՑԵՆ <span>*</span></label></p>
   <p> <input type="text" name="email" id="email">
    </p>
    <div id="message"></div>
    <input  type="button" id="send" class="click"  value="Գրանցել">
</form>
</div>
</body>
</html>