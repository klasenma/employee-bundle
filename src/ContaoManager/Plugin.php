<?php

namespace Klasenma\EmployeeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Klasenma\EmployeeBundle\ContaoEmployeeBundle;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoEmployeeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['Employee']),
        ];
    }
}
