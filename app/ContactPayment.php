<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPayment extends Model
{
    protected $table = 'wp_ps_contact_payment';
    protected $connection = 'mysql2';

}
