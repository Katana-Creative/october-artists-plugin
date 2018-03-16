<?php namespace Katana\Artists;

use Backend;
use System\Classes\PluginBase;

/**
 * Artists Plugin Information File
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
            'name'        => 'Artists',
            'description' => 'Provides an way to manage the artist information',
            'author'      => 'Katana',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Katana\Artists\Components\DisplayArtists' => 'DisplayArtists',
            'Katana\Artists\Components\DisplayArtist' => 'DisplayArtist',
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {


        return [
            'artists' => [
                'label'       => 'Artists',
                'url'         => Backend::url('katana/artists/artists'),
                'icon'        => 'icon-user',
                'permissions' => ['katana.artists.*'],
                'order'       => 500,
            ],
        ];
    }

}
