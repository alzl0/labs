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
    $id = 0;
    $name = '';
    $assignedTo = '';
    $deadline = '';

    $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $id = $_GET['id'];

        foreach ($xml->item as $item) {
            if ($item['id'] == $id) {
                $name = $item->name;
                $price = $item->price;
                $deliveryDate = $item['date'];
                $node = $item;
                break;
            }
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        foreach ($xml->item as $item) {
            if ($item['id'] == $id) {
                $item->name = $_POST['name'];
                $item->price = $_POST['price'];
                $item['dateDelivery'] = $_POST['dateDelivery'];
                break;
            }
        }
        $xml->saveXML('data.xml');
    }
    ?>

    <form method="POST" action="update.php?id=<?= $id ?>">
        Name: <input type="text" name="name" required value="<?= $name ?>" /><br />
        Price: <input type="text" name="price" value="<?= $price ?>" /><br />
        Devivery date: <input type="date" name="dateDelivery" value="<?php $dateDelivery ?>" /><br />
        <input type="hidden" value="<?= $id ?>" name="id"/>
        <input type="submit" value="Save" />
    </form>
</body>

</html>