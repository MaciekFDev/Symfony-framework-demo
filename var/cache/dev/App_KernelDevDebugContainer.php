<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX0P2ams\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX0P2ams/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX0P2ams.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX0P2ams\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX0P2ams\App_KernelDevDebugContainer([
    'container.build_hash' => 'X0P2ams',
    'container.build_id' => '7f07840c',
    'container.build_time' => 1602794214,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX0P2ams');