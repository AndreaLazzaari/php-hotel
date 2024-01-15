<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>


    <?php

$hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    foreach ($hotels as $hotel){
        echo $hotel['name'] . ' - ' . $hotel['description'] . ', ' . $hotel['parking'] . ', ' . $hotel['vote'] . ', ' . $hotel['distance_to_center'] . ' ';
    }


    var_dump($hotels);
    ?>


    <main>

        <table class="table">
            <thead>
                <tr>
                <?php 
                    foreach ($hotel as $key => $value) { ?>
                        <th scope="col"><?php echo $key; ?></th>
                        <!-- <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th> -->
                    <?php } ?>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $hotel['name']; ?></td>
                    <td><?php echo $hotel['description']; ?></td>
                    <td><?php echo $hotel['parking']; ?></td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel['distance_to_center']; ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>






    </main>





</body>

</html>

                <!-- <?php 
                         foreach ($hotels as $hotel) { ?>
                        <td scope="col"><?php echo $hotel['name']; ?></td>
                        <td scope="col"><?php echo $hotel['description']; ?></td>
                        <td scope="col"><?php echo $hotel['parking']; ?></td>
                        <td scope="col"><?php echo $hotel['vote']; ?></td>
                        <td scope="col"><?php echo $hotel['distance_to_center']; ?></td>
                    <?php } ?>  -->