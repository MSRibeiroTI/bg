<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$sql = "SELECT COUNT(mes) as total, mes, diary.id_proj, projetos.id_user FROM diary
JOIN projetos ON diary.id_proj = projetos.id_proj WHERE diary.id_proj = $id GROUP BY mes order by mes ASC;";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);



if ($registros > 0) {
    while ($row = mysqli_fetch_assoc($res)) :
        $_SESSION["id_proj"] = $row['id_proj'];
        if ($row['id_user'] != $_SESSION["id_user"]) {
            print "<script>location.href='../views/client_project';</script>";
        }else{
?>

        <section class="grid">
            <div class="grid-item">
                <a href="../views/diaryGalleryView?mes=<?php echo $row['mes'] ?>"><?php echo $row['mes']; ?>° MÊS </a>

            </div>

        </section>
        </div>
<?php
        
        }




    endwhile;
}
 
?>