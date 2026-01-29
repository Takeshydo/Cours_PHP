<?php

require_once "../config/db.php";
require_once "../src/entities/tache.php";
require_once "../src/managers/tacheManagers.php";


$managers = new  tacheManagers($db);

$tacheAll = $managers->getAll();

if(!empty($_POST['content'])){

    $description = $_POST['content'];

    $NewTache = new Tache();
    $NewTache->setDescription($description);

    $managers->add($NewTache);
    header("location: index.php");
    exit;
}
?>
<form method="POST">
    <input type="text" name="content" placeholder="Ma tache" required>
    <button type="submit"> Envoyé </button>
</form>
<div>
    <?php foreach ($tacheAll as $tacheOne) { ?>
    <li>
        <span><?= htmlspecialchars($tacheOne->getDescription());?></span>
    </li>
    <?php } ?>
</div>
