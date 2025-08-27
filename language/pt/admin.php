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
define("_AM_IMFAQ_REQUIREMENTS", "Requisitos do imFAQ");
define("_AM_IMFAQ_REQUIREMENTS_INFO", "Nós revidamos o seu sistema, unfortunately ele não atende a todas as requisitos necessárias para que o imFAQ funcione. Abaixo estão as requisitos necessárias.");
define("_AM_IMFAQ_REQUIREMENTS_ICMS_BUILD", "imFAQ requer ao menos ImpressCMS 1.1.1 RC 1.");
define("_AM_IMFAQ_REQUIREMENTS_SUPPORT", "Se você tiver alguma dúvida ou preocupação, visite nossos fóruns em <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// general
define("_AM_IMFAQ_FIRST_USE", "Este é o primeiro acesso deste módulo. Atualize o módulo para que seja criada a esquema de banco de dados de forma dinâmica.");
define("_AM_IMFAQ_ATTACH", "Anexar");
define("_AM_IMFAQ_ATTACH_WARNING", "Aviso");
define("_AM_IMFAQ_ATTACH_WARNING_MSG", "Você precisa selecionar pelo menos um item para Anexar!");
define("_AM_IMFAQ_ATTACH_WARNING_HAS_ATTACH", "Você anexou alguns itens nesta FAQ, está certo de que quer cancelar a criação da FAQ?<br />Os itens anexados serão excluídos!");

define("_AM_IMFAQ_NOPLUGINS", "<h2>Você não possui nenhum plugin disponível.</h2>");

// Faq
define("_AM_IMFAQ_FAQS", "Faqs");
define("_AM_IMFAQ_FAQS_DSC", "Todas as faqs no módulo");
define("_AM_IMFAQ_FAQ_CREATE", "Adicionar uma faq");
define("_AM_IMFAQ_FAQ", "Faq");
define("_AM_IMFAQ_FAQ_CREATE_INFO", "Preencha o formulário a seguir para criar uma nova faq.");
define("_AM_IMFAQ_FAQ_EDIT", "Editar esta faq");
define("_AM_IMFAQ_FAQ_EDIT_INFO", "Preencha o formulário a seguir para editar esta faq.");
define("_AM_IMFAQ_FAQ_MODIFIED", "A faq foi modificada com sucesso.");
define("_AM_IMFAQ_FAQ_CREATED", "A faq foi criada com sucesso.");
define("_AM_IMFAQ_FAQ_VIEW", "Informações da faq");
define("_AM_IMFAQ_FAQ_VIEW_DSC", "Aqui está a informação sobre esta faq.");
define("_AM_IMFAQ_FAQ_ATTACH", "Anexar");

// Category
define("_AM_IMFAQ_CATEGORYS", "Categorias");
define("_AM_IMFAQ_CATEGORYS_DSC", "Todas as categorias no módulo");
define("_AM_IMFAQ_CATEGORY_CREATE", "Adicionar uma categoria");
define("_AM_IMFAQ_CATEGORY", "Categoria");
define("_AM_IMFAQ_CATEGORY_CREATE_INFO", "Preencha o formulário a seguir para criar uma nova categoria.");
define("_AM_IMFAQ_CATEGORY_EDIT", "Editar esta categoria");
define("_AM_IMFAQ_CATEGORY_EDIT_INFO", "Preencha o formulário a seguir para editar esta categoria.");
define("_AM_IMFAQ_CATEGORY_MODIFIED", "A categoria foi modificada com sucesso.");
define("_AM_IMFAQ_CATEGORY_CREATED", "A categoria foi criada com sucesso.");
define("_AM_IMFAQ_CATEGORY_VIEW", "Informações da categoria");
define("_AM_IMFAQ_CATEGORY_VIEW_DSC", "Aqui está a informação sobre esta categoria.");

// Attachment
define("_AM_IMFAQ_ATTACHMENTS", "Anexos");
define("_AM_IMFAQ_ATTACHMENT_CREATE", "Adicionar um anexo");
define("_AM_IMFAQ_ATTACHMENT", "Anexo");
define("_AM_IMFAQ_ATTACHMENT_CREATE_INFO", "Preencha o formulário a seguir para criar um novo anexo.");
define("_AM_IMFAQ_ATTACHMENT_EDIT", "Editar este anexo");
define("_AM_IMFAQ_ATTACHMENT_EDIT_INFO", "Preencha o formulário a seguir para editar este anexo.");
define("_AM_IMFAQ_ATTACHMENT_MODIFIED", "O anexo foi modificado com sucesso.");
define("_AM_IMFAQ_ATTACHMENT_CREATED", "O anexo foi criado com sucesso.");
define("_AM_IMFAQ_ATTACHMENT_VIEW", "Informações do anexo");
define("_AM_IMFAQ_ATTACHMENT_VIEW_DSC", "Aqui está a informação sobre este anexo.");

define("_AM_IMFAQ_ATTACHMENT_DELETE", "Clique para excluir este anexo");
define("_AM_IMFAQ_ATTACHMENT_HIDE", "Clique para ocultar este anexo em User-side");
define("_AM_IMFAQ_ATTACHMENT_SHOW", "Clique para exibir este anexo em User-side");
define("_AM_IMFAQ_ATTACHMENT_SORT", "Arraste para ordenar este anexo");



define("_AM_IMFAQ_CANCEL", "Cancelar");
define("_AM_IMFAQ_IMPORT", "Importar");
define("_AM_IMFAQ_IMPORTED_COMMENT", "Comment '%s' imported.");
define("_AM_IMFAQ_IMPORTED_COMMENT_ERROR", "Erro ao importar comentário '%s'");
define("_AM_IMFAQ_IMPORT_COMMENTS", "Importando comentários do módulo");
define("_AM_IMFAQ_IMPORT_ALL_PARTNERS", "Todos os artigos");
define("_AM_IMFAQ_IMPORTED_ARTICLE_FILE", "Linked file %s was imported");
define("_AM_IMFAQ_IMPORT_ARTICLE_ERROR", "Erro ao importar artigo <em>%s</em>");
define("_AM_IMFAQ_IMPORT_ARTICLE_WRAP", "O arquivo de envoltória de página %s foi copiado na pasta do conteúdo do módulo.");
define("_AM_IMFAQ_IMPORT_AUTOAPPROVE", "Auto-aprovação");
define("_AM_IMFAQ_IMPORT_BACK", "Voltar à página de importação");
define("_AM_IMFAQ_IMPORT_CATEGORIES", "Categorias para importar");
define("_AM_IMFAQ_IMPORT_CATEGORIES_DSC", "Aqui estão as categorias que serão importadas em SmartSection");
define("_AM_IMFAQ_IMPORT_CATEGORY_ERROR", "Erro ao importar categoria <em>%s</em>");
define("_AM_IMFAQ_IMPORT_CATEGORY_PERMISSION_ERROR", "Erro ao importar permissões de categoria <em>%s</em>");
define("_AM_IMFAQ_IMPORT_CATEGORY_SUCCESS", "Categoria <em>%s</em> importada com sucesso.");
define("_AM_IMFAQ_IMPORT_ERROR", "Erro ao importar o artigo.");
define("_AM_IMFAQ_IMPORT_FILE_NOT_FOUND", "Arquivo de importação não encontrado em <b>%s</b>");
define("_AM_IMFAQ_IMPORT_FROM", "Importando de %s");
define("_AM_IMFAQ_IMPORT_GOTOMODULE", "Vá para a página principal do módulo SmartSection.");
define("_AM_IMFAQ_IMPORT_INFO", "Você pode importar artigos diretamente no módulo SmartSection. Simplesmente selecione do qual módulo você gostaria de importar os artigos e clique no botão 'Importar'.<br><b>Execute esta operação apenas uma vez, caso contrário, os artigos serão duplicados.</b>");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND", "%s módulo encontrado. Há %s artigos e %s categorias que podem ser importados.");
define("_AM_IMFAQ_IMPORT_MODULE_FOUND_NO_ITEMS", "%s módulo encontrado, mas nenhum artigo para importar.");
define("_AM_IMFAQ_IMPORT_NOCATSELECTED", "Nenhuma categoria foi selecionada para importar.");
define("_AM_IMFAQ_IMPORT_NO_MODULE", "Nenhum outro módulo de artigos suportados foi instalado neste site, então nenhum artigo pode ser importado.");
define("_AM_IMFAQ_IMPORT_NO_CATEGORY", "Nenhuma categoria para importar.");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY", "Categoria pai");
define("_AM_IMFAQ_IMPORT_PARENT_CATEGORY_DSC", "Importe as categorias selecionadas nesta categoria pai.");
define("_AM_IMFAQ_IMPORT_PARTNER_ERROR", "Erro ao importar '%s'.");
define("_AM_IMFAQ_IMPORT_RESULT", "Resultado da importação.");
define("_AM_IMFAQ_IMPORT_SETTINGS", "Configurações de importação");
define("_AM_IMFAQ_IMPORT_SUCCESS", "Os artigos foram importados com sucesso no módulo.");
define("_AM_IMFAQ_IMPORT_TITLE", "Importar Artigos");
define("_AM_IMFAQ_IMPORTED_ARTICLE", "Imported article : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_ARTICLES", "Articles imported : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORY", "Imported category : <em>%s</em>");
define("_AM_IMFAQ_IMPORTED_CATEGORIES", "Categories imported : <em>%s</em>");
define("_AM_IMFAQ_IMPORT_SELECTION", "Seleção de importação");
define("_AM_IMFAQ_IMPORT_SELECT_FILE", "Articles");
define("_AM_IMFAQ_IMPORT_SELECT_FILE_DSC", "Escolha o módulo do qual você gostaria de importar os artigos.");
?>