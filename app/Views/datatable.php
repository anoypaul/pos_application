<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>

</head>
<body>

    <div class="container" style="margin-top:18px;">
        <table id="tableid" class="table table-bordered" style="border: 1px solid black; " >
                <thead>
                    <tr>
                        <td>SL</td>
                        <td>products_sales_detail_salesPerson</td>
                        <td>products_sales_detail_loginUser</td>
                        <td>products_sales_detail_sellingDate</td>
                        <td>products_sales_detail_deliveryDate</td>
                        <td>products_sales_detail_mobile</td>
                        <td>products_sales_detail_customerName</td>
                        <td>products_sales_detail_customerAddress</td>
                        <td>products_sales_detail_totalPrice</td>
                        <td>products_sales_detail_deliveryCharge</td>
                        <td>products_sales_detail_finalPrice</td>
                    </tr>
                </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</body>
<script>
function callServer() {
    $('#tableid').dataTable({
        "order": [],
        "destroy": true,
        "pageLength": 10,
        "processing": true,
        "serverSide": true,
        "scrollX": true,
        "responsive": true,

            "columnDefs":[{
                "visible": false,
                "targets": -1
            }],

        //   "ordering": false,
        "language": {
            "infoFiltered": ""
        },
        "ajax": {
            url: "<?php echo base_url('fetchData'); ?>",
            type: 'POST',
            data: {

            }
        },
        "columns": [
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[0];
                }
            },
            {
                "data": null,
                className: "text-left",
                render: function(data, type, row) {
                    return data[1];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[2];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[3];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[4];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[5];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[6];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[7];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[8];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[9];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[10];
                }
            },
            {
                "data": null,
                className: "text-right",
                render: function(data, type, row) {
                    return data[11];
                }
            },
            // {
            //     "data": null,
            //     className: "text-right",
            //     render: function(data, type, row) {
            //         return data[12];
            //     }
            // },
        ]
    });
}
</script>
<script>
    $(document).ready(function(){
        callServer();
    });
</script>
</html>