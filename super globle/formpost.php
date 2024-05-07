<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>FORMPOST</title>
</head>
<body>
    <div class="container">
         <div class="row">
            <div class="col-8 mx-auto">
                <form action="postform.php" method="POST" class="p-3 border">
                    <div class="mb-3">
                        <input type="text" name="user_name" class="form-control" placeholder="text">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="user_email" class="form-control" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="send" class="form-control btn btn-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="popper.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>