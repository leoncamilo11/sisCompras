-- ********************************************************
-- 				Script to create views Database
-- ********************************************************

use controlcomprasdb;
 
	-- Creo la vista para login
	drop view if exists vLogin;
	create view vLogin
	as
	select Nombre, Apellido, Email, Clave, IdRolFk, IdProyectoFk
	from usuarios
    where Activo = 1;