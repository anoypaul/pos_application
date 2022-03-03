<?php namespace App\Models;

use CodeIgniter\Model;

class Products_ListModel extends Model{
    protected $table = 'products_list';
    protected $primaryKey = 'products_list_id';
    protected $allowedFields = [
        'products_list_productCode',
        'products_list_productName',
        'products_list_productPrice',
        'products_list_productColor',
    ];

    public function get_all_data()
        {
            $builder = $this->db->table('products_list');
                $this->table = 'products_list';
                $this->primaryKey = 'products_list_id';
                $this->allowedFields = [ 'products_list_productCode', 'products_list_productName', 'products_list_productPrice', 'products_list_productColor'];
                $this->column_order = array( 'products_list_productCode', 'products_list_productName', 'products_list_productPrice', 'products_list_productColor');
                $this->order = array('products_list_id' => 'desc'); //asc //desc
    
                $builder->select('*');


                $builder->join('products_sales', 'products_sales.products_listSales_id = products_list.products_list_id',  "left");

                // $builder->join('product_inout', 'product_inout.product_id = session_table.id',  "left");
    
            //search
            if ($_POST['search']['value']) {
                $search = $_POST['search']['value'];
                $query = "products_list_productName LIKE '%$search%'";
            } else {
                $query = "products_list_id !=''";
            }
            
            // order
            if (isset($_POST["order"])) {
                $result_order = $this->column_order[$_POST['order']['0']['column']];
                $result_dir = $_POST['order']['0']['dir'];
            } else if ($this->order) {
                $order = $this->order;
                $result_order = Key($order);
                $result_dir = $order[Key($order)];
            }
            if ($_POST["length"] != -1) {
                $query = $builder->where($query)
                    ->orderBy($result_order, $result_dir)
                    ->limit($_POST["length"], $_POST["start"])
                    ->get();
                   
                return $query->getResult();
            }
        }
        public function countAll()
        {
            $builder = $this->db->table('products_list');
            $query = $builder->countAllResults();
            return $query;
        }
        public function countFiltered()
        {
            if ($_POST['search']['value']) {
                $search = $_POST['search']['value'];
                $query = "AND (products_list_productName LIKE '%$search%')";
            } else {
                $query = "";
            }
            $db = \Config\Database::connect();
            $query2 = "SELECT COUNT(products_list_id) as rowcount FROM products_list WHERE products_list_id !='' $query";
            
            $query2 = $db->query($query2)->getRow();
            return $query2->rowcount;
        }
}

?>