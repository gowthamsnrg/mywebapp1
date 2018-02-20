<html>
    <head>
        <title>Gowtham</title>
    </head>
    
    <body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console
if (isset($_POST['sub']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $a + $b;
    echo "The Value of Addition ".$c;

}





?>

<form method="POST">
   Enter First Value :  <input type="text" name="a"/><br />
    Enter Second  Value :  <input type="text" name="b"/>
    <input type="submit" value="Submit" name="sub"/>
</form>
</body>
</html>