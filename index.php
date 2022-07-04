<?php
include_once './includes/_head.php'
?>

<main>
    <div class="container">
        <h1 class="title">Variação da Entalpia</h1>
        <div class="containerInput">
            <form class="inputVP" action="./index.php" method="post">
                <input 
                type="text"
                placeholder="Digite a entalpia dos produtos..."
                name="vP"
                id="vP"
                />
            </form>
            <form class="inputVR"  action="./index.php" method="post">
                <input
                type="text"
                placeholder="Digite a entalpia dos reagentes..."
                name="vR"
                id="vR"
                />
            </form>
            <button class="buttonSearch" type="submit" value="cadastrar">
                Buscar
            </button>    
        </div>
        <?php
            // Declaração das variáveis
            if (isset($_POST['vP'])) {
                $resultVP = $_POST['vP'];
            }

            if (isset($_POST['vR'])) {
                $resultVR = $_POST['vR'];
            }
            // Efetuação da operação    
            $result = ($resultVP) - ($resultVR); 
        ?>
        <div class="result">
            <h2>Variação da Entalpia = <?php echo $result?></h2>
        </div>
    </div>
</main>

<?php
include_once './includes/_footer.php'
?>