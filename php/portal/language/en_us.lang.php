<?php
/*********************************************************************************
** The contents of este file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use este file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created por vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/


global $app_strings;
$app_strings = Array(
'customerportal'=>'Portal de clientes',
'LBL_LOGIN'=>'Iniciar sesión',
'LBL_USER_NAME'=>'Id de usuario:',
'LBL_PASSWORD'=>'Contraseña',
'LNK_HOME'=>'Inicio',
'LBL_WELCOME'=>'Bienvenido',
'LNK_LOGOUT'=>'Salir',

//Tickets Language Strings
'LBL_NEW_TICKET'=>'Nuevo Ticket',
'LBL_MY_OPEN_TICKETS'=>'Mis Tickets Abiertos',
'LBL_CLOSED_TICKETS'=>'Tickets Cerrados',
'TICKETID'=>'Ticketid',
'TICKET_TITLE'=>'Título',
'TICKET_PRIORITY'=>'Prioridad',
'TICKET_STATUS'=>'Estado',
'TICKET_CATEGORY'=>'Categoría',
'TICKET_MATCH' =>'Match',
'LBL_NONE_SUBMITTED'=>'No se han enviado Tickets',
'LBL_CREATE_NEW_TICKET'=>'Crear Nuevo Ticket',
'LBL_PRODUCT_NAME'=>'Nombre de Producto',
'LBL_SERVICE_CONTRACTS'=>'Contratos de Servicio',
'LBL_TICKET_PRIORITY'=>'Prioridad de Ticket',
'LBL_TICKET_SEVERITY'=>'Gravedad de Ticket',
'LBL_TICKET_CATEGORY'=>'Categoría de Ticket',
'LBL_DESCRIPTION'=>'Descripción',
'LBL_CLOSE_TICKET'=>'Cerrar este ticket',
'LBL_COMMENT_BY'=>'Comentado por',
'NO_ATTACHMENTS'=>'No hay adjuntos disponibles',
'LBL_FILE_UPLOADERROR'=>'Error en carga de archivo:',
'LBL_ATTACH_FILE'=>'Adjuntar Archivo :',
'LBL_ATTACH'=>'Adjuntar',
'NONE' =>'Ninguno',
'LBL_SEARCH'=>'Buscar',
'LBL_TICKETS'=>'Tickets',
'LBL_STATUS_CLOSED'=>'Closed',//Do not convert este label. This is used to check the status. If the status 'Cerrard' is changed in vtigerCRM server side then you will give the exact value of status 'Cerrard' which is in vtigerCRM server.
'LBL_NEW_INFORMATION'=>'Por favor ingrese la información requerida en los siguientes campos para enviar un ticket.',
'LBL_TICKET_ID'=>'Ticket Id',
'LBL_STATUS'=>'Estado',
'LBL_ON'=>'Encendido',
'LBL_NOTSET_UPLOAD_DIR'=>'USTED NO HA ESTABLECIDO EL DIRECTORIO UPLOAD EN EL ARCHIVO CONFIG',
'LBL_GIVE_VALID_FILE'=>'Sírvase proveer un archivo válido para la carga!',
'LBL_UPLOAD_FILE_LARGE'=>'Lo sentimos, el archivo cargado excede el tamaño máximo de archivo permitido. Por favor intente con un archivo mas pequeño',
'LBL_PROBLEM_UPLOAD'=>'Se han experimentado problemas en la carga del archivo. Por favor intente nuevamente!',
'LBL_FILE_HAS_NO_CONTENTS'=>'El archivo no tiene contenido, por esta razón no se puede cargar el archivo',
'LBL_UPLOAD_VALID_FILE'=>'Por favor cargue un archivo válido.',
'LBL_PROBLEM_IN_TICKET_SAVING'=>'<br> Existe un problema al guardar el Ticket. Por favor chequee si el ticket ha sido creado o no',
'LBL_ALL'=>'Todos',
'LBL_ANY'=>'Cualquiera',
//Tickets Block Nombre
'Ticket Information'=>'Información del Ticket',
'Description Information'=>'Información de descripción',
'Solution Information'=>'Información de solución',
'LBL_TICKET_COMMENTS' =>'Comentarios',
'LBL_ADD_COMMENT'=>'Agregar comentario',
'LBL_ATTACHMENTS'=>'Adjuntos',
'LBL_MAIL_SENT' => 'Correo enviado satisfactoriamente', 
//Tickets Fields
'Title' =>'Título',
'Assigned To' =>'Asignado a',
'Priority' =>'Prioridad',
'Severity' =>'Gravedad',
'Hours' =>'Horas',
'Days' =>'Días',
'Ticket No' =>'Ticket No',
'Related to' =>'Relacionado a',
'Product Name' =>'Nombre de Producto',
'Status' =>'Estado',
'Category' =>'Categoría	',
'Description' =>'Descripción',
'Solution' =>'Solución',

//My settings
'LBL_CHANGE_PASSWORD'=>'Cambiar contraseña',
'LBL_OLD_PASSWORD'=>'Contraseña anterior',
'LBL_NEW_PASSWORD'=>'Nueva Contraseña',
'LBL_CONFIRM_PASSWORD'=>'Confirmar Contraseña',
'LBL_MY_DETAILS'=>'Mis detalles',
'LBL_LAST_LOGIN'=>'Ultimo ingreso',
'LBL_SUPPORT_START_DATE'=>'Fecha de inicio de soporte',
'LBL_SUPPORT_END_DATE'=>'Fecha de finalización de soporte',
'MSG_PASSWORD_CHANGED'=>'La clave ha sido cambiada satisfactoriamente.',
'MSG_ENTER_NEW_PASSWORDS_SAME'=>'La clave nueva y la confirmación no coinciden',
'MSG_YOUR_PASSWORD_WRONG'=>'Contraseña anterior incorrecta.',

//Added fields for Knowledge Base details
'LBL_KNOWLEDGE_BASE'=>'Base de conocimiento',
'LBL_COMMENTS'=>'Comentarios',
'LNK_CATEGORY'=>'Categoría',
'LNK_PRODUCTS'=>'Productos',
'LBL_SEARCH_RESULT'=>'Buscar resultados:',
'LBL_NO_FAQ_IN_THIS_CATEGORY'=>'No existen artículos en esta categoría.',
'LBL_NO_FAQ_IN_THIS_PRODUCT'=>'No existen artículos en este producto.',
'LBL_NO_FAQ'=>'No existen artículos.',
'LBL_NO_FAQ_IN_THIS_SEARCH_CRITERIA'=>'No existen artículos que coincidan con el criterio de búsqueda especificado.',
'LBL_PRODUCT'=>'Producto',
'LBL_ADDED_ON'=>'Agregado en : ',
'LBL_FAQ_ID'=>'Faq Id',
'LBL_PRINT_THIS_PAGE'=>'Imprimir esta página',
'LBL_EMAIL_THIS_PAGE'=>'Enviar por correo esta página',
'LBL_ADD_TO_FAVORITES'=>'Agregar a favoritos',
'LBL_RECENTLY_CREATED'=>'Artículos creados recientemente',
'LBL_CREATED_DATE'=>'Fecha de creación',
'LBL_MODIFIED_DATE'=>'Fecha de modificación',
'KBASE_DETAILS'=>'La base de conocimiento está organizada en ambas categorías y productos, por favor seleccione una categoría o producto en el cual se encuentre interesado.
Adicionalmente, usted también puede buscar en toda la base de conocimiento ingresando palabras clave abajo.',
'LBL_DOCUMENTS' =>'Documentos relacionados',
'LBL_FAQ_TITLE' =>'Título de la base de conocimiento',
'LBL_FAQ_DETAIL'=>'Detalle de la base de conocimiento',
'LBL_ARTICLE_INTERESTED'=>'Aquí se encuentra un artículo en el cual podría estar interesado:',
'LBL_PRESS_CNTR_D'=>'Presione Ctrl+D',

//Contacts
'Contact Information'=>'Información de contacto',
'Customer Portal Information'=>'Información de portal de clientes',
'Address Information'=>'Información de dirección',
'Description Information'=>'Información de descripción',
'Custom Information'=>'Información personalizada',

'First Name'=>'Nombres',
'Contact Id'=>'Id Contacto',
'Office Phone'=>'Teléfono oficina',
'Last Name'=>'Apellidos',
'Mobile'=>'Mobile',
'Lead Source'=>'Fuente de Pre-Contacto',
'Home Phone'=>'Teléfono domicilio',
'Other Phone'=>'Otro teléfono',
'Department'=>'Departmento',
'Fax'=>'Fax',
'Email'=>'Correo electrónico',
'Mailing Street'=>'Calle de envío',
'Mailing Po Box'=>'PO Box de envío',
'Mailing City'=>'Ciudad de envío',
'Mailing State'=>'Estado de envío',
'Mailing Postal Code'=>'Código postal de envío',
'Mailing Country'=>'País de envío',
'Mailing Zip'=>'ZIP de envío',
'Other Zip'=>'Otro ZIP',
'Other Street'=>'Otra calle',
'Other Po Box'=>'Otro PO Box',
'Other City'=>'Otra ciudad',
'Other State'=>'Otro estado',
'Other Postal Code'=>'Otro código postal',
'Other Country'=>'Otro país',
'Description Information'=>'Información de descripción',
'LBL_CONTACTS'=>'Contactos',
'Assistant'=>'Asistente',
'Birthdate'=>'Cumpleaños',
'Assistant Phone'=>'Teléfono asistente',
'Reports To'=>'Reporta a',
'Yahoo Id'=>'Yahoo Id',
'Do Not Call'=>'No llamar',
'Reference'=>'Referencia',
'Support End Date'=>'Fecha de finalización de soporte',

//products
'LBL_PRODUCT_INFORMATION'=>'Productos',
//Producto Block Nombre
'Product Information'=>'Información de producto',
'Pricing Information:'=>'Información de precios:',
'Stock Information:'=>'Información de Stock:',
'Description Information'=>'Información de descripción',
//Productos Fields
'Product Name'=>'Nombre de Producto',
'Product Active'=>'Producto activo',
'Sales Start Date'=>'Fecha de inicio de ventas',
'Product Category'=>'Categoría de Producto',
'Sales End Date'=>'Fecha de finalización de ventas',
'Vendor Name'=>' Nombre de Vendedor',
'Vendor PartNo'=>'PartNo de Vendor',
'Product Sheet'=>'Hoja de Producto',
'Product No'=>'No Producto',
'Part Number'=>'Número de parte',
'Manufacturer'=>'Fabricante',
'Support Start Date'=>'Fecha de inicio de soporte',
'Support Expiry Date'=>'Fecha de caducidad de soporte',
'Website'=>'Sitio web',
'Mfr PartNo'=>'Número de parte Mfr ',
'Serial No'=>'No de Serie ',
'GL Account'=>'Cuenta GL',
'Unit Price'=>'Precio unitario',
'Commission Rate'=>'Porcentaje de comisión',
'Usage Unit'=>'Unidad de uso',
'Qty/Unit'=>'Cantidad/Unidad',
'Qty In Stock'=>'Cantidad en Stock',
'Reorder Level'=>'Reordenar nivel',
'Handler'=>'Manejador',
'Qty In Demand'=>'Cantidad en demanda',
'Description'=>'Descripción',

//Quotes
'LBL_QUOTE_INFORMATION'=>'Cotizaciones',
//Quotes Block Nombre
'Quote Information'=>'Información de cotización',
'Address Information'=>'Información de dirección',
'Terms & Conditions'=>'Términos y condiciones',
'Description Information'=>'Información de Descripción',
//Quotes Fields
'(Download PDF) Subject'=>'(Descargar PDF) Asunto---',
'Potential Name'=>'Nombre de oportunidad',
'Quote No'=>'No Cotización',
'Quote Stage'=>'Etapa de cotización',
'Valid Till'=>'Válido hasta',
'Contact Name'=>'Nombre de Contacto',
'Carrier'=>'Portador',
'Shipping'=>'Envío',
'Inventory Manager'=>'Administrador de inventario',
'Account Name'=>'Nombre de organización',
'Billing Address'=>'Dirección (Facturación)',
'Billing Po Box'=>'Po Box (Facturación)',
'Billing City'=>'Ciudad (Facturación)',
'Billing State'=>'Estado (Facturación)',
'Billing Code'=>'Código (Facturación)',
'Billing Country'=>'País (Facturación)',
'Shipping Address'=>'Dirección (Envío)',
'Shipping Po Box'=>'Po Box (Envío)',
'Shipping City'=>'Ciudad (Envío)',
'Shipping State'=>'Estado (Envío)',
'Shipping Code'=>'Código (Envío)',
'Shipping Country'=>'País (Envío)',
'Terms & Conditions'=>'Términos y condiciones',
'Description'=>'Descripción',
'LBL_PDF_CANNOT_GENERATE'=>'No se puede generar PDF',

//Invoices
'LBL_INVOICE_INFORMATION'=>'Facturas',
'Invoice Information'=>'Información de facturación',
'Address Information'=>'Información de dirección',
'Terms & Conditions'=>'Términos y condiciones',
'Description Information'=>'Información de Descripción',
'(Download PDF) Subject'=>'(Descargar PDF) Asunto',
'Invoice No'=>'No Factura',
'Customer No'=>'No Cliente ',
'Invoice Date'=>'Fecha de factura',
'Due Date'=>'Fecha de vencimiento',
'Excise Duty'=>'Impuestos especiales',
'Sales Commission'=>'Comisión de ventas',
'State'=>'Estado',
'Billing Address'=>'Dirección (Facturación)',
'Billing Po Box'=>'Po Box (Facturación)',
'Billing City'=>'Ciudad (Facturación)',
'Billing State'=>'Estado (Facturación)',
'Billing Code'=>'Código (Facturación)',
'Billing Country'=>'País (Facturación)',
'Shipping Address'=>'Dirección (Envío)',
'Shipping Po Box'=>'Po Box (Envío)',
'Shipping City'=>'Ciudad (Envío)',
'Shipping State'=>'Estado (Envío)',
'Shipping Code'=>'Código (Envío)',
'Shipping Country'=>'País (Envío)',
'Terms & Conditions'=>'Términos y condiciones',
'Description'=>'Descripción',

//Documents
'LBL_NOTES_INFORMATION'=>'Documentos',
'Basic Information'=>'Información Basica',
'File Information'=>'Información de Archivo',
'Description'=>'Descripción',
'Title'=>'Título',
'Folder Name'=>'Nombre de carpeta',
'Version'=>'Versión',
'Document No'=>'No Documento',
'Download Type'=>'Tipo de descarga',
'File Name'=>'Nombre de archivo',
'File Type'=>'Nombre de archivo',
'Active'=>'Activo',
'File Size'=>'Tamaño de Archivo',
'Download Count'=>'Contador de descargas',
'Note'=>'Nota',

//Servicios
'LBL_SERVICE' =>'Servicios',
'Service Information'=>'Información de Servicio',
'Pricing Information:'=>'Información de Precios:',
'Description Information'=>'Información de Descripción',
'Service Name'=>'Nombre de servicio',
'Service No'=>'No de Servicio',
'Usage Unit'=>'Unidad de uso',
'Service Active'=>'Servicio activo',
'No of Units'=>'No de unidades',
'Service Active'=>'Servicio Activo',
'No of Units'=>'No de unidades',
'Website'=>'Sitio web',
'Service Category'=>'Categoría de Servicio',
'Owner'=>'Propietarios',
'Sales Start Date'=>'Fecha de inicio de ventas',
'Sales End Date'=>'Fecha de finalización de ventas',
'Support Start Date'=>'Fecha de inicio de soporte',
'Support Expiry Date'=>'Fecha de caducidad de soporte',
'Price'=>'Precio',
'Commission Rate'=>'Porcentaje de comisión',

//Accounts
'Account Information'=>'Información de Organización',
'Address Information'=>'Información de dirección',
'Description Information'=>'Información de Descripción',
'Account No'=>'No Organización',
'Website'=>'Sitio web',
'Phone'=>'Teléfono',
'Ticker Symbol'=>'Símbolo de Ticker',
'Member Of'=>'Miembro de',
'Other Phone'=>'Otro teléfono',
'Employees'=>'Empleados',
'Email'=>'Correo electrónico',
'Other Email'=>'Otro correo electrónico',
'Ownership'=>'Propiedad',
'industry'=>'industria',
'Rating'=>'Clasificación',
'Type'=>'Tipo',
'SIC Code'=>'Código SIC',
'Email Opt Out'=>'Correo Opt Salida',
'Annual Revenue'=>'Ingresos anuales',
'Assigned To'=>'Asignado a',
'Notify Owner'=>'Notificar dueño',
'Billing Address'=>'Dirección (Facturación)',
'Billing Po Box'=>'Po Box (Facturación)',
'Billing City'=>'Ciudad (Facturación)',
'Billing State'=>'Estado (Facturación)',
'Billing Code'=>'Código (Facturación)',
'Billing Country'=>'País (Facturación)',
'Shipping Address'=>'Dirección (Envío)',
'Shipping Po Box'=>'Po Box (Envío)',
'Shipping City'=>'Ciudad (Envío)',
'Shipping State'=>'Estado (Envío)',
'Shipping Code'=>'Código (Envío)',
'Shipping Country'=>'País (Envío)',

//Customer Authenticate
'LBL_CANNOT_CONNECT_SERVER'=>'No se pudo conectar al servidor. Por favor contacte al administrador.',
'LBL_ENTER_VALID_USER'=>'Por favor ingrese un nombre de usuario y clave válidos',
'LBL_VERSION_INCOMPATIBLE'=>'La versión no es compatible',
'LBL_NO_PERMISSION_FOR_ANY_MODULE'=>'NO TIENE PERMISO PARA VISUALIZAR NINGUN MODULO',

//General
'LBL_SUBMIT'=>'Enviar',
'LBL_CANCEL_ALT'=>'Cancelar[Alt+X]',
'LBL_SAVE_ALT'=>'Guardar[Alt+S]',
'LBL_CANCEL'=>'Cancelar',
'LBL_SAVE'=>'Guardar',
'LBL_BACK_BUTTON'=>'Regresar',
'LBL_NOT_AUTHORISED'=>'Usted no está autorizado a acceder a esta información',
'SHOW'=>'Mostrar',
'MINE' =>'Mío',
'ALL' =>'Todo',
'LBL_FORGOT_LOGIN'=>'Olvidó su clave?',
'LBL_YOUR_EMAIL'=>'Correo electrónico :',
'LBL_SEND_PASSWORD'=>'Enviar clave',
'LBL_CLOSE'=>'Cerrar',
'LBL_LOGIN_NOTE'=>'Correo electrónico y clave distingue entre mayúsculas y minúsculas.',
'LBL_MY_SETTINGS'=>'Mis preferencias',
'LBL_PORTAL_HOME'=> 'Inicio Portal',
'LBL_LOG_OUT'=>'Terminar sesión',
'QUOTE_RELATED'=>'Cotizaciones relacionadas ',
'INVOICE_RELATED'=>'Facturas relacionadas ',
'LBL_NOT_AVAILABLE'=>'No disponible',
'LBL_EMAILID'=>'Correo electrónico :',
'Created Time' =>'Fecha de creación',
'Modified Time' =>'Fecha de modificación',
'LBL_LANGUAGE'=>'Lenguaje',
'Related To' =>'Relacionado a',
'MODULE_INACTIVE'=>'Módulo inactivo',

// Tab names
'HelpDesk' 	=>'Tickets',
'Faq' 		=>'Base de conocimiento',
'Accounts' 	=>'Organización',
'Contacts' 	=>'Contactos',
'Products' 	=>'Productos',
'Services'	=>'Servicios',
'Quotes'	=>'Cotizaciones',
'Invoice' 	=>'Facturas',
'Documents'	=>'Documentos',
'HelpDesk' 			=> 'Tickets',
'Faq' 				=> 'Base de conocimiento',
'Accounts' 			=> 'Organización',
'Contacts' 			=> 'Contactos',
'Products' 			=> 'Productos',
'Services'			=> 'Servicios',
'Quotes'			=> 'Cotizaciones',
'Invoice' 			=> 'Facturas',
'Documents'			=> 'Documentos',
'MORE_THAN_ONE_USER'=>'Existe mas de un usuario con estos detalles. Por favor contacte al administrador.',
'INVALID_USERNAME_OR_PASSWORD'=>'Nombre de usuario o clave inválido',
'LBL_CATEGORY' => 'Categoría',
'Open'=>'Abierto',
'In Progress'=>'En progreso',
'Wait For Response'=>'Esperando respuesta',
'Closed'=>'Cerrado' ,
'LBL_ANSWER'=>'RESPUESTA : ',
'LBL_ASSET_INFORMATION' => 'Información de recursos',

// Projects & Project Tasks
'LBL_PROJECT_INFORMATION' => 'Projectos',
'LBL_PROJECT_TASKS' => 'Tareas de proyecto',
'LBL_PROJECT_MILESTONES' => 'Hitos de proyecto',
'LBL_PROJECT_TICKETS' => 'Tickets de proyecto',
'LBL_RAISE_TICKET_BUTTON' => 'Crear Ticket',
'ProjectTask' => 'Tarea de proyecto',
'Project Tasks' => 'Tareas de proyecto',
'ProjectMilestone' => 'Hito de proyecto',
'Project Milestones' => 'Hitos de proyecto',

'Project Name' => 'Nombre de proyecto',
'Start Date' => 'Fecha de inicio',
'Target End Date' => 'Fecha de finalización planificada',
'Actual End Date' => 'Fecha de finalización real',
'Status' => 'Estado',
'Type' => 'Tipo',
'Related To' => 'Relacionado a',
'Target Budget' => 'Presupuesto objetivo',
'Project Url' => 'Url',
'description' => 'Descripción',
'Project Task Number' => 'Código de tarea',
'Project Task Name' => 'Nombre de tarea',
'End Date' => 'Fecha de finalización',
'Type' => 'Tipo',
'Progress' => 'Progreso',
'Priority' => 'Prioridad',
'Milestone' => 'Hito',
'Assigned To' => 'Asignado a',
'Project Milestone Name' => 'Nombre de hito',
'Milestone Date' => 'Fecha de hito',
'LBL_PROJECT_DOCUMENTS' => 'Documentos de proyecto',

'Hi' => 'Hola',
'Dear' => 'Estimado',
'LBL_PORTAL_BODY_MAILINFO' => 'El Ticket es',
'LBL_DETAIL' => 'los detalles son :',
'LBL_REGARDS' => 'Saludos',
'LBL_TEAM' => 'Equipo de soporte',
'LBL_TICKET_DETAILS' => 'Detalles de Ticket',
'LBL_SUBJECT' => 'Asunto : ',
'created' => 'Creado',
'replied' => 'Respondido',
'reply'=>'Existe una respuesta a',
'customer_portal' => 'en el "Portal de atención al cliente" en SoftBuilder.',
'link' => 'Usted puede usar el siguiente enlace para ver las respuestas realizadas:',
'Thanks' => 'Gracias',
'Support_team' => 'Equipo de soporte - SoftBuilder',
'The comments are' => 'Los comentarios son',
'Ticket Title' => 'Título Ticket',
'Re' => 'Re :',

);

?>
