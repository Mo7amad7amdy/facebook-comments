<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Hamdy
 * Date: 11/4/2020
 * Time: 1:42 PM
 */

namespace Hamdiko\FacebookComments\Block\Product\View;

use Hamdiko\FacebookComments\Helper\Data;
use Magento\Framework\Locale\Resolver;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Comment extends Template
{
    protected $registy;
    protected $_product;
    protected $helper;
    protected $_store;

    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        Data $helper,
        Resolver $store,
        array $data = []
    )
    {
        $this->registy = $registry;
        $this->helper = $helper;
        $this->_store = $store;
        parent::__construct($context, $data);

        $this->setTabTitle();
    }

    public function setTabTitle(){
        $title = $this->helper->isCommentsCountEnabled() ?
             $this->getTabTitle() . ' (<span class="fb-comments-count" data-href="'. $this->getProduct()->getProductUrl() .'"></span>)'
            : $this->getTabTitle();
        $this->setTitle($title);
    }

    public function getTabTitle(){
        return $this->helper->getConfigValue('title') ?? 'Facebook Comments';
    }

    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = $this->registy->registry('product');
        }
        return $this->_product;
    }

    public function getColorSchema()
    {
        return $this->helper->getConfigValue('color_schema') ?? 'light';
    }

    public function getLang()
    {
        return $this->helper->getConfigValue('language') ?? $this->_store->getLocale();
    }

    public function getNumPosts()
    {
        return $this->helper->getConfigValue('num_posts') ?? 5;
    }

    public function isLazyLoad()
    {
        return (bool) $this->helper->getConfigValue('lazy_load') ?? false;
    }

    public function getOrderBy()
    {
        return $this->helper->getConfigValue('order_by') ?? 'time';
    }

    public function getWidth()
    {
        return $this->helper->getConfigValue('width') ?? '550';
    }
}
