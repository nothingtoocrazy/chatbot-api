<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller {
  public function team() {
    $results = Team::all();
    $payload = array(
      'count' => count($results),
      'teams' => $results
    );
    return $payload;
  }
}
