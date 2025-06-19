<?php

namespace Kanboard\Plugin\WorkloadTracker;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        // Register CSS
        $this->hook->on('template:layout:css', array('template' => 'plugins/WorkloadTracker/Assets/css/workload.css'));
        
        // Register sidebar menu
        $this->template->hook->attach('template:dashboard:sidebar', 'WorkloadTracker:sidebar');
        
        // Register routes
        $this->route->addRoute('/workload', 'WorkloadController', 'index', 'WorkloadTracker');
    }

    public function getPluginName()
    {
        return 'Workload Tracker';
    }

    public function getPluginDescription()
    {
        return 'Track team workload and capacity';
    }

    public function getPluginAuthor()
    {
        return 'Test Author';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.0';
    }
}
