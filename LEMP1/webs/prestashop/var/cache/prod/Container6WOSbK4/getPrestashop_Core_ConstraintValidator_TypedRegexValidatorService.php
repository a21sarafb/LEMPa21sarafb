<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.constraint_validator.typed_regex_validator' shared service.

return $this->services['prestashop.core.constraint_validator.typed_regex_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\TypedRegexValidator(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
