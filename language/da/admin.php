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
define("_AM_IMFAQ_REQUIREMENTS", "Krav til imFAQ");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "Vi har gennemført en prøvetur af din system, unfortunately det mangler alle kravene, der er nødvendige for imFAQ at fungere. Nedenfor er de krav, der er nødvendige. ");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ kræver mindst ImpressCMS 1.1.1 RC 1. ");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Hvis du har nogle spørgsmål eller bekymringer, gå til vores forum på <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "Dette er første gang du har adgang til denne modul. Opdater modulet for at dynamisk oprette databasenschemat.");
define("_AM_IMFAQ_ATTACH", "Koble til");
define("_AM_IMFAQ_ATTACH_WARNING", "Advarsel");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Du skal vælge mindst én item til at koble til!");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Har du koblet nogle items til denne FAQ, er du sikker på, at du vil annullere skabelsen af FAQ?<br />De koblede items vil slettes!");

define("_AM_IMFAQ_NOPLUGINS", "<h2>Du har ingen tilgængelige plugins.</h2>");

// Faq
define("_AM_IMFAQ_FAQS", "FAQs");
define("_AM_IMFAQ_FAQS_DSC", "Alle FAQs i modulet");
define("_AM_IMFAQ_FAQ_CREATE", "Tilføj en FAQ");
define("_AM_IMFAQ_FAQ", "FAQ");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Fyld ud den nedenstående formåret for at oprette en ny FAQ.");
define("_AM_IMFAQ_FAQ_EDIT", "Rediger denne FAQ");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Fyld ud den nedenstående formåret for at redigere denne FAQ.");
define("_AM_IMFAQ_FAQ_MODIFIED", "FAQ blev korrekt modificeret.");
define("_AM_IMFAQ_FAQ_CREATED", "FAQ har blivet korrekt oprettet.");
define("_AM_IMFAQ_FAQ_VIEW", "FAQ informationer");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Her er informationerne om denne FAQ.");
define("_AM_IMFAQ_FAQ_ATTACH", "Koble til filer");

// Category
define("_AM_IMFAQ_CATEGORYS", "Kategorier");
define("_AM_IMFAQ_CATEGORYS_DSC", "Alle kategorier i modulet");
define("_AM_IMFAQ_CATEGORY_CREATE", "Tilføj en kategori");
define("_AM_IMFAQ_CATEGORY", "Kategori");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Fyld ud den nedenstående formåret for at oprette en ny kategori.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Rediger denne kategori");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Fyld ud den nedenstående formåret for at redigere denne kategori.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "Kategori blev korrekt modificeret.");
define("_AM_IMFAQ_CATEGORY_CREATED", "Kategori har blivet korrekt oprettet.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Kategori informationer");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Her er informationerne om denne kategori.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Filer");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Tilføj en fil");
define("_AM_IMFAQ_ATTACHMENT", "Fil");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Fyld ud den nedenstående formåret for at oprette en ny fil.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Rediger denne fil");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Fyld ud den nedenstående formåret for at redigere denne fil.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "Fil blev korrekt modificeret.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "Fil har blivet korrekt oprettet.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Fil informationer");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Her er informationerne om denne fil.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Klik her for at slette denne fil");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Klik her for at gemme denne fil fra brugerens side");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Klik her for at vise denne fil på brugerens side");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Drag for at sortere denne fil");



define("_AM_IMFAQ_CANCEL", "Abbrejder");
define("_AM_IMFAQ_IMPORT", "Importer");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Kommentar '%s' blev importeret.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Fejl under import af kommentar '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Import af kommentarer i modulet");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Alle artikler");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Koblede fil %s blev importeret");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Fejl ved import af artiklen <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "Sidenfolden fil %s blev kopieret i modulets indholdsfolder.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Lad automatisk godkendelse");
define("_AM_IMFAQ_IMPORT_BACK", "Tilbage til importeringsiden");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Kategorier til import");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Her er de kategorier, der vil blive importet i SmartSection");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Fejl under import af kategori <em>%s</em>");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Fejl under import af kategori <em>%s</em> – tilladelser");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Kategori <em>%s</em> blev importeret korrekt.");
define("_AM_IMFAQ_IMPORT_ERROR", "Fejl under import af artiklen.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Fil ikke fundet ved <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Import fra %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Tilbage til SmartSections indexside");
define("_AM_IMFAQ_IMPORT_INFO", "Du kan importere artikler direkte i SmartSection. Klik her for at vælge fra hvilket modul du vil importere artiklerne og klik derefter på ‘Importer’.<br><b>Kør denne operation kun en gang, ellers vil artiklerne blive dobbeltregistreret</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "%s modul blev fundet. Der findes %s artikler og %s kategorier, der kan importeres.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "%s modul blev fundet men der findes ingen artikler til import.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Ingen kategori blev valgt til import.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Da ingen andre understøttede artikelsystem er installeret på dette system, kan ingen artikler importeres.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Ingen kategorier til import.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Overskriftskategori");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importer kategorierne i denne overskriftskategori.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "Fejl under import af ‘%s’.");
define("_AM_IMFAQ_IMPORT_RESULT", "Resultatet af importen.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Importeringsindstillinger");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Artiklerne blev korrekt importeret i modulet.");
define("_AM_IMFAQ_IMPORT_TITLE", "Importer FAQs");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Importeret FAQ: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Importerede FAQs: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Importeret kategori: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Importerede kategorier: <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Importer Valg");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Artikler");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Vælg det modul fra hvilket du vil importere artiklerne. ");
?>