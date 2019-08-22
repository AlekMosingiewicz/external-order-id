/*jshint browser:true jquery:true*/
/*global alert*/
define([
    'jquery',
    'mage/utils/wrapper',
    'Magento_Checkout/js/model/quote'
], function ($, wrapper, quote) {
    'use strict';

    return function (setShippingInformationAction) {

        return wrapper.wrap(setShippingInformationAction, function (originalAction) {
            var shippingAddress = quote.shippingAddress();
            if (shippingAddress['extension_attributes'] === undefined) {
                shippingAddress['extension_attributes'] = {};
            }

            // you can extract value of extension attribute from any place (in this example I use customAttributes approach)
            var externalOrderId = jQuery('[name="external_order_id"]').val();
            shippingAddress['extension_attributes']['external_order_id'] = jQuery('[name="external_order_id"]').val();
            // pass execution to original action ('Magento_Checkout/js/action/set-shipping-information')
            if (externalOrderId.length > 0 && externalOrderId.length <= 40) {
                return originalAction();
            }
        });
    };
});
