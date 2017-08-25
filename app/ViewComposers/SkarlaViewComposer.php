<?php

namespace App\ViewComposers;

use Illuminate\View\View;

/**
 * Description of SkarlaViewComposer
 *
 * @author Ervinne Sodusta
 */
class SkarlaViewComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $with = array_merge([
            "pageLayout" => "sidebar-full-height",
            "sidebar"    => "layouts.parts.st-margareth.static-sidebar-left"
            ], $view->getData());

        $view->with($with);
    }

}
