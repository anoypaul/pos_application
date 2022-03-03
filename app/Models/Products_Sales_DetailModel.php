<?php namespace App\Models;

use CodeIgniter\Model;

class Products_Sales_DetailModel extends Model{
    protected $table = 'products_sales_detail';
    protected $primaryKey = 'products_sales_detail_id';
    protected $allowedFields = [
        'products_sales_detail_salesPerson',
        'products_sales_detail_loginUser',
        'products_sales_detail_sellingDate',
        'products_sales_detail_deliveryDate',
        'products_sales_detail_mobile',
        'products_sales_detail_customerName',
        'products_sales_detail_customerAddress',
        'products_sales_detail_discount',
        'products_sales_detail_totalPrice',
        'products_sales_detail_deliveryCharge',
        'products_sales_detail_finalPrice',
    ];

    public function get_all_data()
    {
        $builder = $this->db->table('products_sales_detail');
            $this->table = 'products_sales_detail';
            $this->primaryKey = 'products_sales_detail_id';
            $this->allowedFields = [ 'products_sales_detail_salesPerson', 'products_sales_detail_loginUser', 'products_sales_detail_sellingDate', 'products_sales_detail_deliveryDate','products_sales_detail_mobile', 'products_sales_detail_customerName', 'products_sales_detail_customerAddress', 'products_sales_detail_discount', 'products_sales_detail_totalPrice', 'products_sales_detail_deliveryCharge', 'products_sales_detail_finalPrice'];
            $this->column_order = array('sl', 'products_sales_detail_salesPerson', 'products_sales_detail_loginUser', 'products_sales_detail_sellingDate', 'products_sales_detail_deliveryDate','products_sales_detail_mobile', 'products_sales_detail_customerName', 'products_sales_detail_customerAddress', 'products_sales_detail_discount', 'products_sales_detail_totalPrice', 'products_sales_detail_deliveryCharge', 'products_sales_detail_finalPrice');
            $this->order = array('products_sales_detail_id' => 'desc'); //asc //desc

            $builder->select('*');

        //search
        if ($_POST['search']['value']) {
            $search = $_POST['search']['value'];
            $query = "products_sales_detail_customerName LIKE '%$search%'";
        } else {
            $query = "products_sales_detail_id !=''";
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
        $builder = $this->db->table('products_sales_detail');
        $query = $builder->countAllResults();
        return $query;
    }
    public function countFiltered()
    {
        if ($_POST['search']['value']) {
            $search = $_POST['search']['value'];
            $query = "AND (products_sales_detail_customerName LIKE '%$search%')";
        } else {
            $query = "";
        }
        $db = \Config\Database::connect();
        $query2 = "SELECT COUNT(products_sales_detail_id) as rowcount FROM products_sales_detail WHERE products_sales_detail_id !='' $query";
        
        $query2 = $db->query($query2)->getRow();
        return $query2->rowcount;
    }


}

?>