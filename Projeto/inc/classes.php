<?php
# classe :: Calculadora
class CalculadoraValor
{

    # Função "Calcular" para executar o cálculo dos valores (produto e n2)
    public function Calcular()
    {
        # Se for setado algum valor ào submit (Calc), executa a operação
        if (isset($_POST['Calc'])) {

            # Se a operação for soma (value = multiplica), então...
            if ($_POST['operacao'] == "multiplica") {

                # Armazena a soma de [produto + n2] na variável $resultado
                $resultado = $_POST['produto'] * $_POST['n2'];

                # Exibe a variável $resultado com os valores já somados
                if($_SESSION['op'] == 1){
                return "R$ " . $_POST['produto'] . " * " . $_POST['n2'] . " = " . "R$ " . $resultado . ",00";
                }else{
                    return $_POST['produto'] . "GB * " . $_POST['n2'] . " = " . $resultado . " GB";
                }

                # Ou então, se a operação não for (value = soma), e sim (value = subtrai) então...
            } elseif ($_POST['operacao'] == "subtrai") {
                $resultado = $_POST['produto'] - $_POST['n2'];
                if($_SESSION['op'] == 1){
                    return "R$ " . $_POST['produto'] . " - R$ " . $_POST['n2'] . ".00 = " . "R$ " . $resultado . ",00";
                }else{
                    return $_POST['produto'] . "GB - " . $_POST['n2'] . "GB = " . $resultado . " GB";
                }
            } elseif ($_POST['operacao'] == 'soma') {
                $resultado = $_POST['produto'] + $_POST['n2'];
                if($_SESSION['op'] == 1){
                return "R$ " . $_POST['produto'] . " + R$ " . $_POST['n2'] . ".00 = " . "R$ " . $resultado . ",00";
                }else{
                    return $_POST['produto'] . "GB + " . $_POST['n2'] . "GB = " . $resultado . " GB";
                }
            } elseif ($_POST['operacao'] == 'divide') {
                $resultado = $_POST['produto'] / $_POST['n2'];
                if($_SESSION['op'] == 1){
                return "R$ " . $_POST['produto'] . " / " . $_POST['n2'] . " = " . "R$ " . $resultado . ",00";
                }else{
                    return $_POST['produto'] . "GB / " . $_POST['n2'] . " = " . $resultado . " GB";
                }
            }
        }
    }

}

# Instancia a classe CALCULADORA()
$calcular = new CalculadoraValor();

# Executa a função
echo $calcular->Calcular();

?>
