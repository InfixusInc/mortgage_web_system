<?php
    // require 'DbConnect.php';
	// include('includes/config.php');

    if (isset($_POST['aid'])) {
        $db = new DbConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM years WHERE stands_id = " . $_POST['aid']);
        $stmt->execute();
        $years = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($years);
    }

    function loadStandSize() {
        $db = new DBConnect;
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM standSizes");
        $stmt->execute();
        $stands = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stands;
    }

    ?>
