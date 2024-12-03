<ul class="profile-icon">
    <li onclick="showSidebar()">
        <img src="../assets/img/profile-icon.svg" alt="Ícone de perfil" />
    </li>
</ul>

<ul class="sidebar" id="userInfoSidebar">
    <li onclick="closeSidebar()">
        <img src="../assets/img/profile-icon.svg" alt="Ícone de perfil" />
    </li>
    <li>
        <h2> <?php echo $_SESSION["usuario"] ?></h2>
    </li>
    <li>
        <a href="#" onclick="loadUserInfo()">Minhas Informações</a>
    </li>
    <li id="userInfo">
    </li>
    <!-- <li><a href="#">Editar Perfil</a></li> -->
     <li>
        <a href="../controls/logout" class="btn-logout">Sair</a>
    </li>

</ul>

<script>
    function loadUserInfo() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../controls/info_user.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var userInfo = xhr.responseText;
                document.getElementById("userInfo").innerHTML = userInfo;
            }
        };
        xhr.send();
    }
</script>

<script src="../assets/js/sidebar.js"></script>