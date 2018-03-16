<?php namespace Katana\Artists\Components;

use Cms\Classes\ComponentBase;
use Carbon\Carbon;
use Katana\Artists\Models\Artist;

class DisplayArtists extends ComponentBase
{

    protected $featured = 1;

    public function componentDetails()
    {
        return [
            'name'        => 'DisplayArtists Component',
            'author'      => 'Stefan',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
       return [];
    }



    /**
     * @method onRender
     * @param $type
     */
    public function onRender()
    {


        $currentArtist = Artist::where('current',1)->orderBy('created_at','DESC')->first();



        $futureArtist = Artist::where('date_when_played', '>', Carbon::today())->where('current', '!=',1)->get();

        $pastArtist = Artist::where('date_when_played', '<', Carbon::today())->where('current','!=',1)->get();

        $this->page["CurrentArtist"]  = $currentArtist;

        $this->page["FutureArtists"]  = $futureArtist;

        $this->page["PastArtists"]  = $pastArtist;

    }


}