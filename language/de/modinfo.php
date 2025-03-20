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
define("_MI_IMFAQ_MD_NAME", "imFAQ");
define("_MI_IMFAQ_MD_DESC", "Erweitertes Fragen- und Antwortmanagementsystem für Ihre ImpressCMS Seite");

define("_MI_IMFAQ_INDEX", "Index");
define("_MI_IMFAQ_FAQS", "Faqs");
define("_MI_IMFAQ_CATEGORYS", "Kategorien");
define("_MI_IMFAQ_ATTACHMENTS", "Anhänge");
define("_MI_IMFAQ_IMPORT", "Importieren");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Neue FAQ senden');
define('_MI_IMFAQ_REQUEST_ADD','Antwort anfordern');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Kategorieliste');
define('_MI_IMFAQ_CATEGLISTDSC','Blockieren, um eine einfache Kategorieliste anzuzeigen');
define('_MI_IMFAQ_RANDOM_DIDUNO','Zufällig "Wusstest du?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Blockieren um eine zufällige Frage anzuzeigen');
define('_MI_IMFAQ_RECENT_QUESTIONS','Letzte Fragen');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Blockieren, um die letzten Fragen anzuzeigen');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Benutzereinreichungen");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Benutzern das Senden von FAQs auf Ihrer Website erlauben?");
define("_MI_IMFAQ_ALLOWREQUEST", "Benutzeranfragen");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Benutzern erlauben, FAQs auf Ihrer Website anzufordern?");
define('_MI_IMFAQ_DATEFORMAT', 'Datumsformat');
define('_MI_IMFAQ_DATEFORMATDSC', 'Benutze den letzten Teil der Sprache/englisch/global.php um einen Anzeigestil auszuwählen. Beispiel: "d-M-Y H:i" übersetzt in "30-Mar-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Topkategorien-Beschreibung anzeigen?');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Wählen Sie 'Ja', um die Beschreibung der Top-Kategorien auf der Index- und Kategorieseite anzuzeigen.");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Maximale Länge der Beschreibung der oberen Kategorie');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Legen Sie fest, wie viele Zeichen in der Beschreibung der oberen Kategorie angezeigt werden.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Unterkategorien im Index anzeigen?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Wählen Sie 'Ja', um Unterkategorien auf der Indexseite anzuzeigen.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Unterkategorien Beschreibung anzeigen?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Wählen Sie 'Ja', um die Beschreibung von Unterkategorien auf der Index- und Kategorieseite anzuzeigen.");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Maximale Länge der Beschreibung der oberen Kategorie');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Legen Sie fest, wie viele Zeichen in der Beschreibung der oberen Kategorie angezeigt werden.");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'FAQ-Antworten auf Unterkategorien anzeigen?');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Max-Länge der FAQ-Antwort auf Unterkategorien');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Legen Sie fest, wie viele Zeichen in der FAQ-Antwort auf der Unterkategorien Seite angezeigt werden.");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Abgeschickte FAQs automatisch genehmigen?');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Eingegebene FAQs ohne Admin-Intervention automatisch genehmigt.');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'FAQ-Informationen anzeigen?');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Wählen Sie "Ja" aus, um den FAQ-Autor, das veröffentlichte Datum und den Zähler anzuzeigen.');
define("_MI_IMFAQ_LIMIT", "Faqs Limit");
define("_MI_IMFAQ_LIMITDSC", "Anzahl der Faxe, die auf der Benutzerseite angezeigt werden sollen.");
define("_MI_IMFAQ_CATSLIMIT", "Kategorienlimit");
define("_MI_IMFAQ_CATSLIMITDSC", "Anzahl der Kateogries auf der Benutzerseite.");
define("_MI_IMFAQ_SEOMODNAME", "SEO-Modulname");
define("_MI_IMFAQ_SEOMODNAMEDSC", "Dies wird bei der Erstellung von SEO-URL verwendet. Der Name, den Sie hier wählen, muss auch verwendet werden, um Ihre htaccess-Datei anzupassen.");
define("_MI_IMFAQ_SEOMODE", "SEO-Modus");
define("_MI_IMFAQ_SEOMODEDSC", "Wählen Sie aus der SEO-Technik.");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Einführungsnachricht anfordern');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Einführungsnachricht in der FAQ-Seite des Moduls angezeigt werden.');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "Sie haben die Antwort auf die Frage, die Sie suchten, nicht gefunden? Füllen Sie einfach das folgende Formular aus, um die Antwort auf eine neue Frage anzufordern. Der Website-Administrator prüft Ihre Anfrage und veröffentlicht diese neue Frage im Bereich Offene Fragen, damit jemand sie beantworten kann!"); 
define("_MI_IMFAQ_HEADER", "Willkommensnachricht indizieren");
define("_MI_IMFAQ_HEADERDSC", "Willkommensnachricht, die auf der Indexseite des Moduls angezeigt wird.");
define('_MI_IMFAQ_HEADER_DEF', "In diesem Bereich finden Sie die Antworten auf die häufig gestellten Fragen. Bitte zögern Sie nicht, einen Kommentar zu jeder FAQ zu posten.");
define("_MI_IMFAQ_FOOTER", "Modulfußtext");
define("_MI_IMFAQ_FOOTERDSC", "Der hier eingegebene Inhalt wird auf allen Seiten des Moduls auf der Benutzerseite angezeigt. Leer lassen um nicht anzuzeigen.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Den echten Namen der Benutzer verwenden?');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Wenn Sie einen Benutzernamen anzeigen, verwenden Sie den richtigen Namen dieses Benutzers, wenn er einen richtigen Namen hat.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Standard Kategorieansicht Berechtigung');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Definieren Sie die Gruppen, die standardmäßig die Berechtigung für jede Kategorie haben. Bei der Erstellung oder Bearbeitung einer Kategorie können Sie immer die Berechtigungen ändern.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Standard-Schreibberechtigung für Kategorie');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Definieren Sie die Gruppen, die standardmäßig Schreibrechte für jede Kategorie haben. Bei der Erstellung oder Bearbeitung einer Kategorie können Sie immer die Berechtigungen ändern.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'Aktivieren Sie die Anhang-Funktion?');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Kategorien/Unterkategorien sortieren nach');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Wählen Sie die Sortierung der Kategorien/Unterkategorien auf der Indexseite aus.');
define('_MI_IMFAQ_FAQS_ORDER', 'FAQs sortieren nach');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Wählen Sie aus, wie tp die FAQ-Liste auf der Kategorienseite sortiert.');

define('_MI_IMFAQ_SORT_WEIGHT', 'Gewicht');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Veröffentlichungsdatum ASC');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Veröffentlichungsdatum DESC');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Globale Themen");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Benachrichtigungsoptionen, die für alle FAQs gelten.");

define('_MI_IMFAQ_FAQ_NOTIFY', "FAQ");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Benachrichtigungsoptionen, die für die aktuelle FAQ gelten.");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "FAQ eingereicht");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "Benachrichtigen Sie mich, wenn eine FAQ eingereicht wurde und wartet auf die Genehmigung.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Erhalten Sie eine Benachrichtigung, wenn eine FAQ eingereicht wurde und wartet auf die Genehmigung.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung: Neue FAQ eingereicht");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "FAQ genehmigt");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "Benachrichtigen Sie mich, wenn diese FAQ genehmigt wurde.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Erhalte Benachrichtigung, wenn diese FAQ genehmigt wurde.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : FAQ genehmigt");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Neue FAQ");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "Benachrichtigen Sie mich, wenn neue FAQ veröffentlicht wird.");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neue FAQ veröffentlicht");

define("_MI_IMFAQ_TEASERTEXT", "Anzahl Zeichen für Teaser-Text festlegen");
define("_MI_IMFAQ_TEASERTEXTDSC", "Tags alloweg im Teaser-Text sind: stark, p, em, h4, h5, a, ul, li");
?>