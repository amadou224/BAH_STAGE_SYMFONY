<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\RoyalPalaceAllerRetourRepository' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ObjectRepository.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
include_once $this->targetDirs[3].'\\src\\Repository\\RoyalPalaceAllerRetourRepository.php';

return $this->privates['App\Repository\RoyalPalaceAllerRetourRepository'] = new \App\Repository\RoyalPalaceAllerRetourRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
