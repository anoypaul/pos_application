<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-3 border">
                <p class="text-center">Product Edit Form</p>
                <form style="margin-top: 10px" action="<?= base_url('updatePage/'.$data->id) ?>" method="POST">
                    <div class="row mb-3">
                        <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="productName" value="<?= $data->productName ?>" id="productName" placeho>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="productCode" class="col-sm-2 col-form-label">Product Code</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="productCode" value="<?= $data->productCode ?>" id="productCode">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="productPrice" value="<?= $data->productPrice ?>" id="productPrice">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    <div>
                        <a href="<?= base_url('index') ?>">Home Page</a>
                    </div>

                </form>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>