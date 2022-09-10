<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularizando Funções e Trantando Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h1>Modularizando no PHP</h1>
        </div>
        <div class="body">
            <div class="item1">
                <section class="subitem1">
                    <h3>Modularização em Um Arquivo</h3>
                    <ul>
                        <li>Index.php</li>
                        <li>Modulos em um Arquivo:
                            <ol>
                                <li>modulos.php</li>
                            </ol>
                        </li>
                        <li>array.php</li>
                    </ul>
                </section>
                <hr>
                <section class="subitem2">
                    <?php
                        require('poucos_arquivos/index.php');
                    ?>
                </section>
            </div>
            <div class="item2">
                <section class="subitem1">
                    <h3>Modularização em Vários Arquivos</h3>
                    <ul>
                        <li>Index.php</li>
                        <li>Modulos em arquivos separados:
                            <ol>
                                <li>ganhamais.php</li>
                                <li>maior.php</li>
                                <li>maismulher.php</li>
                                <li>maiormenor.php</li>
                            </ol>
                        </li>
                        <li>array.php</li>
                    </ul>
                </section>
                <hr>
                <section class="subitem2">
                    <?php
                        require('muitos_arquivos/index.php');
                    ?>
                </section>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>