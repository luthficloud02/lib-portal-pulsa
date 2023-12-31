<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace LuthfiCloud02\LibPortalPulsa;

use LuthfiCloud02\LibPortalPulsa\Services\PortalPulsaService;
use LuthfiCloud02\LibPortalPulsa\Services\PortalPulsaServiceInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                PortalPulsaServiceInterface::class => PortalPulsaService::class,
            ],
            'commands' => [],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for oauth.',
                    'source' => __DIR__ . '/../publish/portal-pulsa.php',
                    'destination' => BASE_PATH . '/config/autoload/portal-pulsa.php',
                ],
            ]
        ];
    }
}
