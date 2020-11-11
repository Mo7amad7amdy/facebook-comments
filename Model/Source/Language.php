<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Hamdy
 * Date: 11/8/2020
 * Time: 11:15 AM
 */

namespace Hamdiko\FacebookComments\Model\Source;


use Magento\Framework\App\Config\ScopeConfigInterface;

class Language extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'English', 'value' => 'en_US'],
                ['label' => 'French', 'value' => 'fr_FR'],
                ['label' => 'Arabic', 'value' => 'ar_AR'],
            ];
        }
        return $this->_options;
    }
}
