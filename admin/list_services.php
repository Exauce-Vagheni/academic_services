<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de Bord</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
          
        }
        
    </style>
<body class="bg-gray-100">
  <?php
    include "nav.php";
  ?>

  <div class="container mx-auto px-4 mt-8">
    <h1 class="text-3xl font-bold text-center my-8">Tableau de Bord</h1>
    <div class="overflow-x-auto">
      <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
          <tr>
            <th class="py-3 px-6 text-left">ID</th>            
            <th class="py-3 px-6 text-left">Désignation</th>
            <th class="py-3 px-6 text-left">Déscription</th>
           <th class="py-3 px-6 text-left">Fichier</th>
            <th class="py-3 px-6">Action</th>
          </tr>
        </thead>
        <tbody class=" text-gray-600 text-sm font-light ">
         
          <?php include("recup_services.php"); ?>
         
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
