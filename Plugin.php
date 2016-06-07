<?php

namespace Kanboard\Plugin\PPP;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->route->addRoute('/ppp/project/:project_id', 'PPPController', 'index')
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getClases()
    {
        return array(
            'Plugin\PPP\Model' => array(
                'PPPReport',
                'PPPReportTasks',
            )
        );
    }

    public function getPluginName()
    {
        return 'PPP';
    }

    public function getPluginDescription()
    {
        return t('Generate Progress Plans and Problems (PPP) Report');
    }

    public function getPluginAuthor()
    {
        return 'Lev Lazinskiy';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomePage()
    {
        return 'https://github.com/levlaz/kanboard-plugin-ppp';
    }
}
