-- ********************************************************************************************************
-- 				Script para crear base datos y relaciones entre tablas controlcomprasdb
-- ********************************************************************************************************

#Validacion creacion y utilizacion de la base de datos
	drop database if exists controlcomprasdb;
	create database if not exists controlcomprasdb;
	use controlcomprasdb;
    
#Creacion de tablas
	create table compra (
		IdCompra								int not null auto_increment primary key,
        Consecutivo								varchar(15) not null,
        NoIntend								int,
        Objeto									varchar(100) not null,
        NoRequisicion							int not null,
        IdValor									int not null,
        IdProcedimiento							int not null,
        IdTipoCompra							int not null,
        IdSolicitante							int not null,
        IdLugarEntrega							int not null,
        IdProceso								int not null,
        Activo									bool
    );
    
	create table valor (
		IdValor								int not null auto_increment primary key,
        ValorCopInicial							int not null,
        ValorUsdInicial							int not null,
        TasaCambioInicial						int not null,
        ValorCopFinal							int not null,
        ValorUsdFinal							int not null,
        TasaCambioFinal							int not null
    );
    
	create table lugarEntrega (
		IdLugarEntrega							int not null auto_increment primary key,
        IdMunicipio								int not null,
        Observaciones							varchar(50) not null
    );
    
	create table departamento (
		IdDepartamento							int not null primary key,
        Departamento							varchar(40) not null
    );
    
    create table municipio (
		IdMunicipio								int not null primary key,
        Municipio								varchar(40) not null,
        IdDepartamento							int not null
    );
    
	create table procedimiento (
		IdProcedimiento							int not null auto_increment primary key,
        Procedimiento							varchar(5) not null
    );
    
	create table tipoCompra (
		IdTipoCompra							int not null auto_increment primary key,
        TipoCompra								varchar(10) not null
    );
    
	create table usuario (
		IdUsuario								int not null auto_increment primary key,
        Identificacion							varchar(20) not null unique,
        Nombre									varchar(50) not null,
        Apellido								varchar(50) not null,
        Email									varchar(50) not null,
        Clave									varchar(20) not null,							
        IdRol									int not null,
        IdProyecto								int not null,
        Activo									bool not null
    );
    
	create table rol (
		idRol									int not null auto_increment primary key,
        Rol										varchar(15) not null
    );
    
    create table proyecto (
		IdProyecto								int not null auto_increment primary key,
        Proyecto								varchar(30) not null
    );
    
    create table proceso (
		IdProceso								int not null auto_increment primary key,
        FechaEntregaInicioEjecucion				datetime not null,
        FechaSolicitudProyecto					datetime not null,
        FechaAceptacionTramite					datetime not null,
        DiasTranscurridosSolicitudAceptacion	int not null, 
        DiasEstablecidosSolicitudAceptacion		int not null,
        DiasDiferenciaSolicitudAceptacion		int not null,
        IdDevolucion							int not null,
        IdDelegacionAutoridad					int not null,
        IdPublicacion							int not null,
        IdRevisionActa							int not null,
        IdAprobacion							int not null,
        IdFirmaProveedor						int not null,
        IdEstado								int not null,
        IdResponsable							int not null,
        IdPo									int not null
    );
    
    create table devolucion (
		IdDevolucion							int not null auto_increment primary key,
        FechaDevolucionProyecto					datetime not null,
        IdMotivoDevolucion						int not null,
        Observaciones							varchar(50) not null
    );
    
    create table motivoDevolucion (
		IdMotivoDevolucion						int not null auto_increment primary key,
        Motivo									varchar(50) not null
    );
    
    create table delegacionAutoridad (
		IdDelegacionAutoridad					int not null auto_increment primary key,
        Solicitud								datetime not null,
        Aprobacion								datetime not null
    );
    
    create table publicacion (
		IdPublicacion							int not null auto_increment primary key,
        FechaPublicacion						datetime not null,
        DiasEntreAceptacionPublicacion			int not null,
        DiasEstipuladosAceptacionPublicacion	int not null,
        DiasDiferenciaAceptacionPublicacion		int not null,
        FechaCierePublicacion					datetime not null,
        DiasEntrePublicacionCierre				int not null,
        DiasEstipuladosPublicacionCierre		int not null,
        DiasDiferenciaPublicacionCierre			int not null
    );
    
    create table revisionActa (
		IdRevisionActa							int not null auto_increment primary key,
        FechaEnvioOfertas						datetime not null,
        FechaEnvioBorrador						datetime not null,
        FechaEnvioRevisado						datetime not null,
        FechaRecibidaFirmada					datetime not null,
        DiasTotalesRevisionTecnica				int not null,
        FechaComiteEvaluacionEconomica			datetime not null,
        DiasEstablecidosFirmaTecnica			int not null,
        DiasDiferenciaEstablecidosGenerados		int not null
    );
    
    create table aprobacion (
		IdAprobacion							int not null auto_increment primary key,
        FechaEnvioEvaluacionTecnica				datetime not null,
        FechaAprobacionFinalTecnica				datetime not null,
        DiasEvaluacionTecnica					int not null,
        FechaEnvioaprobacionEconomica			datetime not null,
        FechaAprobacionEconomica				datetime not null,
		DiasEvaluacionEconomica					int not null,
        FechaEntregaActaComite					datetime not null,
        FechaAprobacionActaComite				datetime not null,
        DiasAprobacionComite					int not null,
        DiasAprobaciones						int not null,
        DiasEstablecidosAprobaciones			int not null,
        DiasDiferenciaEstablecidosGenerados		int not null
    );
    
    create table firmaProveedor (
		IdFirmaProveedor						int not null auto_increment primary key,
        FechaEnvioContrato						datetime not null,
        FechaDevolucionContrato					datetime not null,
        DiasTotalesFirma						int not null
    );
    
    create table estado (
		IdEstado								int not null auto_increment primary key,
        Estado									varchar(50) not null
    );
    
    create table po (
		IdPo									int not null auto_increment primary key,
        Numero									int not null,
        ProveedorAdjudicado						varchar(50) not null,
        IdSoportes								int not null,
        FechaDevolcuionFirmada					datetime not null,
        FechaProcesoArchivado					datetime not null,
        DiasTotalesHastaNotificacion			int not null,
        TiemposSla								int not null,
        DiasDiferenciaContraSla					int not null,
        FechaEstimadaNotificacion				datetime not null,
        DiasVencimiento							int not null,
        Observaciones							varchar(50) not null,
        IdRazonesRetraso						int not null,
        IdEmisionPo								int not null
    );
    
    create table razonesRetraso (
		IdRazonesRetraso						int not null auto_increment primary key,
        Razon									varchar(50) not null
    );
    
    create table emisionPo (
		IdEmisionPo								int not null auto_increment primary key,
        FechaElaboracion						datetime not null,
        FechaAprobacion							datetime not null,
        FechafirmaResponsable					datetime not null,
        FechaNotificacionProyecto				datetime not null,
        DiasTotalesEmision						int not null,
        DiasEstablecidosEmision					int not null,
        DiasDiferenciaEstablecidosGenerados		int not null
    );
    
#Creacion de las llavas foraneas

	alter table compra add constraint IdValor
	foreign key (IdValor) references
	valor (IdValor);
    
	alter table compra add constraint IdProcedimiento
	foreign key (IdProcedimiento) references
	procedimiento (IdProcedimiento);
    
    alter table compra add constraint IdTipoCompra
	foreign key (IdTipoCompra) references
	tipoCompra (IdTipoCompra);
    
    alter table compra add constraint IdSolicitante
	foreign key (IdSolicitante) references
	usuario (IdUsuario);
    
    alter table compra add constraint IdLugarEntrega
	foreign key (IdLugarEntrega) references
	lugarEntrega (IdLugarEntrega);
    
    alter table compra add constraint IdProceso
	foreign key (IdProceso) references
	proceso (IdProceso);
    
    alter table municipio add constraint IdDepartamento
	foreign key (IdDepartamento) references
	departamento (IdDepartamento);
    
    alter table lugarEntrega add constraint IdMunicipio
	foreign key (IdMunicipio) references
	municipio (IdMunicipio);
    
    alter table usuario add constraint IdRol
	foreign key (IdRol) references
	rol (IdRol);
    
    alter table usuario add constraint IdProyecto
	foreign key (IdProyecto) references
	proyecto (IdProyecto);
    
    alter table proceso add constraint IdDevolucion
	foreign key (IdDevolucion) references
	devolucion (IdDevolucion);
    
    alter table proceso add constraint IdDelegacionAutoridad
	foreign key (IdDelegacionAutoridad) references
	delegacionAutoridad (IdDelegacionAutoridad);
    
    alter table proceso add constraint IdPublicacion
	foreign key (IdPublicacion) references
	publicacion (IdPublicacion);
    
    alter table proceso add constraint IdRevisionActa
	foreign key (IdRevisionActa) references
	revisionActa (IdRevisionActa);
    
    alter table proceso add constraint IdAprobacion
	foreign key (IdAprobacion) references
	aprobacion (IdAprobacion);
    
    alter table proceso add constraint IdFirmaProveedor
	foreign key (IdFirmaProveedor) references
	firmaProveedor (IdFirmaProveedor);
    
    alter table proceso add constraint IdEstado
	foreign key (IdEstado) references
	estado (IdEstado);
    
    alter table proceso add constraint IdResponsable
	foreign key (IdResponsable) references
	usuario (IdUsuario);
    
    alter table proceso add constraint IdPo
	foreign key (IdPo) references
	po (IdPo);
    
    alter table devolucion add constraint IdMotivoDevolucion
	foreign key (IdMotivoDevolucion) references
	motivoDevolucion (IdMotivoDevolucion);
    
    alter table po add constraint IdRazonesRetraso
	foreign key (IdRazonesRetraso) references
	razonesRetraso (IdRazonesRetraso);
    
    alter table po add constraint IdEmisionPo
	foreign key (IdEmisionPo) references
	emisionPo (IdEmisionPo);