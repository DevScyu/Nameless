<?php
/*
 *	Made by TheSuperSkills (Edited by iMaykolRD_)
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Spanish Language - Installation
 */

$language = array(
    /*
     *  Installation
     */
    'install' => 'Instalar',
    'pre-release' => 'pre-release',
    'installer_welcome' => 'Bienvenido a NamelessMC versión 2.0 pre-release.',
    'pre-release_warning' => 'Tenga en cuenta que esta versión preliminar no está diseñada para su uso en sitios públicos.',
    'installer_information' => 'El instalador le guiará a través del proceso de instalación.',
    'new_installation_question' => 'En primer lugar, ¿se trata de una nueva instalación?',
    'new_installation' => 'Nueva instalación &raquo;',
    'upgrading_from_v1' => 'Actualización de v1 &raquo;',
    'requirements' => 'Requisitos:',
    'config_writable' => 'Escritura del core/config.php',
    'cache_writable' => 'Caché grabable',
    'template_cache_writable' => 'Caché de plantillas',
    'exif_imagetype_banners_disabled' => 'Without the exif_imagetype function, server banners will be disabled.',
    'requirements_error' => 'Debe tener todas las extensiones requeridas instaladas y tener los permisos correctos establecidos para continuar con la instalación.',
    'proceed' => 'Proceder',
    'database_configuration' => 'Configuración de la base de datos',
    'database_address' => 'Dirección IP de la base de datos',
    'database_port' => 'Puerto de la base de datos',
    'database_username' => 'Usuario de la base de datos',
    'database_password' => 'Contraseña de la base de datos',
    'database_name' => 'Nombre de la base de datos',
    'nameless_path' => 'Ruta de la instalacción',
    'nameless_path_info' => 'Esta será la ubicación donde Nameless se instalará. Por ejemplo: si Nameless se instala en example.com/forum, esto necesita ser un <strong>foro</strong>. Deja esto en blanco si Nameless no es una subcarpeta.',
    'friendly_urls' => 'URLs amistosas',
    'friendly_urls_info' => 'Las URL amigables mejorarán la legibilidad de las URL en su navegador.<br />Por ejemplo: <br />example.com/index.php?route=/forum<br />se convertiría en<br />example.com/forum.<br /><strong>¡IMPORTANTE!</strong><br />Su servidor debe estar configurado correctamente para que esto funcione. Puede ver si puede habilitar esta opción haciendo clic <a href=\'./rewrite_test\' target=\'_blank\'>aquí</a>.',
    'enabled' => 'Activado',
    'disabled' => 'Desactivado',
    'character_set' => 'Conjunto de carácteres',
    'database_engine' => 'Motor de almacenamiento de base de datos',
    'host' => 'Nombre de host',
    'host_help' => 'El nombre de host es la <strong>URL base</strong> de su sitio web. No incluya las subcarpetas del campo Ruta de instalación, o http(s)://¡aquí!',
    'database_error' => 'Asegúrese de completar todos los campos.',
    'submit' => 'Enviar',
    'installer_now_initialising_database' => 'El instalador está iniciando la base de datos. Esto puede tardar un rato...',
    'configuration' => 'Configuración',
    'configuration_info' => 'Ingrese información básica sobre su sitio. Estos valores se pueden cambiar posteriormente a través del panel de administración.',
    'configuration_error' => 'Introduzca un nombre de sitio válido entre 1 y 32 caracteres y direcciones de correo electrónico válidas entre 4 y 64 caracteres.',
    'site_name' => 'Nombre del sitio',
    'contact_email' => 'Email de contacto',
    'outgoing_email' => 'Correo saliente',
    'initialising_database_and_cache' => 'Inicializando la base de datos y la caché, espere...',
    'unable_to_login' => 'Incapaz de iniciar sesión.',
    'unable_to_create_account' => 'No se puede crear una cuenta',
    'input_required' => 'Introduzca un nombre de usuario, dirección de correo electrónico y contraseña válidos.',
    'input_minimum' => 'Asegúrese de que su nombre de usuario sea un mínimo de 3 caracteres, que su dirección de correo electrónico tenga un mínimo de 4 caracteres y que su contraseña tenga un mínimo de 6 caracteres..',
    'input_maximum' => 'Asegúrese de que su nombre de usuario sea un máximo de 20 caracteres y que su dirección de correo electrónico y contraseña tengan un máximo de 64 caracteres..',
    'email_invalid' => 'Tu e-Mail es inválido.',
    'passwords_must_match' => 'La contraseña debe coincidir.',
    'creating_admin_account' => 'Creación de la cuenta del administrador',
    'enter_admin_details' => 'Introduce los detalles de la cuenta de administrador.',
    'username' => 'Usuario',
    'email_address' => 'Correo electrónico',
    'password' => 'Contraseña',
    'confirm_password' => 'Confirmar contraseña',
    'upgrade' => 'Mejorar',
    'input_v1_details' => 'Introduzca los detalles de base de datos para su instalación de versión 1 sin nombre.',
    'installer_upgrading_database' => 'Espere mientras el instalador actualiza su base de datos...',
    'errors_logged' => 'Se han registrado errores. Click en Continuar para seguir con la actualización.',
    'continue' => 'Continuar',
    'convert' => 'Convertir',
    'convert_message' => 'Por último, ¿desea convertir de un software de foro diferente?',
    'yes' => 'Si',
    'no' => 'No',
    'converter' => 'Convertidor',
    'back' => 'Volver',
    'unable_to_load_converter' => '¡No se puede cargar el convertidor!',
    'finish' => 'Finalizar',
    'finish_message' => '¡Gracias por instalar NamelessMC! Ahora puede continuar con el Panel de Administración, donde podrá configurar su sitio web.',
    'support_message' => 'Si necesita ayuda, consulte nuestro sitio web <a href="https://namelessmc.com" target="_blank">here</a>, o también puede visitar nuestro <a href="https://discord.gg/9vk93VR" target="_blank">Servidor de Discord</a> o nuestro <a href="https://github.com/NamelessMC/Nameless/" target="_blank">Repositorio de GitHub</a>.',
    'credits' => 'Créditos',
    'credits_message' => 'Muchas gracias a todos <a href="https://github.com/NamelessMC/Nameless#full-contributor-list" target="_blank">Contribuidores de NamelessMC</a> desde el 2014',

	'step_home' => 'Home',
	'step_requirements' => 'Requirements',
	'step_general_config' => 'General Configuration',
	'step_database_config' => 'Database Configuration',
	'step_site_config' => 'Site Configuration',
	'step_admin_account' => 'Admin Account',
	'step_conversion' => 'Conversion',
	'step_finish' => 'Finish',

	'general_configuration' => 'General Configuration',
	'reload' => 'Reload',
	'reload_page' => 'Reload page',
	'no_converters_available' => 'There are no converters available.',
	'config_not_writable' => 'The config file is not writable.',

	'session_doesnt_exist' => 'Unable to detect session. Sessions saving are a requirement to use Nameless. Please try again, and if the issue persists, please contact your web host for support.'
);
