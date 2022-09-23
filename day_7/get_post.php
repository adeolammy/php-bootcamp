<?php
    // echo 'Name: ' .$_GET['name']; 
    // echo '<br>';
    // echo'Email: ' .$_GET['email'];
    // if (isset($_POST['name'])) {
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // }

    if (isset($_GET['name'])) {
        $name = htmlentities($_GET['name']);
        echo $name;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my web page</title>
</head>
<body>
    <form action="get_post.php" method="GET">
        <br><br>
            <div>
                <label for="Name">Name</label> <br>
                <input type="text" name="name">
            </div>
            <div>
                <label for="Email">Email</label> <br>
                <input type="text" name="email">
            </div>
                <input type="submit" value="submit">

    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Adewale">Adewale</a>
        </li>
        <li>
            <a href="get_post.php?name=Adebajo">Adebajo</a>
        </li>
    </ul>

    <?php
        echo "{$name}"


            // substr()
        $out = substr('hello people' 3);
        echo $out;

        strlen('hello world') // shows the length of a word
        strpos('hello world') // tell the postion of letter
        trim($text) // remove the white space 
        str_replace('hello','dear', $word) // replace a word
        strtoupper('hello') //changer to upper case
        gzcompress($text) //to compress a file
    ?>
</body>
</html>

<!-- money doest buy happiness, but it does not drive it from you door necessarilly-->








