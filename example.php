<?php
$insert="INSERT INTO `npanxx` (`id`, `npa`, `nxx`, `xi`, `xf`, `npanxx`, `region`, `provincia`, `cliente`, `servicio`, `tipored`, `localidad`, `remoto`, `central_host`, `fecha_inst`, `fecha_serv`, `compania`) VALUES (1, '809', '201', '00', '99', '809201', 'No aplica', 'No aplica', '', 'CELULAR PREPAGO', 'Movil', '30 de marzo', '', '30 de Marzo AUTOPLEX', '17/06/2005', '01/07/2005', 'CODETEL');
";
$class= new table_from_insert();
echo $class->create($insert);

?>
