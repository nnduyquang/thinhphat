<?php

namespace App\Http\ViewComposers;

use App\Repositories\Frontend\FrontendRepository;
use Illuminate\View\View;

class ConfigComposer
{
    public $dataConfig=[];

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(FrontendRepository $home)
    {
        $this->dataConfig = $home->getDataConfig();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('dataConfig', $this->dataConfig);
    }
}