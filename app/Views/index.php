<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <form class="col" style="border: 1px solid black">
        <p>Select Regular product</p>
        <div class="form-group">
            <label for="productCode">P.Code</label>
            <input type="text" class="form-control" name="productCode" id="productCode"  placeholder="Product Code">
        </div>
        <div class="form-group">
            <label for="productName">P.Name</label>
            <input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="productColor">Color/Size</label>
            <input type="text" class="form-control" name="productColor" id="productColor" placeholder="Product Color">
        </div>
        <div class="form-group">
            <label for="productUnitPrice">Unit Price</label>
            <input type="number" class="form-control" name="productUnitPrice" id="productUnitPrice" placeholder="Product UnitPrice">
        </div>
        <div class="form-group">
            <label for="Vat">Vat</label>
            <input type="number" class="form-control" name="vat" id="vat" placeholder="vat">
        </div>
        <div class="form-group">
            <label for="pWithVat">P.With Vat</label>
            <input type="number" class="form-control" name="pWithVat" id="pWithVat" placeholder="Product With Vat">
        </div>
        <div class="form-group">
            <label for="discount">Discount(%)</label>
            <input type="number" class="form-control" name="discount" id="discount" placeholder="discount">
        </div>
        <div class="form-group">
            <label for="Final Price">Final Price</label>
            <input type="number" class="form-control" name="finalPrice" id="finalPrice" placeholder="Final Price">
        </div>
        <div class="form-group">
            <label for="Final Price">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
        </div>
        <div class="form-group">
            <label for="Final Price">Sub Total</label>
            <input type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Sub Total">
        </div>
        <div class="form-group">
            <!-- <label for="email">Action</label> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>