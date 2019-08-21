<?php

    include_once("Expiravel.php");
    include_once("Produto.php");
    include_once("Assinatura.php");

    $Assinatura = new Assinatura();

    $Assinatura->setCodigo(123);
    $Assinatura->setNome("Assinatura MVP");
    $Assinatura->setPreco(69.99);
    $Assinatura->setDataExpiracao("2019-08-20");

    print "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days}";