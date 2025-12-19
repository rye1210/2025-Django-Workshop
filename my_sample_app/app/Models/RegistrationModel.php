<?php

namespace App\Models;
use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'reg_no';
    protected $returnType = 'array';

    protected $allowedFields = [
        'reg_email', 
        'reg_firstname', 
        'reg_middlename', 
        'reg_lastname', 
        'reg_contactnumber'];
}