 <?php
    $sql = "SELECT * FROM site WHERE status = '2';";
    $res = mysqli_query($conn, $sql);
    $registros = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);

    if($row > 0){
    ?>


 <div class="imagem">
     <img src="./app/upload_web/<?php echo $row['imagem_patch']; ?>" alt="Imagem do Salao de Beleza">
 </div>
 <div class="texto">
     <p><?php echo $row['title']; ?>
     <p><strong><?php echo $row['theme']; ?></strong><br>
         <?php echo $row['description']; ?><br>

 </div>

 <?php
    }
    ?>