<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPnMPVhw\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPnMPVhw/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPnMPVhw.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPnMPVhw\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPnMPVhw\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PnMPVhw',
    'container.build_id' => '5c6babbf',
    'container.build_time' => 1561300855,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPnMPVhw');
