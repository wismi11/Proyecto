<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->load('getPsEventbus_ContextService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] : $this->load('getOrderRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] : $this->load('getOrderDetailsRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'});
