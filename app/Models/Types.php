<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortfolioModel;

class Types extends Model
{
    use HasFactory;
    protected $fillable=['category', 'mobile', 'tablet', 'pc', 'smart_tv','windows','linux','mac','android','ios','age_restriction'];


    public function portfolio_models(){
        return $this->hasMany(PortfolioModel::class);
    }
}
