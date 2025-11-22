<?php

/**
 * Copyright © Inter Rapidisimo All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'IRapidisimo_HelloWorld',
    __DIR__
);

