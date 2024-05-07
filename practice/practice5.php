<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>parctice5</title>
</head>
<body>
    <table class="table table-border">
        <thead>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1;$i<=10;$i++):?>
                <tr>
                <?php for ($j=1;$j<=10;$j++):?>
                    <td class="<?php if($i==$j):echo "bg-warning"; endif;?>"> <?php echo $i * $j;?></td> 
                    <?php endfor;?>
                </tr>

        <?php endfor;?>
    </tbody>

    </table>
   
    <script src="popper.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>