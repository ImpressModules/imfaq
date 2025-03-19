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
define("_AM_IMFAQ_REQUIREMENTS", "imFAQ vereisten");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "We hebben uw systeem nagekeken, helaas voldoet het niet aan alle vereisten die nodig zijn om imFAQ te laten functioneren. Hieronder staan de vereisten die nodig zijn.");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ vereist ten minste ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Voor vragen of opmerkingen, bezoek dan onze forums op <a href='https://www.impresscms.org'>https://www.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "Dit is de eerste keer dat u toegang heeft tot deze module. Update de module om dynamisch het database schema aan te maken.");
define("_AM_IMFAQ_ATTACH", "Bijvoegen");
define("_AM_IMFAQ_ATTACH_WARNING", "Waarschuwin");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "U moet ten minste één item selecteren om toe te voegen.");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "U heeft enkele items aan deze FAQ gekoppeld, weet u zeker dat u de aanmaak van FAQ wilt annuleren?<br />De bijgevoegde items zullen worden verwijderd!");

define("_AM_IMFAQ_NOPLUGINS", "Je hebt geen beschikbare plug-ins");

// Faq
define("_AM_IMFAQ_FAQS", "Faqs");
define("_AM_IMFAQ_FAQS_DSC", "Alle veelgestelde vragen in de module");
define("_AM_IMFAQ_FAQ_CREATE", "Voeg een vraag toe");
define("_AM_IMFAQ_FAQ", "Vraag");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Vul het volgende formulier in om een nieuwe vraag te maken.");
define("_AM_IMFAQ_FAQ_EDIT", "Bewerk deze vraag");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Vul het volgende formulier in om een vraag te bewerken.");
define("_AM_IMFAQ_FAQ_MODIFIED", "De vraag werd succesvol aangepast.");
define("_AM_IMFAQ_FAQ_CREATED", "De vraag is succesvol aangemaakt.");
define("_AM_IMFAQ_FAQ_VIEW", "Vraag info");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Hier is de info over deze faq.");
define("_AM_IMFAQ_FAQ_ATTACH", "Bijlagen toevoegen");

// Category
define("_AM_IMFAQ_CATEGORYS", "Categorieën");
define("_AM_IMFAQ_CATEGORYS_DSC", "Alle categorieën in de module");
define("_AM_IMFAQ_CATEGORY_CREATE", "Een categorie toevoegen");
define("_AM_IMFAQ_CATEGORY", "Categorie");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Vul het volgende formulier in om een nieuwe categorie te maken.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Bewerk deze categorie");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Vul het volgende formulier in om deze categorie te bewerken.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "De categorie is succesvol gewijzigd.");
define("_AM_IMFAQ_CATEGORY_CREATED", "De categorie is succesvol aangemaakt.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Categorie Info");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Hier is de informatie over deze categorie.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Bijlagen");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Een bijlage toevoegen");
define("_AM_IMFAQ_ATTACHMENT", "Bijlage");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Vul het volgende formulier in om een nieuwe bijlage te maken.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Deze bijlage bewerken");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Vul het volgende formulier in om deze bijlage te bewerken.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "De bijlage is succesvol gewijzigd.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "De bijlage is succesvol aangemaakt.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Bijlage informatie");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Hier is de informatie over deze bijlage.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Klik om deze bijlage te verwijderen");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Klik om deze bijlage aan gebruikerszijde te verbergen");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Klik om deze bijlage weer te geven aan de gebruiker");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Sleep om deze bijlage te sorteren");



define("_AM_IMFAQ_CANCEL", "Annuleren");
define("_AM_IMFAQ_IMPORT", "Importeer");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Commentaar '%s' geïmporteerd.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Fout bij het importeren van commentaar '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Opmerkingen van de module importeren");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Alle artikelen");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Gekoppeld bestand %s is geïmporteerd");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Fout bij het importeren van artikel <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "Het gepagewrapte bestand %s is gekopieerd in de inhoudmap van de module.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Auto-goedkeuren");
define("_AM_IMFAQ_IMPORT_BACK", "Terug naar de import pagina");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Te importeren categorieën");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Hier zijn de categorieën die zullen worden geïmporteerd in SmartSectie");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Fout bij het importeren van categorie <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Fout tijdens het importeren van categorie <em>%s</em> rechten.");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Categorie <em>%s</em> succesvol geïmporteerd.");
define("_AM_IMFAQ_IMPORT_ERROR", "Er is een fout opgetreden tijdens het importeren van het artikel.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Importbestand niet gevonden in <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importeren van %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "SmartSection's index pagina gaan");
define("_AM_IMFAQ_IMPORT_INFO", "U kunt artikelen rechtstreeks in Smartsectie importeren. Selecteer uit welke module u de artikelen wilt importeren en klik op de knop 'Importeren'.<br><b>Voer deze bewerking slechts eenmaal uit, anders worden de artikelen geduppliceerd</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "%s module werd gevonden. Er zijn %s artikelen en %s categorieën die kunnen worden geïmporteerd.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "%s module is gevonden maar er is geen artikel om te importeren.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Geen categorie geselecteerd om te importeren.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Omdat er geen andere ondersteunde artikelmodule geïnstalleerd is op deze site, kan er geen artikel geïmporteerd worden.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Er zijn geen categorieën om te importeren.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Bovenliggende categorie");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importeer geselecteerde categorieën in deze bovenliggende categorie.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "Er is een fout opgetreden tijdens het importeren van '%s'.");
define("_AM_IMFAQ_IMPORT_RESULT", "Hier is het resultaat van de import.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Import instellingen");
define("_AM_IMFAQ_IMPORT_SUCCESS", "De artikelen zijn in de module geïmporteerd.");
define("_AM_IMFAQ_IMPORT_TITLE", "Artikelen importeren");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Geïmporteerd artikel: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Artikelen geïmporteerd: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Geïmporteerde categorie: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Categorieën geïmporteerd: <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Selectie importeren");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Artikelen");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Kies de module van waaruit de artikelen moeten worden geïmporteerd.");
?>