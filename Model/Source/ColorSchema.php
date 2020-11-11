<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Hamdy
 * Date: 11/4/2020
 * Time: 2:14 PM
 */

namespace Hamdiko\FacebookComments\Model\Source;


class ColorSchema extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'Light', 'value' => 'light'],
                ['label' => 'Dark', 'value' => 'dark'],
            ];
        }
        return $this->_options;
    }
}
