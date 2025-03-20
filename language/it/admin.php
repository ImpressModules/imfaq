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
define("_AM_IMFAQ_REQUIREMENTS", "requisiti imFAQ");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "Abbiamo esaminato il tuo sistema, purtroppo non soddisfa tutti i requisiti necessari per la funzione imFAQ. Di seguito sono riportati i requisiti necessari.");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ richiede almeno ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Se avete domande o dubbi, visitate i nostri forum su <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "Questa è la prima volta che accedi a questo modulo. Si prega di aggiornare il modulo per creare dinamicamente lo schema del database.");
define("_AM_IMFAQ_ATTACH", "Allega");
define("_AM_IMFAQ_ATTACH_WARNING", "Attenzione");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Devi selezionare almeno un oggetto da allegare!");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Hai aggiunto alcuni elementi a questa FAQ, sei sicuro di voler annullare la creazione delle FAQ?<br />Gli elementi allegati saranno eliminati!");

define("_AM_IMFAQ_NOPLUGINS", "<h2>Non hai alcun plugin disponibile.</h2>");

// Faq
define("_AM_IMFAQ_FAQS", "Faqs");
define("_AM_IMFAQ_FAQS_DSC", "Tutti i faq nel modulo");
define("_AM_IMFAQ_FAQ_CREATE", "Aggiungi un faq");
define("_AM_IMFAQ_FAQ", "Faq");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Compila il seguente modulo per creare un nuovo faq.");
define("_AM_IMFAQ_FAQ_EDIT", "Modifica questo faq");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Compila il seguente modulo per modificare questo faq.");
define("_AM_IMFAQ_FAQ_MODIFIED", "Il faq è stato modificato con successo.");
define("_AM_IMFAQ_FAQ_CREATED", "Il faq è stato creato con successo.");
define("_AM_IMFAQ_FAQ_VIEW", "Informazioni faq");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Ecco le informazioni su questo faq.");
define("_AM_IMFAQ_FAQ_ATTACH", "Aggiungi allegati");

// Category
define("_AM_IMFAQ_CATEGORYS", "Categorie");
define("_AM_IMFAQ_CATEGORYS_DSC", "Tutte le categorie nel modulo");
define("_AM_IMFAQ_CATEGORY_CREATE", "Aggiungi una categoria");
define("_AM_IMFAQ_CATEGORY", "Categoria");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Compila il seguente modulo per creare una nuova categoria.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Modifica questa categoria");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Compila il seguente modulo per modificare questa categoria.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "La categoria è stata modificata correttamente.");
define("_AM_IMFAQ_CATEGORY_CREATED", "La categoria è stata creata correttamente.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Informazioni sulla categoria");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Ecco le informazioni su questa categoria.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Allegati");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Aggiungi un allegato");
define("_AM_IMFAQ_ATTACHMENT", "Allegato");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Compila il seguente modulo per creare un nuovo allegato.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Modifica questo allegato");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Compila il seguente modulo per modificare questo allegato.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "L'allegato è stato modificato correttamente.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "L'allegato è stato creato correttamente.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Informazioni allegato");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Ecco le informazioni su questo allegato.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Clicca per eliminare questo allegato");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Fare clic per nascondere questo allegato sul lato utente");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Fare clic per mostrare questo allegato sul lato utente");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Trascina per ordinare questo allegato");



define("_AM_IMFAQ_CANCEL", "Annulla");
define("_AM_IMFAQ_IMPORT", "Importazione");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Commento '%s' importato.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Errore durante l'importazione del commento '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Importazione dei commenti del modulo");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Tutti gli articoli");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Il file collegato %s è stato importato");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Errore durante l'importazione dell'articolo <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "Il file %s è stato copiato nella cartella del contenuto del modulo.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Approvazione Automatica");
define("_AM_IMFAQ_IMPORT_BACK", "Torna alla pagina di importazione");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Categorie da importare");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Ecco le categorie che verranno importate in SmartSection");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Errore durante l'importazione della categoria <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Errore durante l'importazione dei permessi di categoria <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Categoria <em>%s</em> importata con successo.");
define("_AM_IMFAQ_IMPORT_ERROR", "Si è verificato un errore durante l'importazione dell'articolo.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Importa file non trovato in <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importazione da %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Vai alla pagina indice di Smartsection");
define("_AM_IMFAQ_IMPORT_INFO", "È possibile importare articoli direttamente in SmartSection. Basta selezionare da quale modulo si desidera importare gli articoli e fare clic sul pulsante 'Importa'.<br><b>Esegui questa operazione una sola volta, altrimenti gli articoli saranno duplicati</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "Modulo %s trovato. Ci sono articoli %s e categorie %s che possono essere importate.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "Il modulo %s è stato trovato ma non ci sono articoli da importare.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Nessuna categoria selezionata per l'importazione.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Poiché su questo sito non sono installati altri moduli di articoli supportati, nessun articolo può essere importato.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Non ci sono categorie da importare.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Categoria padre");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importa le categorie selezionate in questa categoria genitore.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "Si è verificato un errore durante l'importazione di '%s'.");
define("_AM_IMFAQ_IMPORT_RESULT", "Ecco il risultato dell'importazione.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Impostazioni Di Importazione");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Gli articoli sono stati importati con successo nel modulo.");
define("_AM_IMFAQ_IMPORT_TITLE", "Importa Articoli");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Articolo importato: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Articoli importati : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Categoria importata: <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Categorie importate : <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Importa Selezione");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Articoli");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Scegli il modulo da cui importare gli articoli.");
?>