<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Hamdy
 * Date: 11/4/2020
 * Time: 2:30 PM
 */

namespace Hamdiko\FacebookComments\Model\Source;


class OrderBy extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'Social', 'value' => 'social'],
                ['label' => 'Newest', 'value' => 'reverse_time'],
                ['label' => 'Oldest', 'value' => 'time'],
            ];
        }
        return $this->_options;
    }
}
