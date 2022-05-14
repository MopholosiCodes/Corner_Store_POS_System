<?php
//display records
include 'connection.php';
$sql = "SELECT * FROM `purchase`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'head.php'; ?>
        <title>Database</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--header file-->
        <?php include 'header.php'; ?>

        <div class="col" style="padding: 60px;">
            <div class="col">
                <div class="row">
                    <div class="col-md-7">
                         <h2><Strong>Records: </Strong></h2>
                    </div>
                    <!--search bar-->
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="button" style="margin-right: 10px" value="Show All Records" class="btn btn-primary">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search product.."/>
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text btn btn-primary">
                                    <i class="material-icons">&#xe8b6;</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <table id="myTable" class="table table-striped">
                <thead class='table table-dark'>
                    <tr class="table table-bordered" style='color: white; text-align: center;'>
                        <th>Purchased Product</th>
                        <th>Transaction Date</th>
                        <th>Purchase Amount</th>
                    </tr>
                </thead>
                <tbody class='table table-warning'>
                    <?php
                        //insert records
                        if(!empty($result)){
                            while($row = $result->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $row['product_description']; ?></td>
                                    <td><?php echo $row['purchase_date']; ?></td>
                                    <td><?php echo 'R' . $row['purchase_amount']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <!--js files-->
        <script src="search.js"></script>
    </body>
</html>