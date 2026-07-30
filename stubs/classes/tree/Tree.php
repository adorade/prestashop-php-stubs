<?php

class TreeCore
{
    public const DEFAULT_TEMPLATE_DIRECTORY = 'helpers/tree';
    public const DEFAULT_TEMPLATE = 'tree.tpl';
    public const DEFAULT_HEADER_TEMPLATE = 'tree_header.tpl';
    public const DEFAULT_NODE_FOLDER_TEMPLATE = 'tree_node_folder.tpl';
    public const DEFAULT_NODE_ITEM_TEMPLATE = 'tree_node_item.tpl';
    protected $_attributes;
    protected $_data;
    protected $_data_search;
    protected $_headerTemplate;
    protected $_id_tree;
    protected $_node_folder_template;
    protected $_node_item_template;
    protected $_template;
    /** @var TranslatorComponent */
    public $translator;
    public function __construct($id, $data = \null)
    {
    }
    public function __toString()
    {
    }
    public function setActions($value)
    {
    }
    public function getActions()
    {
    }
    public function setAttribute($name, $value)
    {
    }
    public function getAttribute($name)
    {
    }
    public function setAttributes($value)
    {
    }
    public function setIdTree($id_tree)
    {
    }
    public function getIdTree()
    {
    }
    public function getAttributes()
    {
    }
    public function setContext($value)
    {
    }
    public function getContext()
    {
    }
    public function setDataSearch($value)
    {
    }
    public function getDataSearch()
    {
    }
    public function setData($value)
    {
    }
    public function getData()
    {
    }
    public function setHeaderTemplate($value)
    {
    }
    public function getHeaderTemplate()
    {
    }
    public function setId($value)
    {
    }
    public function getId()
    {
    }
    public function setNodeFolderTemplate($value)
    {
    }
    public function getNodeFolderTemplate()
    {
    }
    public function setNodeItemTemplate($value)
    {
    }
    public function getNodeItemTemplate()
    {
    }
    public function setTemplate($value)
    {
    }
    public function getTemplate()
    {
    }
    /**
     * @param array|string $value
     *
     * @return self
     */
    public function setTemplateDirectory($value)
    {
    }
    /**
     * @return string
     */
    public function getTemplateDirectory()
    {
    }
    public function getTemplateFile($template)
    {
    }
    public function setNoJS($value)
    {
    }
    public function setTitle($value)
    {
    }
    public function getTitle()
    {
    }
    public function setToolbar($value)
    {
    }
    public function getToolbar()
    {
    }
    public function addAction($action)
    {
    }
    public function removeActions()
    {
    }
    public function render($data = \null)
    {
    }
    public function renderNodes($data = \null)
    {
    }
    public function renderToolbar()
    {
    }
    public function useInput()
    {
    }
    public function useToolbar()
    {
    }
}
