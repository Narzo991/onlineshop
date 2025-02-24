<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping | عربتي</title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        main{
            width: 40%;
            margin-top: 30px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: #008ef7;
            color: white;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
    <h3>
        منتجاتك 
    </h3>
    </center>
    <?php
    include("config.php");
    $result = mysqli_query($con, "SELECT * FROM addcard");
    while($row = mysqli_fetch_array($result)){
            echo "
                <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product Name</th>
                        <th scope='col'>Product Price</th>
                        <th scope='col'>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]'' class='btn btn-danger'>ازالة</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
    ";}?>

        <center>
            <a href="shop.php">الرجوع ل صفحه المنتجات</a>
        </center>

</body>
</html>