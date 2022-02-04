<?php
//display all notes
include 'connection.php';
$select_sql = "SELECT * FROM `journal`";
$result1 = $conn->query($select_sql);

//create note
if(isset($_POST['submit'])){
    if(!empty($_POST['noteInput'])){
        $note = $_POST['noteInput'];

        //insert query
        $insert_sql = "INSERT INTO `journal`(`entry`, `entry_date`)VALUES('$note', NOW())";
    
        $result = $conn->query($insert_sql);
        if($result != TRUE){
            echo "Error:". $insert_sql . "<br>". $conn->error;
        }
        $select_sql = "SELECT * FROM `journal`";
        $result1 = $conn->query($select_sql);
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'head.php'; ?>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--header file-->
        <?php include 'header.php'; ?>
        <!--body-->
        <div class="col" style="padding: 60px;">
            <div class="col">
                <div class="row">
                    <div class="col-md-7" style='margin-bottom: 20px;'>
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" name="noteInput" placeholder='Quick Note...' style='color:black;' class="form-control">
                                <input type="submit" name='submit' value="Add Note" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                    <!--search bar-->
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" class="form-control" style="color: darkgray;" id="myInput" onkeyup="myFunction()" placeholder="Search from Notes.."/>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="material-icons">&#xe8b6;</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead class='table table-dark'>
                        <th>Note</th>
                        <th>Date</th>
                    </thead>
                    <tbody class='table table-warning'>
                        <?php
                        //display rows
                        if(!empty($result1)){
                            while($row = $result1->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $row['entry']; ?></td>
                                    <td><?php echo $row['entry_date']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>  
                    </tbody>
                </table>
            </div>
        </div>

        <!--js files-->
        <script src="search.js"></script>
    </body>
</html>