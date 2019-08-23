<?php

namespace AlekMosingiewicz\ExternalOrderId\Block\Frontend\Order\View;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template\Context as TemplateContext;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Model\Order\Address\Renderer as AddressRenderer;

class ExternalOrderId extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Registry
     */
    private $_registry;

    protected $_template = 'AlekMosingiewicz_ExternalOrderId::order/view/external_order_id.phtml';

    /**
     * ExternalOrderId constructor.
     * @param Registry $registry
     */
    public function __construct(        TemplateContext $context,
                                        Registry $registry,
                                        array $data = [])
    {
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }


    public function setTemplate($template)
    {
        return parent::setTemplate('AlekMosingiewicz_ExternalOrderId::order/view/external_order_id.phtml');
    }

    public function getOrder()
    {
        return $this->_registry->registry('current_order');
    }
}