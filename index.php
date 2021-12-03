<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = file_get_contents('http://plavon.sidoarjokab.go.id/ajax/get?type=get&kode=a0dHbUNuN1NWeG4yallzOHJiWFc2dz09fFFzdGhuaWw5UzhKdA==&key=3515141601930005');
    $url = explode("<b>Notice</b>", $url);
    $url = unset($url[1]);
    var_dump($url);



    ?>
</body>

</html>