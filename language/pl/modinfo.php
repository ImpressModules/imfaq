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
define("_MI_IMFAQ_MD_NAME", "System FAQ");
define("_MI_IMFAQ_MD_DESC", "Złożone zadania i odpowiedzi zarządzane systemem dla Twojego strony ImpressCMS");

define("_MI_IMFAQ_INDEX", "Indeks");
define("_MI_IMFAQ_FAQS", "FAQ");
define("_MI_IMFAQ_CATEGORYS", "Kategorie");
define("_MI_IMFAQ_ATTACHMENTS", "Przykłady");
define("_MI_IMFAQ_IMPORT", "Importuj");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Dodaj nową FAQ');
define('_MI_IMFAQ_REQUEST_ADD','Żądanie odpowiedzi');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Lista kategorii');
define('_MI_IMFAQ_CATEGLISTDSC','Blok prezentujący prostą listę kategorii');
define('_MI_IMFAQ_RANDOM_DIDUNO','Losowe "Czy wiesz?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Blok prezentujący losowe pytanie "Czy wiesz?"');
define('_MI_IMFAQ_RECENT_QUESTIONS','Ostatnie pytania');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Blok prezentujący ostatnie pytania');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Zezwolić użytkownikom na dodawanie FAQ na Twojej stronie");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Zezwolić użytkownikom na wysyłanie żądań odpowiedzi na Twojej stronie?");
define("_MI_IMFAQ_ALLOWREQUEST", "Zezwolić użytkownikom na żądanie odpowiedzi na Twojej stronie?");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Zezwolić użytkownikom na żądanie odpowiedzi na Twojej stronie?");
define('_MI_IMFAQ_DATEFORMAT', 'Format data');
define('_MI_IMFAQ_DATEFORMATDSC', 'Wybierz ostatni fragment języka/english/global.php, aby wybrać styl wyświetlenia. Przykład: "d-M-Y H:i" przetłumaczy się na "30-Mar-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Wyświetlać opisy kategorii na górze?');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Wybierz \"Tak\" aby wyświetlić opis kategorii na stronie indeksu i kategorii. ");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Maksymalna długość opisu kategorii');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Określ, ile znaków zostanie wyświetlonych w opisie kategorii.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Wyświetlać podkategorie na stronie indeksu?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Wybierz \"Tak\" aby wyświetlić podkategorie na stronie indeksu.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Wyświetlać opisy podkategorii na górze?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Wybierz \"Tak\" aby wyświetlić opisy podkategorii na stronie indeksu i kategorii.");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Maksymalna długość opisu podkategorii');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Określ, ile znaków zostanie wyświetlonych w opisie podkategorii.");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'Wyświetlać odpowiedzi na podkategorie?');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Maksymalna długość odpowiedzi na podkategorie');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Określ, ile znaków zostanie wyświetlonych w odpowiedzi na podkategorie.");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Autoaprobowanie zgłoszeń FAQ?');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Autoaprobowanie zgłoszeń FAQ bez interwencji administratora.');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'Wyświetlać informacje o FAQ?');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Wybierz "Tak" aby wyświetlić autora FAQ, datę publikacji i liczbę wyświetleń.');
define("_MI_IMFAQ_LIMIT", "Limit liczby FAQ");
define("_MI_IMFAQ_LIMITDSC", "Liczba FAQ do wyświetlenia na stronie użytkownika.");
define("_MI_IMFAQ_CATSLIMIT", "Limit liczby kategorii");
define("_MI_IMFAQ_CATSLIMITDSC", "Liczba kategorii do wyświetlenia na stronie użytkownika.");
define("_MI_IMFAQ_SEOMODNAME", "Nazwa modułu SEO");
define("_MI_IMFAQ_SEOMODNAMEDSC", "To zostanie użyte przy tworzeniu adresów URL SEO. Wybierz nazwę tutaj, aby ją użyć do dostosowania pliku htaccess.");
define("_MI_IMFAQ_SEOMODE", " tryb SEO");
define("_MI_IMFAQ_SEOMODEDSC", "Wybierz metodę SEO.");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Żądanie wiadomości wstępnej');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Wiadomość wstępna do wyświetlenia na stronie żądania FAQ modułu.');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "Nie znaleziono odpowiedzi na Twoje pytanie? Nie ma problemu! Proste wyświetlenie formularza, aby złożyć prośbę o odpowiedź na nowe pytanie. Administrator skontaktuje się z Tobą i opublikuje to pytanie w sekcji pytań otwartych, aby ktoś odpowiedział!"); 
define("_MI_IMFAQ_HEADER", "Tutaj znajdziesz odpowiedzi na często zadawane pytania. Proszę się zwolnić, aby wysłać komentarz do każdej FAQ.");
define("_MI_IMFAQ_HEADERDSC", "Witamy w tej części naszej strony, gdzie znajdziesz odpowiedzi na często zadawane pytania. Proszę się zwolnić, aby wysłać komentarz do każdej FAQ.");
define('_MI_IMFAQ_HEADER_DEF', "W tej części naszej strony znajdziesz odpowiedzi na często zadawane pytania. Proszę się zwolnić, aby wysłać komentarz do każdej FAQ.");
define("_MI_IMFAQ_FOOTER", "Tekst stopki modułu");
define("_MI_IMFAQ_FOOTERDSC", "Treść, jaka zostanie wyświetlona w wszystkich stronach modułu na stronie użytkownika. Pozostaw puste, aby jej nie wyświetlać.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Używać prawdziwej nazwy użytkownika?');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Jeśli użytkownik ma ustawioną swoją prawdziwą nazwę, użyj jej.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Domyślne uprawnienia widoku kategorii');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Wybierz grupy z poziomu uprawnień widoku domyślnych dla każdej kategorii. Możesz zawsze zmienić uprawnienia podczas tworzenia lub edycji kategorii.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Domyślne uprawnienia pisania kategorii');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Wybierz grupy z poziomu uprawnień pisania domyślnych dla każdej kategorii. Możesz zawsze zmienić uprawnienia podczas tworzenia lub edycji kategorii.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'Włącz funkcję przytwierdzania plików?');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Sortowanie kategorii/podkategorii');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Wybierz sposób, jak sortować listę kategorii/podkategorii na stronie indeksu.');
define('_MI_IMFAQ_FAQS_ORDER', 'Sortowanie FAQ');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Wybierz sposób, jak sortować listę FAQ na stronie kategorii.');

define('_MI_IMFAQ_SORT_WEIGHT', 'Waga');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Publikowana data ASC');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Publikowana data DESC');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Faqs globalne");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Opcje notyfikacji dla wszystkich FAQ");

define('_MI_IMFAQ_FAQ_NOTIFY', "FAQ");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Opcje notyfikacji dla tej FAQ");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "FAQ zgłoszony");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "Uwaga mnie, gdy jakiekolwiek FAQ zostanie zgłoszone i czeka na aprobatę.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Otrzymaj powiadomienie, gdy jakiekolwiek FAQ zostanie zgłoszone i czeka na aprobatę.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[\\{X_SITENAME
}] \\{X_MODULE
} auto-notify : New FAQ submitted");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "FAQ zatwierdzony");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "Uwaga mnie, gdy ta FAQ zostanie zatwierdzona.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Otrzymaj powiadomienie, gdy ta FAQ zostanie zatwierdzona.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[\\{X_SITENAME
}] \\{X_MODULE
} auto-notify : FAQ approved");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Nowy FAQ");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "Uwaga mnie, gdy jakiekolwiek nowe FAQ zostanie opublikowane.");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[\\{X_SITENAME
}] \\{X_MODULE
} auto-notify : New FAQ published");

define("_MI_IMFAQ_TEASERTEXT", "Set characters num. for teaser text");
define("_MI_IMFAQ_TEASERTEXTDSC", "Tags alloweg in teaser text are: strong, p, em, h4, h5, a, ul, li");
?>