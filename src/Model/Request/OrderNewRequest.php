<?php

namespace DigitalVirgo\DirectPay\Model\Request;

use DigitalVirgo\DirectPay\Model\Order;

/**
 * Class OrderNewRequest
 * @package DigitalVirgo\DirectPay\Model\Request
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class OrderNewRequest extends RequestAbstract
{

    /**
     * @var Order
     */
    protected $_order;

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->_order;
    }

    /**
     * @param Order $order
     * @return OrderNewRequest
     */
    public function setOrder($order)
    {
        if (is_array($order)) {
            $order = new Order($order);
        }

        $this->_order = $order;
        return $this;
    }

    /**
     * @return array xml DOM map
     */
    protected function _getDomMap()
    {
        $parentMap = parent::_getDomMap()[0];

        return [
            'OrderNewRequest' => array_merge($parentMap, [
                'Order' => 'order'
            ]),
        ];
    }
}