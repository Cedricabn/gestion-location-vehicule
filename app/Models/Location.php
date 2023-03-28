<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $appends = ['formatted_date_debut', 'formatted_date_fin'];

    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getFormattedDateDebutAttribute() {
        Carbon::setLocale('fr');
        $new_date = Carbon::createFromDate($this->dateDebut);
        $new_date_format = $new_date->dayName . ' ' . $new_date->day . ' ' .  $new_date->monthName . ' ' . $new_date->year;
        return ucwords($new_date_format);
    }

    public function getFormattedDateFinAttribute() {
        Carbon::setLocale('fr');
        $new_date = Carbon::createFromDate($this->dateFin);
        $new_date_format = $new_date->dayName . ' ' . $new_date->day . ' ' .  $new_date->monthName . ' ' . $new_date->year;
        return ucwords($new_date_format);
    }
}
