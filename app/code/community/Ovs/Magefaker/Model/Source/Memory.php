<?php

/**
 * Class Ovs_MageFaker_Model_Faker.
 */
class Ovs_Magefaker_Model_Source_Memory extends Mage_Core_Model_Abstract
{
    protected $options = [];

    /**
     * @param bool $addEmpty
     *
     * @throws Mage_Core_Exception
     *
     * @return array
     */
    public function toOptionArray($addEmpty = true)
    {
        $this->options = [
            [
                'label' => '1',
                'value' => 1
            ],
            [
                'label' => '2',
                'value' => 2
            ],
            [
                'label' => '4',
                'value' => 4
            ],
            [
                'label' => '8',
                'value' => 8
            ]
        ];

        return $this->options;
    }



    /**
     * Returns first value of option array.
     *
     * @return mixed
     */
    public function getFirstValue()
    {
        $values = $this->toOptionArray();

        return $values[0];
    }
}
