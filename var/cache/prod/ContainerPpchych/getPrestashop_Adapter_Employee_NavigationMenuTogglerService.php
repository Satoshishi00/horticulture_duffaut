<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.employee.navigation_menu_toggler' shared service.

return $this->services['prestashop.adapter.employee.navigation_menu_toggler'] = new \PrestaShop\PrestaShop\Adapter\Employee\NavigationMenuToggler(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'});
