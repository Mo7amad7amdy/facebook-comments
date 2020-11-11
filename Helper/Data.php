<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Hamdy
 * Date: 11/4/2020
 * Time: 2:33 PM
 */

namespace Hamdiko\FacebookComments\Helper;


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const FACEBOOK_COMMENTS_XML_PATH = 'facebookcomments/general/%s';

    public function getConfigValue($config, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            sprintf(self::FACEBOOK_COMMENTS_XML_PATH, $config),
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    public function isCommentsCountEnabled(){
        return $this->getConfigValue('is_count_enabled') ?? false;
    }
}
