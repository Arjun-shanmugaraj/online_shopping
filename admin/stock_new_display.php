<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <title>TABLE DISPLAY</title>
</head>
<style>
    table, thead{
        border-collapse: collapse;
        border: 2px solid black;
        }
    table{
        width:100%;
        text-align: center;
        margin: 10px auto;
    }
    th{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva;
    }
    img{
        height: 50px;
        text-align: center;
        width: 100px;
    }
    .btn{
/*        width: 200px;*/
        margin-left: 2%;
        margin-top: 2%;
    }
</style>
<body>
     <a href="stock_new.php"><button class="btn btn-primary btn-sm"><span class="material-symbols-outlined">ADD</button></a></span>
    <div class="table-responsive">  
    <table class="table" style="width: 100%; text-align: center;" >
  <thead class="table table-striped table-hover">
    <tr>
      <th scope="col">product Name</th>
      <th scope="col">id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sales Rate</th>
      <th scope="col">MRP</th>
      <th scope="col">Image1</th>
      <th scope="col">Image2</th>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
      <th scope="col">Category</th>
      <th scope="col">Discount</th>
      <th scope="col">Offer</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody id="data">
  </tbody>
</table>
</div>
</body>
<script>
    
    function deletedata(id){
        var deleteUrl="http://localhost/Online_shopping/admin/stock_new_delete.php?id=" +id;
        $.ajax({
            url:deleteUrl,
            method:"DELETE",
            success:function(){
                // refreshTable();
            }
        });
    }
    // function refreshTable(){
    
        fetch("http://localhost/Online_shopping/admin/stock_new_read.php").then(
            res => {
                res.json().then(
                    data => {
                        if(data.data.length > 0){
                            var temp ="";
                            data.data.forEach((itemData)=>{
                                temp +="<tr>";
                                temp +="<td>" + itemData.product_name+"</td>";
                                temp +="<td>" + itemData.id+"</td>";
                                temp +="<td>" + itemData.quantity+"</td>";
                                temp +="<td>" + itemData.sales_rate+"</td>";
                                temp +="<td>" + itemData.mrp+"</td>";
                                temp +="<td><img src='../fold/"+itemData.image1+ "'></td>";
                                temp +="<td><img src='../fold/"+itemData.image2+ "'></td>";
                                temp +="<td>" + itemData.description+"</td>";
                                temp +="<td>" + itemData.size+"</td>";
                                temp +="<td>" + itemData.category+"</td>";
                                temp +="<td>" + itemData.discount+"</td>";
                                temp +="<td>" + itemData.offers+"</td>";
                                temp +="<td><i id='delete' class='bi bi-trash-fill' data-id='"+ itemData.id +"'></i></td>";
                                temp +="</tr>";
                            });
                            document.getElementById('data').innerHTML= temp;
                        }
                    }
                )
            }
        )
    // }
    
    $(document).on('click','#delete',function(){
        var id=$(this).data('id');
        var rowText=$(this).closest('tr').text().trim();
        var confirmation=confirm ('Are You Delete This Item?');
        if(confirmation){
            deletedata(id);
        }
    
    });

    
</script>
</html>