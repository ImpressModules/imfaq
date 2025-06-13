<?php
/**
* English language constants commonly used in the module
*
* @copyright	INBOX International
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Rodrigo Pereira Lima <rodrigo@inboxinternational.com>
* @package		imfaq
* @version		$Id$
*/

if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

define("_CO_IMFAQ_READMORE", "Leer más...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Pregunta");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Título en menú");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Respuesta");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Autor");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Categoría");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "¿Sabías?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Esto se utilizará en el bloque ¿Sabías?.");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "Estado");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Fecha de publicación");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Puede comentar?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Peso");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Adjuntos");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Haz clic en el botón \"adjuntar elementos\" para seleccionar y adjuntar elementos a esta FAQ.");
define("_CO_IMFAQ_FAQ_LEARNMORE", "Para obtener más información, vea las siguientes publicaciones de NAIMA: ");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Se le notificará al aprobar?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Publicado");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "En espera");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Rechazado");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Desde línea");

define("_CO_IMFAQ_FAQ_READ", "Permiso de visualización");
define("_CO_IMFAQ_FAQ_READ_DSC", "Seleccione los grupos que tendrán permiso de visualización para esta FAQ. Esto significa que un usuario que pertenezca a uno de estos grupos podrá ver la FAQ cuando se active en el sitio.");

define("_CO_IMFAQ_FAQ_INFO", "Publicado por %s en %s. (%u lecturas)");
define("_CO_IMFAQ_FAQ_FROM_USER", "Todos los contenidos de %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "%d comentarios");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Sin comentario");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>Preguntas FAQ enviadas por el usuario</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>Preguntas FAQ solicitadas por el usuario</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Título");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Título en menú");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Categoría padre");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Si desea que esta nueva categoría sea una subcategoría, seleccione una padre aquí. Si debe ser una categoría principal, deje este campo en blanco.");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Resumen");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Descripción");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Peso");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Fecha de publicación");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "Estado");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "Subcategorías");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Activo");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Inactivo");

define("_CO_IMFAQ_CATEGORY_READ", "Permiso de visualización");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Seleccione los grupos que tendrán permiso de visualización para esta categoría. Esto significa que un usuario que pertenezca a uno de estos grupos podrá ver la categoría cuando se active en el sitio.");
define("_CO_IMFAQ_CATEGORY_WRITE", "Permiso de escritura");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Seleccione los grupos que están permitidos para crear nuevas preguntas en esta categoría. Esto significa que un usuario que pertenezca a uno de estos grupos podrá agregar nuevas preguntas en esta categoría directamente en el sitio.");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Pregunta");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Módulo");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Elemento");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Peso");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "Estado");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Mostrar");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Ocultar");

define("_CO_IMFAQ_ATTACHMENT_READ", "Permiso de visualización");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Seleccione los grupos que tendrán permiso de visualización para esta adjunción. Esto significa que un usuario que pertenezca a uno de estos grupos podrá ver la adjunción cuando se active en el sitio.");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Seleccione un módulo plugin: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Elementos disponibles desde %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "A continuación hay una lista de todos los elementos disponibles para el módulo seleccionado. Seleccione los deseados y haga clic en el botón \"adjuntar\" para adjuntarlo a la FAQ.");
?>