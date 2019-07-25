<html>

<head>
<title>Menu Card</title>

<style type="text/css" >
.heading
{
	text-align: center;
    color: white;
    text-shadow: 2px 2px red;
    padding-top: 5px;
}
    
body
{
    background-color: darkgray;    
}

</style>
</head>


<body >
<div class="heading"><h1>Caspiatto Internationals</h1></div>
<?php
    $f1=file_get_contents('./normaldish.txt');
    $normal = explode("$", $f1);
    array_pop($normal);
    $f2=file_get_contents('./special.txt');
    $special = explode("$", $f2);
    array_pop($special);
?>
    <table border="0" cellspacing="20" align="left">
    <tr>
        <td>Food Code</td>
        <td>Food Name</td>
        <td>Food Price</td>
    </tr>
    <?php
    foreach ($normal as &$value)
    {
        $ro=explode("|",$value);
        ?>
        <tr>
        <td><?php echo($ro[0]); ?></td>
        <td><?php echo($ro[1]); ?></td>
        <td><?php echo($ro[2]); ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <table border="0" cellspacing="20" align="right">
    <tr>
        <td>Food Code</td>
        <td>Food Name</td>
        <td>Food Price</td>
    </tr>
    <?php
    foreach ($special as &$value)
    {
        $ro=explode("|",$value);
        ?>
        <tr>
        <td><?php echo($ro[0]); ?></td>
        <td><?php echo($ro[1]); ?></td>
        <td><?php echo($ro[2]); ?></td>
        </tr>
        <?php
    }
    ?>
    </table>

</body>

</html>