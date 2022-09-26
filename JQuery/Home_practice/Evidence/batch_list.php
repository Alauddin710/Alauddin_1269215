
<?php $db= new mysqli("localhost", "root","","wdpf51_bacth_students"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>batch list</title>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#batchid").change(function(){
                var id=$(this).val();
                $.get('student_list.php',{bid:id},function(data){
                    $("#studentid").html(data)
                })
            })
        });
    </script>
</head>
<body>
    <form action="">
        <select  id="batchid">
            <option value="">select One</option>
            <?php 
            $sql = "SELECT * FROM batches";
            $resutl = $db->query($sql);
            while($row = $resutl->fetch_assoc()){?>
            <option value="<?php $row['batch_id']; ?>"><?php $row['batch_name']; ?></option>
            <?php
            }
            
            ?>
        </select>
    </form>
    <div id="show"></div>
</body>
</html>