<?php

/**
 * Copyright © Inter Rapidisimo All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace IRapidisimo\Catalog\Rewrite\Magento\Catalog\Block\Product\View;

class Description extends \Magento\Catalog\Block\Product\View\Description
{
    private const string CODE = 'at_code';
    private const array DESCRIPTIONS = ['description', 'short_description'];

    /**
     * @inheritdoc
     */
    public function toHtml()
    {
        $_html = parent::_toHtml();

        if ( in_array($this->getData(self::CODE), self::DESCRIPTIONS)) {
            $addition = '<p>' . __(
                    'Description modified from a preference in the %1 module',
                    'IRapidisimo_Catalog'
                ) . '</p>';

            $_html = $_html . $addition;
        }

        return $_html;
    }
}

