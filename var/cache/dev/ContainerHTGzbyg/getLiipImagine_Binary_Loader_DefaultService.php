<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.binary.loader.default' shared service.

include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Binary/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Binary/Loader/FileSystemLoader.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Binary/Locator/LocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Binary/Locator/FileSystemLocator.php';

return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader(($this->privates['liip_imagine.mime_type_guesser'] ?? $this->load('getLiipImagine_MimeTypeGuesserService.php')), ($this->privates['liip_imagine.extension_guesser'] ?? $this->load('getLiipImagine_ExtensionGuesserService.php')), new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator([0 => ($this->targetDirs[3].'/public')]));
