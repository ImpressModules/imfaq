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

define("_CO_IMFAQ_READMORE", "Leggi tutto...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Domanda");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Titolo nel menu");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Risposta");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Autore");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Categoria");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "Lo sapevate?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Questo verrà usato nel blocco Sapevi.");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "Stato");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Data Pubblicazione");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Può Commentare?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Peso");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Allegati");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Fare clic sul pulsante \"Aggiungi allegati\" per selezionare e allegare gli elementi a questo faq");
define("_CO_IMFAQ_FAQ_LEARNMORE", "Per saperne di più, consulta le seguenti pubblicazioni NAIMA:");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Notificare l'approvazione?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Pubblicato");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "In attesa");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Respinto");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Offline");

define("_CO_IMFAQ_FAQ_READ", "Visualizza Permesso");
define("_CO_IMFAQ_FAQ_READ_DSC", "Seleziona i gruppi wich avranno i permessi di visualizzazione per questo faq. Ciò significa che un utente appartenente a uno di questi gruppi sarà in grado di visualizzare il faq quando viene attivato nel sito.");

define("_CO_IMFAQ_FAQ_INFO", "Pubblicato da %s su %s. (%u leggi)");
define("_CO_IMFAQ_FAQ_FROM_USER", "Tutti i contenuti di %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "%d commenti");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Nessun commento");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>Domande frequenti inviate dall'utente</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>Domande frequenti richieste dall'utente</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Titolo");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Titolo nel menu");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Categoria padre");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Se vuoi che questa nuova categoria sia una sottocategoria, seleziona qui un genitore. Se deve essere una categoria di primo livello, lasciare questo vuoto.");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Summary");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Descrizione");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Peso");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Data Pubblicazione");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "Stato");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "Sottocategorie");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Attivo");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Non attivo");

define("_CO_IMFAQ_CATEGORY_READ", "Visualizza Permesso");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Seleziona i gruppi wich avranno i permessi di visualizzazione per questa categoria. Ciò significa che un utente appartenente a uno di questi gruppi sarà in grado di visualizzare la categoria quando viene attivato nel sito.");
define("_CO_IMFAQ_CATEGORY_WRITE", "Permesso Di Scrittura");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Seleziona i gruppi che possono creare nuovi faqs in questa categoria. Ciò significa che un utente appartenente a uno di questi gruppi sarà in grado di aggiungere nuovi faq in questa categoria direttamente sul sito.");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Faq");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Modulo");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Elemento");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Peso");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "Stato");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Mostra");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Nascondi");

define("_CO_IMFAQ_ATTACHMENT_READ", "Visualizza Permesso");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Seleziona i gruppi wich avranno i permessi di visualizzazione per questo allegato. Ciò significa che un utente appartenente a uno di questi gruppi sarà in grado di visualizzare l'allegato quando viene attivato nel sito.");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Seleziona un plugin del modulo: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Oggetti preziosi da %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "Bellow è un elenco di tutti gli elementi disponibili per il modulo selezionato. Selezionare gli elementi desiderati e fare clic sul pulsante Aggiungi per attaccarlo nelle FAQ.");
?>