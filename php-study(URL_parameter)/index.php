<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> WEB </h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></l1>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=Javascript">Javascript</a></li>
        
    </ol>
    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae temporibus, numquam accusantium optio ad dolor et atque soluta placeat odit ratione fuga alias a animi, inventore porro. Nostrum, modi.
    
</body>
</html>