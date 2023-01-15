<?php

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">


        <div class="top-nav-container">
            <div class="logo-conteiner">
                <img src="C:\xampp\htdocs\logo"/>
            </div>

            <div class="top-left-conteiner">
                <div class="search-container">
                    <div>
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>

                <div class="nav-links-container">
                    <a href="#">Home </a>
                    <a href="#">Catalogue</a>
                    <a href="#">Delivery</a>
                    <a href="#">Contacts</a>
                </div>
            </div>
        </div>


        <div class="main-field">
            <img src="C:\xampp\htdocs\tiles" style="width:100%; border-radius: 5px;"/>
        </div>


        <div class="shop">
            <div class="filters">
                <div class="category">

                    <div class="name"><p><b>Category</b></p></div>
                    <a href="#">Floor tile</a>
                    <a href="#">Wall tile</a>
                    <a href="#">Bathroom tile</a>
                    <a href="#">Outdoor tile</a>
                </div>

                <div class="choose-field">
                    <div class="nname">
                        <p><b>Filter</b></p>
                        <p> Price from  <span class="field"> </span> to <span class="field"></span>  </p>
                    </div>
                    <a href="#">Brand</a>
                    <a href="#">Colour</a>
                    <a href="#">Material</a>
                    <a href="#">Other</a>
                </div>
            
            </div>
            <div class="prod">
                    <div class="product">
                    <?php

                        foreach ($xml->item as $item) {
                    ?>
                         <div class="task-card">
                         <div class="product-photo">
                            <img src="C:\xampp\htdocs\tile1" width="100" height="100"/>
                        </div>
                            <span class="task-card-name"><?= $item->name ?></span>
                            <span class="task-card-price"><?= $item->price ?></span>
                            <span class="task-card-deliveryDate"><?= $item['dateDelivery'] ?></span>
                            <a href="delete.php?id=<?= $item['id']?>">Delete</a>
                    </div>
                    <?php
                    }

                    ?>

                </div>
                   
            </div>
        </div>


        <div class="delivery">
            <h3 style= "text-align: center; color: #1e596e">Delivery choices </h3>
            <div class="matter">
                <div class ="pickup">
                    <h4 style= "text-align: center;background-color:#5ea1b977;    border-radius: 5px; padding: 8px; color: #1e596e  ">Pickup delivery </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer vitae justo eget magna fermentum iaculis eu non diam. Fringilla ut morbi tincidunt augue. Libero id faucibus nisl tincidunt eget nullam non nisi. Pellentesque sit amet porttitor eget dolor morbi non. </p>
                </div>
                <div class ="courier">
                    <h4 style= "text-align: center;background-color:#5ea1b977;    border-radius: 5px; padding: 8px; color: #1e596e ">Courier delivery </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer vitae justo eget magna fermentum iaculis eu non diam. Fringilla ut morbi tincidunt augue. Libero id faucibus nisl tincidunt eget nullam non nisi. Pellentesque sit amet porttitor eget dolor morbi non. </p>
                </div>
            </div>
        </div>


        <div class="footer">
            <h3 style= "color: #1e596e; padding-left: 20px">Contacts </h3>
            <div class="fmatter">
                <div class ="contacts">
                    <p>+xxx-xxx-xxx-xxxx</p>
                    <p>Adress:</p>
                    <p>somewhere</p>
                </div>
                <div class ="workTime">
                    <p>Open hours<br>10:00 - 18:00</p>
                </div>
                <div class ="mail">
                    <p>Email: <br> mail@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>











<body>
    <div class="container">
        <?php

        foreach ($xml->item as $item) {
        ?>
            <div class="task-card">
                <span class="task-card-name"><?= $item->name ?></span>
                <span class="task-card-assignedTo"><?= $item->assignedTo ?></span>
                <span class="task-card-deadline"><?= $item['deadline'] ?></span>
                <a href="delete.php?id=<?= $item['id']?>">Удалить</a>
            </div>
        <?php
        }

        ?>
       
    </div>
</body>

</html>