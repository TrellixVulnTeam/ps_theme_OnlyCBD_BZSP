<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.monitoring.empty_category' shared service.

$this->services['prestashop.core.grid.definition.factory.monitoring.empty_category'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\Monitoring\EmptyCategoryGridDefinitionFactory(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.grid.action.row.accessibility_checker.category_for_view']) ? $this->services['prestashop.adapter.grid.action.row.accessibility_checker.category_for_view'] : $this->load('getPrestashop_Adapter_Grid_Action_Row_AccessibilityChecker_CategoryForViewService.php')) && false ?: '_'});

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

return $instance;