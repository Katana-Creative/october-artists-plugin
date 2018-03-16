<?php namespace Katana\Artists\Components;

use Cms\Classes\ComponentBase;
use Katana\Artists\Models\Artist;

class DisplayArtist extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'DisplayArtist Component',
            'description' => 'No description provided yet...'
        ];
    }


    /**
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }


    /**
     * @method onRender
     * @throws \Exception
     */
    public function onRender()
    {
        try{

            $slug = $this->param('artist-slug');

            $artist = Artist::where('slug', $slug)->first();

            $this->page["artist"] = $artist;

            $this->page->title = $artist->name;


        }catch (\Exception $e){

           throw new \Exception('Please provide a artist slug to search for');
        }
    }

}