<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>USER | VIEW</title>
</head>
<style type="text/css">
     body{
        text-align: center;
        color: black;
        font-family: roman ;
        font-size: 1.2rem;
        background-color: whitesmoke;
}

h2{
    width: 200px;
    border-radius: 10px;
    background-color: whitesmoke;
    border: 2px double black;
    margin-top: 10%;
}
table{
    text-align: center;
}

</style>
<body>
    <div class="container">
        
<center>
    
        <h2 class="text-center">User Details:</h2>
    <table class="table table-success table-striped">
            <thead >
                <tr>
                <th scope="col">Order NO</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Order amount</th>
                <th scope="col">Order Date</th>
                </tr>
            </thead>
            <tbody>
               <tr>
                <td><?php echo $_GET['orderno'];?></td>
                <td><?php echo $_GET['username'];?></td>
                <td><?php echo $_GET['email'];?></td>
                <td><?php echo $_GET['mobile'];?></td>
                <td><?php echo $_GET['orderamount'];?></td>
                <td><?php echo $_GET['rdate'];?></td>
            </tr>
        </tbody>
    </table>
    </div>
</center>
</html>
