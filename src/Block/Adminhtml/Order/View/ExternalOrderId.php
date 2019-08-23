<?php

namespace AlekMosingiewicz\ExternalOrderId\Block\Adminhtml\Order\View;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template\Context as TemplateContext;


class ExternalOrderId extends \AlekMosingiewicz\ExternalOrderId\Block\Common\ExternalOrderId
{
    /**
     * @var Registry
     */
    private $_registry;

    protected $_template = 'AlekMosingiewicz_ExternalOrderId::order/view/external_order_id.phtml';

}