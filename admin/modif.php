<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajout d'un Service</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<?php
    include "nav.php";
  ?>
  <div class="container mx-auto px-4 mt-8">
    <h1 class="text-3xl font-bold text-center mb-8">Ajout d'un Service</h1>
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <form method="post" action="modif_services.php?id=<?php echo $_GET['id']; ?>">
      		<?php include("modif_services.php"); ?>
        <div class="mb-4">
          <label for="designation" class="block text-gray-700 font-semibold mb-2">Désignation</label>
          <input type="text"  name="designation" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" placeholder="Entrez la désignation du service" required value="<?php echo $_GET['designation']; ?>">
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
          <textarea  name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" placeholder="Entrez la description du service" rows="4" required><?php echo $_GET['description']; ?></textarea>
        </div>
       
        <div class="flex justify-center">
          <button type="submit" class=" w-full bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-800" name="modif">Modifier</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
