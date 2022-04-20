<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="array">
        <input type="submit" value="Tinh">
    </form>
    <h1>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $a = explode(" ", $_POST['array']);
                $min = 0;
                $max = 0;
                sort($a);
                for ($i = 0; $i < 5; $i++){
                    if ($i != 0){
                        $min += $a[$i];
                    }
                    if ($i != 4) {
                        $max += $a[$i];
                    }                  
                }

                echo "Tổng tối thiểu: " .$max."<br/>" . "Tổng tối đa: "  .$min;
        }
         ?>
    </h1>
</body>
<script>
    setInputFilter(document.getElementById("input"), function(value) {
    return /^\d*\.?\d*$/.test(value);
});
</script>
</html>