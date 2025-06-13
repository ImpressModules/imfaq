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

define("_CO_IMFAQ_READMORE", "Læs mere...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Spørgsmål");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Titel i menu");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Svar");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Forfatter");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Kategori");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "Ved at vide?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Denne tekst vil blive brugt i blocket 'Ved at vide'.");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "Status");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Publiceret Dato");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Kan Kommentere?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Vægt");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Tilsluttninger");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Tryk på knappen \"tilslut tilgårseler\" for at vælge og tilslut elementer til denne faq");
define("_CO_IMFAQ_FAQ_LEARNMORE", "For at lære mere, se følgende NAIMA Publications:");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Meddelelig ved godkendelse?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Publiceret");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "Venter på godkendelse");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Afvist");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Ude af kørsel");

define("_CO_IMFAQ_FAQ_READ", "Lesetryk");
define("_CO_IMFAQ_FAQ_READ_DSC", "Vælg hvilke grupper vil have lesetryk for denne faq. Det vil sige at en bruger, der hører til en af disse grupper, vil være i stand til at se faq-et, når den er aktiveret på hjemmesiden.");

define("_CO_IMFAQ_FAQ_INFO", "Publiceret af %s den %s. (%u læsninger)");
define("_CO_IMFAQ_FAQ_FROM_USER", "Alle indhold fra %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "%d kommentarer");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Ingen kommentar");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>Brugerrimte FAQs</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>Brugerrimte FAQs</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Titel");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Titel i menu");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Overordnet kategori");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Hvis du vil at denne ny kategori skal være undersøsterkategori, vælg en overordnet her. Hvis den skal være overordnet, lad felten stå tomt.");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Sammenfatning");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Beskrivelse");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Vægt");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Publiceret Dato");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "Status");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "Undersøsterkategorier");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Aktiv");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Ikke aktiv");

define("_CO_IMFAQ_CATEGORY_READ", "Lesetryk");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Vælg hvilke grupper vil have lesetryk for denne kategori. Det vil sige at en bruger, der hører til en af disse grupper, vil være i stand til at se kategorien, når den er aktiveret på hjemmesiden.");
define("_CO_IMFAQ_CATEGORY_WRITE", "Skrivebevillede");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Vælg grupperne, der er tilladt at oprette nye faqs på denne kategori. Det vil sige, at en bruger, der hører til en af disse grupper, vil være i stand til at oprette nye faqs på denne kategori direkte på hjemmesiden.");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Faq");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Modul");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Item");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Vægt");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "Status");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Vis");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Skjul");

define("_CO_IMFAQ_ATTACHMENT_READ", "Lesetryk");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Vælg hvilke grupper vil have lesetryk for denne tilslutning. Det vil sige at en bruger, der hører til en af disse grupper, vil være i stand til at se tilslutningen, når den er aktiveret på hjemmesiden.");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Vælg et modulplugin: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Tilgængelige elementer fra %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "Nedenfor er en liste over alle tilgængelige elementer for det valgte modul. Vælg det ønskede elementer og klik på knappen tilslut for at tilslut det i FAQ-et.");
?>