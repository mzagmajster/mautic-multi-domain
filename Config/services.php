<?php

declare(strict_types=1);

use Mautic\CoreBundle\DependencyInjection\MauticCoreExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $configurator) {
    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    $excludes = [
        'Permissions',
    ];

    $services->load(
        'MauticPlugin\\MauticMultiDomainBundle\\',
        __DIR__.'/../'
    )
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, $excludes)).'}');

    $services->load(
        'MauticPlugin\\MauticMultiDomainBundle\\Entity\\',
        __DIR__.'/../Entity/*Repository.php'
    );

    $services->alias(
        'mautic.multidomain.model.multidomain',
        \MauticPlugin\MauticMultiDomainBundle\Model\MultidomainModel::class
    );

};
