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
define("_MI_IMFAQ_MD_DESC", "Système avancé de gestion des questions et réponses pour votre site ImpressCMS");

define("_MI_IMFAQ_INDEX", "Index");
define("_MI_IMFAQ_FAQS", "Faqs");
define("_MI_IMFAQ_CATEGORYS", "Catégories");
define("_MI_IMFAQ_ATTACHMENTS", "Fichiers joints");
define("_MI_IMFAQ_IMPORT", "Importer");

//Menu
define('_MI_IMFAQ_FAQ_ADD','Soumettre une nouvelle FAQ');
define('_MI_IMFAQ_REQUEST_ADD','Demander une réponse');

//Blocks
define('_MI_IMFAQ_CATEGLIST','Liste des catégories');
define('_MI_IMFAQ_CATEGLISTDSC','Bloc pour afficher une liste de catégories simple');
define('_MI_IMFAQ_RANDOM_DIDUNO','Aléatoire "Saviez-vous ?"');
define('_MI_IMFAQ_RANDOM_DIDUNODSC','Bloquer pour afficher une question au hasard');
define('_MI_IMFAQ_RECENT_QUESTIONS','Questions récentes');
define('_MI_IMFAQ_RECENT_QUESTIONSDSC','Bloquer pour afficher les questions récentes');

// Configs
define("_MI_IMFAQ_ALLOWSUBMIT", "Soumissions de l'utilisateur");
define("_MI_IMFAQ_ALLOWSUBMITDSC", "Autoriser les utilisateurs à envoyer des FAQs sur votre site web?");
define("_MI_IMFAQ_ALLOWREQUEST", "Requêtes utilisateur");
define("_MI_IMFAQ_ALLOWREQUESTDSC", "Autoriser les utilisateurs à demander des FAQs sur votre site web?");
define('_MI_IMFAQ_DATEFORMAT', 'Format de la date');
define('_MI_IMFAQ_DATEFORMATDSC', 'Utilisez la dernière partie de language/english/global.php pour sélectionner un style d\'affichage. Exemple: "d-M-Y H:i" se traduit par "30-mars-2004 22:35"');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSC', 'Afficher la description des meilleures catégories ?');
define('_MI_IMFAQ_DISPLAY_TOPCAT_DSCDSC', "Sélectionnez 'Oui' pour afficher la description des meilleures catégories dans la page d'index et de catégorie.");
define('_MI_IMFAQ_TOPCAT_DSC_COUNT', 'Longueur max de la description de la catégorie supérieure');
define('_MI_IMFAQ_TOPCAT_DSC_COUNTDSC', "Définissez le nombre de caractères affichés dans la description de la catégorie supérieure.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEX', 'Afficher les sous-catégories dans l\'index ?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_INDEXDSC', "Sélectionnez 'Oui' pour afficher les sous-catégories sur la page d'index.");
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSC', 'Afficher la description des sous-catégories ?');
define('_MI_IMFAQ_DISPLAY_SUBCAT_DSCDSC', "Sélectionnez 'Oui' pour afficher la description des sous-catégories dans la page d'index et de catégorie.");
define('_MI_IMFAQ_SUBCAT_DSC_COUNT', 'Longueur max de la description de la catégorie supérieure');
define('_MI_IMFAQ_SUBCAT_DSC_COUNTDSC', "Définissez le nombre de caractères affichés dans la description de la catégorie supérieure.");
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCAT', 'Afficher les réponses de la FAQ sur la page des sous-catégories ?');
define('_MI_IMFAQ_DISPLAY_FAQ_ANSWER_SUBCATDSC', " ");
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCAT', 'Longueur maximale de la réponse à la FAQ sur la page des sous-catégories');
define('_MI_IMFAQ_FAQ_ANSWER_COUNT_SUBCATDSC', "Définissez le nombre de caractères affichés dans la réponse de la FAQ sur la page des sous-catégories.");
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQ', 'Approuver automatiquement les FAQ soumises ?');
define('_MI_IMFAQ_AUTOAPPROVE_SUB_FAQDSC', 'Approuve automatiquement les FAQs soumises sans intervention d\'administrateur.');
define('_MI_IMFAQ_SHOW_FAQ_INFO', 'Afficher les infos des FAQs ?');
define('_MI_IMFAQ_SHOW_FAQ_INFO_DSC', 'Sélectionnez "OUI" pour afficher l\'auteur de la FAQ, la date de publication et le compteur.');
define("_MI_IMFAQ_LIMIT", "Limite de Faqs");
define("_MI_IMFAQ_LIMITDSC", "Nombre de faqs à afficher sur le côté de l'utilisateur.");
define("_MI_IMFAQ_CATSLIMIT", "Limite de catégories");
define("_MI_IMFAQ_CATSLIMITDSC", "Nombre de catéogries à afficher sur le côté de l'utilisateur.");
define("_MI_IMFAQ_SEOMODNAME", "Nom du module SEO");
define("_MI_IMFAQ_SEOMODNAMEDSC", "Cela sera utilisé lors de la génération d'URL SEO. Le nom que vous choisissez ici doit également être utilisé pour personnaliser votre fichier htaccess.");
define("_MI_IMFAQ_SEOMODE", "Mode SEO");
define("_MI_IMFAQ_SEOMODEDSC", "Choisissez une technique de référencement");
define('_MI_IMFAQ_REQUESTINTROMSG', 'Demander un message d\'introduction');
define('_MI_IMFAQ_REQUESTINTROMSGDSC', 'Message d\'introduction à afficher dans la page Demander une FAQ du module.');
define('_MI_IMFAQ_REQUESTINTROMSG_DEF', "Vous n'avez pas trouvé la réponse à la question que vous cherchiez? Pas de problème! Il vous suffit de remplir le formulaire suivant pour demander la réponse à une nouvelle question. L'administrateur du site examinera votre demande et publiera cette nouvelle question dans la section Questions ouvertes pour que quelqu'un y réponde!"); 
define("_MI_IMFAQ_HEADER", "Indexer le message de bienvenue");
define("_MI_IMFAQ_HEADERDSC", "Message de bienvenue à afficher dans la page d'index du module.");
define('_MI_IMFAQ_HEADER_DEF', "Dans cette section de notre site, vous trouverez les réponses aux questions les plus fréquemment posées. N'hésitez pas à poster un commentaire sur n'importe quelle FAQ.");
define("_MI_IMFAQ_FOOTER", "Texte de pied de page du module");
define("_MI_IMFAQ_FOOTERDSC", "Le contenu que vous mettez ici sera affiché dans toutes les pages du module du côté de l'utilisateur. Laisser vide pour ne pas afficher.");
define("_MI_IMFAQ_FOOTER_DEF", "");
define('_MI_IMFAQ_USEREALNAME', 'Utiliser le vrai nom des utilisateurs?');
define('_MI_IMFAQ_USEREALNAMEDSC', 'Lorsque vous affichez un nom d\'utilisateur, utilisez le vrai nom de cet utilisateur s\'il a défini son vrai nom.');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERM', 'Permission par défaut de l\'affichage des catégories');
define('_MI_IMFAQ_DEFAULT_CATVIEWPERMDSC', 'Définissez les groupes qui auront par défaut les droits de vue de chaque catégorie. Lors de la création ou de l\'édition d\'une catégorie, vous pouvez toujours modifier les permissions.');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERM', 'Permission d\'écriture de catégorie par défaut');
define('_MI_IMFAQ_DEFAULT_CATWRITEPERMDSC', 'Définissez les groupes qui auront par défaut les droits d\'écriture de chaque catégorie. Lors de la création ou de l\'édition d\'une catégorie, vous pouvez toujours modifier les permissions.');
define('_MI_IMFAQ_ENABLEATTACHMENTS', 'Activer la fonctionnalité de pièces jointes ?');
define('_MI_IMFAQ_ENABLEATTACHMENTSDSC', 'The attachment feature allow you "attach" items for other modules in the FAQ. The attachment feature uses plugins to connect other modules and allow select and show their contents. Select "'._YES.'" to show the option in the FAQ form on admin side.');

define('_MI_IMFAQ_CATEGS_ORDER', 'Trier les catégories/sous-catégories par');
define('_MI_IMFAQ_CATEGS_ORDERDSC', 'Sélectionnez comment trier la liste des catégories/sous-catégories sur la page d\'index.');
define('_MI_IMFAQ_FAQS_ORDER', 'Trier les FAQ par');
define('_MI_IMFAQ_FAQS_ORDERDSC', 'Sélectionnez le tri de la liste des FAQ sur la page des catégories.');

define('_MI_IMFAQ_SORT_WEIGHT', 'Poids');
define('_MI_IMFAQ_SORT_PUBDATEASC', 'Date de publication ASC');
define('_MI_IMFAQ_SORT_PUBDATEDESC', 'Date de publication DESC');

// Notifications
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY', "Faqs globaux");
define('_MI_IMFAQ_GLOBAL_FAQ_NOTIFY_DSC', "Options de notification qui s'appliquent à toutes les FAQ.");

define('_MI_IMFAQ_FAQ_NOTIFY', "Foire Aux Questions");
define('_MI_IMFAQ_FAQ_NOTIFY_DSC', "Options de notification qui s'appliquent à la FAQ actuelle.");

define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY', "FAQ envoyée");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', "M'avertir quand une FAQ est soumise et attend d'être approuvée.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', "Recevoir une notification quand une FAQ est soumise et est en attente d'approbation.");
define('_MI_IMFAQ_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notification automatique : nouvelle FAQ soumise");

define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY', "FAQ approuvée");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_CAP', "M'avertir lorsque cette FAQ est approuvée.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_DSC', "Recevoir une notification lorsque cette FAQ est approuvée.");
define('_MI_IMFAQ_FAQ_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] Notification automatique {X_MODULE} : approuvée par la FAQ");

define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY", "Nouvelle FAQ");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_CAP", "M'avertir quand une nouvelle FAQ est publiée.");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_DSC", "");
define("_MI_IMFAQ_GLOBAL_FAQ_NEW_NOTIFY_SBJ", "[{X_SITENAME}] Notification automatique {X_MODULE} : Nouvelle FAQ publiée");

define("_MI_IMFAQ_TEASERTEXT", "Définir le numéro de caractères pour le texte du teaser");
define("_MI_IMFAQ_TEASERTEXTDSC", "Les tags alloweg dans le texte teaser sont: fort, p, em, h4, h5, a, ul, li");
?>