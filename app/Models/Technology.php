<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortfolioModel;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = ['tech_name'];
   
   public function portfolio_models(){

       return $this->belongsToMany(PortfolioModel::class);
   }
}
