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

define("_CO_IMFAQ_READMORE", "Lees meer...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Vraag");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Titel in menu");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Beantwoorden");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Auteur");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Categorie");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "Wist u dat?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Dit zal gebruikt worden in het \"You Know blok\".");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "Estado");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Gepubliceerde datum");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Kan reageren?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Gewicht");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Bijlagen");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Klik op de knop \"Bijlagen toevoegen\" om items te selecteren en aan deze faq toe te voegen");
define("_CO_IMFAQ_FAQ_LEARNMORE", "Zie voor meer informatie, de volgende NAIMA-publicaties:");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Notificatie bij goedkeuring?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Ingediend");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "Wachtend");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Geweigerd");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Offline");

define("_CO_IMFAQ_FAQ_READ", "Toon permissie");
define("_CO_IMFAQ_FAQ_READ_DSC", "Selecteer wich groups will have view permission for this faq. Dit betekent dat een gebruiker die behoort tot een van deze groepen de faq kan bekijken wanneer deze is geactiveerd in de site.");

define("_CO_IMFAQ_FAQ_INFO", "Gepubliceerd door %s op %s. (%u lezen)");
define("_CO_IMFAQ_FAQ_FROM_USER", "Alle inhoud van %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "%d opmerkingen");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Geen commentaar");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>Gebruiker verzonden FAQs</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>Gebruiker aangevraagd FAQs</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Titel");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Titel in menu");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Bovenliggende categorie");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Als u wilt dat deze nieuwe categorie een subcategorie is, selecteer dan hier een hoofdcategorie. Laat dit leeg als het een categorie op het hoogste niveau moet zijn.");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Summary");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Beschrijving");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Gewicht");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Gepubliceerde datum");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "Estado");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "Subcategorieën");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Actief");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Inactief");

define("_CO_IMFAQ_CATEGORY_READ", "Toon permissie");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Selecteer wich groups zal toestemming hebben om te bekijken voor deze categorie. Dit betekent dat een gebruiker die behoort tot een van deze groepen de categorie kan bekijken wanneer deze is geactiveerd in de site.");
define("_CO_IMFAQ_CATEGORY_WRITE", "Machtiging schrijven");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Selecteer de groepen die toegestaan zijn om nieuwe faqs in deze categorie aan te maken. Dit betekent dat een gebruiker die tot een van deze groepen behoort nieuwe faq's in deze categorie direct op de site kan toevoegen.");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Faq");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Module");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Artikel");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Gewicht");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "Estado");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Weergeven");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Verbergen");

define("_CO_IMFAQ_ATTACHMENT_READ", "Toon permissie");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Selecteer wich groups zal toestemming hebben voor deze bijlage. Dit betekent dat een gebruiker die behoort tot een van deze groepen de bijlage kan bekijken wanneer deze is geactiveerd in de site.");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Selecteer een module plugin: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Onverdedigbare Voorwerpen van %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "Bellow is een lijst van alle beschikbare items van de geselecteerde module. Selecteer de gewenste items en klik op de knop toevoegen om deze toe te voegen aan de FAQ.");
?>