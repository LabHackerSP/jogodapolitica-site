<?php
 #abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
 $redirect = "http://jogodapolitica.org.br/app/executivo/";
 
 #abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
 #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
 header("location:$redirect");
 
?>
