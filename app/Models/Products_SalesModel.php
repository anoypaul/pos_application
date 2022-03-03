<?php namespace App\Models;

use CodeIgniter\Model;

class Products_SalesModel extends Model{
    protected $table = 'products_sales';
    protected $primaryKey = 'products_sales_id';
    protected $allowedFields = [  
        'products_listSales_id',  
        'products_sales_detail_id',
        'products_sales_vat',
        'products_sales_pWithVat',
        'products_sales_discount',
        'products_sales_finalPrice',
        'products_sales_quantity',
        'products_sales_subTotal',
    ];


  
}

?>