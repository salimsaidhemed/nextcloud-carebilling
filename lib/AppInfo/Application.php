<?php

declare(strict_types=1);

namespace OCA\CareBilling\AppInfo;

use OCP\AppFramework\App;

class Application extends App
{
    public const APP_ID = 'carebilling';

    public function __construct(array $urlParams = [])
    {
        parent::__construct(self::APP_ID, $urlParams);
    }
}
