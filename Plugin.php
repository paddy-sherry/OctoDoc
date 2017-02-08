<?php namespace LeaderInternet\Documentation;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'leaderinternet.documentation::lang.plugin.name',
            'description' => 'leaderinternet.documentation::lang.plugin.description',
            'author'      => 'Leader Internet',
            'icon'        => 'oc-icon-book',
            'homepage'    => 'https://leaderinternet.com'
        ];
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
