<?php

namespace AlekMosingiewicz\ExternalOrderId\Block\Frontend\Order\View;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template\Context as TemplateContext;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Model\Order\Address\Renderer as AddressRenderer;

class ExternalOrderId extends \AlekMosingiewicz\ExternalOrderId\Block\Common\ExternalOrderId
{
    protected $_template = 'AlekMosingiewicz_ExternalOrderId::order/view/external_order_id.phtml';
}
