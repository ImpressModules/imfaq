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
define("_MI_IMFAQ_MD_DESC", "Geavanceerde vragen en antwoorden Management Systeem voor uw ImpressCMS Site");

define("_MI_IMFAQ_INDEX", "Indexeren");
define("_MI_IMFAQ_FAQS", "Faqs");
define("_MI_IMFAQ_CATEGORYS", "Categoriechar@@0n");
define("_MI_IMFAQ_ATTACHMENTS", "Bijlagen");
define("_MI_IMFAQ_IMPORT", "Importeer");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Nieuwe FAQ indienen');
define('_MI_IMFAQ_REQUEST_ADD','Vraag een antwoord aan');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Categorie lijst');
define('_MI_IMFAQ_CATEGLISTDSC','Blokkeren om een eenvoudige categorielijst te tonen');
define('_MI_IMFAQ_RANDOM_DIDUNO','Willekeurig "Wist u dat?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Blokkeer om een willekeurige Wist die je vraag weet');
define('_MI_IMFAQ_RECENT_QUESTIONS','Recente vragen');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Blokkeer om de recente vragen te tonen');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Gebruikers inzendingen");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Gebruikers toestaan FAQs in te dienen op je website?");
define("_MI_IMFAQ_ALLOWREQUEST", "Gebruikers verzoeken");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Sta gebruikers toe om FAQs aan te vragen op je website?");
define('_MI_IMFAQ_DATEFORMAT', 'Datum formaat');
define('_MI_IMFAQ_DATEFORMATDSC', 'Gebruik het laatste deel van de taal/dutch/global.php om een weergavestijl te selecteren. Voorbeeld: "d-M-Y H:i" vertaalt naar "30-Mar-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Beschrijving top categorieën weergeven?');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Selecteer 'Ja' om de beschrijving van de bovenste categorieën in de index en categorie pagina weer te geven.");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Max. lengte van de bovenste categorie beschrijving');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Bepaal hoeveel tekens er worden weergegeven in de beschrijving van de bovenste categorie.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Subcategorieën weergeven op index?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Selecteer 'Ja' om subcategorieën op de index pagina weer te geven.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Beschrijving subcategorieën weergeven?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Selecteer 'Ja' om de beschrijving van sub-categorieën in de index en categorie pagina weer te geven.");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Max. lengte van de bovenste categorie beschrijving');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Bepaal hoeveel tekens er worden weergegeven in de beschrijving van de bovenste categorie.");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'Toon FAQ antwoorden op sub-categorieën pagina?');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Max. lengte van het FAQ antwoord op sub-categorieën pagina');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Definieer hoeveel tekens er worden weergegeven in het FAQ antwoord op de subcategorieën pagina.");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Ingezonden FAQ automatisch goedkeuren?');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Automatisch ingediende FAQ\'s goedkeuren zonder tussenkomst van de beheerder.');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'FAQs info tonen?');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Selecteer "JA" om de FAQ auteur, gepubliceerde datum en teller te tonen.');
define("_MI_IMFAQ_LIMIT", "Limiet van faqs");
define("_MI_IMFAQ_LIMITDSC", "Aantal faqs om weer te geven aan de gebruikersomgeving.");
define("_MI_IMFAQ_CATSLIMIT", "Categorieën limiet");
define("_MI_IMFAQ_CATSLIMITDSC", "Aantal katten om weer te geven aan de kant van de gebruiker.");
define("_MI_IMFAQ_SEOMODNAME", "Naam van SEO-module");
define("_MI_IMFAQ_SEOMODNAMEDSC", "Dit zal worden gebruikt bij het genereren van een SEO URL. De naam die u hier kiest moet ook worden gebruikt om uw htaccess bestand aan te passen.");
define("_MI_IMFAQ_SEOMODE", "SEO modus");
define("_MI_IMFAQ_SEOMODEDSC", "Kies uit de SEO techniek.");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Vraag introductie bericht aan');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Introductie bericht om te worden getoond in het verzoek een FAQ pagina van de module.');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "Je hebt het antwoord op de vraag die je zocht niet gevonden? Geen probleem! Vul het formulier in om het antwoord op een nieuwe vraag te vragen. De sitebeheerder zal uw verzoek beoordelen en deze nieuwe vraag publiceren in de open vragensectie voor iemand om deze te beantwoorden!"); 
define("_MI_IMFAQ_HEADER", "Index welkomstbericht");
define("_MI_IMFAQ_HEADERDSC", "Welkom bericht dat wordt weergegeven op de index pagina van de module.");
define('_MI_IMFAQ_HEADER_DEF', "Op dit gebied van onze site vindt u de antwoorden op de veelgestelde vragen. Aarzel niet om op elke FAQ een reactie te plaatsen.");
define("_MI_IMFAQ_FOOTER", "Module voettekst");
define("_MI_IMFAQ_FOOTERDSC", "De inhoud die u hier plaatst, wordt getoond op alle pagina's van de module aan gebruikerspzijde. Laat leeg om niet te tonen.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Gebruik de echte naam van gebruikers?');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Wanneer u een gebruikersnaam weergeeft, gebruik dan de echte naam van die gebruiker als hij een echte naam heeft.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Standaard categorieweergave rechten');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Definieer de groepen die standaard de rechten hebben van elke categorie. Bij het maken of bewerken van een categorie kunt u altijd de rechten wijzigen.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Standaard Categorie Schrijfrechten');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Definieer groepen die standaard schrijfrechten hebben voor elke categorie. Bij het maken of bewerken van een categorie kunt u altijd de rechten wijzigen.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'De bijlagefunctie inschakelen?');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Sorteer categorieën/subcategorieën op');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Selecteer hoe u de categorieën/subcategorieën op de indexpagina kunt sorteren.');
define('_MI_IMFAQ_FAQS_ORDER', 'Sorteer veelgestelde vragen op');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Selecteer hoe tp de FAQs lijst op categorie pagina sorteert.');

define('_MI_IMFAQ_SORT_WEIGHT', 'Gewicht');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Gepubliceerde datum ASC');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Gepubliceerde datum DESC');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Globale Faqs");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Opties voor meldingen die van toepassing zijn op alle FAQs.");

define('_MI_IMFAQ_FAQ_NOTIFY', "FAQ");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Notificatieopties die van toepassing zijn op de huidige FAQ.");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "Veelgestelde vragen");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "Informeer mij wanneer een FAQ is ingediend en wacht op goedkeuring.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Ontvang een melding wanneer FAQ is verzonden en wacht op goedkeuring.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notificatie: Nieuwe FAQ ingediend");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "FAQ goedgekeurd");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "Informeer mij wanneer deze FAQ is goedgekeurd.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Melding ontvangen wanneer deze FAQ is goedgekeurd.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notificatie: FAQ goedgekeurd");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Nieuwe FAQ");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "Informeer mij wanneer nieuwe FAQ is gepubliceerd.");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificatie: Nieuwe FAQ gepubliceerd");

define("_MI_IMFAQ_TEASERTEXT", "Stel het letternummer in voor de teaser tekst");
define("_MI_IMFAQ_TEASERTEXTDSC", "Tags melden in de teasertekst zijn: krachtig, p, p, em, h4, h5, a, ul, li");
?>