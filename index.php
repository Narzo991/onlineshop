<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping |اضافه منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>بيع اونلاين </h2>
                <h3>💘😂 منورنا يعم</h3>
                <img src="images.png" alt="logo" width="300px">
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" id="file" name="image" style='display:none;'> 
                <label for="file">رفع صوره للمنتج</label>
                <button name="upload">✔ ارفع المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
            <p>Developed By NVRZO</p>
    </center>
</body>
</html>