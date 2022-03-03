<?php

namespace App\Controllers;
use App\Models\ArrayTestModel;

class ArrayTest extends BaseController
{
    public function index(){
        $arrayTestModel = new ArrayTestModel();
        $arrayTestModel = $arrayTestModel->findAll();
        $arr['data'] = [] ;
        for ($i=0; $i < count($arrayTestModel); $i++) { 
            $valueid = $arrayTestModel[$i]['id'];
            $value = $arrayTestModel[$i]['details'];
            $arrayValue= json_decode($value);
            $arrayValue->id = $valueid;
            array_push($arr['data'], $arrayValue);
        }
        return view("product/productForm", $arr);
    }
    public function PostData(){
        $arrayTestModel = new ArrayTestModel();
        $value = $this->request->getPost();
        $data = [
            'productName' => $value['productName'],
            'productCode' => $value['productCode'],
            'productPrice' => $value['productPrice'],
        ];

        //Check duplicate product Code..
        $arrayTestModel = $arrayTestModel->findAll();
        $arr['data'] = [];
        for ($i=0; $i < count($arrayTestModel); $i++) { 
            $value = $arrayTestModel[$i]['details'];
            $arrayValue= json_decode($value);
            array_push($arr['data'], $arrayValue);
        }
        // echo '<pre>';print_r($arr);exit;
        foreach ($arr['data'] as $key => $value) {
                if($value->productCode == $data['productCode']){
                    return redirect()->to(base_url('index'))->with('status','Data All ready Existed');
                }
        }

        $resultJson = json_encode($data);
        $jsondata = [
            // 'id' => 1,
            'details' => $resultJson,
        ];
        $arrayTestModel->save($jsondata);
        return redirect()->to(base_url('index'))->with('status','Data Updated Successfully');
    }
    public function EditPage($id){
        $arrayTestModel = new ArrayTestModel();
        $arrayTestModel = $arrayTestModel->find($id);
        $arr['data'] = [];
        $valueid = $arrayTestModel['id'];
        $value = $arrayTestModel['details'];
        $arr['data']= json_decode($value);
        $arr['data']->id = $valueid;
        return view('product/productEdit' ,$arr);
    }
    public function UpdatePage($id){
        $arrayTestModel = new ArrayTestModel();
        $value = $this->request->getPost();
        $data = [
            'productName' => $value['productName'],
            'productCode' => $value['productCode'],
            'productPrice' => $value['productPrice'],
        ];
        $resultJson = json_encode($data);
        $jsondata = [
            'id' => $id,
            'details' => $resultJson,
        ];
        // echo '<pre>';print_r($jsondata);exit;    
        $arrayTestModel->save($jsondata);
        return redirect()->to(base_url('index'))->with('status','Data Updated Successfully');
    }


    public function DataDelete($id){
        $arrayTestModel = new ArrayTestModel();
        $arrayTestModel->delete($id);
        return redirect()->to(base_url('index'))->with('status','Data delete Successfully');
    }

    










    // public function index(){
    //     $arrayTestModel = new ArrayTestModel();
    //     $result = $arrayTestModel->findAll();

    //     $value =  $result[0]['details'];
    //     $test = json_decode($value);
    //     for ($i=0; $i < count($test); $i++) { 
    //         if($test[$i]->id == 10){
    //             $test[$i]->title = "The Text";
    //         }
    //     }
    //     $testen = json_encode($test);

    //     $data = [
    //         'id' => 1,
    //         'details' => $testen,
    //     ];
    //     $arrayTestModel->save($data);     
    // }



    // public function FetchData(){
    //     $arrayTestModel = new ArrayTestModel();
    //     $arrayTestModel = $arrayTestModel->findAll();
    //     // $value = $arrayTestModel[1]['details'];
    //     // $result = json_decode($value);

    //     for ($i=0; $i < count($arrayTestModel); $i++) { 
    //         $value = $arrayTestModel[$i]['details']; 

    //         $arrayValue= json_decode($value);
    //         $arr = [] ;
    //         array_push($arr, $arrayValue);
    //         echo '<pre>';print_r($arr);
            

    //         // return view("product/productForm", $arrayValue);
    //         // echo '<pre>';
    //         // print_r($arrayValue);
    //     }


}