<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Forms</title>
    <style>
        input {
            display:block;
        }
        .presenter {
            margin:100px;
            width:100px;
            height: 100px;
            text-align: center;
            line-height: 100px;
            display:block;
            border: 1px solid black; 
        }
    </style>
</head>
<body>
    <h1>PHP Forms Demo</h1>
    <?php  
        if (isset($_POST)) {

            $r = $_POST['red'];
            $g = $_POST['green'];
            $b = $_POST['blue'];
            $color = "background-color: rgb($r,$g,$b)";
        }
    ?>
    <form method="post">
        <div>
            <label for="red">Number 0 - 255 (Red):</label>
            <input name="red" type="number" min="0" max="255" value="0">
        </div>
        <div>
            <label for="green">Number 0 - 255 (Green):</label>
            <input name="green" type="number" min="0" max="255" value="0">
        </div>
        <div>
            <label for="blue">Number 0 - 255 (Green):</label>
            <input name="blue" type="number" min="0" max="255" value="0">
        </div>
        <div>
            <input name="accept" type="submit" value="Accept">
        </div>
    </form>
        <span class="presenter" style="<?php echo $color?>">Test text</span>
</body>
</html>