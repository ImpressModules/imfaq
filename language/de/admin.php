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
define("_AM_IMFAQ_REQUIREMENTS", "imFAQ Anforderungen");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "Wir haben Ihr System überprüft, leider erfüllt es nicht alle Anforderungen, die für die Funktion von imFAQ benötigt werden. Unten sind die erforderlichen Voraussetzungen.");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ benötigt mindestens ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Sollten Sie Fragen oder Bedenken haben, besuchen Sie bitte unsere Foren unter <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "Dies ist das erste Mal, dass Sie auf dieses Modul zugreifen. Bitte aktualisieren Sie das Modul, um das Datenbankschema dynamisch zu erstellen.");
define("_AM_IMFAQ_ATTACH", "Anhängen");
define("_AM_IMFAQ_ATTACH_WARNING", "Warnung");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Sie müssen mindestens ein Element zum Anhängen auswählen!");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Du hast einige Elemente zu dieser FAQ hinzugefügt. Bist du dir sicher, dass du die FAQ Erstellung abbrechen möchtest?<br />Die angehängten Einträge werden gelöscht!");

define("_AM_IMFAQ_NOPLUGINS", "<h2>Du hast keine verfügbaren Plugins.</h2>");

// Faq
define("_AM_IMFAQ_FAQS", "Faqs");
define("_AM_IMFAQ_FAQS_DSC", "Alle faqs im Modul");
define("_AM_IMFAQ_FAQ_CREATE", "Faq hinzufügen");
define("_AM_IMFAQ_FAQ", "Fach");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Füllen Sie das folgende Formular aus, um ein neues Faq zu erstellen.");
define("_AM_IMFAQ_FAQ_EDIT", "Dieses faq bearbeiten");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Füllen Sie das folgende Formular aus, um dieses Faq zu bearbeiten.");
define("_AM_IMFAQ_FAQ_MODIFIED", "Das faq wurde erfolgreich geändert.");
define("_AM_IMFAQ_FAQ_CREATED", "Das faq wurde erfolgreich erstellt.");
define("_AM_IMFAQ_FAQ_VIEW", "Themeninfo");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Hier ist die Information über dieses Faq.");
define("_AM_IMFAQ_FAQ_ATTACH", "Anhänge hinzufügen");

// Category
define("_AM_IMFAQ_CATEGORYS", "Kategorien");
define("_AM_IMFAQ_CATEGORYS_DSC", "Alle Kategorien im Modul");
define("_AM_IMFAQ_CATEGORY_CREATE", "Kategorie hinzufügen");
define("_AM_IMFAQ_CATEGORY", "Kategorie");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Füllen Sie das folgende Formular aus, um eine neue Kategorie zu erstellen.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Diese Kategorie bearbeiten");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Füllen Sie das folgende Formular aus, um diese Kategorie zu bearbeiten.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "Die Kategorie wurde erfolgreich geändert.");
define("_AM_IMFAQ_CATEGORY_CREATED", "Die Kategorie wurde erfolgreich erstellt.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Kategorie-Info");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Hier sind die Informationen zu dieser Kategorie.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Anhänge");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Anhang hinzufügen");
define("_AM_IMFAQ_ATTACHMENT", "Anhang");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Füllen Sie das folgende Formular aus, um einen neuen Anhang zu erstellen.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Diesen Anhang bearbeiten");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Füllen Sie das folgende Formular aus, um diesen Anhang zu bearbeiten.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "Der Anhang wurde erfolgreich geändert.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "Der Anhang wurde erfolgreich erstellt.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Anhang-Info");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Hier ist die Information über diesen Anhang.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Klicken, um diesen Anhang zu löschen");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Klicken, um diesen Anhang auf der Benutzerseite zu verstecken");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Klicken Sie hier, um diesen Anhang auf der Benutzerseite anzuzeigen");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Ziehen, um diesen Anhang zu sortieren");



define("_AM_IMFAQ_CANCEL", "Abbrechen");
define("_AM_IMFAQ_IMPORT", "Importieren");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Kommentar '%s' importiert.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Fehler beim Importieren des Kommentars '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Importiere Kommentare des Moduls");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Alle Artikel");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Verknüpfte Datei %s wurde importiert");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Fehler beim Importieren des Artikels <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "Die Datei %s wurde in den Inhaltsordner des Moduls kopiert.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Auto-Freigabe");
define("_AM_IMFAQ_IMPORT_BACK", "Zurück zur Importseite");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Zu importierende Kategorien");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Hier sind die Kategorien, die in SmartSection importiert werden");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Fehler beim Importieren der Kategorie <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Fehler beim Importieren der Kategorie <em>%s</em> Berechtigungen.");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Kategorie <em>%s</em> erfolgreich importiert.");
define("_AM_IMFAQ_IMPORT_ERROR", "Beim Importieren des Artikels ist ein Fehler aufgetreten.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Importdatei nicht gefunden bei <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importieren von %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Gehe SmartSection's Indexseite");
define("_AM_IMFAQ_IMPORT_INFO", "Sie können Artikel direkt in SmartSection importieren. Wählen Sie einfach aus, aus welchem Modul Sie die Artikel importieren möchten und klicken Sie auf die Schaltfläche 'Importieren'.<br><b>Führen Sie diesen Vorgang nur einmal aus, andernfalls werden die Artikel</b> duppliziert");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "Modul %s wurde gefunden. Es gibt %s Artikel und %s Kategorien, die importiert werden können.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "Modul %s wurde gefunden, aber es gibt keinen Artikel zu importieren.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Es wurde keine Kategorie für den Import ausgewählt.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Da kein anderes unterstütztes Artikelmodul auf dieser Seite installiert ist, kann kein Artikel importiert werden.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Es gibt keine Kategorien zu importieren.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Übergeordnete Kategorie");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importieren Sie ausgewählte Kategorien in dieser übergeordneten Kategorie.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "Beim Importieren von '%s ' ist ein Fehler aufgetreten.");
define("_AM_IMFAQ_IMPORT_RESULT", "Hier ist das Ergebnis des Imports.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Import-Einstellungen");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Die Artikel wurden erfolgreich in das Modul importiert.");
define("_AM_IMFAQ_IMPORT_TITLE", "Artikel importieren");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Importierter Artikel: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Importierte Artikel: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Importierte Kategorie: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Importierte Kategorien : <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Auswahl importieren");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Artikel");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Wählen Sie das Modul aus, von dem die Artikel importiert werden sollen.");
?>