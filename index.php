<?php
include 'lib/php/config.php';

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <script src="lib/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title><?php if(isset($_GET['title'])){echo $_GET['title'];}else{echo "Kevin's Blog";}?></title>


</head>
<body>

<?php
echo "master";
?>

</body>
</html>
