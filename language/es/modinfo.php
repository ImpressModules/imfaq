<?php
/**
* English language constants related to module information
*
* @copyright	INBOX International
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Rodrigo Pereira Lima <rodrigo@inboxinternational.com>
* @package		imfaq
* @version		$Id$
*/

if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

// Module Info
// The name of this module

global $icmsModule;
define("_MI_IMFAQ_MD_NAME", "Sistema de preguntas y respuestas avanzado para tu sitio de ImpressCMS");
define("_MI_IMFAQ_MD_DESC", "Sistema de gestión de preguntas y respuestas avanzado para tu sitio de ImpressCMS");

define("_MI_IMFAQ_INDEX", "Índice");
define("_MI_IMFAQ_FAQS", "Preguntas frecuentes");
define("_MI_IMFAQ_CATEGORYS", "Categorías");
define("_MI_IMFAQ_ATTACHMENTS", "Adjuntos");
define("_MI_IMFAQ_IMPORT", "Importar");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Submeter nueva pregunta');
define('_MI_IMFAQ_REQUEST_ADD','Solicitar respuesta');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Lista de categorías');
define('_MI_IMFAQ_CATEGLISTDSC','Bloque para mostrar una lista simple de categorías');
define('_MI_IMFAQ_RANDOM_DIDUNO','Pregunta aleatoria "¿Te has preguntado si...?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Bloque para mostrar una pregunta aleatoria ¿Te has preguntado si...?');
define('_MI_IMFAQ_RECENT_QUESTIONS','Preguntas recientes');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Bloque para mostrar las preguntas recientes');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Respuestas de los usuarios");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Permitir a los usuarios submeter preguntas en tu sitio de ImpressCMS?");
define("_MI_IMFAQ_ALLOWREQUEST", "Solicitudes de usuarios");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Permitir a los usuarios solicitar preguntas en tu sitio de ImpressCMS?");
define('_MI_IMFAQ_DATEFORMAT', 'Formato de fecha');
define('_MI_IMFAQ_DATEFORMATDSC', 'Usa la parte final de language/english/global.php para seleccionar un estilo de presentación. Por ejemplo: "d-M-Y H:i" traduce en "30-Mar-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Mostrar descripción de categorías superiores?');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Selecciona \"SÍ\" para mostrar la descripción de categorías superiores en la página de índice y categoría");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Longitud máxima de la descripción de categorías superiores');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Define cuántos caracteres se mostrarán en la descripción de categorías superiores");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Mostrar subcategorías en la página de índice?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Selecciona \"SÍ\" para mostrar subcategorías en la página de índice");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Mostrar descripción de subcategorías?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Selecciona \"SÍ\" para mostrar la descripción de subcategorías en la página de índice y categoría");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Longitud máxima de la descripción de subcategorías');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Define cuántos caracteres se mostrarán en la descripción de subcategorías");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'Mostrar respuestas de la pregunta en la página de subcategorías?');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Longitud máxima de la respuesta de la pregunta en la página de subcategorías');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Define cuántos caracteres se mostrarán en la respuesta de la pregunta en la página de subcategorías");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Aprobar automáticamente preguntas enviadas?');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Aprobar automáticamente preguntas enviadas sin intervención del administrador');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'Mostrar información de preguntas?');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Selecciona "SÍ" para mostrar el autor, la fecha de publicación y el contador de preguntas');
define("_MI_IMFAQ_LIMIT", "Límite de preguntas");
define("_MI_IMFAQ_LIMITDSC", "Número de preguntas a mostrar en la interfaz del usuario");
define("_MI_IMFAQ_CATSLIMIT", "Límite de categorías");
define("_MI_IMFAQ_CATSLIMITDSC", "Número de categorías a mostrar en la interfaz del usuario");
define("_MI_IMFAQ_SEOMODNAME", "Modulo SEO");
define("_MI_IMFAQ_SEOMODNAMEDSC", "Este nombre se utilizará para generar el nombre del módulo SEO. El nombre que elijas aquí también debe utilizarse para personalizar su archivo htaccess");
define("_MI_IMFAQ_SEOMODE", "Modo SEO");
define("_MI_IMFAQ_SEOMODEDSC", "Selecciona un modo de SEO");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Mensaje de introducción para solicitar preguntas');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Mensaje de introducción a mostrar en la página para solicitar preguntas del módulo');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "No has encontrado la respuesta a la pregunta que estabas buscando? No hay problema! Simplemente completa el siguiente formulario para solicitar una respuesta a una nueva pregunta. El administrador del sitio revisará tu solicitud y publicará esta nueva pregunta en la sección de preguntas abiertas para que alguien la responda!"); 
define("_MI_IMFAQ_HEADER", "Mensaje de bienvenida");
define("_MI_IMFAQ_HEADERDSC", "Mensaje de bienvenida a mostrar en la página del módulo");
define('_MI_IMFAQ_HEADER_DEF', "En esta área de nuestro sitio, encontrarás las respuestas a las preguntas frecuentes. Por favor, sientete libre de dejar un comentario en cualquier pregunta de FAQ.");
define("_MI_IMFAQ_FOOTER", "Texto del pie de página");
define("_MI_IMFAQ_FOOTERDSC", "El contenido que pongas aquí se mostrará en todas las páginas del módulo en la interfaz del usuario. Dejarlo en blanco para no mostrar.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Usar el nombre real de los usuarios?');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Cuando se muestra un nombre de usuario, usar el nombre real del usuario si tiene establecido su nombre real.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Permiso de vista predeterminado de la categoría');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Define los grupos que tendrán por defecto el permiso de vista de cada categoría. Cuando se crea o edita una categoría, siempre puedes cambiar los permisos.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Permiso de escritura predeterminado de la categoría');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Define los grupos que tendrán por defecto el permiso de escritura de cada categoría. Cuando se crea o edita una categoría, siempre puedes cambiar los permisos.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'Habilitar la característica de archivos adjuntos?');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Ordenar las categorías/subcategorías');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Selecciona cómo ordenar la lista de categorías/subcategorías en la página de índice');
define('_MI_IMFAQ_FAQS_ORDER', 'Ordenar preguntas');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Selecciona cómo ordenar la lista de preguntas en las páginas de categorías');

define('_MI_IMFAQ_SORT_WEIGHT', 'Peso');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Fecha de publicación ASC');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Fecha de publicación DESC');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Preguntas globales");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Opciones de notificación que aplican a todas las preguntas");

define('_MI_IMFAQ_FAQ_NOTIFY', "Pregunta");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Opciones de notificación que aplican a la pregunta actual");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "Pregunta enviada");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "Notificarme cuando cualquier pregunta se envíe y esté pendiente de aprobación");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Receive notification when any question is submitted and is waiting approval");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : New question submitted");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "Pregunta aprobada");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "Notificarme cuando esta pregunta sea aprobada");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Receive notification when this question is approved");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : Question approved");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Nueva pregunta");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "Notificarme cuando cualquier nueva pregunta sea publicada");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New question published");

define("_MI_IMFAQ_TEASERTEXT", "Set characters num. for teaser text");
define("_MI_IMFAQ_TEASERTEXTDSC", "Tags alloweg in teaser text are: strong, p, em, h4, h5, a, ul, li");
?>