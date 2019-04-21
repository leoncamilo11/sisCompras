-- ***********************************************************************************************
-- 				Script para crear procedimientos almacenados controlcomprasdb
-- ***********************************************************************************************

use controlcomprasdb;
 
	-- Creo procedimiento almacenado para registrar usuarios
    DROP procedure IF EXISTS `InsertUsers`;
	DELIMITER $$
    use controlcomprasdb$$
    CREATE PROCEDURE `InsertUsers`(
		in Identificacion varchar(20),
        in Nombre varchar(50), 
		in Apellido varchar(50),
		in Email varchar(50),
		in Clave varchar(20),
		in IdRol int, 
		in IdProyecto int)
	BEGIN
		SET @validarUsuario = (select count(*) from usuario where usuario.Identificacion = Identificacion and usuario.Email = Email);
		if @validarUsuario >= 1 then
			select 'El documento o el correo ingresado ya existen. No se pudo completar el registro' as Mensaje;
		else    
			insert into usuario (Identificacion, Nombre, Apellido, Email, Clave, IdRol, IdProyecto, Activo) 
			values (Identificacion, Nombre, Apellido, Email, Clave, IdRol, IdProyecto, 1);
			select 'El usuario se registro correctamente' as Mensaje;
		end if;
	END$$
    DELIMITER ;
    
    
    -- Creo procedimiento almacenado para registrar compras
    DROP procedure IF EXISTS `InsertCompras`;
	DELIMITER $$
	use controlcomprasdb$$
	CREATE PROCEDURE `InsertCompras`(
		in Consecutivo varchar(15),
		in NoIntend int,
		in Objeto varchar(100),
		in NoRequisicion int,
		in IdValor int,
		in IdProcedimiento int,
		in IdTipoCompra int,
		in IdSolicitante int,
		in IdLugarEntrega int,
		in IdProceso int)
	BEGIN
	insert into compra (Consecutivo, NoIntend, Objeto, NoRequisicion, IdValor, IdProcedimiento, IdTipoCompra, IdSolicitante, IdLugarEntrega, IdProceso, Activo) 
				values (Consecutivo, NoIntend, Objeto, NoRequisicion, IdValor, IdProcedimiento, IdTipoCompra, IdSolicitante, IdLugarEntrega, IdProceso, 1);
	END$$

	DELIMITER ;
    
    
    -- Creo procedimiento almacenado para desactivar usuarios
    DROP procedure IF EXISTS `DesactivarUsuarios`;
	DELIMITER $$
	use controlcomprasdb$$
	CREATE PROCEDURE `DesactivarUsuarios` (
		in CodigoUsuario varchar(50)
	)
	BEGIN
	if exists (SELECT Identificacion FROM usuario WHERE Identificacion = CodigoUsuario) then
		update usuario
		set Activo = 0
		where Identificacion = CodigoUsuario;
		select 'El usuario ha sido inhabilitado correctamente del sistema' as Mensaje;
	else
		select 'El usuario no pudo ser inhabilitado. Validar número de documento' as Mensaje;
		
	end if;
	END$$
	DELIMITER ;
    
    
    -- Creo procedimiento almacenado para activar usuarios
	DROP procedure IF EXISTS `ActivarUsuarios`;
	DELIMITER $$
	use controlcomprasdb$$
	CREATE PROCEDURE `ActivarUsuarios` (
		in CodigoUsuario varchar(50)
	)
	BEGIN
		if exists (SELECT Identificacion FROM usuario WHERE Identificacion = CodigoUsuario) then
			update usuario
			set Activo = 1
			where Identificacion = CodigoUsuario and Activo = 0;
			select 'El usuario a sido activado correctamente en el sistema';
		else
			select 'El usuario no pudo ser activado. </br>Validar número de documento';
		end if;
	END$$

	DELIMITER ;
    
    
    -- Creo procedimiento almacenado para actualizar usuarios
    DROP procedure IF EXISTS `ActualizarUsuarios`;
	DELIMITER $$
	use controlcomprasdb$$
	CREATE PROCEDURE `ActualizarUsuarios` (
		in CodigoUsuario int,
		in IdentificacionN varchar(20),
        in NombreN varchar(50), 
		in ApellidoN varchar(50),
		in EmailN varchar(50),
		in ClaveN varchar(20),
		in IdRolN int, 
		in IdProyectoN int
	)
	BEGIN
		if exists (SELECT IdUsuario FROM usuario WHERE IdUsuario = CodigoUsuario and Activo = 1) then
			drop table if exists UsuarioUpdate;
			create temporary table UsuarioUpdate select * from usuario where IdUsuario = CodigoUsuario and Activo = 1;
			update usuario
			inner join UsuarioUpdate 
			set usuario.Nombre = case
									when NombreN is null then UsuarioUpdate.Nombre
									else NombreN 
								end,  
				usuario.Apellido = case
									  when ApellidoN is null then UsuarioUpdate.Apellido
									  else ApellidoN
									end,
				usuario.Identificacion = case
											when IdentificacionN is null then UsuarioUpdate.Identificacion
											else IdentificacionN
										  end,
				usuario.IdProyecto = case
										when IdProyectoN is null then UsuarioUpdate.IdProyecto
										else IdProyectoN
									  end,
				usuario.IdRol = case
									when IdRolN is null then UsuarioUpdate.IdRol
									else IdRolN
								 end,
				usuario.Email = case
									when EmailN is null then UsuarioUpdate.Email
									else EmailN
								 end,
				usuario.Clave = case
									when ClaveN is null then UsuarioUpdate.Clave
									else ClaveN
								 end
				where usuario.IdUsuario = CodigoUsuario and usuario.Activo = 1; 
				select 'El usuario fue actualizado' as Mensaje;
				drop table if exists UsuarioUpdate;
		else
			select 'El usuario no puede ser actualizado.' as Mensaje;
		end if;
	END$$
	DELIMITER ;
