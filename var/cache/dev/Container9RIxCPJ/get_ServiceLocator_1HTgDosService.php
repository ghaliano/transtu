<?php

namespace Container9RIxCPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1HTgDosService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1HTgDos' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1HTgDos'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneRepository' => ['privates', 'App\\Repository\\LigneRepository', 'getLigneRepositoryService', true],
        ], [
            'ligneRepository' => 'App\\Repository\\LigneRepository',
        ]);
    }
}