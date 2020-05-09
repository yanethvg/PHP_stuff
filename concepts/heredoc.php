<?php
#SINTAXIS HEREDOC

#uso de heredoc
# se debe colocar abajo del identificador los string no a la par
echo <<<FRASE
Con esfuerzo y perserverancia podras alcanzar tus imageantialias
FRASE;

# se pueden utilizar comillas simples y comillas dobles
echo <<<FRASE2
"Con esfuerzo y perserverancia podras alcanzar tus imageantialias"
'Hola'
FRASE2;

$animal ='Gato';
#reconoce variables y caracteres escapados
echo <<<FRASE3
"Con esfuerzo y perserverancia podras alcanzar tus imageantialias" $animal
'Hola'
FRASE3;

#utilizando un caracter escapado
echo <<<FRASE4
"Con esfuerzo y perserverancia \n podras alcanzar tus imageantialias" $animal
'Hola'
FRASE4;

# se puede guardar todo el texto en un variable
$animal = <<<FRASE4
"Con esfuerzo y perserverancia \n podras alcanzar tus imageantialias"
'Hola'
FRASE4;

echo $animal;
?>
