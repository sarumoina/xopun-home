<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0d60cKq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0d60cKq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0d60cKq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0d60cKq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0d60cKq\App_KernelDevDebugContainer([
    'container.build_hash' => '0d60cKq',
    'container.build_id' => '0fca9355',
    'container.build_time' => 1640502732,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0d60cKq');
