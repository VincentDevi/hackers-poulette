<?php
    $message="";
    if ( isset( $_GET["error"])){
        $error = $_GET["error"];
        if ( $error === "name"){
            $message = "<p>Invalid name</p>";
        }
        elseif ( $error==="firstname"){
            $message = "<p>Invalid firstname</p>";
        }
        elseif ( $error==="email"){
            $message = "<p>Invalid email</p>";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Hacker-Poulette</title>
</head>
<body>
    <?php echo $message?>
    <form action="create.php" method="post">
        <label for="name">Your name: </label>
        <input type="text" name="name" value="" placeholder="Name">

        <label for="firstname">Your First name: </label>
        <input type="text" name="firstname" value="" placeholder="Firstname">

        <label for="email">Your Email address: </label>
        <input type="email" name="email" value="" placeholder="Email">

        <label for="file">Import file: </label>
        <input type="file" name="file" value="" placeholder="Import your file">

        <label for="description">Description: </label>
        <input type="text" name="description" value="" placeholder="Description">

        <button type="submit" name="submit">Submit your form</button>
    </form>

</body>
</html>