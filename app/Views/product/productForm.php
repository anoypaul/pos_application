<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php 
        if(session()->getFlashdata('status')){
            echo "<h4>".session()->getFlashdata('status')."</h4>";
        }
    ?>
    <div>
        <h5>Product Create Form</h5>
    </div>

    <form style="margin-top: 10px" action="<?= base_url('postData') ?>" method="POST">
        <div class="row mb-3">
            <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="productName" id="productName">
            </div>
        </div>
        <div class="row mb-3">
            <label for="productCode" class="col-sm-2 col-form-label">Product Code</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="productCode" id="productCode">
            </div>
        </div>
        <div class="row mb-3">
            <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" name="productPrice" id="productPrice">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div>
        <h5>Product Table</h5>
    </div>

    <table class="table table-bordered" >
        <thead>
            <tr>
            <th scope="col">Sl</th>
            <!-- <th scope="col">Product Id</th> -->
            <th scope="col">Product Code</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php 
                $serial = 1;
                // echo '<pre>';print_r($data);exit;
                foreach ($data as $row) {
                    // echo '<pre>';print_r($row);exit;

                    ?>
                    
                    <tr>
                        <td style="text-align: right"><?= $serial++  ?></td>
                        <!--<td style="text-align: right"></?= $row->id ?></td>-->
                        <td ><?= $row->productCode ?></td>
                        <td ><?= $row->productName ?></td>
                        <td style="text-align: right"><?= number_format($row->productPrice) ?></td>
                        <td>
                            <a href="<?= base_url('editPage/'.$row->id) ?>">Edit</a>
                            <a href="<?= base_url('dataDelete/'.$row->id) ?>" >Delete</a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>