<?php

namespace App\Models;
use CodeIgniter\Model;

class SuppliersModel extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'sup_no';
    protected $returnType = 'array';

    protected $allowedFields = [
        'sup_title', 
        'sup_address', 
        'sup_contact', 
        'sup_email'];
}