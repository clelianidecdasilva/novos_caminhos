<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.6 - Estrutura de repetição');
 
/*
*
*/
PHPClassSession('IF, ELSEIF, ELSE', __LINE__);

$test = true;

if ($test) {
    var_dump(true);
} else {
    var_dump(false);
}

$test = 0;

if ($test) {
    var_dump(true);
} else {
    var_dump(false);
}

$age = 51;

if ($age < 20) {
    var_dump("IFTO");
} else {
    var_dump("NOVOS CAMINHOS");
}

$age = 10;

if ($age < 20) {
    var_dump("IFTO");
} else {
    var_dump("NOVOS CAMINHOS");
}

$age = 10;

if ($age < 20) {
    var_dump("IFTO");
} elseif  ($age > 20 && $age < 50) { 
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

$age = 30;

if ($age < 20) {
    var_dump("IFTO");
} elseif  ($age > 20 && $age < 50) { 
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

$age = 61;

if ($age < 20) {
    var_dump("IFTO");
} elseif  ($age > 20 && $age < 50) { 
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

PHPClassSession('ISSET, EMPTY, !', __LINE__);

$time = "";

if (isset ($var)) {
    var_dump("TODO VASCAINO É SOFREDOR");
} else {
    var_dump("O PALMEIRAS NÃO TEM MUNDIAL");
}

$time = "";

if (isset ($time)) {
    var_dump("TODO VASCAINO É SOFREDOR");
} else {
    var_dump("O PALMEIRAS NÃO TEM MUNDIAL");
}

$time = "";

if (empty($time)) {
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

$time = "Seleção Brasileira";

if (empty($time)) {
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

if (!empty($time)) {
    var_dump("PROGRAMADOR WEB");
} else {
    var_dump("NOVOS CAMINHOS");
}

PHPClassSession('SWITCH', __LINE__);

$payment = "credit_card";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto Impresso");
        break;
    case "canceled":
        var_dump("Pagamento cancelado");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento") ;
        break;
}

$payment = "completed";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto Impresso");
        break;
    case "canceled":
        var_dump("Pagamento cancelado");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento") ;
        break;
}