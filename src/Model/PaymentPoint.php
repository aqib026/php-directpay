<?php

namespace DigitalVirgo\DirectPay\Model;

use DigitalVirgo\DirectPay\Model\Enum\PaymentType;

/**
 * Class PaymentPoint
 * @package DigitalVirgo\DirectPay\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class PaymentPoint extends ModelAbstract
{

    /**
     * @var string
     */
    protected $_paymentPointId;

    /**
     * @var string
     */
    protected $_description;

    /**
     * @var string
     */
    protected $_provider;

    /**
     * @var string enum
     */
    protected $_paymentType;

    /**
     * @var Price
     */
    protected $_price;

    /**
     * @var string
     */
    protected $_largeAccount;

    /**
     * @var string
     */
    protected $_prefix;

    /**
     * @var boolean
     */
    protected $_customPrice;

    /**
     * @return string
     */
    public function getPaymentPointId()
    {
        return $this->_paymentPointId;
    }

    /**
     * @param string $paymentPointId
     * @return PaymentPoint
     */
    public function setPaymentPointId($paymentPointId)
    {
        $this->_paymentPointId = $paymentPointId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param string $description
     * @return PaymentPoint
     */
    public function setDescription($description)
    {
        $this->_description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->_provider;
    }

    /**
     * @param string $provider
     * @return PaymentPoint
     */
    public function setProvider($provider)
    {
        $this->_provider = $provider;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->_paymentType;
    }

    /**
     * @param $paymentType
     * @return $this
     * @throws \Exception
     */
    public function setPaymentType($paymentType)
    {
        if ($paymentType !== null && !in_array($paymentType, PaymentType::getAllOptions())) {
            throw new \Exception('Invalid payment type.');
        }

        $this->_paymentType = $paymentType;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param Price $price
     * @return PaymentPoint
     */
    public function setPrice($price)
    {
        if (is_array($price)) {
            $price = new Price($price);
        }

        $this->_price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getLargeAccount()
    {
        return $this->_largeAccount;
    }

    /**
     * @param string $largeAccount
     * @return PaymentPoint
     */
    public function setLargeAccount($largeAccount)
    {
        $this->_largeAccount = $largeAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->_prefix;
    }

    /**
     * @param string $prefix
     * @return PaymentPoint
     */
    public function setPrefix($prefix)
    {
        $this->_prefix = $prefix;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCustomPrice()
    {
        return $this->_customPrice;
    }

    /**
     * @param boolean $customPrice
     * @return PaymentPoint
     */
    public function setCustomPrice($customPrice)
    {
        $this->_customPrice = $customPrice;
        return $this;
    }

    /**
     * @return array xml DOM map
     */
    protected function _getDomMap()
    {
        return [
            'PaymentPoint' => [
                'PaymentPointId' => 'paymentPointId',
                'Description'    => 'description',
                'Provider'       => 'provider',
                'PaymentType'    => 'paymentType',
                'Price'          => 'price',
                'LargeAccount'   => 'largeAccount',
                'Prefix'         => 'prefix',
                'CustomPrice'    => 'customPrice',
            ]
        ];
    }


}