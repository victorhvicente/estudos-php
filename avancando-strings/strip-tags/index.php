<?php

$fraseHTML = "<p>Olá Mundo</p><div>Isso é uma div</div><p>Meu nome é Victor</p>";
echo $fraseHTML;

$limpandoParaBanco = strip_tags($fraseHTML);
echo $limpandoParaBanco;

?>