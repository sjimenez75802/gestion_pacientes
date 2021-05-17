<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	$Translation['quick search'] = "Búsqueda rápida";
	$Translation['records x to y of z'] = "Registros <FirstRecord> de <LastRecord> al <RecordCount>";
	$Translation['filters'] = "Filtros";
	$Translation['filter'] = "Filtro";
	$Translation['filtered field'] = "Campo filtrado";
	$Translation['comparison operator'] = "Operador de comparación";
	$Translation['comparison value'] = "Valor de comparación";
	$Translation['and'] = "y";
	$Translation['or'] = "o";
	$Translation['equal to'] = "Igual a";
	$Translation['not equal to'] = "No igual a";
	$Translation['greater than'] = "Mas grande que";
	$Translation['greater than or equal to'] = "Mas grande que o igual a";
	$Translation['less than'] = "Menos que";
	$Translation['less than or equal to'] = "Menos que o igual a";
	$Translation['like'] = "Me gusta";
	$Translation['not like'] = "No me gusta";
	$Translation['is empty'] = "Esta vacio";
	$Translation['is not empty'] = "Esto no esta vacio";
	$Translation['apply filters'] = "Aplicar filtros";
	$Translation['save filters'] = "Salvar y aplicar  filtros";
	$Translation['saved filters title'] = "Código HTML para los filtros aplicados";
	$Translation['saved filters instructions'] = "Copie el código que aparece a continuación y péguelo en un archivo HTML para guardar el filtro que acaba de definir y poder volver a él en cualquier momento en el futuro sin tener que redefinirlo. Puedes guardar este código HTML en tu ordenador o en cualquier servidor y acceder a esta vista de tabla prefiltrada a través de él.";
	$Translation['hide code'] = "Ocultar este código";
	$Translation['printer friendly view'] = "Vista para imprimir";
	$Translation['save as csv'] = "Descargar como archivo csv (valores separados por comas)";
	$Translation['edit filters'] = "Editar filtros";
	$Translation['clear filters'] = "Limpiar los filtros";
	$Translation['order by'] = 'Ordernar por';
	$Translation['go to page'] = 'Ir a la página:';
	$Translation['none'] = 'Ninguno';
	$Translation['Select all records'] = 'Seleccionar todos los regisros';
	$Translation['With selected records'] = 'Con los registros seleccionados';
	$Translation['Print Preview Detail View'] = 'Vista de impresión Vista detallada';
	$Translation['Print Preview Table View'] = 'Vista de impresión Vista de tabla';
	$Translation['Print'] = 'Imprimir';
	$Translation['Cancel Printing'] = 'Cancelar impresión';
	$Translation['Cancel Selection'] = 'Cancelar selección';
	$Translation['Maximum records allowed to enable this feature is'] = 'El máximo de registros permitidos para habilitar esta función es';
	$Translation['No matches found!'] = 'Ningun resultado encontrado!';
	$Translation['Start typing to get suggestions'] = 'Start typing to get suggestions.';

	// _dml.php
	$Translation['are you sure?'] = '¿Está seguro de que quiere eliminar este registro?';
	$Translation['add new record'] = 'Añadir nuevo récord';
	$Translation['update record'] = 'Actualizar registro';
	$Translation['delete record'] = 'Borrar registro';
	$Translation['deselect record'] = 'Deseleccionar registro';
	$Translation["couldn't delete"] = 'No se ha podido eliminar el registro debido a la presencia a <RelatedRecords> registro(s) relacionado(s) en la tabla [<TableName>]';
	$Translation['confirm delete'] = 'Este registro tiene <RelatedRecords> registro(s) relacionado(s) en la tabla [<TableName>]. ¿Aún quieres borrarlo? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'Si';
	$Translation['no'] = 'No';
	$Translation['pkfield empty'] = ' Es un campo importante y no puede estar vacío.';
	$Translation['upload image'] = 'Cargar un nuevo archivo ';
	$Translation['select image'] = 'Seleccionar una imágen ';
	$Translation['remove image'] = 'Remover Archivo';
	$Translation['month names'] = 'Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre';
	$Translation['field not null'] = 'No puede dejar este campo vacio.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Hoy';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Mantenga la tecla CTRL para seleccionar varios elementos de la lista anterior..';
	$Translation['Save New'] = 'Guardar nuevo';
	$Translation['Save As Copy'] = 'Guardar como copia';
	$Translation['Deselect'] = 'Cancelar';
	$Translation['Add New'] = 'Agregar nuevo';
	$Translation['Delete'] = 'Borrar';
	$Translation['Cancel'] = 'Cancelar';
	$Translation['Print Preview'] = 'Imprimir vista previa';
	$Translation['Save Changes'] = 'Guardar cambios';
	$Translation['CSV'] = 'Descargar CSV';
	$Translation['Reset Filters'] = 'Mostrar todo';
	$Translation['Find It'] = 'Encuéntralo';
	$Translation['Previous'] = 'Anterior';
	$Translation['Next'] = 'Siguiente';
	$Translation['Back'] = 'Volver';

	// lib.php
	$Translation['select a table'] = "Ir a...";
	$Translation['homepage'] = "Pagina Principal";
	$Translation['error:'] = "Error:";
	$Translation['sql error:'] = "SQL error:";
	$Translation['query:'] = "Query:";
	$Translation['< back'] = "Back";
	$Translation["if you haven't set up"] = "Si aún no ha configurado la base de datos, puede hacerlo haciendo clic en <a href='setup.php'>aqui</a>.";
	$Translation['file too large']="Error: El archivo que has subido supera el tamaño máximo permitido de <MaxSize> KB";
	$Translation['invalid file type']="Error: Este tipo de archivo no está permitido. Sólo <FileTypes> se pueden cargar archivos";

	// setup.php
	$Translation['goto start page'] = "Volver a la página de inicio";
	$Translation['no db connection'] = "No se ha podido establecer una conexión con la base de datos.";
	$Translation['no db name'] = "No se ha podido acceder a la base de datos denominada '<DBName>' on este servidor.";
	$Translation['provide connection data'] = "Por favor, proporcione los siguientes datos para conectarse a la base de datos:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "Nombre de usuario MySQL";
	$Translation['mysql password'] = "Contraseña MySQL";
	$Translation['mysql db'] = "nombre de la Base de datos";
	$Translation['connect'] = "Conectar";
	$Translation['couldnt save config'] = "No se han podido guardar los datos de conexión en 'config.php'.<br />Asegúrese de que la carpeta:<br />'".dirname(__FILE__)."'<br />is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Configuración ya realizada en";
	$Translation['delete md5'] = "Si quieres forzar la ejecución de la instalación de nuevo, primero debes borrar el archivo 'setup.md5' de esta carpeta.";
	$Translation['table exists'] = "Tabla <b><TableName></b> existe, que contiene <NumRecords> registros.";
	$Translation['failed'] = "Fallido";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL said:";
	$Translation['table uptodate'] = "La tabla está actualizada.";
	$Translation['couldnt count'] = "No se han podido contar los registros de la tabla <b><TableName></b>";
	$Translation['creating table'] = "Creación de la tabla <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Espere porfavor";

	// _view.php
	$Translation['tableAccessDenied']="Lo siento! No tiene permiso para acceder a esta tabla. Por favor, póngase en contacto con el administrador.";

	// incCommon.php
	$Translation['not signed in']="No has iniciado sesión";
	$Translation['sign in']="Iniciar sesióm";
	$Translation['signed as']="Registrado como ";
	$Translation['sign out']="Cerrar sesión";
	$Translation['admin setup needed']="No se ha realizado la configuración administrativa. Por favor, inicie sesión en el <a href=admin/>panel de control de administración</a> para realizar la configuración.";
	$Translation['db setup needed']="Todavía no se ha realizado la configuración del programa. Por favor, inicie sesión en el <a href=setup.php>página de configuración</a> primero.";
	$Translation['new record saved']="El nuevo registro se ha guardado con éxito.";
	$Translation['record updated']="Los cambios se han guardado correctamente.";

	// index.php
	$Translation['admin area']="Area de Administración";
	$Translation['login failed']="Su intento anterior de ingreso fallo. Trate de nuevo.";
	$Translation['sign in here']="Ingreso";
	$Translation['remember me']="Recordar";
	$Translation['username']="Nombre de Usuario";
	$Translation['password']="Contraseña";
	$Translation['go to signup']="No tienes un nombre de usuario? <br />&nbsp; <a href=membership_signup.php>Sign up here</a>";
	$Translation['forgot password']="Olvido su contraseña? <a href=membership_passwordReset.php>Click aqui</a>";
	$Translation['browse as guest']="<a href=index.php>Continúa navegando como invitada</a>";
	$Translation['no table access']="No tienes suficientes permisos para acceder a ninguna página aquí. Inicia sesión primero.";
	$Translation['signup']="Sign up";

	// checkMemberID.php
	$Translation['user already exists']="Nombre de usuario '<MemberID>' ya existe. Trate otro nombre de usuario.";
	$Translation['user available']="Nombre de usuario '<MemberID>' está disponible y puedes tomarlo.";
	$Translation['empty user']="Por favor, escriba primero un nombre de usuario en la casilla y luego haga clic en 'Check availability'.";

	// membership_thankyou.php
	$Translation['thanks']="Gracias por inscribirse!";
	$Translation['sign in no approval']="Si has elegido un grupo que no requiere la aprobación de los administradores, puedes registrarte ahora mismo <a href=index.php?signIn=1>aqui</a>.";
	$Translation['sign in wait approval']="Si ha elegido un grupo que requiere la aprobación del administrador, espere a recibir un correo electrónico confirmando su aprobación.";

	// membership_signup.php
	$Translation['username empty']="Debe proporcionar un nombre de usuario. Por favor, vuelva a escribir un nombre de usuario";
	$Translation['password invalid']="Debe proporcionar una contraseña de 4 caracteres o más, sin espacios. Por favor, vuelva a escribir una contraseña válida";
	$Translation['password no match']="La contraseña no coincide. Por favor, vuelva y corrija la contraseña";
	$Translation['username exists']="El nombre de usuario ya existe. Por favor, vuelva a elegir un nombre de usuario diferente.";
	$Translation['email invalid']="Dirección de correo electrónico no válida. Por favor, vuelva a corregir su dirección de correo electrónico.";
	$Translation['group invalid']="Grupo no válido. Por favor, vuelva atrás y corrija la selección del grupo.";
	$Translation['sign up here']="Inscríbase aquí!";
	$Translation['registered? sign in']="Ya está registrado? <a href=index.php?signIn=1>Sign in here</a>.";
	$Translation['sign up disabled']="Lo siento! El registro está temporalmente desactivado por el administrador. Vuelve a intentarlo más tarde.";
	$Translation['check availability']="Comprueba si este nombre de usuario está disponible";
	$Translation['confirm password']="Confirme contraseña";
	$Translation['email']="Dirección de correo electrónico";
	$Translation['group']="Grupo";
	$Translation['groups *']="Si decide inscribirse en un grupo marcado con un asterisco (*), no podrás conectarte hasta que el administrador te apruebe. Recibirás un correo electrónico cuando te aprueben.";
	$Translation['sign up']="Sign Up";

	// membership_passwordReset.php
	$Translation['password reset']="Página de restablecimiento de contraseña";
	$Translation['password reset details']="Ingrese su nombre de usuario o dirección de correo electrónico a continuación. Luego, le enviaremos un enlace especial a su correo electrónico. Después de hacer clic en ese enlace, se le pedirá que ingrese una nueva contraseña.";
	$Translation['password reset subject']="Instrucciones de restablecimiento de contraseña";
	$Translation['password reset message']="Querido miembro, \n Si ha solicitado restablecer / cambiar su contraseña, haga clic en este enlace: \n <ResetLink> \n\n Si no solicitó un restablecimiento / cambio de contraseña, ignore este mensaje. \n\n Regards.";
	$Translation['password reset ready']="Se ha enviado un correo electrónico con instrucciones para restablecer la contraseña a su dirección de correo electrónico registrada. Siga las instrucciones en ese mensaje de correo electrónico. <br /> <br /> Si no recibe este correo electrónico en 5 minutos, intente restablecer su contraseña nuevamente y asegúrese de ingresar un nombre de usuario o dirección de correo electrónico correctos.";
	$Translation['password reset invalid']="Usuario o contraseña invalido. <a href=membership_passwordReset.php>Trate de nuevo</a>, o vaya <a href=index.php>Volver a la página de inicio</a>.";
	$Translation['password change']="Página de cambio de contraseña";
	$Translation['new password']="Nueva contraseña";
	$Translation['password reset done']="Tu contraseña fue cambiada exitosamente. Usted puede <a href=index.php?signOut=1>inicie sesión con la nueva contraseña aquí</a>.";

    $Translation['Loading ...']='Cargando ...';
    $Translation['No records found']='Ningun registro encontrado';
    $Translation['You can add children records after saving the main record first']='Puede añadir registros secundarios después de guardar primero el registro principal';

    $Translation['ascending'] = 'Ascendente';
    $Translation['descending'] = 'Descendiendo';
    $Translation['then by'] = 'Entonces, por';

	// membership_profile
	$Translation['Legend'] = 'Leyenda';
	$Translation['Table'] = 'Tabla';
	$Translation['Edit'] = 'Editar';
	$Translation['View'] = 'Ver';
	$Translation['Only your own records'] = 'Sólo sus propios registros';
	$Translation['All records owned by your group'] = 'Todos los registros de su grupo';
	$Translation['All records'] = 'Todos los registros';
	$Translation['Not allowed'] = 'No se permite';
	$Translation['Your info'] = 'Su información';
	$Translation['Hello user'] = 'Hola %s!';
	$Translation['Your access permissions'] = 'Sus permisos de acceso';
	$Translation['Update profile'] = 'Actualizar el perfil';
	$Translation['Update password'] = 'Actualizar contraseña';
	$Translation['Change your password'] = 'Cambiar la contraseña';
	$Translation['Old password'] = 'Contraseña antigua';
	$Translation['Password strength: weak'] = 'Contraseña: debil';
	$Translation['Password strength: good'] = 'Contraseña: buena';
	$Translation['Password strength: strong'] = 'Contraseña: fuerte';
	$Translation['Wrong password'] = 'Contraseña incorrecta';
	$Translation['Your profile was updated successfully'] = 'Su perfil ha sido actualizado con éxito';
	$Translation['Your password was changed successfully'] = 'Su contraseña ha sido cambiada con éxito';
	$Translation['Your IP address'] = 'Su dirección IP';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Registros a mostrar';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Datos de configuración';
	$Translation['Database Information'] = 'Información de la base de datos';
	$Translation['Admin Information'] = 'Información de Adminitrador';
	$Translation['setup intro 1'] = 'No parece haber un archivo de configuración. Esto es necesario para que la aplicación funcione.<br><br>Esta página de configuración le ayudará a crear ese archivo. Pero en algunas configuraciones de servidor, es posible que esto no funcione. En ese caso, es posible que deba ajustar los permisos de la carpeta o crear el archivo de configuración manualmente.';
	$Translation['setup intro 2'] = 'Welcome to your new AppGini application! Before getting started, we need some information about your database. You will need to know the following before proceeding:<ol><li>Database server (host)</li><li>Database name</li><li>Database username</li><li>Database password</li></ol>The above items were probably supplied to you by your web hosting provider. If you do not have this information, then you will need to contact them or refer to their service documentation before you can continue here. If you\'re ready, let\'s start!';
	$Translation['setup finished'] = '<b>Success!</b><br><br>Your AppGini application has been installed. Here are some suggestions to begin using it:';
	$Translation['setup next 1'] = 'Start using your application to add data, or work with existing data, if any.';
	$Translation['setup next 2'] = 'Import existing data into your application from a CSV file.';
	$Translation['setup next 3'] = 'Go to the admin homepage where you can change many other application settings.';
	$Translation['db_name help'] = 'The name of the database you want to run your AppGini application in.';
	$Translation['db_server help'] = '<i>localhost</i> works on most servers. If not, you should be able to get this info from your web hosting provider.';
	$Translation['db_username help'] = 'Your MySQL username';
	$Translation['db_password help'] = 'Your MySQL password';
	$Translation['username help'] = 'Specify the admin username you\'d like to use to access the admin area. Must be four characters or more.';
	$Translation['password help'] = 'Specify a strong password to access the admin area.';
	$Translation['email help'] = 'Enter the email address where you want admin notifications to be sent.';
	$Translation['Continue'] = 'Continue ...';
	$Translation['Lets go'] = 'Let\'s go!';
	$Translation['Submit'] = 'Submit';
	$Translation['Hide'] = 'Hide help';
	$Translation['Database info is correct'] = '&#10003; Database info is correct!';
	$Translation['Database connection error'] = '&#10007; Database connection error!';
	$Translation['The following errors occured'] = 'The following errors occured';
	$Translation['failed to create config instructions'] = 'This is most probably due to folder permissions that are set to prevent creating files by your web server. Don\'t worry! You can still create the config file manually.<br><br>Just paste the following code into a text editor and save the file as "config.php", then upload it using FTP or any other method to the folder %s on your server.';
	$Translation['Only show records having filterer'] = 'Only show records where %s is %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'You don\'t have enough permissions to delete this record';
	$Translation['Couldn\'t delete this record'] = 'Couldn\'t delete this record';
	$Translation['The record has been deleted successfully'] = 'El registro ha sido eliminado con éxito';
	$Translation['Couldn\'t save changes to the record'] = 'Couldn\'t save changes to the record';
	$Translation['Couldn\'t save the new record'] = 'Couldn\'t save the new record';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'More';
	$Translation['Confirm deleting multiple records'] = 'Confirm deleting multiple records';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> records will be deleted. Are you sure you want to do this?';
	$Translation['Yes, delete them!'] = 'Yes, delete them!';
	$Translation['No, keep them.'] = 'No, keep them.';
	$Translation['Deleting record <i> of <n>'] = 'Deleting record <i> of <n>';
	$Translation['Delete progress'] = 'Delete progress';
	$Translation['Show/hide details'] = 'Show/hide details';
	$Translation['Connection error'] = 'Connection error';
	$Translation['Add more actions'] = 'Add more actions';
	$Translation['Update progress'] = 'Update progress';
	$Translation['Change owner'] = 'Cambio de propietario';
	$Translation['Updating record <i> of <n>'] = 'Actualizando repore <i> de <n>';
	$Translation['Change owner of <n> selected records to'] = 'Cambio de propietario of <n> registros seleccionados para';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Nombre de usuario <MemberID> ya existe o no es válido. Asegúrese de proporcionar un nombre de usuario que contenga de 4 a 20 caracteres válidos.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Invalid provider!';
	$Translation['invalid url'] = 'Invalid URL!';
	$Translation['cant retrieve coordinates from url'] = 'Can\'t retrieve coordinates from URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Maintenance mode is enabled! You can disable it from the admin home page.';
	$Translation['unique field error'] = 'This value already exists or is invalid. Please make sure to specify a unique valid value.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Mostrar todos los registros de este usuario desde "<tablename>" tabla';
	$Translation['show all group records from table'] = 'Mostrar todos los registros de este grupo desde "<tablename>" tabla';
	$Translation['email this user'] = 'Envíe un correo electrónico a este usuario';
	$Translation['email this group'] = 'Envíe un correo electrónico a este grupo';
	$Translation['owner'] = 'Dueño';
	$Translation['created'] = 'Creado';
	$Translation['last modified'] = 'Última modificación';
	$Translation['record has no owner'] = 'Este registro no tiene un propietario asignado. Puede asignar un propietario desde el área de administración.';
	$Translation['admin-only info'] = 'La información anterior se muestra porque actualmente ha iniciado sesión como superadministrador. Otros usuarios no verán esto.';
	$Translation['discard changes confirm'] = '¿Descartar cambios en este registro?';
