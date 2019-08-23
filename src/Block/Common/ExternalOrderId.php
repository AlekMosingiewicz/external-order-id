<?php


namespace AlekMosingiewicz\ExternalOrderId\Block\Common;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template\Context as TemplateContext;

class ExternalOrderId extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Registry
     */
    protected $_registry;

    protected $_template = 'AlekMosingiewicz_ExternalOrderId::order/view/external_order_id.phtml';

    /**
     * ExternalOrderId constructor.
     * @param Registry $registry
     */
    public function __construct(
        TemplateContext $context,
        Registry $registry,
        array $data = []
    ) {
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }


    public function setTemplate($template)
    {
        return parent::setTemplate('AlekMosingiewicz_ExternalOrderId::order/view/external_order_id.phtml');
    }

    public function getExternalOrderId()
    {
        return $this->_registry->registry('current_order')->getExternalOrderId();
    }
}