
Sistema de autenticação

<!--Formulário HTML -->
<form method="post">
<input type="text" name="nome" id="nome" placeholder="Nome de usuário">
<input type="password" name="senha" id="senha" placeholder="Senha">
<button type="submit">Enviar</button>
</form>

<!--Pegando o nome e a senha do HTML no PHP e colocando as condições pra funcionar -->
<?php 
if (isset($_POST{"nome"})) {
$nome = $_POST["nome"];

if (isset($_POST{"senha"})) {
$senha = $_POST["senha"];


if ($nome == "PROFESSOR" && $senha == "DEVISATE") {
    echo "funcionou";
}
if ($nome == "COORDENADOR" && $senha == "DEVISATE") {
    echo "funcionou";
}
else if ($nome != "PROFESSOR" or $nome != "COORDENADOR" or $senha != "DEVISATE") {
    echo "funcionou nao";
}

}
}
?>