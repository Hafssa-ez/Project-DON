<?php

namespace ContainerUTNIxGH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllersupprimerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d6UE9.H.App\Controller\ArticleController::supprimer()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d6UE9.H.App\\Controller\\ArticleController::supprimer()'] = ($container->privates['.service_locator.d6UE9.H'] ?? $container->load('get_ServiceLocator_D6UE9_HService'))->withContext('App\\Controller\\ArticleController::supprimer()', $container);
    }
}
