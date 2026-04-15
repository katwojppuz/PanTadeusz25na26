<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Pan Tadeusz</title>
    <style>
        .active {
            background-color: #dc3545 !important;
            border-color: #dc3545 !important;
            color: white !important;
        }
    </style>
</head>
<body>
    <header class="bg-danger text-white text-center py-4 mb-4">
        <h1>Pan Tadeusz, czyli ostatni zajazd na Litwie: <br>historia szlachecka z roku 1811 i 1812 we dwunastu ksiegach wierszem</h1>
        <p>Adam Mickiewicz</p>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-4">
                <div class="list-group">
                    <a href="./" class="list-group-item list-group-item-action <?php echo (!isset($_GET['k'])) ? 'active' : ''; ?>">Strona główna</a>
                    <?php
                        for ($k = 1; $k <= 12; $k++) {
                            $class = (isset($_GET['k']) && $_GET['k'] == $k) ? 'active' : '';
                            echo "<a href='./?k=$k' class='list-group-item list-group-item-action $class'>Księga $k</a>";
                        }
                    ?>
                </div>
            </div>
            <div class="col-8">
                <?php
                    if (isset($_GET['k'])){
                        $k = $_GET['k'];
                        include_once "./k$k.html";
                    } else {
                        echo '<img src="./pan-tadeusz.jpeg" alt="Pan Tadeusz" class="img-fluid mb-4">';
                    }
                ?>
            </div>
        </div>
    </section>
    <footer class="bg-danger-subtle text-center py-3 mt-4">
        <p>Katarzyna Wójcik, Akademia Nauk Stosowanych w Nowym Targu</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
