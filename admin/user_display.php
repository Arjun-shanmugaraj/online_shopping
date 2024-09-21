<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   
    <title>USER | DISPLAY</title>
</head>
<style>
    body{
        text-align: center;
        color: black;
        background-color: whitesmoke;
    }
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
    *{
        font-family: times new roman;
    }
    .btn{
        margin-top: 2%;
        margin-left:90% ;
    }
</style>
<body>
    <center> <h1>USER | DETAILS</h1> </center>
    <div class="table-responsive">  
    <table class="table" >
  <thead >
    <tr>
      <th >id</th>
      <th >Order No</th>
      <th >User Name</th>
      <th >Mobile</th>
      <th >email</th>
      <th >order amount</th>
      <th >Date</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody id="data">

  </tbody>
</table>
<!-- </div> -->
</body>
<script>
    // function deletedata(id){
    //     var deleteUrl="http://localhost/offer_new_delete.php?id=" +id;
    //     $.ajax({
    //         url:deleteUrl,
    //         method:"DELETE",
    //         success:function(){
    //             refreshTable();
    //         }
    //     });
    // }    
        fetch("http://localhost/Online_shopping/admin/user_new_read.php").then(
            res => {
                res.json().then(
                    data => {
                        if(data.data.length > 0){
                            var temp ="";
                            data.data.forEach((disData)=>{
                                temp +="<tr>";
                                temp +="<td>" + disData.id+"</td>";
                                temp +="<td>" + disData.orderno+"</td>";
                                temp +="<td>" + disData.name+"</td>";
                                temp +="<td>" + disData.mobile+"</td>";
                                temp +="<td>" + disData.email+"</td>";
                                temp +="<td>" + disData.total+"</td>";
                                temp +="<td>" + disData.rdate+"</td>";
                                temp +="<td><i id='view' class='bi bi-eye-fill' data-id='"+ disData.id+"'></i></td>";
                                temp +="</tr>";
                            });
                            document.getElementById('data').innerHTML= temp;
                            // console.log(data);
                        }
                    }
                )
            }
        )
    
   $(document).on('click','#view', function(){
        var id=$(this).data('id');
        // alert("orderno" + orderno); 
        var lastclickuser={
            id: id,
            orderno: $(this).closest('tr').find('td:eq(1)').text(),
            username: $(this).closest('tr').find('td:eq(2)').text(),
            mobile: $(this).closest('tr').find('td:eq(3)').text(),
            email: $(this).closest('tr').find('td:eq(4)').text(),
            orderamount: $(this).closest('tr').find('td:eq(5)').text(),
            rdate: $(this).closest('tr').find('td:eq(6)').text()
        };
            console.log(lastclickuser);
        var confirmation=confirm ('Are you view  this data?');
        if(confirmation){
            window.location.href="http://localhost/Online_shopping/admin/view_user_new.php?id="+ id + "&orderno=" + encodeURIComponent(lastclickuser.orderno)+"&username=" + encodeURIComponent(lastclickuser.username)+"&mobile=" + encodeURIComponent(lastclickuser.mobile)+"&email=" + encodeURIComponent(lastclickuser.email)+ "&orderamount=" + encodeURIComponent(lastclickuser.orderamount)+"&rdate=" + encodeURIComponent(lastclickuser.rdate);


        }
    });
    
</script>
</html>