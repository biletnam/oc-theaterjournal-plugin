<?php namespace Abnmt\TheaterJournal;

use System\Classes\PluginBase;

/**
 * TheaterJournal Plugin Information File
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
            'name'        => 'abnmt.theaterjournal::lang.plugin.name',
            'description' => 'abnmt.theaterjournal::lang.plugin.description',
            'author'      => 'Abnmt',
            'icon'        => 'icon-leaf'
        ];
    }

}
