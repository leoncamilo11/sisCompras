#Validacion creacion y utilizacion de la base de datos
	drop database if exists controlcomprasdb;
	create database if not exists controlcomprasdb;
	use controlcomprasdb;
    
#Creacion de tablas
	create table compra (
		IdCompraPk								int not null auto_increment primary key,
        Consecutivo								varchar(15) not null,
        NoIntend								int,
        Objeto									varchar(100) not null,
        NoRequisicion							int not null,
        IdValorFk								int not null,
        IdProcedimientoFk						int not null,
        IdTipoCompraFk							int not null,
        IdSolicitanteFk							int not null,
        IdLugarEntregaFk						int not null,
        IdProcesoFk								int not null,
        Activo									bool
    );
    
	create table valor (
		IdValorPk								int not null auto_increment primary key,
        ValorCopInicial							int not null,
        ValorUsdInicial							int not null,
        TasaCambioInicial						int not null,
        ValorCopFinal							int not null,
        ValorUsdFinal							int not null,
        TasaCambioFinal							int not null
    );
    
	create table lugarEntrega (
		IdLugarEntregaPk						int not null auto_increment primary key,
        IdMunicipioFk							int not null,
        Observaciones							varchar(50) not null
    );
    
	create table departamento (
		IdDepartamentoPk						int not null primary key,
        Departamento							varchar(40) not null
    );
    
    create table municipio (
		IdMunicipioPk							int not null primary key,
        Municipio								varchar(40) not null,
        IdDepartamentoFk						int not null
    );
    
	create table procedimiento (
		IdProcedimientoPk						int not null auto_increment primary key,
        Procedimiento							varchar(5) not null
    );
    
	create table tipoCompra (
		IdTipoCompraPk							int not null auto_increment primary key,
        TipoCompra								varchar(10) not null
    );
    
	create table usuario (
		IdUsuarioPk								int not null auto_increment primary key,
        Nombre									varchar(50) not null,
        Apellido								varchar(50) not null,
        Email									varchar(50) not null,
        Clave									varchar(20) not null,							
        IdRolFk									int not null,
        IdProyectoFk							int not null,
        Activo									bool not null
    );
    
	create table rol (
		idRolPk									int not null auto_increment primary key,
        Rol										varchar(15) not null
    );
    
    create table proyecto (
		IdProyectoPk							int not null auto_increment primary key,
        Proyecto								varchar(30) not null
    );
    
    create table proceso (
		IdProcesoPk								int not null auto_increment primary key,
        FechaEntregaInicioEjecucion				datetime not null,
        FechaSolicitudProyecto					datetime not null,
        FechaAceptacionTramite					datetime not null,
        DiasTranscurridosSolicitudAceptacion	int not null, 
        DiasEstablecidosSolicitudAceptacion		int not null,
        DiasDiferenciaSolicitudAceptacion		int not null,
        IdDevolucionFk							int not null,
        IdDelegacionAutoridadFk					int not null,
        IdPublicacionFk							int not null,
        IdRevisionActaFk						int not null,
        IdAprobacionFk							int not null,
        IdFirmaProveedorFk						int not null,
        IdEstadoFk								int not null,
        IdResponsableFk							int not null,
        IdPoFk									int not null
    );
    
    create table devolucion (
		IdDevolucionPk							int not null auto_increment primary key,
        FechaDevolucionProyecto					datetime not null,
        IdMotivoDevolucionFk					int not null,
        Observaciones							varchar(50) not null
    );
    
    create table motivoDevolucion (
		IdMotivoDevolucionPk					int not null auto_increment primary key,
        Motivo									varchar(50) not null
    );
    
    create table delegacionAutoridad (
		IdDelegacionAutoridadPk					int not null auto_increment primary key,
        Solicitud								datetime not null,
        Aprobacion								datetime not null
    );
    
    create table publicacion (
		IdPublicacionPk							int not null auto_increment primary key,
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
		IdRevisionActaPk						int not null auto_increment primary key,
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
		IdAprobacionPk							int not null auto_increment primary key,
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
		IdFirmaProveedorPk						int not null auto_increment primary key,
        FechaEnvioContrato						datetime not null,
        FechaDevolucionContrato					datetime not null,
        DiasTotalesFirma						int not null
    );
    
    create table estado (
		IdEstadoPk								int not null auto_increment primary key,
        Estado									varchar(50) not null
    );
    
    create table po (
		IdPoPk									int not null auto_increment primary key,
        Numero									int not null,
        ProveedorAdjudicado						varchar(50) not null,
        IdSoportesFK							int not null,
        FechaDevolcuionFirmada					datetime not null,
        FechaProcesoArchivado					datetime not null,
        DiasTotalesHastaNotificacion			int not null,
        TiemposSla								int not null,
        DiasDiferenciaContraSla					int not null,
        FechaEstimadaNotificacion				datetime not null,
        DiasVencimiento							int not null,
        Observaciones							varchar(50) not null,
        IdRazonesRetrasoFK						int not null,
        IdEmisionPoFk							int not null
    );
    
    create table razonesRetraso (
		IdRazonesRetrasoPk						int not null auto_increment primary key,
        Razon									varchar(50) not null
    );
    
    create table emisionPo (
		IdEmisionPoPk							int not null auto_increment primary key,
        FechaElaboracion						datetime not null,
        FechaAprobacion							datetime not null,
        FechafirmaResponsable					datetime not null,
        FechaNotificacionProyecto				datetime not null,
        DiasTotalesEmision						int not null,
        DiasEstablecidosEmision					int not null,
        DiasDiferenciaEstablecidosGenerados		int not null
    );
    
#Creacion de las llavas foraneas

	alter table compra add constraint IdValorFk
	foreign key (IdValorFk) references
	valor (IdValorPk);
    
	alter table compra add constraint IdProcedimientoFk
	foreign key (IdProcedimientoFk) references
	procedimiento (IdProcedimientoPk);
    
    alter table compra add constraint IdTipoCompraFk
	foreign key (IdTipoCompraFk) references
	tipoCompra (IdTipoCompraPk);
    
    alter table compra add constraint IdSolicitanteFk
	foreign key (IdSolicitanteFk) references
	usuario (IdUsuarioPk);
    
    alter table compra add constraint IdLugarEntregaFk
	foreign key (IdLugarEntregaFk) references
	lugarEntrega (IdLugarEntregaPk);
    
    alter table compra add constraint IdProcesoFk
	foreign key (IdProcesoFk) references
	proceso (IdProcesoPk);
    
    alter table municipio add constraint IdDepartamentoFk
	foreign key (IdDepartamentoFk) references
	departamento (IdDepartamentoPk);
    
    alter table lugarEntrega add constraint IdMunicipioFk
	foreign key (IdMunicipioFk) references
	municipio (IdMunicipioPk);
    
    alter table usuario add constraint IdRolFk
	foreign key (IdRolFk) references
	rol (IdRolpk);
    
    alter table usuario add constraint IdProyectoFk
	foreign key (IdProyectoFk) references
	proyecto (IdProyectoPk);
    
    alter table proceso add constraint IdDevolucionFk
	foreign key (IdDevolucionFk) references
	devolucion (IdDevolucionPk);
    
    alter table proceso add constraint IdDelegacionAutoridadFk
	foreign key (IdDelegacionAutoridadFk) references
	delegacionAutoridad (IdDelegacionAutoridadPk);
    
    alter table proceso add constraint IdPublicacionFk
	foreign key (IdPublicacionFk) references
	publicacion (IdPublicacionPk);
    
    alter table proceso add constraint IdRevisionActaFk
	foreign key (IdRevisionActaFk) references
	revisionActa (IdRevisionActaPk);
    
    alter table proceso add constraint IdAprobacionFk
	foreign key (IdAprobacionFk) references
	aprobacion (IdAprobacionPk);
    
    alter table proceso add constraint IdFirmaProveedorFk
	foreign key (IdFirmaProveedorFk) references
	firmaProveedor (IdFirmaProveedorPk);
    
    alter table proceso add constraint IdEstadoFk
	foreign key (IdEstadoFk) references
	estado (IdEstadoPk);
    
    alter table proceso add constraint IdResponsableFk
	foreign key (IdResponsableFk) references
	usuario (IdUsuarioPk);
    
    alter table proceso add constraint IdPoFk
	foreign key (IdPoFk) references
	po (IdPoPk);
    
    alter table devolucion add constraint IdMotivoDevolucionFk
	foreign key (IdMotivoDevolucionFk) references
	motivoDevolucion (IdMotivoDevolucionPk);
    
    alter table po add constraint IdRazonesRetrasoFK
	foreign key (IdRazonesRetrasoFK) references
	razonesRetraso (IdRazonesRetrasoPk);
    
    alter table po add constraint IdEmisionPoFk
	foreign key (IdEmisionPoFk) references
	emisionPo (IdEmisionPoPk);