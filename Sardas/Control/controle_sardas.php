<?php
$sardasAvoMaterno = true;
$sardasAvoMaterna = false;
$sardasAvoPaterno = true;
$sardasAvoPaterna = false;

$sardasPai = false;
$sardasMae = false;
$sardasPessoa = false;

if ($sardasAvoMaterno || $sardasAvoMaterna || $sardasAvoPaterno || $sardasAvoPaterna) {
    echo "histórico de sardas na família.<br>";

    if ($sardasAvoMaterno && $sardasAvoMaterna) {
        echo "2 avós do lado materno tem sardas.<br>";
    }

    if ($sardasAvoPaterno && $sardasAvoPaterna) {
        echo "2 avós do lado paterno tem sardas.<br>";
    }

    if (($sardasAvoMaterno || $sardasAvoMaterna) && ($sardasAvoPaterno || $sardasAvoPaterna)) {
        echo "Sardas dos 2 lados da família!<br>";
    } elseif ($sardasAvoMaterno || $sardasAvoMaterna) {
        echo "Sardas apenas do lado materno!<br>";
    } elseif ($sardasAvoPaterno || $sardasAvoPaterna) {
        echo "Sardas apenas do lado paterno!<br>";
    }

} else {
    echo "Sem histórico de sardas nos avós.<br>";
}

if ($sardasPai || $sardasMae) {
    echo "Pelo menos um dos pais tem sardas.<br>";

    if ($sardasPai && $sardasMae) {
        echo "Tanto o pai quanto a mãe têm sardas!<br>";
    } elseif ($sardasPai) {
        echo "Apenas o pai tem sardas.<br>";
    } elseif ($sardasMae) {
        echo "Apenas a mãe tem sardas.<br>";
    }
} else {
    echo "Nenhum dos pais tem sardas.<br>";
}

if ($sardasPessoa) {
    echo "Você herdou sardas!<br>";
} else {
    echo "Você não herdou sardas.<br>";
}
?>
