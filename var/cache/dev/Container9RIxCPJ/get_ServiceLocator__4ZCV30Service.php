<?php

namespace Container9RIxCPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__4ZCV30Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..4ZCV30' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..4ZCV30'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'station' => ['privates', '.errored..service_locator..4ZCV30.App\\Entity\\Station', NULL, 'Cannot autowire service ".service_locator..4ZCV30": it references class "App\\Entity\\Station" but no such service exists.'],
        ], [
            'station' => 'App\\Entity\\Station',
        ]);
    }
}