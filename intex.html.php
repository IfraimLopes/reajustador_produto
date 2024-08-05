<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 6</title>

    <script>
    function fetch() {
        var get = document.getElementById("get").value;
        document.getElementById("put").value = get;
    };
    </script>

</head>

<body>
    <?php 
        $produto = isset($_POST['produto'])?$_POST['produto']:0;
        $persentagem = isset($_POST['num'])?$_POST['num']:0;

        $p = $persentagem / 100;
        $new_pro = $produto * $p;
        $r = $produto + $new_pro;

    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="produto"><strong>Preço do Produto (Kz)</strong></label>
            <input type="number" name="produto" id="pro" step="0,0001" value="<?=$produto?>">
            <br>
            <label for="reajuste">Qual será o percentual de reajuste?( <input type="text" name="num" id="put"
                    value="<?=$persentagem?>">%)</label>
            <br>
            <input type="range" name="reajuste" id="get" min="0" max="100" onchange="fetch()">
            <br>
            <input type="submit" id="btn_1" value="Reajustar">
        </form>
        <h1>Resultado do reajuste</h1>
        <?php
        print "<p>O produto que custava " .number_format($produto , 2, ",", ".")."Kz, com <strong>$persentagem % de aumento</strong> vai passar a custar ".number_format($r, 2, ",", ".")."Kz a partir de agora.</p>" 
        ?>
    </main>
</body>

</html>