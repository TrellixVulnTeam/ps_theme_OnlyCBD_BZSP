<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsOauthController' shared service.

return $this->services['PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsOauthController'] = new \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsOauthController(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->load('getPsMetrics_ModuleService.php')) && false ?: '_'});
