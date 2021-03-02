<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscaminas</title>

    <!-- jQery to be able to make AJAX calls -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <h2>BUSCAMINAS</h2>
    <?php if (empty($_POST['size'])) { ?>
        <form action="" method="post">
            <input type="number" name="size" id="size" placeholder="Tamaño: ">
            <button type="submit">Jugar</button>
        </form>
    <?php } else {
        include_once __DIR__ . "/Board.php";
        session_start();
        $board = $_SESSION['board'] = new Board($_POST['size']);
        echo $board;
    ?>
        <br>
        <a href="/parcial2">Reinciciar</a>
    <?php } ?>

    <!-- Calls a php script every time a button tile is clicked -->
    <script type="text/javascript">
        function handleTileClicked(id) {
            console.log(id);
            return false;
        }
    </script>
</body>

</html>