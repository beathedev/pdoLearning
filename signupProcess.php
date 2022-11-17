<?php
if (isset($_POST['save'])) {
    require_once("signupConfig.php");
    $sc = new signupConfig();

    $sc->setfirstName($_POST['firstname']);
    $sc->setlastName($_POST['lastname']);
    $sc->setAddress($_POST['address']);
    $sc->insertData();
    echo "<script>alert('data saved successfully');document.location='index.php'</script>";

    
}
?>