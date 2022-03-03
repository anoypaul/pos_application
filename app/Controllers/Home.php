<?php

namespace App\Controllers;

use App\Models\Products_ListModel;
use App\Models\Products_SalesModel;
use App\Models\Products_Sales_DetailModel;

class Home extends BaseController
{
    public function index()
    {
        $products_listModel = new Products_ListModel();
        $result['productlist'] = $products_listModel->findAll();

        $session = session();
        if(isset($session->productdata)){
            $result['data']=$session->productdata;
        }
        else{
            $result['data']=[];
        }
        // echo '<pre>';print_r($result['data']);exit;
            // return view('productIn', $result);
        return view('indexb', $result);
    }
    public function PostInData()
    {
        $session = session();
        $input = $this->request->getPost();
            if(isset($session->productdata)){
                $oldarray = $session->productdata;
                $persentage = $input['vat'] / 100 * $input['productPrice'];   
                $total = $input['productPrice'] + $persentage;
                $discountSum =  $input['discount'] / 100 * $total;
                $subTotal = $total - $discountSum;
                    $data = [
                        'productId' => $input['productId'],
                        'productName' => $input['productName'],
                        'products_list_productCode' => $input['products_list_productCode'],
                        'unitPrice' => $input['productPrice'],
                        'vat' => $input['vat'],
                        // 'PWithVat' => ($input['vat'] / 100) * $input['productPrice'],
                        'discount' => $input['discount'],
                        'color' => $input['color'],
                        'productQuantity' => $input['productQuantity'],
                        'PWithVat' => $input['productPrice'] + $persentage,
                        'productPrice' => $total - $discountSum,
                        'totalSum' =>  $subTotal * $input['productQuantity'],
                    ];
                    // echo '<pre>';print_r($data);exit;
                    for($i=0;$i<count($oldarray);$i++){
                        if($oldarray[$i]['products_list_productCode'] == $data['products_list_productCode']){
                            $oldarray[$i]['productQuantity'] = $oldarray[$i]['productQuantity'] + $data['productQuantity'];
                            $oldarray[$i]['totalSum'] = $oldarray[$i]['productPrice'] * $oldarray[$i]['productQuantity'];
                            
                            $session->set('productdata', $oldarray);
                            return redirect()->To('/');
                        }

                        // $session->set('productdata', $oldarray);
                        // return redirect()->To('productOutPage');
                    }
                array_push($oldarray, $data);
                $session->set('productdata', $oldarray);
            }

            else{
                $oldarray = [];
                $persentage = $input['vat'] / 100 * $input['productPrice'];
                $total = $input['productPrice'] + $persentage;
                $discountSum =  $input['discount'] / 100 * $total;
                $subTotal = $total - $discountSum;
                
                $data = [
                    'productId' => $input['productId'],
                    'productName' => $input['productName'],
                    'products_list_productCode' => $input['products_list_productCode'],
                    'unitPrice' => $input['productPrice'],
                    'vat' => $input['vat'],             
                    'discount' => $input['discount'],
                    'color' => $input['color'],
                    'productQuantity' => $input['productQuantity'],
                    'PWithVat' => $input['productPrice'] + $persentage,
                    'productPrice' => $total - $discountSum,
                    'totalSum' =>  $subTotal * $input['productQuantity'],
                ];
                // echo '<pre>';print_r($data);exit;
                array_push($oldarray, $data);
                $session->set('productdata', $oldarray);
            }
         $result['data']=$session->productdata;

         $finalresult = $result['data'];
         $totalprice = 0;
         for($i=0; $i<count($finalresult); $i++){
            $totalprice += $finalresult[$i]['totalSum'];
         }
         $tp['taka'] = $totalprice;
        //  echo '<pre>';print_r($tp['taka']);exit;
        //  return view('index', $result);
        return redirect()->To('/'); 
    }



    public function PostInSubmit(){
        $products_Sales_DetailModel = new Products_Sales_DetailModel();
         $session = session();
         $resultdata = $session->productdata;
         $products_SalesModel = new Products_SalesModel();

        //  $final = $input['discount'] / 100 * $input['totalPrice'];
        //  $finaldelch = $final + $input['deliveryCharge'];

             $input = $this->request->getPost(); 
             $data = [
                    'products_sales_detail_salesPerson' => $input['salesPerson'],
                    'products_sales_detail_loginUser' => $input['loggedUser'],
                    'products_sales_detail_sellingDate' => $input['sellingDate'],
                    'products_sales_detail_deliveryDate' => $input['deliveryDate'],
                    'products_sales_detail_mobile' => $input['mobile'],
                    'products_sales_detail_customerName' => $input['customerName'],
                    'products_sales_detail_customerAddress' => $input['customerAddress'],
                    'products_sales_detail_discount' => $input['discount'],
                    'products_sales_detail_totalPrice' => $input['totalPrice'],
                    'products_sales_detail_deliveryCharge' => $input['deliveryCharge'],
                    'products_sales_detail_finalPrice' => $input['finalPrice'],
                 ];
             $insertdata = $products_Sales_DetailModel->save($data);
             if($insertdata === false){
                 $session->setFlashdata('error', $invoiceModel->errors());
             }
             else{
                 $id = $products_Sales_DetailModel->insertID;
                 // echo '<pre>';print_r($id);exit;
                 // $session->setFlashdata('status','Data Added Successfully');
             }

         foreach($resultdata as $row){
             if($row['productId']){
                 $data = [
                    //  'product_id' => $row['productId'],
                     'products_listSales_id' => $id,
                     'products_sales_detail_id' =>  $id,
                     'products_sales_vat' => $row['vat'],
                     'products_sales_pWithVat' => $row['PWithVat'],
                     'products_sales_discount' => $row['discount'],
                     'products_sales_finalPrice' => $row['productPrice'],
                     'products_sales_quantity' => $row['productQuantity'],
                     'products_sales_subTotal' => $row['totalSum'],
                 ];
                 if($products_SalesModel->save($data) === false){
                     $session->setFlashdata('error', $products_SalesModel->errors());
                 }
                 else{
                     $session->setFlashdata('status','Data Added Successfully');
                 }
             }
         }
         $session->remove('productdata');

         // $invoiceModel = new InvoiceModel();
      
         return redirect()->to(base_url('/'));
        }





    public function sessionDelete($productId){
       
        $session = session();
        if(isset($session->productdata)){
            $result['data']=$session->productdata;
        }
        else{
            $result['data']=[];
        }
        $value = $result['data'];
        // echo '<pre>';print_r($value);exit;
        for($i=0; $i<count($value); $i++){
            if($value[$i]['productId'] == $productId){
                unset($value[$i]);
            }
        }
        $session->productdata=$value;
        return redirect()->To('/');

    }

    // public function FetchData()
	// {
	// 	$value = new Products_ListModel();
	// 	$get_data = $value->get_all_data();
    //     // echo '<pre>';
    //     // print_r($get_data);
    //     // exit;
	// 	$i = $_POST['start'];

	// 	foreach ($get_data as $val) {
	// 		$data[] = array(
	// 			++$i,
    //             $val->products_list_productCode,
    //             $val->products_list_productName,
    //             $val->products_list_productPrice, 
    //             $val->products_list_productColor,
    //             $val->products_sales_vat,
    //             $val->products_sales_pWithVat,
    //             $val->products_sales_discount,
    //             $val->products_sales_quantity,
    //             $val->products_sales_subTotal,
	// 		);
	// 	}
	// 	$output = array(
	// 		"draw" => $_POST['draw'],
	// 		"recordsTotal" => $value->countAll(),
	// 		"recordsFiltered" => $value->countFiltered(),
	// 		"data" => isset($data) ? $data : [],
	// 	);
	// 	echo json_encode($output);
	// }



    public function FetchData()
	{
		$value = new Products_Sales_DetailModel();
		$get_data = $value->get_all_data();

        // echo '<pre>';
        // print_r($get_data);
        // exit;
		$i = $_POST['start'];

		foreach ($get_data as $val) {
			$data[] = array(
				++$i,
                $val->products_sales_detail_salesPerson,
                $val->products_sales_detail_loginUser,
                $val->products_sales_detail_sellingDate, 
                $val->products_sales_detail_deliveryDate,
                $val->products_sales_detail_mobile,
                $val->products_sales_detail_customerName,
                $val->products_sales_detail_customerAddress,
                $val->products_sales_detail_totalPrice,
                $val->products_sales_detail_deliveryCharge,
                $val->products_sales_detail_finalPrice,
			);
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $value->countAll(),
			"recordsFiltered" => $value->countFiltered(),
			"data" => isset($data) ? $data : [],
		);
		echo json_encode($output);
	}

    public function GetData(){
        return view('datatable');
    }
	

}