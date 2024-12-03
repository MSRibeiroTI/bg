<?php

include('config.php');

$id = $_GET['id'];

if (isset($_POST['title'])) {

    $title = $_POST['title'];
    $theme = $_POST['thema'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE `site` SET `title` = ?, `theme` = ?, `description` = ?, `status` = ? WHERE `site`.`id` = ?");
    $stmt->bind_param("ssssi", $title, $theme, $description, $status, $id);

    if ($stmt->execute()) {

        header('Location: ../views/site_admin');
    } else {

        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    $conn->close();
}
