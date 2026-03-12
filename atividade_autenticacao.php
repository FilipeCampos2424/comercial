
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

# Usei strlen para contar os caracteres das variáveis

if (strlen($nome) < 4 || strlen($nome) > 15) {
    echo("Erro: o nome de usuário deve ter entre 4 e 15 caracteres.");
}

elseif (strlen($senha) < 4 || strlen($senha) > 15) {
    echo("Erro: a senha deve ter entre 4 e 15 caracteres.");
}

else {


if (($nome != "PROFESSOR" && $nome != "COORDENADOR") && $senha != "DEVISATE") {
    echo "Erro: nome de usuário e senha inválidos.";
}

elseif (($nome == "PROFESSOR" || $nome == "COORDENADOR") && $senha == "DEVISATE") {
echo ("Bem-vindo, ".$nome."! Você realizou acesso às ".date("H:i")." do dia ".date("d/m/Y"));

}

elseif ($nome != "PROFESSOR" && $nome != "COORDENADOR") {
    echo "Erro: nome de usuário inválido.";
}

else {
    echo "Erro: senha incorreta.";
}
}

}
}
?>