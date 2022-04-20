<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content {
        width: 100%;
        margin: auto;
        display: flex;
        justify-content: center;
        height: 500px;
        align-items: center;
        font-size: 28px;
    }
</style>
<body>
   <div class="content">
       <div>
       <form action="index.php" method="POST">
            <input placeholder="Ví dụ: 1 2 3 4 5" type="text" name="array">
            <input type="submit" value="Tìm">
        </form>
   
    <p>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $a = explode(" ", $_POST['array']);
                $min = 0;
                $max = 0;
                $old = '';
                $even = '';
                $total = 0;
                sort($a);
                for ($i = 0; $i < 5; $i++){
                    $total += $a[$i];
                    if ($a[$i] % 2 == 0){
                        $even .= $a[$i] .', ';
                    } else {
                        $old .= $a[$i] .', ';
                    }
                    if ($i != 0){
                        $min += $a[$i];
                    }
                    if ($i != 4) {
                        $max += $a[$i];
                    }                    
                }
                echo "Tổng tối thiểu: " .$max."<br/>" . "Tổng tối đa: "  .$min."<br/>" ."Tổng mảng: ".$total."<br/>".  "Phần tử min trong mảng: "  .min($a)."<br/>" . "Phần tử max trong mảng: "  .max($a). "<br/>". "Phẩn tử chẳn: ".$even. "<br/>". "Phẩn tử lẻ: ".$old;
        
        
            }
         ?>
    </p>
       </div>
        
   </div>
</body>
</html>