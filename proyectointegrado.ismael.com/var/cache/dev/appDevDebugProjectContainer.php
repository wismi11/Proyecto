<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK47jqrj\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK47jqrj/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerK47jqrj.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerK47jqrj\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerK47jqrj\appDevDebugProjectContainer([
    'container.build_hash' => 'K47jqrj',
    'container.build_id' => '5852b55f',
    'container.build_time' => 1623087076,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK47jqrj');
