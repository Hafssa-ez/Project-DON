<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSkxUc4x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSkxUc4x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSkxUc4x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSkxUc4x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSkxUc4x\App_KernelDevDebugContainer([
    'container.build_hash' => 'SkxUc4x',
    'container.build_id' => '66b18253',
    'container.build_time' => 1738579832,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSkxUc4x');
