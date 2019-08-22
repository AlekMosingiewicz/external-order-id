<?php

namespace AlekMosingiewicz\ExternalOrderId\Plugin;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

class ExternalOrderSetter
{
    public function afterProcess(LayoutProcessor $subject, $jsLayout)
    {
        $externalOrderIdCode = 'external_order_id';
        $externalOrderId = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                // customScope is used to group elements within a single form (e.g. they can be validated separately)
                'customScope' => 'shippingAddress',
                'customEntry' => null,
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/input',
            ],
            'dataScope' => 'shippingAddress' . '.' . $externalOrderIdCode,
            'label' => 'External Order Id',
            'provider' => 'checkoutProvider',
            'sortOrder' => 1,
            'validation' => [
                'required-entry' => true
            ],
            'options' => [],
            'filterBy' => null,
            'customEntry' => null,
            'visible' => true,
            'value' => ''
        ];

        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['before-form']['children'][$externalOrderIdCode] = $externalOrderId;
        return $jsLayout;
    }
}
