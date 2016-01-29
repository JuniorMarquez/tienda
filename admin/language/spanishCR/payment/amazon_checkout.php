<?php
//Payment page links
$_['text_amazon_checkout'] 			= '<a onclick="window.open(\'http://go.amazonservices.com/UKCBASPOpenCart. Html\');"><img src="view/image/payment/amazon.png" alt="Pagos amazon" title="Pagos amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join'] 				= '<a href="http://go.amazonservices.com/UKCBASPOpenCart. Html" title="Haga clic aquí para unirse a los pagos amazon">Haga clic aquí para crear su cuenta de pagos amazon</a>';

//Headings
$_['heading_title'] 				= 'Pagos amazon';
$_['text_home'] 					= 'Inicio';
$_['text_payment'] 					= 'Pago';

//Text
$_['text_cron_job_url'] 			= "Cron Job's URL:";
$_['help_cron_job_url'] 			= "Set a cron job to call this URL";
$_['text_cron_job_token'] 			= "Token secreto";
$_['help_cron_job_token'] 			= "Make this long and hard to guess";
$_['text_access_key'] 				= 'Llave de acceso:';
$_['text_access_secret'] 			= 'Llave secreto:';
$_['text_merchant_id'] 				= 'ID del comerciante:';
$_['text_marketplace'] 				= 'Mercado:';
$_['text_germany'] 					= 'Alemania';
$_['text_uk'] 						= 'Reino unido';
$_['text_checkout_mode'] 			= 'Modo pedido:';
$_['text_geo_zone'] 				= 'Zona geográfica:';
$_['text_status'] 					= 'Estado:';
$_['text_live'] 					= 'En vivo';
$_['text_sandbox'] 					= 'En prueba';
$_['text_sort_order'] 				= 'Orden:';
$_['text_minimum_total'] 			= 'Minimo de la orden:';
$_['text_all_geo_zones'] 			= 'Todas las zonas geográficas';
$_['text_status_enabled'] 			= 'Activado';
$_['text_status_disabled'] 			= 'Desactivado';
$_['text_default_order_status'] 	= 'Pendiente:';
$_['text_ready_order_status'] 		= 'Estado listo para ser enviado:';
$_['text_canceled_order_status'] 	= 'Estado orden cancelada:';
$_['text_shipped_order_status'] 	= 'Estado orden enviada:';
$_['text_last_cron_job_run'] 		= "Last cron job's run time:";
$_['text_allowed_ips'] 				= "IPs permitidas";
$_['text_add'] 						= "Agregar";
$_['text_upload_success'] 			= 'El archivo se cargó correctamente';
$_['help_adjustment'] 				= 'Los campos en negrilla y al menos un campo "-adj" son requeridos';
$_['help_allowed_ips'] 				= "Deje vacío si quiere que cualquier persona pueda ver el boton pago";

// buttons
$_['button_cancel'] 				= 'Cancelar';
$_['button_save'] 					= 'Grabar';

// errors
$_['error_permissions'] 			= 'No tiene permiso para modificar este modilo';
$_['error_empty_access_secret'] 	= 'Se requiere la llave secreta';
$_['error_empty_access_key'] 		= 'Se requiere la llave de acceso';
$_['error_empty_merchant_id'] 		= 'Se requiere el iD del comerciante';
$_['error_curreny'] 				= 'Su tienda debe tener la moneda %s instalada y activada';
$_['error_upload'] 					= 'Falló la carga';

// checkout button settings
$_['text_button_settings'] 			= 'Configuración del botón de pago';
$_['text_colour'] 					= 'Color:';
$_['text_orange'] 					= 'Anaranjado';
$_['text_tan'] 						= 'Marrón';
$_['text_white'] 					= 'Blanco';
$_['text_light']					= 'Claro';
$_['text_dark'] 					= 'Oscuro';
$_['text_size'] 					= 'Tamaño:';
$_['text_medium'] 					= 'Mediano';
$_['text_large'] 					= 'Grande';
$_['text_x_large'] 					= 'Extra grande';
$_['text_background'] 				= 'Fondo:';
$_['text_download'] 				= '<a href="%s">Descargar</a> archivo de plantilla';

// messages
$_['text_success'] 					= 'El módulo de pagos amazon ha sido actualizado';

// order info
$_['text_amazon_details'] 			= 'Detalles amazon';
$_['text_amazon_order_id'] 			= 'N° de iD de la orden de amazon:';
$_['text_upload'] 					= 'Subir';
$_['text_upload_template']			= 'Subir lo llenado en la plantilla al hacer clic en el botón de abajo. asegúrese de grabarlo como un archivo tab-delimited.';
$_['tab_order_adjustment'] 			= 'Ajuste de la orden';

//Table columns
$_['column_submission_id'] 			= 'Número de la petición';
$_['column_status'] 				= 'Estado';
$_['column_text'] 					= 'Respuesta';
$_['column_amazon_order_item_code'] = 'Código del producto amazon';
?>