 <?php
 include "../model/prodb.php";
 
 
 $conn = createProductCon();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            insertProductData(
                        $conn,
                        $_POST["proid"],
                        $_POST["proname"],
                        $_POST["quantity"],
                        $_POST["price"],
                        $_POST["category"]
                  );

            }
            deleteProductData($conn);
            
    ?>



