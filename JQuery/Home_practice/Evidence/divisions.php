<?php $db = new mysqli("localhost","root","","jquery_ev") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#division").change(function(){
                var divid = $(this).val();
                $.get('districts.php',{divisionsid:divid},function(data){
                    $("#district_id").html(data);
                })
            })
        });
    </script>
</head>
<body>
    <form action="">
        <select  id="division">
            <option value="" disabled selected>Select One</option>
            <?php 
            $sql = "SELECT * FROM divisions";
            $result = $db->query($sql);
            while($row = $result->fetch_assoc()){?>
            <option value="<?php echo $row['div_id']; ?>"> <?php echo $row['div_name']; ?> </option>
        <?php
            }
            ?>
        </select>
        
        <select id="district_id">
            <option value="">Select One</option>
        </select>
    </form>
    <div id="show"></div>
</body>
</html>