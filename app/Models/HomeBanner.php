<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
  public function showHome()
{
    $banner = \App\Models\HomeBanner::first(); // fetch first banner
    return view('landing', compact('banner'));
}

}
