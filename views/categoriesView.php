<body>
    <a href="index.php?action=addCategory"><button>Ajouter une Catégorie</button></a>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Image</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($arrayCategories > 0) :
                    foreach ($arrayCategories as $key => $value) : ?>
                        <tr>
                            <td><?php echo $value->getId(); ?></td>
                            <td><?php echo $value->getTitle(); ?></td>
                            <td><?php echo $value->getDescription(); ?></td>
                            <td><a href="index.php?action=categories&delete=1&id=<?php echo $value->getId() ?>">Supprimer</a></td>
                            <td><img src="<?php echo $value->getPicture(); ?>" style="width: 150px; height: 150px;" alt=""></td>
                            <td><a href="index.php?action=categoriesModify&modified=&id=<?php echo $value->getId() ?>&title=<?php echo $value->getTitle() ?>&description=<?php echo  $value->getDescription() ?>&picture=<?php echo $value->getPicture() ?>">Modifier</a></td>
                        </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>