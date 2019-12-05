<?php

namespace MyVendor\BlockInjection\Block;

class MyBlock extends \Magento\Framework\View\Element\Template
{
	public function getPageTitle()
    {
        return 'About Us';
    }
}