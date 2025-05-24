<?php
include_once "../control/proaction.php";
include_once "../control/login_control.php";

?>

<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css" />
</head>

<body>
    <main class="continer">
        <div class="continer--1 login-container">
            <h2 id="hello" > Hello, <?php echo $_SESSION["firstname"]; ?> </h2>
            <form class="login-box" method="post" action="dashboard.php">

                <label for="product_id" class="proId">Product Id:</label>
                <input type="text" id="id" name="proid" />

                <label for="product_name" class="proName">Product name:</label>
                <input type="text" id="name" name="proname">

                <label for="quantity" class="Quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" />

               

                <label for="price" class="Price">Price:</label>
                <input type="number" id="price" name="price" />

                <label for="category" class="Category">Category:</label>
                <input type="text" id="category" name="category" />

            
                <button type="submit" class="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="continer--1 table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Product-id</th>
                        <th>Product-Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Category</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "../control/tableData.php"; ?>
                   

                </tbody>
              
            </table>
        </div>
    </main>
   
</body>

</html>