<?php
//heading
$_['heading_title']             	= 'Configuración';

// text
$_['text_success']              	= 'Operación exitosa: ha modificado configuración!';
$_['text_items']                	= 'Items';
$_['text_product']              	= 'Productos';
$_['text_voucher']              	= 'Vales descuento';
$_['text_tax']                  	= 'Impuestos';
$_['text_account']              	= 'Cuenta';
$_['text_checkout']             	= 'Pedido';
$_['text_stock']                	= 'Inventario';
$_['text_affiliate']            	= 'Afiliados';
$_['text_return']               	= 'Devoluciones';
$_['text_image_manager']        	= 'Gestor de imágenes';
$_['text_browse']               	= 'Seleccionar';
$_['text_clear']                	= 'Quitar imagen';
$_['text_shipping']             	= 'Dirección de envío';
$_['text_payment']              	= 'Dirección de pago';
$_['text_mail']                 	= 'Correo';
$_['text_smtp']                 	= 'SMTP';

// entry
$_['entry_name']                	= 'Nombre de la tienda:';
$_['entry_owner']               	= 'Representante Legal:';
$_['entry_id']             			= 'Cédula (Física/Jurídica):';
$_['entry_address']             	= 'Dirección:';
$_['entry_email']               	= 'Email:';
$_['entry_telephone']           	= 'Teléfono:';
$_['entry_fax']                 	= 'Fax:';
$_['entry_title']               	= 'Título:';
$_['entry_meta_description']    	= 'Descripción etiquetas meta:';
$_['entry_layout']              	= 'Ubicación predeterminada:';
$_['entry_template']            	= 'Plantilla:';
$_['entry_country']             	= 'País:';
$_['entry_zone']                	= 'Ciudad / provincia:';
$_['entry_language']            	= 'Idioma:';
$_['entry_admin_language']      	= 'Idioma de administración:';
$_['entry_currency']            	= 'Moneda:<br /><span class="help">Cambie la moneda predeterminada. Limpie el cache del explorador para ver los cambios y resetee su cookie existente.</span>';
$_['entry_currency_auto']       	= 'Auto actualizar moneda:<br /><span class="help">Configure su tienda para que actualice automaticamente su moneda diariamente.</span>';
$_['entry_length_class']        	= 'Tipo de medida:';
$_['entry_weight_class']        	= 'Tipo de peso:';
$_['entry_catalog_limit'] 	    	= 'Artículos por página (Catálogo):<br /><span class="help">Determina cuantós artículos del catálogo son mostrados por página (productos, categoras, etc)</span>';
$_['entry_admin_limit']   	    	= 'Artículos por página (Admin):<br /><span class="help">Determina cuantós artículos de la administración son mostrados por página (órdenes, clientes, etc)</span>';
$_['entry_product_count']       	= 'Contador de productos en la categoria:<br /><span class="help">Muestra el numero de productos dentro de las subcategorias en el menu categorias. tenga cuidad pues el rendimiento de la tienda cae si se tienen muchas subcategorias!</span>';
$_['entry_review']       	    	= 'Permitir comentarios:<br /><span class="help">Activa/Desactiva entrar nuevos comentarios y muestra los ya existentes</span>';
$_['entry_download']            	= 'Permitir descargas:';
$_['entry_upload_allowed']      	= 'Permitir recepcionar ficheros con las extensiones:<br /><span class="help">Añade las extensiones de ficheros que se permiten recepcionar. separados por coma.</span>';
$_['entry_voucher_min']         	= 'Vale min:<br /><span class="help">Importe minimo de vale descuento que se permite a un cliente.</span>';
$_['entry_voucher_max']         	= 'Vale max:<br /><span class="help">Importe máximo de vale descuento que se permite a un cliente.</span>';
$_['entry_tax']                 	= 'Ver precios con impuesto:';
$_['entry_vat']                 	= 'Validar el número vAT:<br /><span class="help">Validatar el número vAT con http://ec.europa.eu service.</span>';
$_['entry_tax_default']         	= 'Usa la dirección de la tienda para los impuestos:<br /><span class="help">Usa la direccion de la tienda para calcular los impuestos si no hay nadie logeado. Puedes seleccionar el uso de la direccion de envío del cliente o la direccion de pago.</span>';
$_['entry_tax_customer']        	= 'Usa la dirección del cliente para calcular los impuestos:<br /><span class="help">Usa la direccion del cliente para calcular los impuestos. Puedes seleccionar el uso de la direccion de envío del cliente o la direccion de pago.</span>';
$_['entry_customer_online']        	= 'Clientes online:<br /><span class="help">Sigue a los clientes online desdela seccion de informes de clientes.</span>';
$_['entry_customer_group']         	= 'Grupo de cliente:<br /><span class="help">Grupo de clientes por defecto.</span>';
$_['entry_customer_group_display'] 	= 'Grupos de clientes:<br /><span class="help">Muestra los grupos de clientes que los nuevos clientes pueden seleccionar para ser usados por mayoristas y empresas cuando se dan de alta.</span>';
$_['entry_customer_price']         	= 'Muestra precios al Logearse:<br /><span class="help">Sólo muestra precios cuando un cliente se logea.</span>';
$_['entry_account']                	= 'Condiciones de la cuenta de usuario:<br /><span class="help">Fuerza al cliente a aceptar las condiciones de la cuenta antes de que se pueda dar de alta.</span>';
$_['entry_cart_weight']            	= 'Muestra el peso en la página del carro:<br /><span class="help">Muestra el peso total de los productos comprados en la página del carro</span>';
$_['entry_guest_checkout']         	= 'Checkout de invitados:<br /><span class="help">Permite a los clientes checkout sin crear una cuenta. esto no estará disponible cuando se trate de un producto con descarga.</span>';
$_['entry_checkout']               	= 'Condiciones de checkout:<br /><span class="help">Fuerza a la gente a estar de acuerdo con las condiciones de la cuenta antes de que se pueda hacer checkout.</span>';
$_['entry_order_edit']          	= 'Editar pedido:<br /><span class="help">Número de dias permitidos para editar un pedido. este es requerido ya que los precios y descuentos podrian cambiar corrompiendo el pedido si se edita.</span>';
$_['entry_invoice_prefix']      	= 'Prefijo de factura:<br /><span class="help">Configure el prefijo de la factura (ejemplo fAC-2011-00). iD de factura comenzará con 1 por cada prefijo único</span>';
$_['entry_customer_group']      	= 'Grupo de clientes:<br /><span class="help">Grupo de clientes predeterminado.</span>';
$_['entry_customer_price']      	= 'Conectado muestra precios:<br /><span class="help">Solo muestra precios cuando el cliente se conecta.</span>';
$_['entry_customer_approval']   	= 'Aprueba nuevos clientes:<br /><span class="help">No permitir que nuevos clientes se conecten hasta que sus cuentas sean aprobadas.</span>';
$_['entry_guest_checkout']      	= 'Pagar como invitado:<br /><span class="help">Permite a clientes pagar sin crear una cuenta. esto podría no esta disponible cuando un producto descargable está en su carro de compras.</span>';
$_['entry_account']             	= 'Términos de cuenta:<br /><span class="help">Forzar antes a los clientes a estar de acuerdo con los términos para que una cuenta pueda ser creada.</span>';
$_['entry_checkout']            	= 'Téminos de pago:<br /><span class="help">Forzar antes a los clientes a estar de acuerdo con los términos para que cliente pueda pagar.</span>';
$_['entry_affiliate']           	= 'Términos de afiliado:<br /><span class="help">Forzar antes a los clientes a estar de acuerdo con los términos para que una cuenta de afiliado pueda ser creada.</span>';
$_['entry_commission']          	= 'Comisión afiliado (%):<br /><span class="help">Porcentaje predeterminado de comisión para afiliado.</span>';
$_['entry_return']              	= 'Condiciones para la devolución:<br /><span class="help">Obliga al cliente a aceptar las condiciones de devolución antes de que se pueda crear una devolución.</span>';
$_['entry_stock_display']       	= 'Mostrar inventario:<br /><span class="help">Muestra cantidad de inventario en la página de productos.</span>';
$_['entry_stock_warning']      	 	= 'Muestra advertencia de agotado:<br /><span class="help">Mostrar mensaje de agotado en la página del carro de compras si un producto se encuentra agotado y el campo compra de producto agotado es sI. (Aviso: siempre se muestra si el campo compra de producto agotado es nO)</span>';
$_['entry_stock_checkout']      	= 'Compra de producto agotado:<br /><span class="help">Permite a los clientes a continuar el proceso de pago aunque los productos que han ordenado no se encuentran en existencia.</span>';
$_['entry_stock_status']        	= 'Estado de inventario agotado:<br /><span class="help">Configure el estado predeterminado de inventario agotado seleccionado en edición de producto.</span>';
$_['entry_order_status']        	= 'Estado orden:<br /><span class="help">Configure el estado predeterminado de la orden cuando es procesada.</span>';
$_['entry_complete_status']     	= 'Estado orden completa:<br /><span class="help">Configure el estado que la orden de los clientes deben alcanzar antes que puedan accesar sus productos descargables y certificados de regalos.</span>';
$_['entry_return_status']       	= 'Estado de devolución:<br /><span class="help">Configure el estado predeterminado de la devolución cuando una solicitud es recibida.</span>';
$_['entry_review']       	    	= 'Permitir comentarios:<br /><span class="help">Habilitar/Deshabilitar nuevos comentarios y mostrar los existentes</span>';
$_['entry_download']            	= 'Permitir descargas:';
$_['entry_upload_allowed']      	= 'Extensiones de archivos permitidas para subir:<br /><span class="help">Adicione los tipos de extensiones de archivos que serán permitidas a subir.  use valores separados por comas.</span>';
$_['entry_cart_weight']         	= 'Mostrar peso en la pägina del carro:<br /><span class="help">Mostrar el peso del carro en la página del carro de de compras</span>';
$_['entry_logo']                	= 'Logotipo tienda:';
$_['entry_icon']                	= 'Icono:<br /><span class="help">El ícono debe ser un archivo pNG de 16px x 16px.</span>';
$_['entry_image_category']         = 'Tamaño imagen de la categoría:';
$_['entry_image_thumb']         	= 'Tamaño imagen miniatura del producto:';
$_['entry_image_popup']         	= 'Tamaño imagen emergente del producto:';
$_['entry_image_product']       	= 'Tamaño imagen lista del producto:';
$_['entry_image_additional']    	= 'Tamaño imagen adicional del producto:';
$_['entry_image_related']       	= 'Tamaño imagen producto relacionado:';
$_['entry_image_compare']       	= 'Tamaño imagen de comparar:';
$_['entry_image_wishlist']      	= 'Tamaño imagen de Lista deseo:';
$_['entry_image_cart']          	= 'Tamaño imagen del carro de compras:';
$_['entry_ftp_host']            	= 'FTPhost:';
$_['entry_ftp_port']            	= 'FTP port:';
$_['entry_ftp_username']        	= 'FTP usuaruio:';
$_['entry_ftp_password']        	= 'FTP password:';
$_['entry_ftp_root']            	= 'FTP root:<span class="help">El directorio de su instalación oC se guarda normalmente \'public_html/\'.</span>';
$_['entry_ftp_status']          	= 'Activa fTP:';
$_['entry_mail_protocol']       	= 'Protocolo correo:<span class="help">Solo escoja \'Mail\' a menos que su host haya deshabilitado la funcion php mail.';
$_['entry_mail_parameter']      	= 'Parámetros correo:<span class="help">Cuando use \'Mail\', parámetros adicionales del correo pueden ser adicionados aca (ejemplo "-femail@storeaddress.com".';
$_['entry_smtp_host']           	= 'SMTPhost:';
$_['entry_smtp_username']       	= 'SMTP nombre usuario:';
$_['entry_smtp_password']       	= 'SMTP clave:';
$_['entry_smtp_port']           	= 'SMTP puerto:';
$_['entry_smtp_timeout']        	= 'SMTP tiempo espera:';
$_['entry_account_mail']        	= 'Correo de alerta nueva cuenta:<br /><span class="help">Envía un email a la tienda cuando una nueva cuenta se ha registrado.</span>';
$_['entry_alert_mail']          	= 'Correo de alerta nueva orden:<br /><span class="help">Envía un email a la tienda cuando una nueva orden es creada.</span>';
$_['entry_alert_emails']        	= 'Correos adicionales de alerta:<br /><span class="help">Cualquier email adicional que quiera recibir alertas, en suma al correo principal de la tienda. (separados con coma)</span>';
$_['entry_fraud_detection']     	= 'Usa el sistema de deteccion de fraudes maxMind:<br /><span class="help">MaxMind es un servicio de deteccion de fraude. si no tienes una clave de acceso tu puedes <a onclick="window.open(\'http://www.maxmind.com/?rId=opencart\');"><u>firmar aqui</u></a>. una vez tengas una clave, copy y pegala en el espacio a continuacion.</span>';
$_['entry_fraud_key']           	= 'MaxMind clave de Licencia:</span>';
$_['entry_fraud_score']         	= 'MaxMind puntuacion de riesgo:<br /><span class="help">Cuanto mayor sea la calificación, mayor es el riesgo de que el pedido sea fraudulento. Pon una calificacion entre 0 - 100.</span>';
$_['entry_fraud_status']        	= 'Calificacion por maxMind del estado del pedido:<br /><span class="help">Pedidos que superen esta valoración seran marcados y no podran alcanzar el estado de pedido completo de forma automatica.</span>';
$_['entry_secure']              	= 'Usa SSL:<br /><span class="help">Para utilizar SSL comrpeuebe con su host si hay instalado un certificado SSL y añadido la URL SSL para el catálogo y los archivos de configuración de administracion.</span>';
$_['entry_shared']              	= 'Usa sesiones compartidas:<br /><span class="help">Comparte el cookie de la sesión entre las tiendas de forma que el oC se pueda usar entre diferentes dominios.</span>';
$_['entry_robots']              	= 'Robots:<br /><span class="help">Una lista de robots (web crawler user agents) que no podrán acceder a las sesiones compartidas. use una linea para cada uno.</span>';
$_['entry_seo_url']             	= 'Usa SEO URLs:<br /><span class="help">Para utilizar SEO URLs el módulo apache debe ser mod-rewrite y necesita renombrar htaccess.txt a . Htaccess.</span>';
$_['entry_file_extension_allowed'] 	= 'Permite las extensiones de archivo:<br /><span class="help">Se indica que tipo de extensiones de archivo se puden subir. usa una nueva linea para cada valor.</span>';
$_['entry_file_mime_allowed']      	= 'Permite archivos tipo mime:<br /><span class="help">Se indica que tipo de archivos tipo mime se pueden uplodear. use una linea para cada valor.</span>';
$_['entry_maintenance']         	= 'Modo mantenimiento:<br /><span class="help">Previene a los clientes a entrar a su tienda y verán un mensaje de mantenimiento. si está conectado como administrador usted verá la tienda normalmente.</span>';
$_['entry_password']            	= 'Permite el uso de contraseñas olvidadas:<br /><span class="help">Permite el uso de contraseñas olvidadas por parte del administrador. se desactiva automaticamente si el sistema detecta un intento de acceso fraudulento.</span>';
$_['entry_encryption']          	= 'Llave de encriptado:<br /><span class="help">Por favor provea una clave secreta que podrá ser usada para cifrar información privada cuando procese las ordenes.</span>';
$_['entry_compression']         	= 'Nivel compresion de salida:<br /><span class="help">GZIP para una mayor eficiencia para transferencia para requerir clientes. nivel de compresion debe tener entre 0 y 9</span>';
$_['entry_error_display']       	= 'Mostrar errores:';
$_['entry_error_log']           	= 'Registro de errores:';
$_['entry_error_filename']      	= 'Nombre archivo de registro de errores:';
$_['entry_google_analytics']    	= 'Código google analytics:<br /><span class="help">Conéctese a su cuenta <a onclick="window.open(\'http://www.google.com/analytics/\');"><u>Google analytics</u></a> y después de crear su perfil de su sitio Web copie y pegue el código analytics dentro de este campo.</span>';

// error
$_['error_warning']             	= 'Advertencia: por favor, revise cuidadosamente el formulario por errores';
$_['error_permission']          	= 'Advertencia: no tiene permiso para modificar la configuración';
$_['error_name']                	= 'Nombre de la tienda debe tener entre 3 y 32 caracteres!';
$_['error_owner']               	= 'Dueño de tienda debe tener entre 3 y 64 caracteres!';
$_['error_id']               		= 'Cédula debe tener entre 10 y 15 caracteres!';
$_['error_address']             	= 'Dirección de la tienda debe tener entre 10 y 256 caracteres!';
$_['error_email']               	= 'Email no parece ser válido';
$_['error_telephone']           	= 'Teléfono debe tener entre 3 y 32 caracteres!';
$_['error_title']               	= 'El título debe tener entre 3 y 32 caracteres!';
$_['error_limit']               	= 'Límite requerido';
$_['error_customer_group_display']	= 'Debe incluir el grupo de clientes por defecto si va a usar esta opción!';
$_['error_voucher_min']            	= 'Valor minimo del vale descuento!';
$_['error_voucher_max']            	= 'Valor máximo del vale descuento!';
$_['error_image_thumb']         	= 'Tamaño imagen miniatura del producto requerido:';
$_['error_image_popup']         	= 'Tamaño imagen emergente del producto requerido:';
$_['error_image_product']       	= 'Tamaño imagen lista del producto requerido:';
$_['error_image_category']      	= 'Tamaño imagen lista de categoría requerido:';
$_['error_image_additional']    	= 'Tamaño imagen adicional del producto requerido:';
$_['error_image_related']      	 	= 'Tamaño imagen producto relacionado requerido:';
$_['error_image_compare']      	 	= 'Tamaño imagen de comparar requerido:';
$_['error_image_wishlist']      	= 'Tamaño imagen de lista deseo requerido:';
$_['error_image_cart']          	= 'Tamaño imagen del carro de compras requerido:';
$_['error_ftp_host']              	= 'Se requiere elhost del fTP!';
$_['error_ftp_port']               	= 'Se requiere el puerto del fTP!';
$_['error_ftp_username']           	= 'Se requiere el usuario del fTP!';
$_['error_ftp_password']           	= 'Se requiere la clave del fTP!';
$_['error_error_filename']      	= 'Nombre de archivo del registro de errores requerido';
$_['error_encryption']             	= 'La encriptación debe tener entre 3 y 32 caracteres!';
?>