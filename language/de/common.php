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

define("_CO_IMFAQ_READMORE", "Weiterlesen...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Frage");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Titel im Menü");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Antwort");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Autor");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Kategorie");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "Wussten Sie schon?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Dies wird im Wussten Sie wussten Block verwendet.");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "Status");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Veröffentlichungsdatum");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Kann kommentieren?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Gewicht");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Anhänge");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Klicken Sie auf den Button \"Anhänge hinzufügen\", um Elemente an diesem faq auszuwählen und anzuhängen");
define("_CO_IMFAQ_FAQ_LEARNMORE", "Um mehr zu erfahren, lesen Sie die folgenden NAIMA-Veröffentlichungen:");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Bei Genehmigung benachrichtigen?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Veröffentlicht");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "Wartet");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Abgelehnt");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Offline");

define("_CO_IMFAQ_FAQ_READ", "Berechtigung anzeigen");
define("_CO_IMFAQ_FAQ_READ_DSC", "Wählen Sie aus, welche Gruppen die Ansichtsberechtigung für dieses Faq haben. Das bedeutet, dass ein Benutzer, der einer dieser Gruppen angehört, das faq sehen kann, wenn es in der Site aktiviert ist.");

define("_CO_IMFAQ_FAQ_INFO", "Veröffentlicht von %s auf %s. (%u Lesen)");
define("_CO_IMFAQ_FAQ_FROM_USER", "Alle Inhalte von %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "%d Kommentare");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Kein Kommentar");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>Benutzer's eingereichte FAQs</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>angeforderte FAQs des Benutzers</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Titel");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Titel im Menü");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Übergeordnete Kategorie");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Wenn diese neue Kategorie eine Unterkategorie sein soll, wählen Sie hier eine Elternkategorie. Wenn es eine Top-Level-Kategorie sein soll, lassen Sie dieses Feld leer.");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Summary");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Beschreibung");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Gewicht");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Veröffentlichungsdatum");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "Status");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "Unterkategorien");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Aktiv");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Inaktiv");

define("_CO_IMFAQ_CATEGORY_READ", "Berechtigung anzeigen");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Wählen Sie aus, welche Gruppen die Zugriffsberechtigung für diese Kategorie haben. Das bedeutet, dass ein Benutzer, der zu einer dieser Gruppen gehört, die Kategorie sehen kann, wenn er auf der Seite aktiviert ist.");
define("_CO_IMFAQ_CATEGORY_WRITE", "Schreibberechtigung");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Wählen Sie die Gruppen, die neue Faqs für diese Kategorie erstellen dürfen. Dies bedeutet, dass ein Benutzer, der zu einer dieser Gruppen gehört, in der Lage sein wird, neue Fassungen in dieser Kategorie direkt auf der Seite hinzuzufügen.");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Fach");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Modul");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Artikel");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Gewicht");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "Status");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Zeigen");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Verstecken");

define("_CO_IMFAQ_ATTACHMENT_READ", "Berechtigung anzeigen");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Wählen Sie aus, welche Gruppen die Ansichtsberechtigung für diesen Anhang haben. Das bedeutet, dass ein Benutzer, der einer dieser Gruppen angehört, den Anhang sehen kann, wenn er in der Site aktiviert ist.");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Wählen Sie ein Modul-Plugin: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Verfügbare Items von %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "Unten ist eine Liste aller verfügbaren Elemente für das ausgewählte Modul. Wählen Sie die gewünschten Elemente aus und klicken Sie auf Hinzufügen, um sie in der FAQ anzuhängen.");
?>