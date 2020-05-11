<?php
#ciclos
$count=1;
while ($count <= 10) {
  echo "Se repite $count";
  ++$count;
}

do {
  echo "Se repite $count";
  ++$count;
} while ($count <= 10);

?>
