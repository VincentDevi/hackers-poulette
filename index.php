
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./assets/style/style.css" rel="stylesheet" type="text/css">
    <script defer src="assets/js/validation.js"> </script>
    <title>Hacker-Poulette</title>

</head>
<body>
<?php
$message="";
$error="";
if ( isset( $_GET["error"])){
    $error = $_GET["error"];
}
?>
<div class="aside">
</div>
<form class="form" action="create.php" method="post">
    <?php
    if ( ( $error==="emptyinput")){
        $message = "<p>Empty input</p>";
        echo $message;

    }
    ?>
        <label class="form__label" for="name">Your name: </label>
        <input id="name" class="form__input" type="text" name="name" value="" placeholder="Name">
    <?php
    if ( $error === "name"){
        $message = "<p>Invalid name</p>";
        echo $message;

    }
    ?>
        <label class="form__label" for="firstname">Your First name: </label>
        <input class="form__input" type="text" name="firstname" value="" placeholder="Firstname">
    <?php
        if ( $error==="firstname"){
            $message = "<p>Invalid firstname</p>";
            echo $message;

        }
    ?>

        <label class="form__label" for="email">Your Email address: </label>
        <input class="form__input" type="email" name="email" value="" placeholder="Email">
    <?php
        if ( $error==="email"){
            $message = "<p>Invalid email</p>";
            echo $message;

        }
    ?>

        <label class="form__label" for="file">Import file: </label>
        <input class="form__input form__file" type="file" name="file" value="" placeholder="Import your file">
    <?php
        if ( $error==="file"){
            $message = " <p>Invalid File format, you can only use 'png, jpg, gif' extension</p>";
            echo $message;
        }
    ?>

        <label class="form__label" for="description">Description: </label>
        <input class="form__input form__description" type="text" name="description" value="" placeholder="Description">



        <button class="form__button" type="submit" name="submit">Submit your form</button>
    </form>

</body>
</html>