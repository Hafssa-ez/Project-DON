<?php

namespace ContainerOG3LxI6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurArticleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\UtilisateurArticleRepository' shared autowired service.
     *
     * @return \App\Repository\UtilisateurArticleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\UtilisateurArticleRepository'] = new \App\Repository\UtilisateurArticleRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
