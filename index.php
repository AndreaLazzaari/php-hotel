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
    ?>


    <main>

        <table class="table">
            <thead>
                <tr>
                <?php 
                    foreach ($hotels[0] as $key => $value) { ?>
                        <th scope="col"><?php echo $key; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $hotels[0]['name']; ?></td>
                    <td><?php echo $hotels[0]['description']; ?></td>
                    <td><?php echo $hotels[0]['parking']; ?></td>
                    <td><?php echo $hotels[0]['vote']; ?></td>
                    <td><?php echo $hotels[0]['distance_to_center']; ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?php echo $hotels[1]['name']; ?></td>
                    <td><?php echo $hotels[1]['description']; ?></td>
                    <td><?php echo $hotels[1]['parking']; ?></td>
                    <td><?php echo $hotels[1]['vote']; ?></td>
                    <td><?php echo $hotels[1]['distance_to_center']; ?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?php echo $hotels[2]['name']; ?></td>
                    <td><?php echo $hotels[2]['description']; ?></td>
                    <td><?php echo $hotels[2]['parking']; ?></td>
                    <td><?php echo $hotels[2]['vote']; ?></td>
                    <td><?php echo $hotels[2]['distance_to_center']; ?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?php echo $hotels[3]['name']; ?></td>
                    <td><?php echo $hotels[3]['description']; ?></td>
                    <td><?php echo $hotels[3]['parking']; ?></td>
                    <td><?php echo $hotels[3]['vote']; ?></td>
                    <td><?php echo $hotels[3]['distance_to_center']; ?></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><?php echo $hotels[4]['name']; ?></td>
                    <td><?php echo $hotels[4]['description']; ?></td>
                    <td><?php echo $hotels[4]['parking']; ?></td>
                    <td><?php echo $hotels[4]['vote']; ?></td>
                    <td><?php echo $hotels[4]['distance_to_center']; ?></td>
                </tr>
            </tbody>
        </table>






    </main>





</body>

</html>

    