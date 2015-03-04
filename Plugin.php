<?php namespace Keios\KnobWidget;

use System\Classes\PluginBase;

/**
 * KnobWidget Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'keios.knobwidget::lang.labels.pluginName',
            'description' => 'keios.knobwidget::lang.labels.pluginDescription',
            'author' => 'Keios',
            'icon' => 'icon-cog'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Keios\KnobWidget\FormWidgets\KnobWidget' => [
                'label' => 'keios.knobwidget::lang.labels.knobFormWidget',
                'code' => 'knob'
            ]
        ];
    }

}
