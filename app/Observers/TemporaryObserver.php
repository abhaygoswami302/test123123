<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Subseries;
use App\Models\Temporary;
use App\Models\Theme;
use Illuminate\Support\Facades\Auth;

class TemporaryObserver
{
    /**
     * Handle the Temporary "created" event.
     *
     * @param  \App\Models\Temporary  $temporary
     * @return void
     */
    public function created(Temporary $temporary)
    {
      /*  $category = Category::where('name', '=', $temporary->category_name)->first();
        $subseries = Subseries::where('name', '=', $temporary->subseries_name)->first();
        $collection = Collection::where('id', '=', $subseries->collection_id)->first();
        $theme = Theme::where('name', '=', $temporary->theme)->first();
        $temporary->user_id = Auth::user()->id;
        $temporary->collection_id = $collection->id;
        $temporary->collection_name = $collection->name;
        $temporary->series = $category->name . " : " . $subseries->name;
        $temporary->casting_name = $subseries->casting;
        $temporary->category_id = $category->id;
        $temporary->subseries_id = $subseries->id;
        $temporary->theme_id = $theme->id;
        $temporary->save();*/
    }

    /**
     * Handle the Temporary "updated" event.
     *
     * @param  \App\Models\Temporary  $temporary
     * @return void
     */
    public function updated(Temporary $temporary)
    {
        //
    }

    /**
     * Handle the Temporary "deleted" event.
     *
     * @param  \App\Models\Temporary  $temporary
     * @return void
     */
    public function deleted(Temporary $temporary)
    {
        //
    }

    /**
     * Handle the Temporary "restored" event.
     *
     * @param  \App\Models\Temporary  $temporary
     * @return void
     */
    public function restored(Temporary $temporary)
    {
        //
    }

    /**
     * Handle the Temporary "force deleted" event.
     *
     * @param  \App\Models\Temporary  $temporary
     * @return void
     */
    public function forceDeleted(Temporary $temporary)
    {
        //
    }
}
