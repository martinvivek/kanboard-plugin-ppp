<?php

namespace Kanboard\Plugin\PPP;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:project:dropdown', 'ppp:project/dropdown');
    }

    public function getClasses()
    {
        return array(
            'Plugin\PPP\Model' => array(
                'PppReport',
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
