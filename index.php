<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscaminas</title>

    <!-- jQery para poder usar AJAX -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <h2>BUSCAMINAS</h2>
    <?php if (empty($_POST['rows']) || empty($_POST['cols'])) { ?>
        <form action="" method="post">
            <input type="number" name="rows" id="rows" placeholder="Filas">
            <br>
            <input type="number" name="cols" id="cols" placeholder="Columnas">
            <br>
            <button type="submit">Crear</button>
        </form>
    <?php } else { ?>
        <table>
            <thead>
                <tr>
                    <!-- <th>table</th> -->
                </tr>
            </thead>

            <tbody>
                <?php for ($i = 0; $i < $_POST['rows']; $i++) { ?>
                    <tr>
                        <?php for ($j = 0; $j < $_POST['cols']; $j++) { ?>
                            <td>
                                <button onclick="handleTileClicked()"></button>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="/public">Reinciciar</a>
    <?php } ?>

    <!-- Calls a php script every time a button tile is clicked -->
    <script type="text/javascript">
        function handleTileClicked() {
            // $.post('page.php');
            console.log('jejejej')
            return false;
        }
    </script>
</body>

</html>