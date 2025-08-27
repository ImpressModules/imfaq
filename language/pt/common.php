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

define("_CO_IMFAQ_READMORE", "Read more...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Question");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Title in menu");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Answer");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Author");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Category");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "Did you know?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Este será utilizado no bloco Did Você Sabia. ");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "Status");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Published Date");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Can Comment?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Weight");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Attachments");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Clique no botão \"anexos\" para selecionar e anexar itens a esta faq");
define("_CO_IMFAQ_FAQ_LEARNMORE", "Para obter mais informações, veja as seguintes publicações da NAIMA: ");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Notify on approval?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Published");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "Pending");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Rejected");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Offline");

define("_CO_IMFAQ_FAQ_READ", "View Permission");
define("_CO_IMFAQ_FAQ_READ_DSC", "Selecione os grupos que terão permissão de visualização para esta faq. Isto significa que um usuário pertencente a um dos grupos selecionados será capaz de ver a faq quando ela for ativada no site. ");

define("_CO_IMFAQ_FAQ_INFO", "Publicado por %s em %s. (%u leituras) ");
define("_CO_IMFAQ_FAQ_FROM_USER", "Todos os conteúdos de %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "%d comentários");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Nenhum comentário");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>FAQs enviadas pelo usuário</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>FAQs solicitadas pelo usuário</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Title");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Title in menu");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Parent category");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Se deseja que esta nova categoria seja uma sub-categoria, selecione aqui um pai. Se deve ser uma categoria principal, deixe este campo em branco. ");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Summary");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Description");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Weight");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Published Date");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "Status");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "SubCategories");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Active");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Inactive");

define("_CO_IMFAQ_CATEGORY_READ", "View Permission");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Selecione os grupos que terão permissão de visualização para esta categoria. Isto significa que um usuário pertencente a um dos grupos selecionados será capaz de ver a categoria quando ela for ativada no site. ");
define("_CO_IMFAQ_CATEGORY_WRITE", "Write Permission");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Selecione os grupos que são permitidos a criação de novas faqs nesta categoria. Isto significa que um usuário pertencente a um dos grupos selecionados será capaz de adicionar novas faqs nesta categoria diretamente no site. ");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Faq");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Module");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Item");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Weight");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "Status");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Show");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Hide");

define("_CO_IMFAQ_ATTACHMENT_READ", "View Permission");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Selecione os grupos que terão permissão de visualização para este anexo. Isto significa que um usuário pertencente a um dos grupos selecionados será capaz de ver o anexo quando ele for ativado no site. ");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Selecione um módulo plugin: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Itens disponíveis em %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "A seguir está uma lista de todos os itens disponíveis para o módulo selecionado. Selecione os itens desejados e clique no botão \"anexar\" para anexá-los à FAQ. ");
?>