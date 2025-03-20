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
define("_AM_IMFAQ_REQUIREMENTS", "imFAQ Exigences");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "Nous avons révisé votre système, malheureusement, il ne répond pas à toutes les exigences requises pour que imFAQ fonctionne. Vous trouverez ci-dessous les conditions requises.");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ requiert au moins ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Si vous avez des questions ou des préoccupations, veuillez visiter nos forums sur <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "C'est la première fois que vous accédez à ce module. Veuillez mettre à jour le module afin de créer dynamiquement le schéma de base de données.");
define("_AM_IMFAQ_ATTACH", "Attacher");
define("_AM_IMFAQ_ATTACH_WARNING", "Attention");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Vous devez sélectionner au moins un élément à joindre !");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Vous avez attaché des éléments à cette FAQ, êtes-vous sûr de vouloir annuler la création de la FAQ ?<br />Les éléments joints seront supprimés !");

define("_AM_IMFAQ_NOPLUGINS", "Vous n'avez aucun plugin disponible.");

// Faq
define("_AM_IMFAQ_FAQS", "Faqs");
define("_AM_IMFAQ_FAQS_DSC", "Toutes les FAQ du module");
define("_AM_IMFAQ_FAQ_CREATE", "Ajouter une FAQ");
define("_AM_IMFAQ_FAQ", "Faq");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Remplissez le formulaire suivant pour créer une nouvelle faq.");
define("_AM_IMFAQ_FAQ_EDIT", "Modifier cette FAQ");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Remplissez le formulaire suivant afin de modifier cette faq.");
define("_AM_IMFAQ_FAQ_MODIFIED", "La FAQ a été modifiée avec succès.");
define("_AM_IMFAQ_FAQ_CREATED", "La FAQ a été créée avec succès.");
define("_AM_IMFAQ_FAQ_VIEW", "Infos Faq");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Voici les infos sur cette faq.");
define("_AM_IMFAQ_FAQ_ATTACH", "Ajouter des pièces jointes");

// Category
define("_AM_IMFAQ_CATEGORYS", "Catégories");
define("_AM_IMFAQ_CATEGORYS_DSC", "Toutes les catégories du module");
define("_AM_IMFAQ_CATEGORY_CREATE", "Ajouter une catégorie");
define("_AM_IMFAQ_CATEGORY", "Cat&eacute;gorie");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Remplissez le formulaire suivant pour créer une nouvelle catégorie.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Modifier cette catégorie");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Remplissez le formulaire suivant afin de modifier cette catégorie.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "La catégorie a été modifiée avec succès.");
define("_AM_IMFAQ_CATEGORY_CREATED", "La catégorie a été créée avec succès.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Infos sur la catégorie");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Voici les infos sur cette catégorie.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Fichiers joints");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Ajouter une pièce jointe");
define("_AM_IMFAQ_ATTACHMENT", "Pièce jointe");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Remplissez le formulaire suivant pour créer une nouvelle pièce jointe.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Modifier cette pièce jointe");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Remplissez le formulaire suivant afin de modifier cette pièce jointe.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "La pièce jointe a été modifiée avec succès.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "La pièce jointe a été créée avec succès.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Informations sur la pièce jointe");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Voici les informations sur cette pièce jointe.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Cliquez pour supprimer cette pièce jointe");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Cliquez pour masquer cette pièce jointe sur le côté utilisateur");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Cliquez pour afficher cette pièce jointe sur le côté utilisateur");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Glisser pour trier cette pièce jointe");



define("_AM_IMFAQ_CANCEL", "Annuler");
define("_AM_IMFAQ_IMPORT", "Importer");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Commentaire '%s' importé.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Erreur lors de l'importation du commentaire '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Importation des commentaires du module");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Tous les articles");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Le fichier lié %s a été importé");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Erreur lors de l'importation de l'article <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "Le fichier pagewraped %s a été copié dans le dossier de contenu du module.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Approbation automatique");
define("_AM_IMFAQ_IMPORT_BACK", "Retour à la page d'importation");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Catégories à importer");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Voici les catégories qui seront importées dans SmartSection");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Erreur lors de l'importation de la catégorie <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Erreur lors de l'importation des permissions de la catégorie <em>%s</em>.");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Catégorie <em>%s</em> importée avec succès.");
define("_AM_IMFAQ_IMPORT_ERROR", "Une erreur est survenue lors de l'importation de l'article.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Fichier d'import non trouvé à <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importation depuis %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Aller à la page d'index de SmartSection");
define("_AM_IMFAQ_IMPORT_INFO", "Vous pouvez importer des articles directement dans SmartSection. Il vous suffit de sélectionner à partir de quel module vous souhaitez importer les articles et de cliquer sur le bouton 'Importer'.<br><b>Exécuter cette opération une seule fois, sinon, les articles seront dupliqués</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "Le module %s a été trouvé. Il y a des articles %s et %s catégories qui peuvent être importées.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "Le module %s a été trouvé mais il n'y a pas d'article à importer.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Aucune catégorie n'a été sélectionnée pour l'importation.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Comme aucun autre module d'article n'est installé sur ce site, aucun article ne peut être importé.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Il n'y a aucune catégorie à importer.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Catégorie parente");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importer les catégories sélectionnées dans cette catégorie parente.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "Une erreur est survenue lors de l'importation de '%s'.");
define("_AM_IMFAQ_IMPORT_RESULT", "Voici le résultat de l'importation.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Importer les paramètres");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Les articles ont été importés dans le module.");
define("_AM_IMFAQ_IMPORT_TITLE", "Importer des articles");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Article importé : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Articles importés : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Catégorie importée : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Catégories importées : <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Importer la sélection");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Articles");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Choisissez le module à partir duquel importer les articles.");
?>