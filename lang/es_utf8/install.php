<?php
// install.php - created with Totara langimport script version 1.1

$string['aborting'] = 'Abortando...';
$string['abortinstallation'] = 'Abortando instalación...';
$string['admindirerror'] = 'El directorio especificado para admin es incorrecto';
$string['admindirname'] = 'Directorio Admin';
$string['admindirsetting'] = '<p>Muy pocos servidores web usan /admin como URL especial para permitirle acceder a un panel de control o similar. Desgraciadamente, esto entra en conflicto con la ubicación estándar de las páginas de administración de Moodle Usted puede corregir esto renombrando el directorio admin en su instalación, y poniendo aquí ese nuevo nombre. Por ejemplo: <blockquote> moodleadmin</blockquote>.
Así se corregirán los enlaces admin en Moodle.</p>';
$string['admindirsettinghead'] = 'Seleccionar el directorio admin...';
$string['admindirsettingsub'] = 'Muy pocos servidores web usan /admin como URL especial para permitirle acceder
    a un panel de control o similar. Desgraciadamente, esto entra en conflicto con la ubicación estándar
    de las páginas de administración de Moodle. Usted puede corregir esto renombrando el directorio admin 
    en su instalación, y poniendo aquí ese nuevo nombre. Por ejemplo: <br /> <br /><b>moodleadmin</b><br /> <br />
    Así se corregirán los enlaces admin en Moodle.';
$string['adminemail'] = 'Correo electrónico:';
$string['adminfirstname'] = 'Nombre:';
$string['admininfo'] = 'Detalles del administrador';
$string['adminlastname'] = 'Apellido:';
$string['adminpassword'] = 'Contraseña:';
$string['adminusername'] = 'Nombre de usuario:';
$string['askcontinue'] = 'Continuar (sí/no):';
$string['availabledbtypes'] = 'Tipos de db disponibles';
$string['availablelangs'] = 'Lista de idiomas disponibles';
$string['cannotconnecttodb'] = 'No se puede conectar a db';
$string['caution'] = 'Precaución';
$string['checkingphpsettings'] = 'Revisando la Configuración PHP';
$string['chooselanguage'] = 'Seleccionar idioma';
$string['chooselanguagehead'] = 'Seleccionar idioma';
$string['chooselanguagesub'] = 'Por favor, seleccione un idioma para el proceso de instalación.';
$string['cliadminpassword'] = 'Nueva contraseña de usuario admin';
$string['clialreadyinstalled'] = 'El archivo config.php ya existe, por favor, utilice admin/cli/upgrade.php si desea actualizar su sitio web.';
$string['cliinstallfinished'] = 'La instalación se completo exitosamente.';
$string['cliinstallheader'] = 'Programa de instalación Moodle de línea de comando $a';
$string['climustagreelicense'] = 'En modo no interactivo debe aceptar la licencia especificando la opción --agree-license';
$string['clitablesexist'] = 'Tablas de base de datos ya existentes, la instalación CLI no puede continuar.';
$string['compatibilitysettings'] = 'Comprobando sus ajustes PHP...';
$string['compatibilitysettingshead'] = 'Comprobando sus ajustes PHP...';
$string['compatibilitysettingssub'] = 'Su servidor debería pasar todos estas comprobaciones para que Moodle pueda funcionar correctamente.';
$string['configfilecreated'] = 'Archivo de configuración creado exitosamente';
$string['configfiledoesnotexist'] = '¡¡El archivo de configuración no existe!!';
$string['configfilenotwritten'] = 'El script de instalación no ha podido crear automáticamente un archivo config.php con las especificaciones elegidas. Por favor, copie el siguiente código en un archivo llamado config.php y coloque ese archivo en el directorio raíz de Moodle.';
$string['configfilewritten'] = 'config.php se ha creado con éxito';
$string['configurationcomplete'] = 'Configuración completa';
$string['configurationcompletehead'] = 'Configuración completa';
$string['configurationcompletesub'] = 'Moodle ha creado su fichero de configuración';
$string['configurationfileexist'] = '¡El archivo de configuración ya existe!';
$string['creatingconfigfile'] = 'Creando el archivo de configuración...';
$string['database'] = 'Base de datos';
$string['databasecreationsettings'] = 'Ahora necesita configurar los ajustes de la base de datos donde se almacenarán la mayoría de los datos de Moodle. El instalador creará la base de datos con los ajustes especificados más abajo.<br />
<br /> <br />
<b>Tipo:</b> el valor por defecto es \"mysql\"<br />
<b>Servidor:</b> el valor por defecto es \"localhost\"<br />
<b>Nombre:</b> nombre de la base de datos, e.g., moodle<br />
<b>Usuario:</b> el valor por defecto es  \"root\"<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo opcional para todas las tablas';
$string['databasecreationsettingshead'] = 'Ahora necesita configurar los ajustes de la base de datos donde se almacenarán la mayoría de los datos de Moodle. El instalador creará la base de datos con los ajustes especificados más abajo.';
$string['databasecreationsettingssub'] = '<b>Tipo:</b> fijado a \"mysql\" por el instalador<br />
<b>Host:</b> fijado a \"localhost\" por el instalador<br />
<b>Nombre:</b> nombre de la base de datos, e.g., moodle<br />
<b>Usuario:</b> el valor por defecto es  \"root\"<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de Tablas:</b> prefijo opcional utilizado por todos los nombres de las tablas';
$string['databasecreationsettingssub2'] = '<b>Tipo:</b> fijado a \"mysqli\" por el instalador<br />
<b>Host:</b> fijado a \"localhost\" por el instalador<br />
<b>Nombre:</b> nombre de la base de datos, ej. moodle<br />
<b>Contraseña:</b> contraseña de su base de datos
<b>Prefijo de Tablas:</b> prefijo opcional utilizado por todos los nombres de las tablas';
$string['databasehead'] = 'Ajustes de base de datos';
$string['databasehost'] = 'Servidor de la base de datos';
$string['databasename'] = 'Nombre de la base de datos';
$string['databasepass'] = 'Contraseña de la base de datos';
$string['databasesettings'] = 'Ahora necesita configurar la base de datos en la que se almacenará la mayor parte de datos de Moodle. Esta base de datos debe haber sido ya creada, y disponer de un nombre de usuario y de una contraseña de acceso.<br />
<br /> <br />
<b>Tipo:</b> mysql o postgres7<br />
<b>Servidor:</b> e.g., localhost or db.isp.com<br />
<b>Nombre:</b> Nombre de la base de datos, e.g., moodle<br />
<b>Usuario:</b> nombre de usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo a utilizar en todos los nombres de tabla';
$string['databasesettingsformoodle'] = 'Configuración de base de datos para Moodle';
$string['databasesettingshead'] = 'Ahora necesita configurar la base de datos en la que se almacenarán la mayor parte de los datos de Moodle. Esta base de datos debe haber sido ya creada y disponer de un nombre de usuario y una contraseña de acceso.';
$string['databasesettingssub'] = '<b>Tipo:</b> mysql o postgres7<br />
<b>Servidor:</b> p.ej.: localhost o db.tudominio.com<br />
<b>Usuario:</b> el usuario propietario de tu base de datos<br />
<b>Contraseña:</b> la contraseña del usuario de la base de datos<br />
<b>Prefijo de tablas:</b>  prefijo opcional a usar en los nombres de las tablas';
$string['databasesettingssub_mssql'] = '<b>Tipo:</b> SQL*Server (no UTF-8) <b><font color=\"red\">Experimental! (no usar en modo de producción)</font></b><br />
<b>Servidor:</b> eg localhost o db.isp.com<br />
<b>Nombre:</b> nombre de la base de datos, eg moodle<br />
<b>Usuario:</b> usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo a usar en los nombres de las tablas (obligatorio)';
$string['databasesettingssub_mssql_n'] = '<b>Tipo:</b> SQL*Server (UTF-8 habilitado)<br />
<b>Servidor:</b> eg localhost o db.isp.com<br />
<b>Nombre:</b> nombre de la base de datos, eg moodle<br />
<b>Usuario:</b> usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo a usar en los nombres de las tablas (obligatorio)';
$string['databasesettingssub_mysql'] = '<b>Tipo:</b> MySQL<br />
<b>Servidor:</b> eg localhost o db.isp.com<br />
<b>Nombre:</b> nombre de la base de datos, eg moodle<br />
<b>Usuario:</b> usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo a usar en los nombres de las tablas (opcional)';
$string['databasesettingssub_mysqli'] = '<b>Tipo:</b> MySQL Mejorado<br />
<b>Host:</b> e.g., localhost o db.isp.com<br />
<b>Nombre:</b> nombre de la base de datos, e.g., moodle<br />
<b>Usuario:</b> nombre de usuario de su base de datos<br />
<b>Contraseña:</b> contraseña de su base de datos<br />
<b>Prefijo de Tablas:</b> prefijo a usar en los nombres de las tablas (opcional)';
$string['databasesettingssub_oci8po'] = '<b>Tipo:</b> Oracle<br />
<b>Servidor:</b> no usado, puede dejarse en blanco<br />
<b>Nombre:</b> nombre de la conexión tnsnames.ora<br />
<b>Usuario:</b> usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo para usar con todas las tablas (obligatorio, máx. 2cc.)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tipo:</b> SQL*Server (sobre ODBC) <b><font color=\"red\">Experimental! (no usar en modo de producción)</font></b><br />
<b>Servidor:</b> nombre del DSN en el panel de control ODBC<br />
<b>Nombre:</b> nombre de la base de datos, eg moodle<br />
<b>Usuario:</b> usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo para usar con todas las tablas (obligatorio)';
$string['databasesettingssub_postgres7'] = '<b>Tipo:</b> PostgreSQL<br />
<b>Servidor:</b> eg localhost o db.isp.com<br />
<b>Nombre:</b> nombre de la base de datos, eg moodle<br />
<b>Usuario:</b> usuario de la base de datos<br />
<b>Contraseña:</b> contraseña de la base de datos<br />
<b>Prefijo de tablas:</b> prefijo para usar con todas las tablas (obligatorio)';
$string['databasesettingswillbecreated'] = '<b>Nota:</> el instalador tratará de crear la base de datos en el caso de que no exista.';
$string['databasesocket'] = 'Socket Unix';
$string['databasetype'] = 'Tipo de base de datos:';
$string['databasetypehead'] = 'Seleccione el controlador de la base de datos';
$string['databasetypesub'] = 'Moodle soporta varios tipos de servidores de base de datos. Por favor, póngase en contacto con el administrador del servidor si no sabe qué tipo usar.';
$string['databaseuser'] = 'Usuario de la base de datos';
$string['dataroot'] = 'Directorio de Datos';
$string['datarooterror'] = 'El \'Directorio de Datos\' no pudo ser encontrado o creado. Corrija la ruta o cree el directorio manualmente.';
$string['datarootpublicerror'] = 'El \'Directorio de datos\' que ha especificado es directamente accesible vía web: debe utilizar un directorio diferente.';
$string['dbconnectionerror'] = 'Error de conexión con la base de datos. Por favor, compruebe los ajustes de la base de datos.';
$string['dbcreationerror'] = 'Error al crear la base de datos. No se ha podido crear la base de datos con el nombre y ajustes suministrados';
$string['dbhost'] = 'Servidor';
$string['dbpass'] = 'Contraseña';
$string['dbprefix'] = 'Prefijo de tablas';
$string['dbtype'] = 'Tipo';
$string['dbwrongencoding'] = 'La base de datos seleccionada está ejecutándose bajo una codificación no recomendada ($a). Convendría usar en su lugar una base de datos con codificación Unicode (UTF-8). En cualquier caso, usted puede pasar por alto esta prueba seleccionando \"Pasar por alto la prueba de codificación BD\", si bien tal vez tenga problemas en el futuro.';
$string['dbwronghostserver'] = 'Debe seguir las reglas \"Host\" tal como se explicó más arriba.';
$string['dbwrongnlslang'] = 'La variable contextual NLS_LANG de su servidor web debe usar el conjunto de caracteres AL32UTF8. Revise la documentación PHP para ver cómo se configura adecuadamente OCI8.';
$string['dbwrongprefix'] = 'Debe seguir las reglas \"Prefijo de Tablas\" como se explicó más arriba.';
$string['directorysettings'] = '<p>Por favor, confirme las direcciones de la instalación de Moodle.</p>

<p><b>Dirección Web:</b>
Especifique la dirección web completa en la que se accederá a Moodle. Si su sitio web es accesible a través de varias URLs, seleccione la que resulte de acceso más natural a sus estudiantes.  No incluya la diagonal invertida final ().</p>
<p><b>Directorio de Moodle:</b>
Especifique la ruta completa de esta instalación. Asegúrese de que las mayúsculas/minúsculas son correctas.
<p><b>Directorio de datos:</b>
Usted necesita un lugar en el que Moodle pueda guardar los archivos subidos. Este directorio debe ser leible Y ESCRIBIBLE por el usuario del servidor web (normalmente \'nobody\', \'apache\', \'www-data\'), pero no debería ser directamente accesible desde la web. El instalador tratará crearlo si no existe.</p>';
$string['directorysettingshead'] = 'Por favor, confirme las siguientes direcciones de la instalación de Moodle';
$string['directorysettingssub'] = '<b>Dirección Web:</b>
Especifique la dirección web completa en la que se accederá a Moodle.
Si su sitio es accesible desde diferentes URLs entonces elija
la más natural que sus estudiantes deberían utilizar. No incluya la diagonal invertida final (/).
<br />
<br />
<b>Directorio Moodle:</b>
Especifique la ruta completa de esta instalación. Asegúrese de que las mayúsculas/minúsculas son correctas.
<br />
<br />
<b>Directorio de Datos:</b>
Usted necesita un lugar donde Moodle puede guardar los archivos subidos. Este directorio debe ser leíble Y ESCRIBIBLE por el usuario del servidor web (por lo general \'nobody\', \'apache\' o \'www-data\'), pero este lugar no debe ser accesible directamente a través de la web. El instalador tratará crearlo si no existe.';
$string['dirroot'] = 'Directorio Moodle';
$string['dirrooterror'] = 'El \'Directorio de Moodle\' parece incorrecto. No se puede encontrar una instalación de Moodle. El valor ha sido restablecido.';
$string['disagreelicense'] = '¡No se pudo actualizar debido a una discrepancia con GPL!';
$string['download'] = 'Descargar';
$string['downloadlanguagebutton'] = 'Descargar el paquete de idioma \"$a\"';
$string['downloadlanguagehead'] = 'Descargar paquete de idioma';
$string['downloadlanguagenotneeded'] = 'Puede continuar el proceso de instalación con el idioma por defecto, \"$a\".';
$string['downloadlanguagepack'] = '¿Quiere descargar el paquete de idiomas ahora? (Sí/No):';
$string['downloadlanguagesub'] = 'Ahora tiene la opción de descargar su paquete de idioma y continuar con el proceso de instalación en ese idioma.<br /><br />Si no es posible la descarga el proceso de instalación continuará en inglés (una vez que la instalación haya finalizado, tendrá la oportunidad de descargar e instalar otros idiomas adicionales).';
$string['downloadsuccess'] = 'Se descargó exitosamente el paquete de idiomas';
$string['doyouagree'] = '¿Está de acuerdo? (sí/no):';
$string['environmenthead'] = 'Comprobando su entorno';
$string['environmentsub'] = 'Estamos comprobando si los diferentes componentes de su servidor cumplen con los requerimientos mínimos de sistema';
$string['environmentsub2'] = 'Cada versión de Moodle tiene algún requisito mínimo de la versión de PHP y un número obligatorio de extensiones de PHP.
Una comprobación del entorno completo se realiza antes de cada instalación y actualización. Por favor, póngase en contacto con el administrador del servidor si no sabes cómo instalar la nueva versión o habilitar las extensiones PHP.';
$string['errorsinenvironment'] = 'La comprobación del entorno fallo!';
$string['fail'] = 'Fallo';
$string['fileuploads'] = 'Subidas de archivos';
$string['fileuploadserror'] = 'Debe estar activado';
$string['fileuploadshelp'] = '<p>La subida de archivos parece estar desactivada en su servidor.</p>

<p>Moodle aún puede ser instalado, pero usted no podrá subir archivos a los cursos ni imágenes nuevas de perfil de usuario.</p>

<p>Para habilitar la subida de archivos, usted (o el administrador del sistema) necesita editar el archivo php.ini principal y cambiar el ajuste de <b>file_uploads</b> a \'1\'.</p>';
$string['gdversion'] = 'Versión GD';
$string['gdversionerror'] = 'La librería GD debería estar presente para procesar y crear imágenes';
$string['gdversionhelp'] = '<p>Su servidor parece no tener el GD instalado.</p>

<p>GD es una librería que PHP necesita para que Moodle procese imágenes (tales como los iconos de los usuarios) y para crear imágenes nuevas (e.g., logos). Moodle puede trabajar sin GD, pero usted no dispondrá de las características mencionadas.</p>

<p>Para agregar GD a PHP en entorno Unix, compile PHP usando el parámetro --with-gd.</p>

<p>En un entorno Windows, puede editar php.ini y quitar los comentarios de la línea referida a php_gd2.dll.</p>';
$string['globalsquotes'] = 'Manejo Inseguro de Ajustes Globales';
$string['globalsquoteserror'] = 'Fije sus ajustes PHP: deshabilite register_globals y/o habilite magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>No se recomienda la combinación simultánea de Magic Quotes GPC desactivado y Register Globals activado.</p>

<p>El ajuste recomendado es <b>magic_quotes_gpc = On</b> and <b>register_globals = Off</b> en su php.ini</p>

<p>Si no tiene acceso al php.ini, debería poder escribir la siguiente línea en un archivo denominado .htaccess dentro de su directorio Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['inputdatadirectory'] = 'Directorio de Datos:';
$string['inputwebadress'] = 'Dirección Web:';
$string['inputwebdirectory'] = 'Directorio Moodle:';
$string['installation'] = 'Instalación';
$string['installationiscomplete'] = '¡La instalación está completada!';
$string['invalidargumenthelp'] = 'Error: Argumento(s) inválido(s)
Uso: \$php cliupgrade.php OPCIONES
Uso opción --help para obtener más ayuda';
$string['invalidemail'] = 'Correo electrónico inválido';
$string['invalidhost'] = 'Huésped inválido';
$string['invalidint'] = 'Error: el valor no es entero';
$string['invalidintrange'] = 'Error: el valor está por fuera del rango válido';
$string['invalidpath'] = 'Ruta inválida';
$string['invalidsetelement'] = 'Error: El valor dado no está en las opciones dadas';
$string['invalidtextvalue'] = 'Valor de texto inválido';
$string['invalidurl'] = 'URL inválida';
$string['invalidvalueforlanguage'] = 'Valor inválido para la opción --lang. Escriba --help para más ayuda';
$string['invalidyesno'] = 'Error: el valor no es un argumento del tipo sí/no';
$string['langdownloaderror'] = 'El idioma \"$a\" no pudo ser instalado. El proceso de instalación continuará en inglés.';
$string['langdownloadok'] = 'El idioma \"$a\" ha sido instalado correctamente. El proceso de instalación continuará en este idioma.';
$string['locationanddirectories'] = 'Ubicaciones y directorios';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Debe estar desactivado';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime debe estar desactivado para que Moodle funcione adecuadamente.</p>

<p>Normalmente está desactivado por defecto... Vea el ajuste <b>magic_quotes_runtime</b> en su archivo php.ini.</p>

<p>Si usted no tiene acceso a php.ini, debería poder escribir la siguiente línea en un archivo denominado .htaccess dentro del directorio Moodle:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Límite de memoria';
$string['memorylimiterror'] = 'El límite de memoria PHP esta fijado demasiado bajo... Puede tener problemas más tarde.';
$string['memorylimithelp'] = '<p>El límite de memoria PHP en su servidor es actualmente $a.</p>

<p>Esto puede ocasionar que Moodle tenga problemas de memoria más adelante, especialmente si usted tiene activados muchos módulos y/o muchos usuarios.</p>

<p>Recomendamos que configure PHP con el límite más alto posible, e.g. 40M.
Hay varias formas de hacer esto:</p>
<ol>
<li>Si puede hacerlo, recompile PHP con <i>--enable-memory-limit</i>.
Esto hace que Moodle fije por sí mismo el límite de memoria.</li>
<li>Si usted tiene acceso al archivo php.ini, puede cambiar el ajuste <b>memory_limit</b>
a, digamos, 40M. Si no lo tiene, pida a su administrador que lo haga por usted.</li>
<li>En algunos servidores PHP usted puede crear en el directorio Moodle un archivo .htaccess que contenga esta línea:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Sin embargo, en algunos servidores esto hace que <b>todas</b> las páginas PHP dejen de funcionar
(podrá ver los errores cuando mire las páginas) de modo que tendrá que eliminar el archivo .htaccess.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server con UTF-8 (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP no se ha configurado adecuadamente con la extensión MSSQL de modo que pueda comunicarse con el SQL*Server. Por favor, compruebe el archivo php.ini o vuelva a compilar PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión MySQL de modo que pueda comunicarse con MySQL. Por favor, compruebe el archivo php.ini o recompile PHP.';
$string['mysqli'] = 'MySQL Mejorado (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP no ha sido configurado adecuadamente con la extensión MySQLi de forma que se pueda comunicar con MySQL. Por favor, compruebe su archivo php.ini o recompile PHP. La extensión MySQLi no está disponible en PHP 4.';
$string['nativemysqli'] = 'MySQL mejorado (native/mysqli)';
$string['nativemysqlihelp'] = 'Ahora tiene que configurar la base de datos donde la mayoría de los datos de Moodle se almacenará.
La base de datos puede ser creada si el usuario de la base de datos tiene los permisos necesarios, el nombre de usuario y contraseña ya deben existir. El prefijo de la tabla es opcional.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'Ahora tiene que configurar la base de datos donde la mayoría de los datos de Moodle se almacenará. Esta base de datos debe haber sido ya creada y el nombre de usuario y contraseña creados para accesarla. El prefijo de la tabla es obligatorio.';
$string['newline'] = 'n';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión OCI8 de modo que pueda comunicarse con Oracle. Por favor, compruebe el archivo php.ini o vuelva a compilar PHP.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión ODBC de modo que pueda comunicarse con SQL*Server. Por favor, compruebe el archivo php.ini o vuelva a compilar PHP.';
$string['pass'] = 'Correcto';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'El directorio de los datos ($a->dataroot) no puede ser creado por el instalador.';
$string['pathshead'] = 'Confirme las rutas';
$string['pathsrodataroot'] = 'El directorio dataroot no tiene permisos de escritura.';
$string['pathsroparentdataroot'] = 'El directorio padre ($a->parent) no tiene permisos de escritura. El directorio de los datos ($a->dataroot) no puede ser creado por el instalador.';
$string['pathssubadmindir'] = 'Muy pocos servidores web usan /admin como un URL especial para acceder a un
panel de control o algo similar. Lamentablemente, esto entra en conflicto con la ubicación estándar para las páginas de administración de Moodle. Usted puede solucionar este problema, renombrando el directorio admin en su instalación Moodle, poniendo un nuevo nombre aquí. Por ejemplo: <em> moodleadmin </em>. Esto solucionará los enlaces de administración en instalación Moodle.';
$string['pathssubdataroot'] = 'Usted necesita un lugar donde Moodle puede guardar los archivos subidos. Este directorio debe ser leíble Y ESCRIBIBLE por el usuario del servidor web (por lo general \'nobody\', \'apache\' o \'www-data\'), pero este lugar no debe ser accesible directamente a través de la web. El instalador tratará crearlo si no existe.';
$string['pathssubdirroot'] = 'Ruta completa del directorio de instalación de Moodle. Cambielo sólo si es necesario el uso de enlaces simbólicos.';
$string['pathssubwwwroot'] = 'Dirección web completa donde Moodle será accesado. No es posible acceder a Moodle utilizando múltiples direcciones. Si su sitio tiene varias direcciones públicas debe configurar redirecciones permanentes en todos ellas, excepto en ésta. Si su sitio web es accesible tanto desde una intranet y la Internet, utilice la dirección pública aquí y configure su DNS para que los usuarios de su intranet puedan utilizar la dirección pública también.';
$string['pathsunsecuredataroot'] = 'La ubicación de dataroot no es segura';
$string['pathswrongadmindir'] = 'El directorio admin no existe';
$string['pathswrongdirroot'] = 'La ubicación de dirroot es incorrecta';
$string['pearargerror'] = 'La biblioteca PEAR no pudo identificar el argumento';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión PGSQL de modo que pueda comunicarse con PostgreSQL. Por favor, compruebe el archivo php.ini o vuelva a compilar PHP.';
$string['phpextension'] = 'Extensión PHP $a';
$string['phpversion'] = 'Versión PHP';
$string['phpversionerror'] = 'La versión PHP debe ser 4.1.0 o superior';
$string['phpversionhelp'] = '<p>Moodle requiere una versión de PHP 4.1.0 o superior.</p>
<p>Su versión es $a</p>
<p>Debe actualizar PHP o acudir a otro servidor con una versión más reciente de PHP</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['postgresqlwarning'] = '<strong>Nota:</strong> Si experimenta problemas de conexión, puede intentar ajustar el campo Host Server como
host=\'postgresql_host\' port=\'5432\' dbname=\'postgresql_database_name\' user=\'postgresql_user\' password=\'postgresql_user_password\'
y dejar vacía los campos Base de datos, Usuario y Contraseña. Más información en <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">Moodle Docs</a>';
$string['releasenoteslink'] = 'Para obtener información acerca de esta versión de Moodle, consulte las Notas de la Versión en $a';
$string['safemode'] = 'Modo Seguro (Safe Mode)';
$string['safemodeerror'] = 'Moodle puede tener problemas con Modo Seguro (\'safe mode\') activado';
$string['safemodehelp'] = '<p>Moodle puede tener varios problemas  Modo Seguro (\'safe mode\') activado, y probablemente no pueda crear nuevos archivos.</p>

<p>Normalmente el Modo Seguro (\'safe mode\') sólo es activado por servidores web públicos paranoides, así que lo que usted debe hacer es encontrar otra compañía para su sitio Moodle.</p>

<p>Si lo desea, puede seguir con la instalación, pero experimentará problemas más adelante.</p>';
$string['selectlanguage'] = 'Seleccionando un idioma para la instalación';
$string['sessionautostart'] = 'Inicio automático de sesión';
$string['sessionautostarterror'] = 'Esto debe estar desactivado';
$string['sessionautostarthelp'] = '<p>Moodle requiere apoyo de sesión y no funcionará sin él.</p>

<p>Las sesiones deben estar activadas en el archhivo php.ini para el parámetro session.auto_start.</p>';
$string['sitefullname'] = 'Nombre completo del sitio:';
$string['siteinfo'] = 'Detalles del sitio';
$string['sitenewsitems'] = 'Elementos noticiosos:';
$string['siteshortname'] = 'Nombre corto del sitio:';
$string['sitesummary'] = 'Resumen del sitio:';
$string['skipdbencodingtest'] = 'Pasar por alto el test de decodificación de la BD';
$string['sqliteextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión SQLite. Por favor, compruebe su archivo php.ini o recompile PHP.';
$string['tableprefix'] = 'Prefijo de la tabla:';
$string['unsafedirname'] = 'Error: Caracteres inseguros en el nombre del directorio. Los caracteres válidos son a-zA-Z0-9';
$string['upgradingactivitymodule'] = 'Actualizando módulo de actividad';
$string['upgradingbackupdb'] = 'Actualizando la copia de seguridad de la base de datos';
$string['upgradingblocksdb'] = 'Actualizando la base de datos de masa';
$string['upgradingblocksplugin'] = 'Actualizando plugins de masa';
$string['upgradingcompleted'] = 'Actualización completada...';
$string['upgradingcourseformatplugin'] = 'Actualizando plugins del formato del curso';
$string['upgradingenrolplugin'] = 'Actualizando plugin de apuntarse';
$string['upgradinggradeexportplugin'] = 'Actualizando plugin de exportación de nota';
$string['upgradinggradeimportplugin'] = 'Actualizando plugin de importación de nota';
$string['upgradinggradereportplugin'] = 'Actualizando plugin de informe de nota';
$string['upgradinglocaldb'] = 'Actualizando la base de datos local';
$string['upgradingmessageoutputpluggin'] = 'Actualizando plugin de pregunta/tipo';
$string['upgradingqtypeplugin'] = 'Actualizando el Plugin Pregunta/tipo';
$string['upgradingrpcfunctions'] = 'Actualizando las funciones RPC';
$string['usagehelp'] = 'Sinopsis:
\$php cliupgrade.php OPCIONES
OPCIONES
--lang Idioma válido instalado durante la instalación. Inglés(in) es por defecto
--webaddr Dirección web para el sitio Moodle
--moodledir Ubicación de la carpeta web de moodle
--datadir Ubicación de la carpeta de datos moodle (no se debe ver en la web)
--dbtype Tipo de base de datos. Por defecto es mysql 
--dbhost Host de la base de datos. Por defecto es localhost
--dbname Nombre de la base de datos. Por defecto es moodle
--dbuser Usuario de la base de datos. Por defecto es en blanco
--dbpass Contraseña de la base de datos. Por defecto es en blanco
--prefix Prefijo de tabla para las tablas de arriba de las base de datos. Por defecto es mdl
--verbose 0 Sin output; 1 Output resumido (por defecto); 2 Output detallado
--interactivelevel 0 No interactivo (por defecto); 1 Semi interactivo; 2 Interactivo
--agreelicense Sí(por defecto) o No
--confirmrelease Sí(por defecto) o No
--sitefullname Nombre completo para el sitio. Por defecto es:Sitio Moodle (¡¡Por favor cambie el nombre del sitio!!)
--siteshortname Nombre corto para el sitio. Por defecto es Moodle
--sitesummary Resumen del sitio. Por defecto es en blanco
--adminfirstname Nombre del admin. Por defecto es Admin
--adminlastname Apellido del admin. Por defecto es admin
--adminusername Nombre de usuario para el admin. Por defecto es admin
--adminpassword Contraseña del admin. Por defecto es admin
--adminemail Dirección de email del admin. Por defecto es root@localhost
--help Imprimir esta ayuda

Uso:
\$php cliupgrade.php --lang=in--webaddr=http://www.ejemplo.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost--dbname=moodle --dbuser=root --prefix=mdl --agreelicense=si--confirmrelease=si--sitefullname=\"Ejemplo de sitio Moodle\" --siteshortname=moodle --sitesummary=sitioparami--adminfirstname=Admin --adminlastname=Usuario--adminusername=admin --adminpassword=admin --adminemail=admin@ejemplo.com --verbose=1 --interactivelevel=2';
$string['versionerror'] = 'El usuario abortó debido a un error en la versión';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Si está viendo esta página es porque ha podido ejecutar el paquete <strong>$a->packname $a->packversion</strong> en su ordenador. !Enhorabuena!';
$string['welcomep30'] = 'Esta versión de <strong>$a->installername</strong> incluye las 
    aplicaciones necesarias para que <strong>Moodle</strong> funcione en su ordenador,
    principalmente:';
$string['welcomep40'] = 'El paquete también incluye <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'El uso de todas las aplicaciones del paquete está gobernado por sus respectivas 
    licencias. El programa <strong>$a->installername</strong> es 
    <a href=\"http://www.opensource.org/docs/definition_plain.html\">código abierto</a> y se distribuye 
    bajo licencia <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Las siguientes páginas le guiarán a través de algunos sencillos pasos para configurar
    y ajustar <strong>Moodle</strong> en su ordenador. Puede utilizar los valores por defecto sugeridos o,
    de forma opcional, modificarlos para que se ajusten a sus necesidades.';
$string['welcomep70'] = 'Pulse en el botón \"Siguiente\" para continuar con la configuración de <strong>Moodle</strong>.';
$string['welcometext'] = '---Bienvenido al instalador del comando moodle ---';
$string['writetoconfigfilefaild'] = 'Error: Falló la escritura en el archivo config';
$string['wwwroot'] = 'Dirección Web';
$string['wwwrooterror'] = 'La \'Dirección Web\' parece incorrecta. No se pudo encontrar una instalación de Moodle. El valor ha sido cambiado por el original.';
$string['yourchoice'] = 'Su elección:';

?>