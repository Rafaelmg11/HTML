<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Produto</title>
</head>
<body>
    <?php

        if (isset($_GET['Entry_CodPeca']) && isset($_GET['CB_TipoPeca']) && isset($_GET['Entry_Descricao']) && isset($_GET['Entry_Quantidade']) && isset($_GET['Entry_Lote']) && isset($_GET['Entry_Valor']) && isset($_GET['CB_Fornecedor']) && isset($_GET['Entry_CodFornecedor']) ){
            echo "Peça Cadastrada: ".$_GET['Entry_Descricao'] "<br>";
        } else {
            echo "Formulario não preenchido";
        }
    ?>
    
    
    
</body>
</html>