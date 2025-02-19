<?php

namespace ContainerOG3LxI6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_ApiLoginService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.authenticator.api_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.authenticator.json_login.api_login'] ?? $container->load('getSecurity_Authenticator_JsonLogin_ApiLoginService'));

        if (isset($container->privates['security.firewall.authenticator.api_login'])) {
            return $container->privates['security.firewall.authenticator.api_login'];
        }

        return $container->privates['security.firewall.authenticator.api_login'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['security.event_dispatcher.api_login'] ?? $container->load('getSecurity_EventDispatcher_ApiLoginService')), 'api_login', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []));
    }
}
