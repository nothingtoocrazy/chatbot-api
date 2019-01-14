<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = "match";

    public $fields = [
        'id' => 'match.id',
        'competition_id' => 'match.competition.id',
        'season_id' => 'match.season_id',
        'match_id' => 'match.match_id',
        'homeTeam' => 'match.homeTeam',
        'homeTeamId' => 'match.homeTeamId',
        'awayTeam' => 'match.awayTeam',
        'awayTeamId' => 'match.awayTeamId',
        'winner' => 'match.winner',
        'status' => 'match.status',
        'homeScore' => 'match.homeScore',
        'awayScore' => 'match.awayScore',
        'homePenalties' => 'match.homePenalties',
        'awayPenalties' => 'match.awayPenalties',
    ];

    protected $fillable = [
        'competition_id',
        'match_id',
        'season_id',
        'homeTeam',
        'homeTeamId',
        'awayTeam',
        'awayTeamId',
        'winner',
        'status',
        'homeScore',
        'awayScore',
        'homePenalties',
        'awayPenalties',
    ];
    public function homeTeam() {
        return $this->hasOne('App\Models\Team', 'competition_id', 'competition_id');
    }
}

