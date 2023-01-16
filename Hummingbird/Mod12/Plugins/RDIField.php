<?php

namespace Hummingbird\Mod12\Plugins;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

class RDIField
{

    public function afterProcess(LayoutProcessor $subject, $jsLayout)
    {


    $customAttributeCode = 'rdifield';

    $customField = [

    'component' => 'Magento_Ui/js/form/element/select',
    'config' => [

        // customScope is used to group elements within a single form (e.g. they can be validated separately)

        'customScope' => 'shippingAddress.custom_attributes',
        'customEntry' => null,
        'template' => 'ui/form/field',
        'elementTmpl' => 'ui/form/element/select',
        'tooltip' => [
            'description' => 'Shipping charges may vary based on address type',
        ],

    ],

    'dataScope' => 'shippingAddress.custom_attributes' . '.' . $customAttributeCode,

    'label' => 'RDI',
    'provider' => 'checkoutProvider',
    'sortOrder' => 0,
    'validation' => [
       'required-entry' => true
    ],

    'options' => [
        [
            'value'=>'res', 'label'=>'Residential'
        ],
        [
            'value'=>'com', 'label'=>'Comme.rcial'
        ]
    ],

    'filterBy' => null,
    'customEntry' => null,
    'visible' => false,
    'value' => 'res' // value field is used to set a default value of the attribute

];


        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'][$customAttributeCode] = $customField;

        return $jsLayout;
    }
}