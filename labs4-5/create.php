<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $task_name = $_POST['task_name'];
        $price = $_POST['price'];
        $dateDelivery = $_POST['dateDelivery'];

        $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
        
        $task = $xml->addChild('item', '');
        $task->addAttribute('dateDelivery', $dateDelivery);
        $task->addChild('name', $task_name);
        $task->addChild('price', $price);
        $task->addAttribute('id', $xml->count());

        $xml->saveXML('data.xml');
    }
    ?>
    <form method="POST" action="create.php">
        Name: <input type="text" name="task_name" required /><br />
        Price: <input type="text" name="price" /><br />
        Devivery date: <input type="date" name="dateDelivery" /><br />
        <input type="submit" value="Save" />
    </form>
</body>

</html>