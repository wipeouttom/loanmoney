<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loan';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['user_id', 'reciever_id', 'startDate', 'endDate', 'percentage', 'amount'];

    public function user() {
        $this->hasOne('App\User');
    }

    public function lender() {
        $this->hasOne('App\User');
    }
}
