<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajout d'un Service</title>
   <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
  
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
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
<body class="bg-gray-100 work-sans leading-normal text-base tracking-normal">
<?php
    include "nav.php";
  ?>
  <div class="container mx-auto px-4 mt-8">
    <h1 class="text-3xl font-bold text-center mb-8">Ajout d'un Service</h1>
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <form method="post" action="" enctype="multipart/form-data">
      		<?php include("save_service.php"); ?>
        <div class="mb-4">
          <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation</label>
          <input type="text"  name="designation" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" placeholder="Entrez la désignation du service" required>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
          <textarea  name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" placeholder="Entrez la description du service" rows="4" required></textarea>
        </div>
        <div class="mb-4">
          <label for="image" class="block text-gray-700 font-semibold mb-2">Exemplaire</label>
          <input type="file"  name="exemplaire" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500"  required>
        </div>
        <div class="flex justify-center">
          <button type="submit" class=" w-full bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-800">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
