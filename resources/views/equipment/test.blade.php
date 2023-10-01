<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $str = '<div>test<br>test</div><div>te<br/>st<a href="#">test</a></div>';

        echo strip_tags($str,'<a><img><br>');
    ?>
</body>
</html>