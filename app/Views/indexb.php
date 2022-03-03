<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessionProject</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        
<!--    <style>
        .formDesign{
            width: 300px;
            /* background-color: gray; */
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            margin: auto;
            /* margin-top:20px; */
        }
        .formField{
            width: 100%;
            /* text-align: right; */
        }
        input[type=text] {
            margin-top: 5px;
            height: 20px;
            margin-bottom: 5px;
            width: 95%;
        }
        input[type=number] {
            margin-top:5px;
            margin-bottom: 5px;
            width: 95%;
            height: 20px;
        }
        .formFieldSubmit{
            margin-top:10px;
            text-align: center;
        }

        /* .tableDesign{
            border: 1px solid black;
            margin-top: 20px;
            width: 30%;
        } */

        .content-table{
            border-collapse:collapse;
            border: 1px solid black;
            margin: 25px auto;
            font-size: 20px;
            min-width: 40%;
        }
        .content-table thead tr{
            /* background-color: #009879;
            color: #ffffff; */
            text-align: center;
            font-weight: bold;
        }
        .content-table th,
        .content-table td{
            /* padding: 12px 15px; */
            padding: 5px;
            border: 1px solid black;
            /* text-align: right; */
        }

        .pageheading{
            margin-top: 10px;
            text-align: center;
        }
        .Viewpage{
            display: inline;
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
        }

        .numaric{
            text-align: right;
        }
        .formSubmit{
            text-align: center;
        }
        .ProductList{
            width: 100px;
            margin: auto;
            margin-top: 10px;
            border: 1px solid black;
            text-decoration: none;
        }
        a{
            text-decoration: none;
            text-align: center;
        }
        

    </style>-->
</head>
<body>
    <?php 
        if(session()->getFlashdata('status')){
            echo "<h4>".session()->getFlashdata('status')."</h4>";
        }
    ?>

    <?php 
        if(session()->getFlashdata('error')){
            foreach(session()->getFlashdata('error') as $field => $error) { ?>
                    <h3> <?= $error ?> </h3>
    <?php }} ?>
        
    
    <!--<div class="pageheading">
        <p>Select Regular Product</p>
    </div>-->

    <div class="container">
    
        <div class="row">
            <div class="col-sm-9 border" >
                <form action="<?= base_url('postInSubmit') ?>" method="POST">
                            <table id="tbl" class="table ">
                                <div class="pageheading">
                                    <h5>Regular Product Cart</h5>
                                </div>
                                <thead>
                                    <tr>
                                        <!-- <th>Sl</th> -->
                                        <th>P.Code</th>
                                        <th>P.Name</th>
                                        <th>Color/Size</th>
                                        <th>Unit Price</th>
                                        <th>Vat</th>
                                         <th>P.With Vat</th>
                                        <th>Discount(%)</th>
                                         <th>Final Price</th>
                                        <th>Quantity</th>
                                        <th>Sub Total</th> 
                                        <th>Action</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php 
                                        $serial = 0;
                                        $grandQuantity=0;
                                        $grandtotal=0;
                                    foreach($data as $row) {
                                        //    echo '<pre>';
                                        //    print_r($row['productId']);
                                        //    exit;
                                           if($row['productId']){ ?>
                                        <tr>
                                            <!--<td class="numaric"></?= ++$serial ?></td>-->
                                            <td class="numaric"><?= $row['products_list_productCode'] ?></td>
                                            <td class="numaric"><?= $row['productName'] ?></td>
                                            <td class="numaric"><?= $row['color'] ?></td>
                                            <td class="numaric"><?= $row['unitPrice'] ?></td>
                                            <td class="numaric"><?= $row['vat'] ?></td>
                                            <td class="numaric"><?= $row['PWithVat'] ?></td>
                                            <td class="numaric"><?= $row['discount'] ?></td>
                                            <td class="numaric"><?= $row['productPrice'] ?></td>
                                            <td class="numaric"><?= $row['productQuantity'] ?></td>
                                            <td class="numaric"><?= $row['totalSum'] ?></td>
                                            <td>
                                            <a href="<?= base_url('sessionDelete/'.$row['productId']) ?>" method="POST" class="btn1 ">Delete</a>
                                           <!-- <a href="</?= base_url('sessionDelete') ?>" method="POST" class="btn1 ">Delete</a>-->
                                            <!--<form action="</?= base_url('sessionDelete')?>" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn2">DELETE</button>
                                            </form>-->
                                            </td>
                                        </tr>
                                    <?php
                                     $grandQuantity = $grandQuantity + $row['productQuantity'];
                                     $grandtotal = $grandtotal + $row['totalSum'];
                                
                                    }} ?>

                                      

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="">sum</td>
                                        <td class="numaric"></td>
                                        <td class="numaric"></td>
                                        <td class="numaric"></td>
                                        <td class="numaric"></td>
                                        <td class="numaric"></td>
                                        <td class="numaric"></td>
                                        <td class="numaric"></td>
                                        <td class="numaric"> <?= $grandQuantity ?></td>
                                        <td class="numaric"><?= $grandtotal  ?></td>
                                    </tr>
                                </tfoot>
                                

                            </table>

                            <div class="pageheading">
                                <h6>Customer Information Table</h6>
                            </div>

                    <div class="row border">
                        <div class="col-6">

                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Sales Person</p>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" name="salesPerson" id="salesPerson" >
                                </div>                             
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Logged User</p>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" name="loggedUser" id="loggedUser" >
                                </div>                             
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Selling Date*</p>
                                </div>
                                <div class="col-md-8">
                                <input type="date" class="form-control" name="sellingDate" id="sellingDate" >
                                </div>                             
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Delivery Date*</p>
                                </div>
                                <div class="col-md-8">
                                <input type="date" class="form-control" name="deliveryDate" id="deliveryDate" >
                                </div>                             
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Mobile</p>
                                </div>
                                <div class="col-md-8">
                                <input type="number" class="form-control" name="mobile" id="mobile" >
                                </div>                             
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Customer Name</p>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" name="customerName" id="customerName" >
                                </div>                             
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Customer Address</p>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" name="customerAddress" id="customerAddress" >
                                </div>                             
                            </div>
                           <!-- <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Date of Birth</p>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" name="invoice_customerdateOfBirth" id="dateOfBirth" >
                                </div>                             
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <p class="text-right" style="text-align: right">Zip / Postal Code</p>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" name="invoice_customerpostalCode" id="postalCode" >
                                </div>                             
                            </div>-->


                        </div>

                        <div class="col-6">
                                <!-- <div class="row">
                                    <div class="col-md-4">
                                    <p class="text-right" style="text-align: right">Vat (%)</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="invoice_vat" id="vat" >
                                    </div>                             
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p class="text-right" style="text-align: right">Discount Type</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="invoice_discountType" id="discountType" >
                                    </div>                             
                                </div> -->
                                <div class="row">
                                    <div class="col-md-4">
                                    <p class="text-right" style="text-align: right">Discount(%)</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="discount" id="discount" >
                                    </div>                             
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p class="text-right" style="text-align: right">Total Price</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="totalPrice" id="totalPrice" value="<?= $grandtotal ?>">
                                    </div>                             
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p class="text-right" style="text-align: right">Delivery Charge</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="deliveryCharge" id="deliveryCharge" >
                                    </div>                             
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p class="text-right" style="text-align: right">Final Price</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" name="finalPrice" id="finalPrice" value="<?= $grandtotal ?>">
                                    </div>                             
                                </div>
                        </div>
                    </div>
                                    
                                    
                    <div class="formSubmit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>

            <div class="col-sm-3 border">
            <p>Select Regular Product</p>
                <form action="<?= base_url('postIndata') ?>" method="POST">

                    <div class="formField">                       
                        <label for="productId">Product code</label><br>
                    
                        <select onchange='autofill(<?= json_encode($productlist) ?>)' name="products_list_productCode" id="products_list_productCode" >
                            <option value="select">select product code</option>
                            <?php 
                                if($productlist){
                                    foreach($productlist as $row) { ?>
                                            <option value="<?php echo $row['products_list_productCode'];?>"> <?php echo $row['products_list_productCode']?> </option>
                            <?php }}?>
                        </select>
                        <script>
                            function autofill(productlist){
                                
                                var code = document.getElementById('products_list_productCode').value;
                                for(let i = 0; i<productlist.length; i++){
                                    if(productlist[i].products_list_productCode == code){
                                        document.getElementById('productName').value = productlist[i].products_list_productName;
                                        document.getElementById('productId').value = productlist[i].products_list_id;
                                        document.getElementById('productPrice').value = productlist[i].products_list_productPrice;
                                        document.getElementById('color').value = productlist[i].products_list_productColor;
                                    }
                                }
                            }
                        </script>

                    </div>
                    <div class="formField">
                        <label for="productName">Product Name</label><br>
                        <input type="text" name="productName" id="productName"><br>
                    </div>
                    <div class="formField">
                        <label for="productId">Product Id</label><br>
                        <input type="text" name="productId" id="productId"><br>
                    </div>
                    <div class="formField">
                        <label for="productPrice">Product Price</label><br>
                        <input type="number" name="productPrice" id="productPrice"><br>
                    </div>
                    <div class="formField">
                        <label for="productPrice">Vat</label><br>
                        <input type="number" name="vat" id="vat"><br>
                    </div>
                    <div class="formField">
                        <label for="discount">Discount</label><br>
                        <input type="number" name="discount" id="discount"><br>
                    </div>
                    <div class="formField">
                        <label for="color">Product Color</label><br>
                        <input type="text" name="color" id="color"><br>
                    </div>

                    <div class="formField">
                        <label for="productQuantity">Quantity</label><br>
                        <input type="number" name="productQuantity" id="productQuantity"><br>
                    </div>
                    <div class="formFieldSubmit">
                        <input type="submit" value="Add to Cart">
                    </div>

                </form>
            </div>
    </div>

    <div class="">
    <a href="<?= base_url('getData') ?>" method="POST" class="btn1 ">DataTable</a>
    </div>

                  
       
    
 
                <!-- <div class="ProductList">
                    <a  href="</?= base_url('getData') ?>">ProductList</a>
                 </div>-->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>