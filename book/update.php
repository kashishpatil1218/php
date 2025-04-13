<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">

</head>

<body>

    <?php
     session_start();
    include("config.php");
    $config = new Config();

   



    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $writer = $_SESSION['writer'];
    $details = $_SESSION['details'];
    $price = $_SESSION['price'];



    if (isset($_REQUEST['button'])) {
        $name=$_POST['name'];
        $writer=$_POST['writer'];
        $details=$_POST['details'];
        $price=$_POST['price'];
       $result= $config->editStudent($id, $name, $writer, $details,$price);
       if(isset($result))
    {
        echo "data update !";
        header('Location:index.php');
    }
    else
    {
        echo "data fix !";
    }
    }
    

    ?>
    <div class="mb-3" style="display: flex; flex-direction:column; justify-content:center;  margin: 10px; align-items:center">
        <h3>Students Update Form</h3>

        <form method="post" style="max-width: 300px; margin: 0 auto;">
            <div class="mb-3">
                <label for="name" class="form-label">Book Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter Book Name here.."value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label for="writer" class="form-label">Book Writer</label>
                <input name="writer" type="text" class="form-control" placeholder="Enter Book Writer here.."value=<?php echo $writer; ?>>
            </div>

            <div class="mb-3">
                <label for="details" class="form-label">Book Details</label>
                <input name="details" type="text" class="form-control" placeholder="Enter Book Details here.."value=<?php echo $details; ?>>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Book Price</label>
                <input name="price" type="number" class="form-control" placeholder="Enter Book Price here.."value=<?php echo $price; ?>>
            </div>

            <button name="button" type="submit" class="btn btn-primary w-100">Submit</button>
            <a href="index.php">
        </form>
    </div>
</body>

</html>