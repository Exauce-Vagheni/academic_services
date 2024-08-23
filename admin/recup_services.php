<?php 
include("../connect.php");
         $req=$connexion->query("SELECT * FROM services");
			while($res=$req->fetch()) {
                ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left whitespace-nowrap"><?php echo $res['id'] ?></td>
            <td class="py-3 px-6 text-left whitespace-nowrap"><?php echo $res['designation'] ?></td>
            <td class="py-3 px-6 text-left whitespace-nowrap"><?php echo $res['description'] ?></td>
            
            <td class="py-3 px-6 text-center"><a href="fichiers/<?php echo $res['exemplaire'] ?>"style="text-indigo-600 hover:text-indigo-900 mr-2">Lire</a></td>
            <td class="py-3 px-6 text-center">
              <div class="flex justify-center items-center">
                <a class="text-indigo-600 hover:text-indigo-900 mr-2" href="modif.php?id=<?php echo $res['id'] ?>&designation=<?php echo $res['designation'] ?>&description=<?php echo $res['description'] ?>">Modifier</a>
                <a  class="text-red-600 hover:text-red-900" href="delete_service.php?id=<?php echo $res['id'] ?>">Supprimer</a>
              </div>
            </td>
          </tr>
                <?php
            }

?>