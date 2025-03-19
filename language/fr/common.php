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

define("_CO_IMFAQ_READMORE", "En savoir plus...");

// faq
define("_CO_IMFAQ_FAQ_FAQ_ID", "Id");
define("_CO_IMFAQ_FAQ_FAQ_ID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION", "Question");
define("_CO_IMFAQ_FAQ_FAQ_QUESTION_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE", "Titre dans le menu");
define("_CO_IMFAQ_FAQ_FAQ_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER", "Répondre");
define("_CO_IMFAQ_FAQ_FAQ_ANSWER_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_UID", "Auteur");
define("_CO_IMFAQ_FAQ_FAQ_UID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CID", "Cat&eacute;gorie");
define("_CO_IMFAQ_FAQ_FAQ_CID_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO", "Le saviez-vous ?");
define("_CO_IMFAQ_FAQ_FAQ_DIDUNO_DSC", "Ceci sera utilisé dans le bloc Saviez-vous.");
define("_CO_IMFAQ_FAQ_FAQ_STATUS", "&Eacute;tat");
define("_CO_IMFAQ_FAQ_FAQ_STATUS_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE", "Date de publication");
define("_CO_IMFAQ_FAQ_FAQ_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT", "Commentaire?");
define("_CO_IMFAQ_FAQ_FAQ_CANCOMMENT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT", "Poids");
define("_CO_IMFAQ_FAQ_FAQ_WEIGHT_DSC", " ");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS", "Fichiers joints");
define("_CO_IMFAQ_FAQ_FAQ_ATTACHMENTS_DSC", "Cliquez sur le bouton \"ajouter des pièces jointes\" pour sélectionner et joindre des éléments à cette FAQ");
define("_CO_IMFAQ_FAQ_LEARNMORE", "Pour en savoir plus, consultez les publications NAIMA suivantes :");
define("_CO_IMFAQ_FAQ_FAQ_NOTIFYPUB", "Notifier lors de l’approbation ?");

define("_CO_IMFAQ_FAQ_STATUS_PUBLISHED", "Publié");
define("_CO_IMFAQ_FAQ_STATUS_PENDING", "En suspens");
define("_CO_IMFAQ_FAQ_STATUS_REJECTED", "Rejeté");
define("_CO_IMFAQ_FAQ_STATUS_OFFLINE", "Hors ligne");

define("_CO_IMFAQ_FAQ_READ", "Permission de voir");
define("_CO_IMFAQ_FAQ_READ_DSC", "Sélectionnez les groupes qui auront la permission de voir cette faq. Cela signifie qu'un utilisateur appartenant à l'un de ces groupes sera en mesure de voir la faq lorsqu'il est activé dans le site.");

define("_CO_IMFAQ_FAQ_INFO", "Publié par %s sur %s. (%u lecture)");
define("_CO_IMFAQ_FAQ_FROM_USER", "Tout le contenu de %s");
define("_CO_IMFAQ_FAQ_COMMENTS_INFO", "Commentaires %d");
define("_CO_IMFAQ_FAQ_NO_COMMENT", "Aucun commentaire");

define("_CO_IMFAQ_SUBMITTED_FAQS", "<h1>L'utilisateur a soumis une FAQ</h1>");
define("_CO_IMFAQ_REQUESTED_FAQS", "<h1>L'utilisateur a demandé des FAQs</h1>");

// category
define("_CO_IMFAQ_CATEGORY_CAT_ID", "Id");
define("_CO_IMFAQ_CATEGORY_CAT_ID_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE", "Titre");
define("_CO_IMFAQ_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE", "Titre dans le menu");
define("_CO_IMFAQ_CATEGORY_CAT_MENUTITLE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PID", "Catégorie parente");
define("_CO_IMFAQ_CATEGORY_CAT_PID_DSC", "Si vous voulez que cette nouvelle catégorie soit une sous-catégorie, sélectionnez un parent ici. Si cela doit être une catégorie de niveau supérieur, laissez ce champ vide.");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY", "Summary");
define("_CO_IMFAQ_CATEGORY_CAT_SUMMARY_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION", "Libellé");
define("_CO_IMFAQ_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT", "Poids");
define("_CO_IMFAQ_CATEGORY_CAT_WEIGHT_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE", "Date de publication");
define("_CO_IMFAQ_CATEGORY_CAT_PUBLISHED_DATE_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS", "&Eacute;tat");
define("_CO_IMFAQ_CATEGORY_CAT_STATUS_DSC", " ");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS", "Sous-catégories");
define("_CO_IMFAQ_CATEGORY_CAT_SUBS_DSC", " ");

define("_CO_IMFAQ_CATEGORY_STATUS_ACTIVE", "Actif");
define("_CO_IMFAQ_CATEGORY_STATUS_INACTIVE", "Inactif");

define("_CO_IMFAQ_CATEGORY_READ", "Permission de voir");
define("_CO_IMFAQ_CATEGORY_READ_DSC", "Sélectionnez les groupes qui auront la permission de voir cette catégorie. Cela signifie qu'un utilisateur appartenant à l'un de ces groupes sera en mesure de voir la catégorie lorsqu'il est activé dans le site.");
define("_CO_IMFAQ_CATEGORY_WRITE", "Permission d'écriture");
define("_CO_IMFAQ_CATEGORY_WRITE_DSC", "Sélectionnez les groupes qui sont autorisés à créer de nouvelles FAQ dans cette catégorie. Cela signifie qu'un utilisateur appartenant à l'un de ces groupes pourra ajouter de nouvelles FAQ dans cette catégorie directement sur le site.");

// Attachments
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID", "Id");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID", "Faq");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_FID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE", "Module");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_MODULE_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID", "Élément");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_ITEMID_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT", "Poids");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_WEIGHT_DSC", " ");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS", "&Eacute;tat");
define("_CO_IMFAQ_ATTACHMENT_ATTACH_STATUS_DSC", " ");

define("_CO_IMFAQ_ATTACHMENT_STATUS_ACTIVE", "Afficher");
define("_CO_IMFAQ_ATTACHMENT_STATUS_INACTIVE", "Cacher");

define("_CO_IMFAQ_ATTACHMENT_READ", "Permission de voir");
define("_CO_IMFAQ_ATTACHMENT_READ_DSC", "Sélectionnez les groupes qui auront la permission de voir cette pièce jointe. Cela signifie qu'un utilisateur appartenant à l'un de ces groupes sera en mesure de voir la pièce jointe lorsqu'il sera activé dans le site.");

define("_CO_IMFAQ_ATTACHMENT_SEL_MODULE", "Sélectionnez un module d'extension: ");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS", "Objets valides de %s");
define("_CO_IMFAQ_ATTACHMENT_AVALIABLE_ITEMS_DSC", "Ci-dessous est une liste de tous les éléments disponibles pour le module sélectionné. Sélectionnez les articles désirés et cliquez sur le bouton Ajouter pour les joindre dans la FAQ.");
?>