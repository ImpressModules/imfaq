<?php
/**
* English language constants used in admin section of the module
*
* @copyright	INBOX International
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Rodrigo Pereira Lima <rodrigo@inboxinternational.com>
* @package		imfaq
* @version		$Id$
*/
if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

// Requirements
define("_AM_IMFAQ_REQUIREMENTS", "Requisitos de imFAQ");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "He examinado tu sistema, lamentablemente no cumple con todos los requisitos necesarios para que imFAQ funcione correctamente. A continuación, te proporciono los requisitos necesarios. ");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ requiere al menos ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Si tienes alguna pregunta o preocupación, visita nuestros foros en <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "Este es el primer acceso que tienes a este módulo. Actualiza el módulo para que se genere dinámicamente la esquema de la base de datos.");
define("_AM_IMFAQ_ATTACH", "Adjuntar");
define("_AM_IMFAQ_ATTACH_WARNING", "Advertencia");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Debes seleccionar al menos un elemento para adjuntar!");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Has adjuntado algunos elementos a esta FAQ, ¿estás seguro de que quieres cancelar la creación de la FAQ?<br />Los elementos adjuntos se eliminarán!");

define("_AM_IMFAQ_NOPLUGINS", "<h2>No hay disponibles planes disponibles.</h2>");

// Faq
define("_AM_IMFAQ_FAQS", "FAQs");
define("_AM_IMFAQ_FAQS_DSC", "Todas las FAQs en el módulo");
define("_AM_IMFAQ_FAQ_CREATE", "Crear una nueva FAQ");
define("_AM_IMFAQ_FAQ", "FAQ");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Rellena el siguiente formulario para crear una nueva FAQ.");
define("_AM_IMFAQ_FAQ_EDIT", "Editar esta FAQ");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Rellena el siguiente formulario para editar esta FAQ.");
define("_AM_IMFAQ_FAQ_MODIFIED", "La FAQ se modificó correctamente.");
define("_AM_IMFAQ_FAQ_CREATED", "La FAQ se creó correctamente.");
define("_AM_IMFAQ_FAQ_VIEW", "Información de la FAQ");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Aquí está la información sobre esta FAQ.");
define("_AM_IMFAQ_FAQ_ATTACH", "Adjuntar archivos");

// Category
define("_AM_IMFAQ_CATEGORYS", "Categorías");
define("_AM_IMFAQ_CATEGORYS_DSC", "Todas las categorías en el módulo");
define("_AM_IMFAQ_CATEGORY_CREATE", "Crear una nueva categoría");
define("_AM_IMFAQ_CATEGORY", "Categoría");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Rellena el siguiente formulario para crear una nueva categoría.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Editar esta categoría");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Rellena el siguiente formulario para editar esta categoría.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "La categoría se modificó correctamente.");
define("_AM_IMFAQ_CATEGORY_CREATED", "La categoría se creó correctamente.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Información de la categoría");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Aquí está la información sobre esta categoría.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Archivos adjuntos");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Crear un adjunto");
define("_AM_IMFAQ_ATTACHMENT", "Adjunto");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Rellena el siguiente formulario para crear un nuevo adjunto.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Editar este adjunto");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Rellena el siguiente formulario para editar este adjunto.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "El adjunto se modificó correctamente.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "El adjunto se creó correctamente.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Información del adjunto");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Aquí está la información sobre este adjunto.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Haz clic para eliminar este adjunto");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Haz clic para ocultar este adjunto en el lado del usuario");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Haz clic para mostrar este adjunto en el lado del usuario");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Arrástralo para ordenar este adjunto");



define("_AM_IMFAQ_CANCEL", "Cancelar");
define("_AM_IMFAQ_IMPORT", "Importar");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Comment '%s' imported.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Error while importing comment '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Importando comentarios del módulo");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Todos los artículos");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Linked file %s was imported");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Error while importing article <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "The pagewraped file %s has been copied in the module's content folder.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Autorización");
define("_AM_IMFAQ_IMPORT_BACK", "Regresar a la página de importación");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Categorías para importar");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Aquí están las categorías que se importarán en SmartSection.");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Error while importing category <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Error while importing category <em>%s</em> permissions.");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Category <em>%s</em> imported successfully.");
define("_AM_IMFAQ_IMPORT_ERROR", "Se produjo un error al importar el artículo.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Import file not found at <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importando de '%s'.");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Volver a la página principal de SmartSection.");
define("_AM_IMFAQ_IMPORT_INFO", "Puedes importar artículos directamente en SmartSection. Solo selecciona del que módulo deseas importar los artículos y haz clic en el botón 'Importar'.<br><b>Ejecuta esta operación solo una vez, de lo contrario, los artículos se duplicarán</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "%s module was found. There are %s articles and %s categories that can be imported.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "'%s' módulo encontrado pero no hay artículos para importar.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "No se seleccionó ninguna categoría para importar.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "No se ha instalado ningún otro módulo compatible con este sitio, por lo que no se puede importar artículo.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "No hay categorías para importar.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Categoría superior");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importa estas categorías en esta categoría principal.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "An error occured while importing '%s'.");
define("_AM_IMFAQ_IMPORT_RESULT", "Resultado de la importación.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Configuración de importación");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Los artículos se importaron correctamente al módulo.");
define("_AM_IMFAQ_IMPORT_TITLE", "Importar artículos");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Imported article : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Articles imported : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Imported category : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Categories imported : <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Selección de importación");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Articles");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Seleccione el módulo del que desea importar los artículos.");
?>