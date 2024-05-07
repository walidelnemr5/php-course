<!-- <?php
$_SERVER;
echo "<pre>";
print_r($_SERVER);?> -->
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>server</title>
</head>
<h1>
    <?php
    echo $_SERVER["SCRIPT_NAME"] ;?>
</h1>
<h1>
    <?php
    $url=explode("/",$_SERVER["SCRIPT_NAME"]);
    echo $url[count($url)-1];?>
    </h1>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
            <td>name</td>
            <td>value</td>
        </tr>
    </thead>
    <tbody>
        <?php
         foreach($_SERVER as $key=>$value):?>
         <tr>
            <td>
                <?php echo $key?>
            </td>
            <td>
                <?php echo $value?>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<script src="popper.min.js"></script>
<script src="jquery-3.7.1.min.js"></script>
<script src="bootstrap.js"></script>
</body>
</html>