<?php 
include("connect.php");
         $req=$connexion->query("SELECT * FROM services");
			while($res=$req->fetch()) {
                ?>
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="w-full hover:grow hover:shadow-lg" src="assets/l.jpeg">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-gray-900"><strong><?php echo strtoupper($res['designation']); ?></strong></p>
            
        </div>
    </a>
    <a class="bg-gray-900 hover:bg-gray-400 text-white font-bold text-center py-2 px-4 rounded mt-2" href="admin/fichiers/<?php echo $res['exemplaire'] ?>">Consulter exemplaire</a>
    <form>
    <fieldset style="border:1px solid grey;">
        <legend style="font-weight: bold;" class="text-gray-900">Demander le service</legend>
        <div align="center">
        <a class="text-center text-white font-bold rounded mt-2 " href="https://wa.me/+243811857072?text=*FROM%20ACADEMIC%20SERVICES WEB*:%20%20%20%20Hello%20je%20suis%20interessé par%20l'un%20de%20vos%20services%20présicement%20le%20service%20de%20*<?php echo $res['designation'] ?>*,%20decrit%20comme:%20*<?php echo $res['description'] ?>*,%20pouvez%20vous%20me%20faire%20plus%20de%20modalités%20sur ce%20service%20s'il%20vous%20plaît?"><img src="assets/wt.png" style="width: 11%;display: inline-block;margin:2%;" /></a>
          <a class=" text-center text-white font-bold rounded mt-2 " href="https://m.me/100054933248691?ref=salut"><img src="assets/fb.png" style="width: 11%;display: inline-block;margin-right:2%;" /></a>
            <a class=" text-center text-white font-bold rounded mt-2 " href="mailto:leaders.lels08@gmail.com?subject=Demande de service:%20<?php echo $res['designation'];?>&body=FROM%20ACADEMIC%20SERVICES WEB:%20%20%20%20Hello%20je%20suis%20interessé par%20l'un%20de%20vos%20services%20présicement%20le%20service%20de%20<?php echo $res['designation'] ?>,%20decrit%20comme:%20<?php echo $res['description'] ?>,%20pouvez%20vous%20me%20faire%20plus%20de%20modalités%20sur ce%20service%20s'il%20vous%20plaît?"><img src="assets/gm.png" style="width: 11%;display: inline-block;margin:2%;" /></a>
              <a class=" text-center text-white font-bold rounded mt-2 " href="tel:+243997329508"><img src="assets/ph.png" style="width: 11%;display: inline-block;margin:2%;" /></a>
              </div>
    </fieldset>
    
    </form>
</div>
                <?php
            }

?>