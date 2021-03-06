<?php

namespace App;

use App\Song;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    
    protected $fillable = [
        'list_name', 'public', 'owner'
    ];

    protected $primaryKey = 'list_id';

    public function songs () {
        return $this->hasMany(Song::class,'list_id','list_id');
    }

    public function users () {
        return $this->belongsTo(User::class,'owner');
    }

    public function addSong (Song $song) {
        $this->songs()->create($song);
    }
}