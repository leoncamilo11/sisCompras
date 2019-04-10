#Inserat datos en las tablas estaticas

	use controlcomprasdb;
    
    insert into procedimiento (Procedimiento) values
    ("CC"),
    ("LA"),
    ("LC"),
    ("CD"),
    ("LoA"),
    ("LTA");
    
    insert into tipoCompra (TipoCompra) values
    ("Bienes"),
    ("Servicios");
    
    insert into rol (Rol) values
    ("Solicitante"),
    ("Responsable"),
    ("Administrador");
    
    insert into proyecto (Proyecto) values
    ("Proyecto 1"),
    ("Proyecto 2"),
    ("Proyecto 3"),
    ("Proyecto 4"),
    ("No aplica");
    
    insert into motivoDevolucion (Motivo) values
    ("Error en Diligenciamiento de Formatos"),
    ("Sin Soportes Completos"),
    ("Especificaciones Técnicas Incompletas"),
    ("Requisición Sin Aprobación"),
    ("Sin Visto Bueno o Validaciones"),
    ("Proveedor Sin Crear"),
    ("Sin Presupuesto Suficiente"),
    ("Otro");
    
	insert into estado (Estado) values
    ("Adjudicado"),
    ("Publicado"),
    ("Solicitud de Consecutivo, Sin Envio de Terminos"),
    ("Términos Devueltos al Proyecto para Ajustes"),
    ("Términos en Revisión del Equipo de Compras"),
    ("Términos en Revisión de Roma para Delegación"),
    ("Envio de Ofertas al Proyecto"),
    ("En Evaluación Técnica por Parte del Proyecto"),
    ("En Evaluación Económica Colombia"),
    ("En Evaluación Técnica Roma"),
    ("En Evaluación Económica Roma"),
    ("En Firma de Acta de Evaluación"),
    ("En Revisión Roma para Delegación"),
    ("En Revición de CLC"),
    ("En Espera de Requisición"),
    ("En Elaboración de PO/Contrato"),
    ("En Firma de Representante"),
    ("Enviado para Firma del Proveedor"),
    ("PO en Aprobación"),
    ("Proceso Cancelado"),
    ("Nueva Revisión por Parte del Proyecto"),
	("Revisión LTO");
    
    insert into razonesRetraso (Razon) values
    ("Demoras por Firmas"),
    ("Demoras en Aprobación del Budget Holder"),
    ("Demoras Causadas por el Proveedor"),
    ("Demoras del Comité Local"),
    ("Demoras por Revisión Técnica del Proyecto"),
    ("Demoras por Vistos Buenos de Roma"),
    ("Proyecto Sin Suficiente Presupuesto"),
    ("Proceso Fallido"),
    ("Otro");
    
    