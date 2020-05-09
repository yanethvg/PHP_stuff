<?php
# un tipo string se puede especificar asi:
$animal = "Panda";

#se puede utilizar directamente en las variables
echo "Hola $animal \n adios \n";
#para escapar las comillas dobles
echo "\"Hola $animal \"";
# escapando el signo de pesos
echo "Tu ganas mucho dinero  \$_\$";
#comillas dobles dentro de las comillas simples seran tratadas como texto
# en comillas dobles el escapado si sale como se debeb
# aca lo que pasa es que imprime tal cual la cadena
echo 'Hola $animal \n';
#sale exactamente lo que se pone en el mensaje incluyendo las comillas dobles
#para escapar la comilla dentro de don't se coloca el escape \
# las comillas simples reconocen el salto de linea
echo 'En ingles "do not" se puede escribir como don \'t';

?>
