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
define("_MI_IMFAQ_MD_DESC", "Advanced Questions and Answers Management System for your ImpressCMS Site");

define("_MI_IMFAQ_INDEX", "Indice");
define("_MI_IMFAQ_FAQS", "Faqs");
define("_MI_IMFAQ_CATEGORYS", "Categorie");
define("_MI_IMFAQ_ATTACHMENTS", "Allegati");
define("_MI_IMFAQ_IMPORT", "Importazione");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Invia nuove FAQ');
define('_MI_IMFAQ_REQUEST_ADD','Richiedi risposta');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Elenco Categorie');
define('_MI_IMFAQ_CATEGLISTDSC','Blocca per mostrare una semplice lista di categorie');
define('_MI_IMFAQ_RANDOM_DIDUNO','Casuale "Lo sapevi?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Blocca per mostrare un casuale Conosci la domanda');
define('_MI_IMFAQ_RECENT_QUESTIONS','Domande Recenti');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Blocca per mostrare le domande recenti');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Inviati dall'utente");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Consenti agli utenti di inviare domande frequenti sul tuo sito web?");
define("_MI_IMFAQ_ALLOWREQUEST", "Richieste utente");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Consenti agli utenti di richiedere domande frequenti sul tuo sito web?");
define('_MI_IMFAQ_DATEFORMAT', 'Formato data');
define('_MI_IMFAQ_DATEFORMATDSC', 'Usa la parte finale di language/english/global.php per selezionare uno stile di visualizzazione. Esempio: "d-M-Y H:i" si traduce in "30-Mar-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Visualizzare la descrizione delle categorie superiori?');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Seleziona 'Sì' per visualizzare la descrizione delle categorie in alto nella pagina indice e categoria.");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Lunghezza massima della descrizione della categoria superiore');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Definisci quanti caratteri verranno visualizzati nella descrizione della categoria superiore.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Visualizzare le sottocategorie sull\'indice?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Seleziona 'Sì' per visualizzare le sottocategorie sulla pagina dell'indice.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Visualizzare la descrizione delle sottocategorie?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Seleziona 'Sì' per visualizzare la descrizione delle sottocategorie nella pagina indice e categoria.");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Lunghezza massima della descrizione della categoria superiore');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Definisci quanti caratteri verranno visualizzati nella descrizione della categoria superiore.");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'Visualizzare le risposte FAQ nella pagina delle sottocategorie?');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Massima lunghezza delle FAQ Risposta nella pagina delle sottocategorie');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Definire quanti caratteri verranno visualizzati nella FAQ Risposta nella pagina delle sottocategorie.");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Approvazione automatica FAQ presentate?');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Approvazione automatica domande frequenti presentate senza intervento amministratore.');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'Mostrare le informazioni FAQ?');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Selezionare "SÌ" per mostrare l\'autore delle FAQ, la data pubblicata e il contatore.');
define("_MI_IMFAQ_LIMIT", "Limite faqs");
define("_MI_IMFAQ_LIMITDSC", "Numero di faqs da visualizzare sul lato utente.");
define("_MI_IMFAQ_CATSLIMIT", "Limite categorie");
define("_MI_IMFAQ_CATSLIMITDSC", "Numero di cateogries da visualizzare sul lato utente.");
define("_MI_IMFAQ_SEOMODNAME", "Nome modulo SEO");
define("_MI_IMFAQ_SEOMODNAMEDSC", "Questo verrà utilizzato per generare l'URL SEO. Il nome che scegli qui deve essere usato anche per personalizzare il tuo file htaccess.");
define("_MI_IMFAQ_SEOMODE", "Modalità SEO");
define("_MI_IMFAQ_SEOMODEDSC", "Scegli tra la tecnica SEO.");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Richiedi messaggio di introduzione');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Messaggio di introduzione da visualizzare nella pagina Richiedi una FAQ del modulo.');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "Non hai trovato la risposta alla domanda che stavi cercando? Nessun problema! Basta compilare il seguente modulo per richiedere la risposta per una nuova domanda. L'amministratore del sito esaminerà la tua richiesta e pubblicherà questa nuova domanda nella sezione Domande aperte affinché qualcuno possa rispondere!"); 
define("_MI_IMFAQ_HEADER", "Indice messaggio di benvenuto");
define("_MI_IMFAQ_HEADERDSC", "Messaggio di benvenuto da visualizzare nella pagina indice del modulo.");
define('_MI_IMFAQ_HEADER_DEF', "In questa area del nostro sito, troverete le risposte alle domande più frequenti. Non esitate a pubblicare un commento su tutte le FAQ.");
define("_MI_IMFAQ_FOOTER", "Testo Del Modulo Footer");
define("_MI_IMFAQ_FOOTERDSC", "Il contenuto che metti qui verrà mostrato in tutte le pagine del modulo sul lato utente. Lasciare vuoto per non mostrare.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Utilizzare il nome reale degli utenti?');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Quando si visualizza un nome utente, utilizzare il vero nome di quell\'utente se ha un set il suo vero nome.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Permesso Di Visualizzazione Categoria Predefinito');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Definisci i gruppi che avranno per impostazione predefinita i permessi di visualizzazione di ogni categoria. Quando crei o modifichi una categoria puoi sempre cambiare i permessi.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Permesso Di Scrittura Categoria Predefinito');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Definisci i gruppi che avranno il permesso di scrittura predefinito per ogni categoria. Quando crei o modifichi una categoria puoi sempre cambiare i permessi.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'Abilitare la funzione Allegato?');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Ordina categorie/Sottocategorie per');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Selezionare come ordinare la lista categorie/sottocategorie sulla pagina indice.');
define('_MI_IMFAQ_FAQS_ORDER', 'Ordina le FAQ per');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Selezionare come tp ordinare l\'elenco delle FAQ nella pagina delle categorie.');

define('_MI_IMFAQ_SORT_WEIGHT', 'Peso');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Data Pubblicato ASC');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Data Pubblicata DESC');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Faq Globali");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Opzioni di notifica applicabili a tutte le FAQ.");

define('_MI_IMFAQ_FAQ_NOTIFY', "FAQ");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Opzioni di notifica che si applicano alle FAQ correnti.");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "Domande frequenti inviate");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "Avvisami quando viene presentata qualsiasi FAQ ed è in attesa di approvazione.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Ricevi una notifica quando una qualsiasi FAQ viene inviata ed è in attesa di approvazione.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : New FAQ submitted");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "FAQ approvate");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "Avvisami quando questa FAQ è approvata.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Ricevi una notifica quando questa FAQ è approvata.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : FAQ approved");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Nuove FAQ");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "Avvisami quando viene pubblicata qualsiasi nuova FAQ.");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : Nuove FAQ pubblicate");

define("_MI_IMFAQ_TEASERTEXT", "Imposta i caratteri num. per il testo teaser");
define("_MI_IMFAQ_TEASERTEXTDSC", "Tags alloweg in teaser text sono: forte, p, em, h4, h5, a, ul, li");
?>