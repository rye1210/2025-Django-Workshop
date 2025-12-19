<?php

namespace App\Models;
use CodeIgniter\Model;

class DeliveryModel extends Model
{
    protected $table = 'deliveries';
    protected $primaryKey = 'del_no';
    protected $returnType = 'array';

    protected $allowedFields = [
        'pro_no', 
        'sup_no', 
        'del_price',
        'del_qty', 
        'del_date'];
}