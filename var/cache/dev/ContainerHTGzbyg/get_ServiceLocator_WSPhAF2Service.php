<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WSPhAF2' shared service.

return $this->privates['.service_locator.WSPhAF2'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['property' => function (): \App\Entity\Property {
    return ($this->privates['.errored..service_locator.WSPhAF2.App\\Entity\\Property'] ?? $this->load('getProperty2Service.php'));
}]);
