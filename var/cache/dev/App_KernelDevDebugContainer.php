<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL64nyQw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL64nyQw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerL64nyQw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerL64nyQw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerL64nyQw\App_KernelDevDebugContainer([
    'container.build_hash' => 'L64nyQw',
    'container.build_id' => 'd617ca47',
    'container.build_time' => 1672816617,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL64nyQw');
