-- *******************************************************************
-- 				Script para crear vistas controlcomprasdb
-- *******************************************************************

use controlcomprasdb;
 
	-- Creo la vista para login
	drop view if exists vLogin;
	create view vLogin
	as
	select Identificacion, Nombre, Apellido, Email, Clave, IdRol, IdProyecto
	from usuario
    where Activo = 1;
    
    -- Creo la vista para consultar usuarios
    -- Activos
    drop view if exists vUsuarios;        
	create view vUsuarios
	as
	select t1.IdUsuario, t1.Identificacion, t1.Nombre, t1.Apellido, t1.Email, t1.Clave, t1.IdRol, t2.Rol, t3.Proyecto
	from usuario as t1
	inner join rol as t2 on t2.IdRol = t1.IdRol
	inner join proyecto as t3 on t3.IdProyecto = t1.IdProyecto
	where t1.Activo = 1; 
    
    -- Inactivos
    drop view if exists vUsuariosInactivos;
	create view vUsuariosInactivos
	as
	select t1.IdUsuario, t1.Identificacion, t1.Nombre, t1.Apellido, t1.Email, t1.Clave, t1.IdRol, t2.Rol, t3.Proyecto
	from usuario as t1
	inner join rol as t2 on t2.IdRol = t1.IdRol
	inner join proyecto as t3 on t3.IdProyecto = t1.IdProyecto
	where t1.Activo = 0; 