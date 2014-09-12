#!/bin/bash

mysql --user='root' --password='' --database='sima' --execute="insert into sis_ordenesSOP (entidadSolicitud, almacen, keyTS, registro, nombre, descripcionSoporte,descripcionAlmacen, usuario, fecha, hora, entidad, solicitud,descripcionTS, status, observaciones,usuarioEjecutor, almacenSoporte, codigo)
select entidad, departamento,(Select keyTS from sis_tipoSoporte where descripcion ='MANTENIMIENTO'), '0', 'SIMA V3', 'MANTENIMIENTO',descripcionAlmacen, 'SIMA V3', CURDATE(), CURTIME(), entidad,'0','MANTENIMIENTO','pending', CONCAT('Mantenimiento de ',(Select descripcion from sis_tipoEquipo where keyTE=s.keyTE), ' -autogenerado por el sistema'),'', 'HSIST', codigo
from sima.sis_inventarioEqComputo s where next_mantenimiento=CURDATE();"


mysql --user='root' --password='' --database='sima' --execute="update sis_inventarioEqComputo set next_mantenimiento = IF(
        DAYOFWEEK(DATE_ADD(next_mantenimiento, INTERVAL meses_mantenimiento MONTH))='1', DATE_ADD(DATE_ADD(next_mantenimiento, INTERVAL meses_mantenimiento MONTH), INTERVAL 1 DAY),
        IF(DAYOFWEEK(DATE_ADD(next_mantenimiento, INTERVAL meses_mantenimiento MONTH))='7', DATE_ADD(DATE_ADD(next_mantenimiento, INTERVAL meses_mantenimiento MONTH), INTERVAL 2 DAY), DATE_ADD(next_mantenimiento, INTERVAL meses_mantenimiento MONTH)
        )) where next_mantenimiento < CURDATE();"
