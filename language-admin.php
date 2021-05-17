<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([]) or <>
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================

	// incHeader.php
	$Translation['membership management'] = "Gestión de membresía";
	$Translation['password mismatch'] = "La contraseña no coincide.";
	$Translation['error'] = "Error";
	$Translation['invalid email'] = "Dirección de correo electrónico inválida";
	$Translation['sending mails'] = "El envío de correos puede llevar algún tiempo. No cierre esta página hasta que vea el mensaje 'Listo'.";
	$Translation['complete step 4'] = "Complete el paso 4 seleccionando el miembro al que desea transferir los registros.";
	$Translation['info'] = "Información";
	$Translation['sure move member'] = '¿Está seguro de que desea mover miembro? \'<MEMBER>\' y sus datos del grupo \'<OLDGROUP>\' para agrupar \'<NEWGROUP>\'?';
	$Translation['sure move data of member'] = '¿Está seguro de que desea mover los datos del miembro? \'<OLDMEMBER>\' del grupo \'<OLDGROUP>\' Al miembro \'<NEWMEMBER>\' del grupo \'<NEWGROUP>\'?';
	$Translation['sure move all members'] = '¿Está seguro de que desea mover todos los miembros y los datos del grupo? \'<OLDGROUP>\' al grupo \'<NEWGROUP>\'?';
	$Translation['sure move data of all members'] = '¿Está seguro de que desea mover los datos de todos los miembros del grupo? \'<OLDGROUP>\' al miembro \'<MEMBER>\' del grupo \'<NEWGROUP>\'?';
	$Translation['toggle navigation'] = "Alternar la navegación";
	$Translation['admin area'] = "Area de administración";
	$Translation['groups'] = "Grupos";
	$Translation['view groups'] = "Ver grupos";
	$Translation['add group'] = "Agregar grupos";
	$Translation['edit anonymous permissions'] = "Editar permisos anónimos";
	$Translation['members'] = "Miembros";
	$Translation['view members'] = "Mostrar miembros";
	$Translation['add member'] = "Agregar miembros";
	$Translation["view members' records"] = "Ver los registros de los miembros";  
	$Translation["utilities"] = "Configuración"; 
	$Translation["admin settings"] = "Configuración de la administración"; 
	$Translation["rebuild thumbnails"] = "Reconstruir miniaturas"; 
	$Translation['rebuild fields'] = "Reconstruit campos";
	$Translation['import CSV'] = "Importar datos CSV";
	$Translation['batch transfer'] = "Asistente de transferencia por lotes";
	$Translation['mail all users'] = "Enviar correo a todos los usuarios";
	$Translation['AppGini forum'] = "Foro de la comunidad";
	$Translation["user's area"] = 'Página principal';
	$Translation["sign out"] = "Cerrar sesión";
	$Translation["attention"] = "Atención!";
	$Translation['security risk admin'] = 'Está utilizando el nombre de usuario y la contraseña de administrador predeterminados. Este es un gran riesgo de seguridad. Cambie al menos la contraseña de administrador del <a href="pageSettings.php">Admin Settings</a> page <em>immediately</em>.';
	$Translation['security risk'] = 'Está utilizando la contraseña de administrador predeterminada. Este es un gran riesgo de seguridad. Cambie la contraseña de administrador del <a href="pageSettings.php">Admin Settings</a> page <em>immediately</em>.' ;
	$Translation['plugins'] = 'Complementos';

	//pageAssignOwners.php
	$Translation["assigned table records to group"] = "Asignado <NUMBER> registros de tabla '<TABLE>' al grupo '<GROUP>'";
	$Translation["assigned table records to group and member"] = "Asignado <NUMBER> registros de tabla '<TABLE>' para agrupar '<GROUP>' , meimbro '<MEMBERID>'";
	$Translation['data ownership assign'] = "Asignar propiedad a datos que no tienen propietarios";
	$Translation['records ownership done'] = "Todos los registros de todas las tablas ahora tienen propietarios.<br>Regresar a <a href='pageHome.php'>Página de inicio del administrador</a>.";
	$Translation['select group'] = "Seleccionar grupo";
	$Translation['data ownership'] = "A veces, es posible que tenga tablas con datos que se ingresaron antes de implementar este sistema de administración de membresía de AppGini, o que se ingresaron usando otras aplicaciones que desconocen el sistema de propiedad de AppGini. Actualmente, estos datos no tienen propietarios. Esta página le permite asignar grupos de propietarios y miembros de propietarios a estos datos.";
	$Translation["table"] = "Tabla";
	$Translation["records with no owners"] = "Registros sin propietarios";
	$Translation["new owner group"] = "Nuevo grupo de propietarios";
	$Translation["new owner member"] = "Nuevo miembro propietario*";	
	$Translation["cancel"] = "Cancelar";
	$Translation["assign new owners"] = "Asignar nuevos propietarios";
	$Translation["please wait"] = "Espere por favor ...";	
	$Translation["if no owner member assigned"] = '* Si no asigna ningún miembro propietario aquí, aún puede usar el <a href="pageTransferOwnership.php">Asistente de transferencia por lotes</a> más tarde para hacerlo.';
	
	//pageDeleteGroup.php
	$Translation["can not delete group remove members"] = 'No se puede eliminar este grupo. Primero elimine miembros.';
	$Translation["can not delete group transfer records"] = 'No se puede eliminar este grupo. Primero transfiera sus registros de datos a otro grupo..';
	
	//pageEditGroup.php
	$Translation["group exists error"] = "Error: El nombre del grupo ya existe. Debe elegir un nombre de grupo único.";
	$Translation["group not found error"] = "Error: Grupo no encontrado!";								 	
	$Translation["edit group"] = "Editar Grupo '<GROUPNAME>'";
	$Translation["add new group"] = "Agregar nuevo grupos";
	$Translation["anonymous group attention"] = "Atención! Este es el grupo anónimo.";
	$Translation["show tool tips"] = "Mostrar consejos de herramientas al pasar el ratón por encima de las opciones";
	$Translation["group name"] = "Nombre de Grupo";
	$Translation["readonly group name"] = "El nombre del grupo anónimo es de sólo lectura aquí.";
	$Translation["anonymous group name"] = "Si nombras el grupo '<ANONYMOUSGROUP>', se considerará el grupo anónimo<br>que define los permisos de los visitantes invitados que no se registran en el sistema.";
	$Translation["description"] = "Descripción";
	$Translation["allow visitors sign up"] = '¿Permitir a los visitantes registrarse?';
	$Translation["admin add users"] = "No. Solo el administrador puede agregar usuarios.";
	$Translation["admin approve users"] = "Sí, y el administrador debe aprobarlos.";
	$Translation["automatically approve users"] = "Sí, y aprobarlos automáticamente.";
	$Translation["group table permissions"] = "Permisos de tabla para este grupo";
	$Translation["no"] = "No";
	$Translation["owner"] = "Dueño";
	$Translation["group"] = "Grupo";
	$Translation["all"] = "Todo";
	$Translation["insert"] = "Insertar";
	$Translation["view"] = "Ver";
	$Translation["edit"] = "Editar";
	$Translation["delete"] = "Borrar";
	$Translation["save changes"] = "Guradar cambios";
	
	//pageEditMember.php
	$Translation["username error"] = "Error: El nombre de usuario ya existe o no es válido. Asegúrese de proporcionar un nombre de usuario que contenga de 4 a 20 caracteres válidos.";
	$Translation["member not found"] = "Error: Miembro no encontrado!";
	$Translation["user has special permissions"] = "Este usuario tiene permisos especiales que anulan los permisos de su grupo.";
	$Translation["user has group permissions"] = 'Este usuario hereda el <a href="pageEditGroup.php?groupID=<GROUPID>">permisos de su grupo</a>.';
	$Translation["set user special permissions"] = 'Establecer permisos especiales para este usuario';
	$Translation["sure continue"] = "Si realizó cambios en este miembro y aún no los guardó, se perderán si continúa. Estás seguro de que quieres continuar?";
	$Translation["edit member"] = "Editar Miembro <MEMBERID>" ;
	$Translation["add new member"] = "Agregar nuevo miembro";
	$Translation["anonymous guest member"] = "Atención! Este es el miembro anónimo (invitado).";
	$Translation["admin member"] = 'Atención! Este es el miembro administrador. No puede cambiar el nombre de usuario, contraseña o correo electrónico de este miembro aquí, pero puede hacerlo en el <a href="pageSettings.php">admin settings</a> página.';
	$Translation["member username"] = "Nombre de usuario del miembro";
	$Translation["check availability"] = "Consultar disponibilidad";
	$Translation["read only username"] = "El nombre de usuario del miembro invitado es de solo lectura.";
	$Translation["password"] = "Clave";
	$Translation["change password"] = "Escriba una contraseña solo si desea cambiar este miembro<br>contraseña. De lo contrario, deje este campo vacío.";
	$Translation["confirm password"] = "Confirmar contraseña";
	$Translation["email"] = "Email";
	$Translation["approved"] = "¿Aprobado?";
	$Translation["banned"] = "¿Prohibido?";
	$Translation["comments"] = "Comentarios";
	$Translation["back to members"] = "Volver a miembros";
	$Translation["member added"] = "Miembro <USERNAME> agregado exitosamente";
	
	//pageEditMemberPermissions.php
	$Translation["member permissions saved"] = "Member permissions have been saved successfully.";
	$Translation["member permissions reset"] = "Los permisos de los miembros se han restablecido a los mismos que los de su grupo.";
	$Translation["user table permissions"] = "Permisos de tabla para la usuario <a href='pageEditMember.php?memberID=<MEMBER>' title='View member details'><MEMBERID></a> of group <a href='pageEditGroup.php?groupID=<GROUPID>'  title='View group details and permissions'><GROUP></a>";
	$Translation["no member permissions"] = 'Este miembro no tiene actualmente ningún permiso especial. Esta lista muestra los permisos de su grupo.';
	$Translation["reset member permissions"] = "Restablecer los permisos de los miembros";
	$Translation["remove special permissions"] = 'Esto eliminaría todos los permisos especiales de este usuario y tendrá los mismos permisos que su grupo. ¿Estás seguro de que quieres hacer eso?';
	
	//pageEditOwnership.php
	$Translation["invalid table"] = "Tabla Invalida.";
	$Translation["invalid primary key"] = "Valor de clave principal no válido";
	$Translation["record not found"] = "Registro no encontrado ... si se importó externamente, intente asignar un propietario desde el área de administración.";
	$Translation["invalid username"] = "Nombre de usuario no válido";
	$Translation["record not found error"] = "Error: ¡Registro no encontrado!";
	$Translation["edit Record Ownership"] = "Editar propiedad de registros";
	$Translation["owner group"] = "Grupo propietario";
	$Translation["view all records by group"] = "Ver todos los registros de este grupo";
	$Translation["owner member"] = "Miembro propietario";
	$Translation["view all records by member"] = "Ver todos los registros de esta miembro";
	$Translation["switch record ownership"] = "Si desea cambiar la propiedad de este registro a un miembro de otro grupo, primero debe cambiar el grupo propietario y guardar los cambios.";
	$Translation["record created on"] = "Registro creado el";
	$Translation["record modified on"] = "Registro modificado el";
	$Translation["view all records of table"] = "Ver todos los registros de esta tabla";
	$Translation["record data"] = "Registrar datos";
	$Translation["print"] = "Imprimir";
	$Translation["could not retrieve field list"] = "No se pudo recuperar la lista de campos de '<TABLENAME>'";
	$Translation["field name"] = "Nombre del campo";
	$Translation["value"] = "Valor";
	
	//pageHome.php
	$Translation["visitor sign up"] = '<a href="../membership_signup.php" target="_blank">El registro de visitantes</a> está deshabilitado porque no hay grupos en los que los visitantes puedan registrarse actualmente. Para habilitar el registro de visitantes, configure al menos un grupo para permitir el registro de visitantes.';
	$Translation["table data without owner"] = 'Tiene datos en una o más tablas que no tienen propietario. Para asignar un grupo de propietarios para estos datos, <a href="pageAssignOwners.php">haga clic aquí</a>.';
	$Translation["membership management homepage"] = "Página de administración de miembros";
	$Translation["newest updates"] = "Últimas actualizaciones";
	$Translation["view record details"] = "Ver detalles del registro";
	$Translation["newest entries"] = "Entradas Recientes";
	$Translation["available add-ons"] = "Complementos disponibles";
	$Translation["more info"] = "Mas información";
	$Translation["close"] = "Cerrar";
	$Translation["view add-ons"] = "Ver todos los complementos";
	$Translation["top members"] = "Miembros principales";
	$Translation["edit member details"] = "Editar los datos de los miembros";
	$Translation["view member records"] = "Ver los registros de datos de los miembros";
	$Translation["records"] = "Registros";
	$Translation["members stats"] = "Estadísticas de los miembros";
	$Translation["total groups"] = "Total de grupos";
	$Translation["active members"] = "Miembros activos";
	$Translation["view active members"] = "Ver miembros activos";
	$Translation["members awaiting approval"] = "Miembros esperando aprobación";
	$Translation["view members awaiting approval"] = "Ver miembros esperando aprobación";
	$Translation["banned members"] = "Miembros prohibidos";
	$Translation["view banned members"] = "Ver miembros prohibidos";
	$Translation["total members"] = "Miembros Totales";
	$Translation["view all members"] = "Ver todos los miembros";
	$Translation["BigProf tweets"]  = "Tweets a BigProf Software";
	$Translation["follow BigProf"] = "Sigueindo @bigprof";
	$Translation["loading bigprof feed"] = "Cargando @bigprof feed ...";
	$Translation["remove feed"] = "Remover este pie";
	
	//pageMail.php
	$Translation["can not send mail"] = "No puede enviar correos electrónicos actualmente. La dirección de correo electrónico del remitente configurada no es válida.	Porfavor <a href='pageSettings.php'>correct it first</a> vuelva a intentarlo.";
	$Translation["all groups"] = "Todos los grupos";
	$Translation["no recipient"] = "No se pudo encontrar el destinatario. Asegúrese de proporcionar un destinatario válido.";
	$Translation["invalid subject line"] = "Línea de asunto no válida.";
	$Translation["no recipient found"] = "No se pudo encontrar ningún destinatario. Asegúrese de proporcionar un destinatario válido.";
	$Translation["mail queue not saved"] = "No se pudo guardar la cola de correo. Asegúrese de que el directorio '<CURRDIR>' es escribible (chmod 755 or chmod 777).";
	$Translation["send mail"]  = "Enviar mensaje de correo a un miembro / grupo";
	$Translation["send mail to all members"] = "Está enviando un correo electrónico a todos los miembros. Esto podría llevar mucho tiempo y afectar el rendimiento de su servidor. Si tiene una gran cantidad de miembros, no recomendamos enviarles un correo electrónico a todos a la vez.";
	$Translation["from"] = "DE";
	$Translation["change setting"] = "Cambiar esta configuración";
	$Translation["to"] = "A";
	$Translation["subject"] = "Asunto";
	$Translation["message"] = "Mensaje";
	$Translation["send message"] = "Enviar mensaje";
	
	//pagePrintRecord.php
	$Translation["record details"] = "Gestión de membresía -- Detalles del registro";
	$Translation['table name'] = "Tabla: <TABLENAME>";
	
	//pageRebuildFields.php
	$Translation['create or update table'] = "Un intento de <ACTION> el campo <i><FIELD></i> en <i><TABLE></i> La tabla se hizo ejecutando esta consulta: <pre><QUERY></pre> Los resultados se muestran a continuación.";

	$Translation['view or rebuild fields'] = "Ver/Reconstruir campos";
	$Translation['show deviations only'] = "Mostrar solo desviaciones";
	$Translation['show all fields'] = "Mostrar todos los campos";
	$Translation['compare tables page'] = "Esta página compara la estructura / esquema de tablas y campos como se diseñó en AppGini con la estructura real de la base de datos y le permite corregir cualquier desviación.";
	$Translation['field'] = "Campo";
	$Translation['AppGini definition'] = "Definición";
	$Translation['database definition'] = "Definición actual en la base de datos";
	$Translation['table name title'] = "<TABLENAME> tabla";
	$Translation['does not exist'] = "¡No existe!";
	$Translation['create field'] = "Cree el campo ejecutando un ADD COLUMN query.";
	$Translation['create it'] = "Crearlo";
	$Translation['fix field'] = "Corrija el campo ejecutando una consulta ALTER COLUMN para que su definición sea la misma que la de AppGini.";
	$Translation['fix it'] = "Correjido";
	$Translation['field update warning'] = "PELIGRO!! En algunos casos, esto puede provocar la pérdida, el truncamiento o la corrupción de datos. A veces, podría ser una mejor idea actualizar el campo en AppGini para que coincida con el de la base de datos. ¿Todavía te gustaría continuar?";
	$Translation['no deviations found'] = "No se encontraron desviaciones. ¡Todos los campos están bien!";
	$Translation['error fields'] = "Encontrado <CREATENUM> campos inexistentes que deben crearse.<br>Encontrado <UPDATENUM> campos desviados que podrían necesitar ser actualizados.";
	
	//pageRebuildThumbnails.php
	$Translation['rebuild thumbnails'] = "Reconstruir miniaturas";
	$Translation['thumbnails utility'] = "Utilice esta utilidad si tiene uno o más campos de imágen en una tabla que no tienen miniaturas o tienen miniaturas con dimensiones incorrectas.";
	$Translation['rebuild thumbnails of table'] = "Reconstruir miniaturas de la tabla";
	$Translation['rebuild'] = "Reconstruir";
	$Translation['rebuild thumbnails of table_name'] = "Reconstruyendo miniaturas de '<i><TABLENAME></i>' tabla ...";
	$Translation['do not close page message'] = "No cierre esta página hasta que vea un mensaje de confirmación de que se han creado todas las miniaturas.";	
	$Translation['rebuild thumbnails status'] = "Estado: todavía se están reconstruyendo las miniaturas, espere ...";
	$Translation['building field thumbnails'] =  "Creación de miniaturas para  '<i><FIELD></i>' campo...";
	$Translation['done'] = "Hecho.";
	$Translation['finished status'] = "Estado: Finalizado. Puede cerrar esta página ahora.";
	
	//pageSender.php
	$Translation['invalid mail queue'] = "Cola de correo no válida.";
	$Translation['sending message failed'] = " -- Enviando un mensaje 1 '<EMAIL>': Ha fallado.";
	$Translation['sending message ok'] = " -- Enviando un mensaje a '<EMAIL>': Ok.";
	$Translation['done!'] = "Hecho!";
	$Translation['close page'] = "Puede cerrar esta página ahora o navegar a otra página.";
	$Translation['mail log'] = "Registro electrónico:";
	
	//pageSettings.php
	$Translation['invalid security token'] = '¡Muestra de seguridad no válido! Por favor <a href="pageSettings.php"> recargar la página </a> e intenta de nuevo.';
	$Translation['unique admin username error'] = "Otro miembro ya ha utilizado el nuevo nombre de usuario de administrador. Asegúrese de que el nuevo nombre de usuario de administrador sea único.";	
	$Translation['unique anonymous username error'] = 'Otro miembro ya ha tomado el nuevo nombre de usuario anónimo. Asegúrese de que el nombre de usuario proporcionado sea único.';
	$Translation['unique anonymous group name error'] = 'Otro grupo ya está utilizando el nuevo nombre de grupo anónimo. Asegúrese de que el nombre del grupo proporcionado sea único.';
	$Translation['admin password mismatch'] = '"Clave de adminitrador" y "Confirma clave" no coincide.';
	$Translation['invalid sender email'] = 'Inválido "Correo electrónico del remitente".';
	$Translation['errors occurred'] = "Los siguientes errores ocurrieron:";
	$Translation['go back'] = 'Porfavor <a href="pageSettings.php" onclick="history.go(-1); return false;">regresar</a> para corregir los errores anteriores y vuelva a intentarlo.';
	$Translation['record updated automatically'] = "Registro actualizado automáticamente en <DATE>";
	$Translation['admin settings saved'] = "La configuración de administrador se guardó correctamente.<br>Regresar a <a href=\"pageSettings.php\">Configuración de administrador</a>.";
	$Translation['admin settings not saved'] = "La configuración de administrador NO se guardó correctamente. Razón de la falla: <ERROR><br>Regresar a <a href=\"pageSettings.php\" onclick=\"history.go(-1); return false;\">Configuración de administrador </a>.";
	$Translation['show tool tips'] = 'Mostrar información sobre herramientas a medida que el mouse se mueve sobre las opciones';
	$Translation['admin username'] = "Nombre de usuario del administrador";
	$Translation['admin password'] = "Clave del usuario";
	$Translation['change admin password'] = "Escriba una contraseña solo si desea cambiar la contraseña de administrador.";
	$Translation['sender email'] = "Correo electrónico del remitente";
	$Translation['sender name and email'] = "El nombre del remitente y el correo electrónico se utilizan en el 'To' campo al enviar";
	$Translation['email messages'] = "Mensajes de correo electrónico a grupos o miembros.";
	$Translation['admin notifications'] = "Notificaciones de administrador";
	$Translation['no email notifications'] = "No hay notificaciones por correo electrónico al administrador.";
	$Translation['member waiting approval'] = "Notifique al administrador solo cuando un nuevo miembro esté esperando aprobación.";
	$Translation['new sign-ups'] = "Notifique al administrador de todas las nuevas suscripciones.";
	$Translation['sender name'] = "Nombre del remitente";
	$Translation['members custom field 1'] = "Campo personalizado de miembros 1";
	$Translation['members custom field 2'] = "Campo personalizado de miembros 2";
	$Translation['members custom field 3'] = "Campo personalizado de miembros 3";
	$Translation['members custom field 4'] = "Campo personalizado de miembros 5";
	$Translation['member approval email subject'] = "Aprobación de miembros<br>asunto del email";
	$Translation['member approval email subject control'] = "Cuando el administrador aprueba a un miembro, se notifica al miembro POR <br>correo electrónico que está aprobado. Puede controlar el tema del<br>correo electrónico de aprobación en este cuadro y el contenido en el cuadro a continuación.";
	$Translation['member approval email message'] = "Member approval<br>mensaje de correo electrónico";
	$Translation['MySQL date'] = "Fecha de MySQL<br>cadena de formato";
	$Translation['MySQL reference'] = 'Por favor refiérase a <a href="http://dev.mysql.com/doc/refman/5.0/en/date-and-time-functions.html#function_date-format" target="_blank">la referencia de MySQL</a> para posibles formatos.';
	$Translation['PHP short date'] = "PHP fecha corta<br>cadena de formato";
	$Translation['PHP manual'] = 'Por favor refiérase a <a href="http://www.php.net/manual/en/function.date.php" target="_blank">el manual PHP</a> para posibles formatos.'; 
	$Translation['PHP long date'] = "PHP fecha larga<br>cadena de formato";
	$Translation['groups per page'] = "Groups per page";
	$Translation['members per page'] = "Miembros por página";
	$Translation['records per page'] = "Registros por página";
	$Translation['default sign-up mode'] = "Modo de registro predeterminado<br>para nuevos grupos";
	$Translation['no sign-up allowed'] = "No se permite registrarse. Solo el administrador puede agregar miembros.";
	$Translation['admin approve members'] = "Se permite el registro, pero el administrador debe aprobar a los miembros.";
	$Translation['automatically approve members'] = "Registrarse permitido, y aprobar automáticamente las miembros.";
	$Translation['anonymous group'] = "Nombre del anónimo<br>grupo";
	$Translation['anonymous user name'] = "Nombre del usuario<br>anónimo";
	$Translation['hide twitter feed'] = "¿Ocultar el feed de Twitter en la página de inicio del administrador?";
	$Translation['twitter feed'] = "Nuestro feed de Twitter lo ayuda a mantenerse informado sobre nuestras últimas noticias, recursos útiles, nuevos lanzamientos y muchos otros consejos útiles.";
	
	//pageTransferOwnership.php
	$Translation['invalid source member'] = "Se seleccionó un miembro de origen no válido.";
	$Translation['invalid destination member'] = "Miembro de destino no válido seleccionado.";
	$Translation['moving member'] = "Miembro móvil'<MEMBERID>' y sus datos del grupo '<SOURCEGROUP>' al grupo '<DESTINATIONGROUP>' ...";
	$Translation['data records transferred'] = "Miembro '<MEMBERID>' ahora pertenece al grupo '<NEWGROUP>'. Registros de datos transferidos: <DATARECORDS>.";
	$Translation['moving data'] = "Datos en movimiento de el miembro '<SOURCEMEMBER>' del grupo '<SOURCEGROUP>' a miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>' ...";
	$Translation['member records status'] = "Miembro '<SOURCEMEMBER>' del grupo'<SOURCEGROUP>' tenía <DATABEFORE> registros de datos. <TRANSFERSTATUS> a miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>'.";
	$Translation['moving all group members'] = "Mover todos los miembros y datos del grupo '<SOURCEGROUP>' al grupo '<DESTINATIONGROUP>' ...";
	$Translation['failed transferring group members'] = "Operación fallida. No se transfirió ningún miembro del grupo '<SOURCEGROUP>' a '<DESTINATIONGROUP>'.";
	$Translation['group members transferred'] = "Todos los miembros del grupo '<SOURCEGROUP>' ahora pertenece a '<DESTINATIONGROUP>'. ";
	$Translation['failed transfer data records'] = "Sin embargo, los registros de datos no se pudieron transferir.";
	$Translation['data records were transferred'] = "<DATABEFORE> Se transfirieron registros de datos.";
	$Translation['moving group data to member'] = "Mover datos de todos los miembros del grupo '<SOURCEGROUP>' a miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>' ...";
	$Translation['moving group data to member status'] = "<NUMBER> registro(s) fueron transferidos del grupo '<SOURCEGROUP>' al miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>'";
	$Translation['status'] = "ESTADO:";
	$Translation['batch transfer link'] = 'Para repetir la misma transferencia por lotes más tarde, puede <a href= "pageTransferOwnership.php?sourceGroupID=<SOURCEGROUP>&amp;sourceMemberID=<SOURCEMEMBER>&amp;destinationGroupID=<DESTINATIONGROUP>&amp;destinationMemberID=<DESTINATIONMEMBER>&amp;moveMembers=<MOVEMEMBERS>"> Marcar o copiar este enlace </a>.';
	$Translation['ownership batch transfer'] = "Transferencia de propiedad por lotes";
	$Translation['step 1'] = "PASO 1:";
	$Translation['batch transfer wizard'] = "El asistente de transferencia por lotes le permite transferir registros de datos de uno o todos los miembros de un grupo. (EL <i>grupo fuente </i>) a un miembro de otro grupo (EL <i>miembro de destino</i> of the <i>grupo de destino</i>)";
	$Translation['source group'] = "Buscar grupo";
	$Translation['update'] = "Actualizar";
	$Translation['next step'] = "Siguiente Paso";
	$Translation['group statistics'] = "Este grupo tiene <MEMBERS> miembros, y <RECORDS> registros de datos.";
	$Translation['step 2'] = "PASO 2:";
	$Translation['source member message'] = "El miembro de origen puede ser un miembro o todos los miembros del grupo de origen. ";
	$Translation['source member'] = "Buscar miembro";
	$Translation['all group members'] = "Todas las miembros de '<GROUPNAME>'";
	$Translation['member statistics'] = "Todas las miembros de <RECORDS> registros de datos.";
	$Translation['step 3'] = "PASO 3:";
	$Translation['destination group message'] = "El grupo de destino puede ser el mismo o diferente del grupo de origen. Solo los grupos que tienen miembros se enumeran a continuación.";
	$Translation['destination group'] = "Grupo de destino";
	$Translation['step 4'] = "PASO 4:";
	$Translation['destination member message'] = "El miembro de destino será el nuevo propietario de los registros de datos de la fuente   miembro.";
	$Translation['destination member'] = "Miembro de destino";
	$Translation['begin transfer'] = "Iniciar transferencia";	
	$Translation['move records'] = "Puede mover registros de los miembros de origen a un miembro del grupo de destino, o mover los miembros de origen, junto con sus registros de datos al grupo de destino.";
	$Translation['move data records to member'] = "Mover registros de datos a esta miembro:";
	$Translation['move source member to group'] = "Mueva el (los) miembro (s) de origen y todos sus registros de datos al '<GROUPNAME>' grupo.";
	
	//pageUploadCSV.php
	$Translation['file not found error'] = "Error: Archivo '<FILENAME>' no econtrado.";
	$Translation['preview and confirm CSV data'] = "Obtenga una vista previa de los datos CSV y luego confirme para importarlos ...";
	$Translation['display csv file rows'] = "Visualización de las primeras 10 filas del archivo CSV ...";
	$Translation['change CSV settings'] = 'Cambiar la configuración de CSV';
	$Translation['import CSV data'] = 'Confirmar e importar datos CSV &gt;';
	$Translation['apply CSV settings'] = 'Aplicar la configuración de CSV';
	$Translation['importing CSV data'] = 'Importar datos CSV ...';
	$Translation['start at estimated record'] = "Comenzando en el registro <RECORDNUMBER> de <RECORDS> total de registros estimados ...";
	$Translation['table backed up'] = "Tabla '<TABLE>' backed up as '<TABLENAME>'.";
	$Translation['table backup not done'] = "Tabla '<TABLE>' esta vacia, es por que no se hizo ninguna copia de seguridad.";
	$Translation['importing batch'] = 'Importación de lotes <BATCH> de <BATCHNUM>: ';
	$Translation['ok'] = 'Ok';
	$Translation['records inserted or updated successfully'] = "<RECORDS> registros insertados / actualizados en <SECONDS> segundos.";
	$Translation['mission accomplished'] = "¡Misión cumplida!";
	$Translation['assign a records owner'] = "Asignar un propietario a los grupos asignados &gt;";
	$Translation['please wait and do not close'] = "Porfavor no cierre esta pagina ...";
	$Translation['hide advanced options'] = "Ocultar opciones avanzadas";
	$Translation['show advanced options'] = "Mostrar opciones avanzadas";
	$Translation['import CSV to database'] = "Importar un archivo CSV a la base de datos";
	$Translation['import CSV to database page'] = "Esta página le permite cargar un archivo CSV (por ejemplo, uno generado desde MS Excel) e importarlo a una de las tablas de la base de datos. Esto hace que sea muy fácil completar la base de datos de forma masiva con datos de otras fuentes en lugar de ingresar manualmente cada registro.";
	$Translation['populate table from CSV'] = "Esta es la tabla que desea completar con datos del archivo CSV.";
	$Translation['CSV file'] = "Archivo CSV";
	$Translation['preview CSV data'] = "Vista previa de datos CSV &gt;";
	$Translation['no table name provided'] = "No se proporcionó ningún nombre de tabla.";
	$Translation['can not open CSV'] = "No se puede abrir el archivo csv '<FILENAME>'.";
	$Translation['empty CSV file'] = "El archivo csv '<FILENAME>' está vacío.";		
	$Translation['no CSV file data'] = "El archivo csv '<FILENAME>' no tiene datos para leer." ;
	$Translation['field separator'] = "Separador de campo";
	$Translation['default comma'] = "El valor predeterminado es coma (,)";
	$Translation['field delimiter'] = "Delimitador de campo";
	$Translation['default double-quote'] = 'El valor predeterminado es comillas dobles (")';
	$Translation['maximum characters per line'] = "Caracteres máximos por línea";
	$Translation['trouble importing CSV'] = "Si tiene problemas para importar el archivo CSV, intente aumentar este valor.";
	$Translation['ignore lines number'] = "Número de líneas para ignorar";
	$Translation['skip lines number'] = "Cambie este valor si desea omitir un número específico de líneas en el archivo CSV.";
	$Translation['first line field names'] = "La primera línea del archivo contiene nombres de campo";
	$Translation['field names must match'] = "Los nombres de campo deben <b>exactamente</b>coincidir con los de la base de datos.";
	$Translation['update table records'] = "Actualice los registros de la tabla si sus valores de clave principal coinciden con los del archivo CSV.";
	$Translation['ignore CSV table records'] = "Si no se marca, los registros del archivo CSV tienen los mismos valores de clave principal que los de la tabla <b>será ignorado</b>";
	$Translation['back up the table'] = "Realice una copia de seguridad de la tabla antes de importar datos CSV en ella.";
	
	//pageViewGroups.php
	$Translation['no matching results found'] = "No se han encontrado resultados que coincidan.";
	$Translation['search groups'] = "Buscar grupos";
	$Translation['find'] = "Encuentrar";
	$Translation['reset'] = "Reinicar";
	$Translation['members count'] = "Contador de miembros";
	$Translation['Edit group'] = "Editar Grupos";
	$Translation['confirm delete group'] = "¿Estás seguro de que quieres eliminar completamente este grupo?";
	$Translation['delete group'] = "Borar grupo";
	$Translation['view group records'] = "Ver los registros de los grupos";
	$Translation['view group members'] = "Ver los miembros del grupo";
	$Translation['send message to group'] = "Enviar mensaje al grupo";
	$Translation['previous'] = "Anterior";
	$Translation['displaying groups'] = "Mostrar grupos <GROUPNUM1> a <GROUPNUM2> de <GROUPS>";
	$Translation['next'] = "Siguiente";
	$Translation['key'] = "Clave:";	
	$Translation['edit group details'] = "Editar los detalles y permisos del grupo.";
	$Translation['add member to group'] = "Añadir un nuevo miembro al grupo.";
	$Translation['view data records'] = "Ver todos los registros de datos introducidos por los miembros del grupo.";
	$Translation['list group members'] = "Enumerar todos los miembros de un grupo.";
	$Translation['send email to all members'] = "Enviar un mensaje de correo electrónico a todos los miembros de un grupo.";
	
	//pageViewMembers.php
	$Translation['search members'] = "Buscar miembros <SEARCH> en <HTMLSELECT>";
	$Translation['all fields'] = "Todos los campos";
	$Translation['any'] = "Cualquiera";
	$Translation['waiting approval'] = "Esperando Aprabación";
	$Translation['active'] = "Activo";
	$Translation['Banned'] = "Prohibido";
	$Translation['username'] = "Nombre de Usuario";
	$Translation['sign up date'] = "Fecha de registro";
	$Translation['Status'] = "Estado";
	$Translation['Edit member'] = "Editar miembro";	
	$Translation['sure delete user'] = "¿Estás seguro de que quieres eliminar al usuario? \'<USERNAME>\'?";
	$Translation['delete member'] = "Borra este miembro";
	$Translation["approve this member"] = "Aprobar este miembro";
	$Translation["unban this member"] = "Readmitir este miembro";
	$Translation["ban this member"] = "Prohibir a este miembro";
	$Translation["View member records"] = "Ver registros de miembros";
	$Translation["send message to member"] = "Enviar mensaje a un miembro";
	$Translation['displaying members'] = "Mostrando miembros <MEMBERNUM1> a <MEMBERNUM2> de <MEMBERS>";
	$Translation['activate member'] = "Activar miembro nuevo / prohibir.";
	$Translation['ban member'] = "Prohibir (suspender) miembro.";
	$Translation['view entered member records'] = "Ver todos los registros de datos ingresados ​​por miembro.";
	$Translation['send email to member'] = "Enviar un mensaje de correo electrónico a un miembro.";
	
	//pageViewRecords.php
	$Translation['data records'] = "Registros de datos";
	$Translation['show records'] = "Mostrar registros de";
	$Translation['all tables'] = "Todas las tablas";
	$Translation['sort records'] = "Ordenar registros por:";
	$Translation['date created'] = "Fecha creada";
	$Translation['date modified'] = "Fecha Modificada";
	$Translation['newer first'] = "Nuevos primeros";
	$Translation['older first'] = "Mayores primero";
	$Translation['created'] = "Creado";
	$Translation['modified'] = "Modificado";
	$Translation['data'] = "Datos";
	$Translation['change record ownership'] = "Cambiar la propiedad de este registro";
	$Translation['sure delete record'] = "¿Está seguro de que desea eliminar este registro?";
	$Translation['delete record'] = "Borrar este registro";
	$Translation['displaying records'] = "Mostrando registros <RECORDNUM1> a <RECORDNUM2> de <RECORDS>";

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = '¡El modo de mantenimiento está habilitado! Puede deshabilitarlo desde la página de inicio del administrador.';
	$Translation['maintenance mode message'] = 'Mensaje de modo de mantenimiento';
	$Translation['maintenance mode'] = 'Modo de Mantenimiento';
	$Translation['OFF'] = 'OFF';
	$Translation['ON'] = 'ON';
	$Translation['enable maintenance mode?'] = 'Estas seguro de habilitar el modo de mantenimiento? ¡Solo los usuarios administradores pueden acceder al sitio en este modo!';
	$Translation['disable maintenance mode?'] = 'Estas seguro de deshabilitar el modo de mantemiento? Todos los usuarios podrán acceder al sitio!';
	
	/* Added in AppGini 5.60 */
	$Translation['csv file upload error'] = 'An error occured while processing the requested CSV file.';
	$Translation['back and retry'] = 'Go back and retry';
	$Translation['upload or choose csv file'] = 'Upload a CSV file or open an existing one';
	$Translation['choose csv upload'] = 'Choose a CSV file to upload';
	$Translation['no file chosen yet'] = 'No file chosen yet';
	$Translation['start upload'] = 'Start upload';
	$Translation['select a table'] = 'Select a table';
	$Translation['error reading csv data'] = 'An error occured while reading CSV data. Try resetting/adjusting the CSV settings.';
	$Translation['belongs to'] = 'Belongs to';
	$Translation['skip column'] = 'Skip this column';
	$Translation['connection failed retrying'] = 'Connection failed. Retrying in <SECONDS> seconds ...';
	$Translation['connection failed timeout'] = 'Connection timed out. Retry later.';
	$Translation['sure delete csv'] = 'Are you sure you want to delete the CSV file [CSVFILE] from the server?';
	$Translation['invalid csv file selected'] = 'Invalid file chosen. Must be a CSV file.';
	$Translation['couldnt delete csv file'] = 'Couldn\'t delete this CSV file.';
	$Translation['error backing up table'] = 'Error: Couldn\'t back up table <TABLE>.';
	$Translation['no columns selected'] = 'Please select at least one column to import and make sure each selected column belongs to a UNIQUE field.';
	$Translation['csrf token expired or invalid'] = 'Oops! Something went wrong with this page. Please go back and retry.';
	$Translation['back to groups'] = 'Regresar a grupos';
	$Translation['member updated'] = "Miembro <USERNAME> Actualizado correctamente";
	$Translation['fix errors before submitting'] = 'Please fix the highlighted errors before submitting the page!';

	/* Added in AppGini 5.62 */
	$Translation['mail_function'] = 'Method of sending emails';
	$Translation['smtp_server'] = 'SMTP server';
	$Translation['smtp_encryption'] = 'SMTP encryption';
	$Translation['smtp_port'] = 'SMTP port';
	$Translation['smtp_port_hint'] = 'Typical values are 25 (for non-encrypted SMTP), 465 (used in many cases with SSL encryption) or 587 (typical with TLS encryption)';
	$Translation['smtp_user'] = 'SMTP username';
	$Translation['smtp_pass'] = 'SMTP password';
	$Translation['configure mail settings'] = 'Configure mail settings';
	$Translation['display debugging info'] = 'Display debugging info';
	$Translation['debugging info hint'] = 'Debugging info is useful if you are having trouble sending emails through the configured SMTP server';
	