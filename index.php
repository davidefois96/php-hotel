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



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>php hotel</title>
  
</head>
<body>

  <h1 class=" text-center my-5">List of Hotels</h1>


  <div class="d-flex justify-content-around">

  <?php foreach ($hotels as $hotel) :?>

    <div class="card my-3 " style="width: 18rem;">
      <div class="card-header">
        <h2>Hotel</h2>
      </div>
      <ul class="list-group list-group-flush">

        <?php foreach($hotel as $chiave => $item): ?>

          <?php if ($chiave === 'parking') : ?>
            <li class="list-group-item"><?php echo $chiave ?> : <?php echo $item ? 'Yes' : 'No'; ?></li>
          <?php else: ?>
            <li class="list-group-item"><?php echo $chiave ?> : <?php echo $item ?></li>
          <?php endif; ?>

          

        <?php endforeach; ?>
        
      </ul>
    </div>

  <?php endforeach; ?>  




  </div>

 

  



  
</body>
</html>