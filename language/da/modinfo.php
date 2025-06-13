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
define("_MI_IMFAQ_MD_NAME", "FAQ");
define("_MI_IMFAQ_MD_DESC", "Avancerede Spørgsmål og Svar, som administreres af din ImpressCMS-side");

define("_MI_IMFAQ_INDEX", "Oversigt");
define("_MI_IMFAQ_FAQS", "FAQ'er");
define("_MI_IMFAQ_CATEGORYS", "Kategorier");
define("_MI_IMFAQ_ATTACHMENTS", "Klaveskær");
define("_MI_IMFAQ_IMPORT", "Importer");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Indsend ny FAQ');
define('_MI_IMFAQ_REQUEST_ADD','Spør efter svar');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Kategorieliste');
define('_MI_IMFAQ_CATEGLISTDSC','Blok til visning af en enkelt kategori liste');
define('_MI_IMFAQ_RANDOM_DIDUNO','Slumpmæssig "Videer du noget?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Blok til visning af en slumpmæssig videer du noget?-spørgsmål');
define('_MI_IMFAQ_RECENT_QUESTIONS','Nylige spørgsmål');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Blok til visning af de nylige spørgsmål');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Brugerindlæg");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Brugere kan indlægge FAQ'er på din hjemmeside? (Ja/Nej)");
define("_MI_IMFAQ_ALLOWREQUEST", "Brugere kan spørre efter FAQ'er på din hjemmeside? (Ja/Nej)");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Allow users to request FAQs on your website?");
define('_MI_IMFAQ_DATEFORMAT', 'Datoformat');
define('_MI_IMFAQ_DATEFORMATDSC', 'Benyt sidste del af \'language/english/global.php\' for at vælge en visningsstil. F.eks. "d-M-Y H:i" oversættes til "30-Mar-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Vis beskrivelsen af de tophøjeste kategorier? (Ja/Nej)');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Valg 'Ja' vil vise beskrivelsen af de tophøjeste kategorier på index- og kategorisiden.");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Tegnantal i beskrivelsen af de tophøjeste kategorier');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Definerer hvor mange tegn der vil vises i beskrivelsen af de tophøjeste kategorier.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Vis underkategorier på index? (Ja/Nej)');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Vælg 'Ja' for at vise underkategorier på index-siden.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Vis beskrivelsen af underkategorier? (Ja/Nej)');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Valg 'Ja' vil vise beskrivelsen af underkategorier på index- og kategorisiden.");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Tegnantal i beskrivelsen af underkategorier');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Definerer hvor mange tegn der vil vises i beskrivelsen af underkategorier.");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'Vis FAQ-svar på underkategorisiden? (Ja/Nej)');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Tegnantal i FAQ-svar på underkategorisiden');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Definerer hvor mange tegn der vil vises i FAQ-svar på underkategorisiden.");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Automatisk godkendelse af indlægte FAQ\'er? (Ja/Nej)');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Automatisk godkendelse af indlægte FAQ\'er uden administratorens medvirken.');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'Vis FAQ-informationer? (Ja/Nej)');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Valg \'JA\' vil vise FAQ-skaber, offentliggørings dato og antal afgivne svar.');
define("_MI_IMFAQ_LIMIT", "Antal FAQ'er");
define("_MI_IMFAQ_LIMITDSC", "Antal FAQ'er, der vises på brugerknappen.");
define("_MI_IMFAQ_CATSLIMIT", "Antal kategorier");
define("_MI_IMFAQ_CATSLIMITDSC", "Antal kategorier, der vises på brugerknappen.");
define("_MI_IMFAQ_SEOMODNAME", "Navn på SEO-modul");
define("_MI_IMFAQ_SEOMODNAMEDSC", "Dette vil blive brugt ved generering af SEO-URL. Navnet, du velger her, bør også bruges til at justere din .htaccess-fil.");
define("_MI_IMFAQ_SEOMODE", "SEO-modus");
define("_MI_IMFAQ_SEOMODEDSC", "Vælg SEO-teknik.");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Spør efter indlæg af FAQ');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Indføringstekst på spør efter FAQ-siden af modulet.');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "Hvis du ikke har fundet svar på det spørgsmål, du søgte? Ingen problem! Fyld venligst den følgende form for at spørre efter svar til et nyt spørgsmål. Administratoren vil godkende denne spørgsmål og offentliggøre den i den Åbne Spørgsmål-sektion for, at nogen kan svare det."); 
define("_MI_IMFAQ_HEADER", "Oversigt over FAQ");
define("_MI_IMFAQ_HEADERDSC", "Velkomsttekst på oversigtssiden over FAQ-modulet.");
define('_MI_IMFAQ_HEADER_DEF', "Her kan du finde svar på de ofte stillede spørgsmål. Vær velkommen til at kommentere på hvert FAQ.");
define("_MI_IMFAQ_FOOTER", "Fodtekst");
define("_MI_IMFAQ_FOOTERDSC", "Indholdet, du indtaster her, vil blive vist i alle sider af modulet til brugeren.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Brug rigtige navne for brugere? (Ja/Nej)');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Når man viser en brugernavn, brug vedkommendes rigtige navn, hvis det er sat.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Standardpermisjon for kategorivisning');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Definer de grupper, der vil have standardvisningspermisjon for hver kategori.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Standardpermisjon for kategoriredigering');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Definer de grupper, der vil have standardredigeringstilladelse for hver kategori.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'Aktiver Klaveskærs-funktionen? (Ja/Nej)');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Sorter kategorier/underkategorier efter (A-Z, Z-A)');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Vælg hvordan at sortere kategorier/underkategorier listen på index-siden.');
define('_MI_IMFAQ_FAQS_ORDER', 'Sorter FAQ\'er efter (A-Z, Z-A)');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Vælg hvordan at sortere FAQ-listen på kategorisiden.');

define('_MI_IMFAQ_SORT_WEIGHT', 'Vægt');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Dato publiceret opvandret (ASC)');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Dato publiceret nedvandret (DESC)');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Alle FAQ'er");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Notifikationsvalg, der gælder for alle FAQ'er.");

define('_MI_IMFAQ_FAQ_NOTIFY', "FAQ");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Notifikationsvalg, der gælder for det aktuelle FAQ.");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "FAQ indsendt");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "Få en notifikation, når nogen indsender en FAQ, der er i venteliste for godkendelse.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Modtog en notifikation, når nogen indsender en FAQ, der er i venteliste for godkendelse.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : Ny FAQ indsendt");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "FAQ godkendt");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "Få en notifikation, når det aktuelle FAQ er godkendt.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Modtog en notifikation, når det aktuelle FAQ er godkendt.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : FAQ godkendt");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Ny FAQ");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "Få en notifikation, når en ny FAQ offentliggøres.");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : Ny FAQ offentliggøres");

define("_MI_IMFAQ_TEASERTEXT", "Set characters num. for teaser text");
define("_MI_IMFAQ_TEASERTEXTDSC", "Tags alloweg in teaser text are: strong, p, em, h4, h5, a, ul, li");
?>