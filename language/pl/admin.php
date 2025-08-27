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
define("_AM_IMFAQ_REQUIREMENTS", "Wymagania imFAQ");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "Przeszukaliśmy Twoją system. Przepraszamy, jednak nie spełnia on wszystkich wymagań potrzebnych do funkcjonowania imFAQ. Poniżej znajdują się wymagania potrzebne.");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ wymaga co najmniej wersji ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Jeżeli masz jakiekolwiek pytania lub zastrzeżenia, prosimy o odwiedzenie naszych forum na <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "To jest pierwszy raz, kiedy odwiedzisz ten moduł. Aby dynamicznie utworzyć schemat bazodanowy, prosimy o zaktualizowanie modułu.");
define("_AM_IMFAQ_ATTACH", "Przytwórz");
define("_AM_IMFAQ_ATTACH_WARNING", "Ostrzeżenie");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Musisz zaznaczyć prz least one item do Przytwórz!");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Przytwójrzileś kilka elementów do tej FAQ, czy na pewno chcesz anulować tworzenie FAQ?<br />Przytwórzone elementy zostaną usunięte!");

define("_AM_IMFAQ_NOPLUGINS", "<h2>Nie masz dostępnych pluginów.</h2>");

// Faq
define("_AM_IMFAQ_FAQS", "Faqs");
define("_AM_IMFAQ_FAQS_DSC", "Wszystkie faqs w modułe");
define("_AM_IMFAQ_FAQ_CREATE", "Dodaj faq");
define("_AM_IMFAQ_FAQ", "Faq");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Wypełnij poniższy formularz, aby stworzyć nową faq.");
define("_AM_IMFAQ_FAQ_EDIT", "Edytuj tę faq");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Wypełnij poniższy formularz, aby edytować tę faq.");
define("_AM_IMFAQ_FAQ_MODIFIED", "Faq zostało pomyślnie zmodyfikowane.");
define("_AM_IMFAQ_FAQ_CREATED", "Faq zostało pomyślnie utworzone.");
define("_AM_IMFAQ_FAQ_VIEW", "Info faq");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Tutaj znajduje się informacja o tej faq.");
define("_AM_IMFAQ_FAQ_ATTACH", "Przytwórz przytwórzenia");

// Category
define("_AM_IMFAQ_CATEGORYS", "Kategoria");
define("_AM_IMFAQ_CATEGORYS_DSC", "Wszystkie kategory w modułe");
define("_AM_IMFAQ_CATEGORY_CREATE", "Dodaj kategorię");
define("_AM_IMFAQ_CATEGORY", "Kategorię");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Wypełnij poniższy formularz, aby stworzyć nową kategorię.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Edytuj tę kategorię");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Wypełnij poniższy formularz, aby edytować tę kategorię.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "Kategorię zostało pomyślnie zmodyfikowane.");
define("_AM_IMFAQ_CATEGORY_CREATED", "Kategorię zostało pomyślnie utworzone.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Info kategorię");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Tutaj znajduje się informacja o tej kategorii.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Przytwórzenia");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Dodaj przytwórzenie");
define("_AM_IMFAQ_ATTACHMENT", "Przytwórzenie");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Wypełnij poniższy formularz, aby stworzyć nowe przytwórzenie.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Edytuj to przytwórzenie");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Wypełnij poniższy formularz, aby edytować to przytwórzenie.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "Przytwórzenie zostało pomyślnie zmodyfikowane.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "Przytwórzenie zostało pomyślnie utworzone.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Info przytwórzenie");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Tutaj znajduje się informacja o tym przytwórzeniu.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Kliknij, aby usunąć to przytwórzenie");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Kliknij, aby ukryć to przytwórzenie na stronie użytkownika");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Kliknij, aby pokazać to przytwórzenie na stronie użytkownika");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Pociągnij, aby posortować to przytwórzenie");



define("_AM_IMFAQ_CANCEL", "Anuluj");
define("_AM_IMFAQ_IMPORT", "Importuj");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Comment '%s' imported.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Error while importing comment '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Importuj komentarze modułu");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Wszystkie artykuły");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Linked file %s was imported");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Error while importing article <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "Plik zawijany stronę artykułu %s został skopiowany w katalogu zawartości modułu.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Automatyczne aprobowanie");
define("_AM_IMFAQ_IMPORT_BACK", "Powrót na stronę importu");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Kategorie do importu");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Poniżej znajdują się kategorie, które zostaną importowane w SmartSection");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Error while importing category <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Error while importing category <em>%s</em> permissions.");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Category <em>%s</em> imported successfully.");
define("_AM_IMFAQ_IMPORT_ERROR", "Błąd podczas importowania artykułu.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Import file not found at <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importing from %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Powrót na stronę główną modułu SmartSection");
define("_AM_IMFAQ_IMPORT_INFO", "Możesz importować artykuły bezpośrednio w SmartSection. Wybierz z którego modułu chcesz importować artykuły i kliknij w przycisk Importuj.<br><b>Wykonaj tę operację tylko raz, w przeciwnym razie artykuły zostaną powielone</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "%s moduł znaleziono. Są %s artykułów i %s kategorii, które mogą zostać importowane.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "%s moduł znaleziono, ale nie ma artykułów do importowania.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Nie wybrano kategorii do importowania.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Zostało wykryto, że żaden inny moduł z obsługą artykułów nie został zainstalowany w tym serwisie, zatem żaden artykuł nie może zostać importowany.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Nie ma kategorii do importowania.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Kategoria nadrzędna");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Zimportuj kategorie tej kategorii nadrzędnej.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "An error occured while importing '%s'.");
define("_AM_IMFAQ_IMPORT_RESULT", "Wynik importu:");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Ustawienia importu");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Artykuły zostały pomyślnie importowane w moduł.");
define("_AM_IMFAQ_IMPORT_TITLE", "Importuj Artykuły");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Imported article : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Articles imported : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Imported category : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Categories imported : <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Wybierz do importu");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Articles");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Wybierz moduł, z którego chcesz importować artykuły.");
?>