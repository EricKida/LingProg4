<?php
    $produto_1= $_GET['palavra_1'];
    $produto_2 = $_GET['palavra_2'];
    echo "<p>O nome solicitado foi $produto_1 e $produto_2</p>";
    var_dump($_GET);
?>
<br><button onclick="goBack()">Voltar</button>
<script>
function goBack() {
    window.history.back()
}
</script>