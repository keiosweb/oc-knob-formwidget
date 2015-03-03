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
            'name' => 'keios.knobWidget::lang.labels.pluginName',
            'description' => 'keios.knobWidget::lang.labels.pluginDescription',
            'author' => 'Keios',
            'icon' => 'icon-cog'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Keios\KnobWidget\FormWidgets\KnobWidget' => [
                'label' => 'keios.knobWidget::lang.labels.knobFormWidget',
                'code' => 'knob'
            ]
        ];
    }

}
