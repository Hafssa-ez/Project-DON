<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UtilisateurArticle extends \App\Entity\UtilisateurArticle implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'article' => [parent::class, 'article', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', parent::class],
        "\0".parent::class."\0".'id' => [parent::class, 'id', parent::class],
        "\0".parent::class."\0".'statut' => [parent::class, 'statut', null],
        "\0".parent::class."\0".'updatedAt' => [parent::class, 'updatedAt', null],
        "\0".parent::class."\0".'utilisateur' => [parent::class, 'utilisateur', parent::class],
        'article' => [parent::class, 'article', null],
        'createdAt' => [parent::class, 'createdAt', parent::class],
        'id' => [parent::class, 'id', parent::class],
        'statut' => [parent::class, 'statut', null],
        'updatedAt' => [parent::class, 'updatedAt', null],
        'utilisateur' => [parent::class, 'utilisateur', parent::class],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
