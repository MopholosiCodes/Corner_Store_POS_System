<?php include '../DataLayer/connection.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'head.php'; ?>
        <title>Dashboard</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php';?>
        <?php

        if(isset($_POST['submit'])){
            if(!empty($_POST['product']) && !empty($_POST['amount'])){
                $product = $_POST['product'];
                $amount = $_POST['amount'];

                //create query
                $sql = "INSERT INTO `purchase`(
                    `product_description`,
                    `purchase_amount`,
                    `purchase_date`
                )
                VALUES(
                    '$product', 
                    '$amount', 
                    NOW()
                )";

                //test query
                $result = $conn->query($sql);
                if($result == "true"){
                    echo "
                    <div style='padding:25px; text-align:center;' class='alert alert-success'>
                        New record created successfully.
                    </div>";
                } else {
                    echo "Error:". $sql . "<br>". $conn->error;
                }
                $conn->close();
            }
        }
        ?>
        <!--body-->
        <form action="" method="post" class="needs-validation" style="margin: 90px; padding: 60px;">
            <div class="col" style='background-color:hsl(0, 13%, 92%); padding: 30px;'>
                <div class="col ">
                    <label for="title"><strong>Select Product: </strong></label>
                    <select name="product" id="" class="form-control" required>
                        <option value=""></option>
                        <!-- <option value="Weed">Weed</option> -->
                        <option value="Fkue Kit">Flu Kit</option>
                        <option value="Cuppaccino">Cuppaccino</option>
                    </select>
                    <div class="invalid-feedback">Please fill out this field</div>
                </div>

                <div class="col">
                    <label for="password"><strong>Enter Purchase Amount: </strong></label>
                    <div class="input-group">
                        <input type="text" name="amount" id="" class="form-control" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="material-icons">&#xe897;</i>
                            </span>
                        </div>
                    </div>
                    <div class="invalid-feedback">Please fill out this field</div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block" style='margin-top: 20px;'>Submit</button>
            </div>
        </form>
    </body>
</html>