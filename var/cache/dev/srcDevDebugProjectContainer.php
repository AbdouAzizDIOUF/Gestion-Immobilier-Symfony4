<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHTGzbyg\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHTGzbyg/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHTGzbyg.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHTGzbyg\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerHTGzbyg\srcDevDebugProjectContainer([
    'container.build_hash' => 'HTGzbyg',
    'container.build_id' => '74519ef5',
    'container.build_time' => 1587405819,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHTGzbyg');
