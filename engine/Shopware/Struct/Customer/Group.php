<?php

namespace Shopware\Struct\Customer;

use Shopware\Struct\Extendable;

/**
 * @package Shopware\Struct
 */
class Group extends Extendable
{
    /**
     * Unique identifier
     * @var int
     */
    private $id;

    /**
     * Alphanumeric unique identifier.
     *
     * @var string
     */
    private $key;

    /**
     * Name of the customer group
     * @var string
     */
    private $name;

    /**
     * Defines if the customer group
     * should see gross prices in the store
     * front.
     *
     * @var boolean
     */
    private $displayGrossPrices;

    /**
     * Defines if the display price
     * already reduces with a global customer
     * group discount
     *
     * @var boolean
     */
    private $useDiscount;

    /**
     * Percentage global discount value
     * for this customer group.
     * @var float
     */
    private $percentageDiscount;

    /**
     * Minimal order value for the customer group.
     * If this value isn't reached in the basket,
     * the defined surcharge will be added
     * as basket position.
     *
     * @var float
     */
    private $minimumOrderValue;

    /**
     * Numeric surcharge value for the customer group.
     * This value is used for the additional basket
     * position if the $minimumOrderValue of the
     * customer group isn't reached.
     *
     * @var float
     */
    private $surcharge;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param float $percentageDiscount
     */
    public function setPercentageDiscount($percentageDiscount)
    {
        $this->percentageDiscount = $percentageDiscount;
    }

    /**
     * @return float
     */
    public function getPercentageDiscount()
    {
        return $this->percentageDiscount;
    }

    /**
     * @param float $surcharge
     */
    public function setSurcharge($surcharge)
    {
        $this->surcharge = $surcharge;
    }

    /**
     * @return float
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * @param boolean $useDiscount
     */
    public function setUseDiscount($useDiscount)
    {
        $this->useDiscount = $useDiscount;
    }

    /**
     * @return boolean
     */
    public function useDiscount()
    {
        return $this->useDiscount;
    }

    /**
     * @param boolean $displayGrossPrices
     */
    public function setDisplayGrossPrices($displayGrossPrices)
    {
        $this->displayGrossPrices = $displayGrossPrices;
    }

    /**
     * @return boolean
     */
    public function displayGrossPrices()
    {
        return $this->displayGrossPrices;
    }

    /**
     * @return float
     */
    public function getMinimumOrderValue()
    {
        return $this->minimumOrderValue;
    }

    /**
     * @param float $minimumOrderValue
     */
    public function setMinimumOrderValue($minimumOrderValue)
    {
        $this->minimumOrderValue = $minimumOrderValue;
    }
}