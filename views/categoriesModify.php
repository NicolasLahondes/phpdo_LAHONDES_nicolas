<div class="container">
    <form action="index.php?action=categories" method="post">
        <div>
            <h4>Vous modifiez <?php echo $categories->getTitle(); ?></h4>
        </div>
        <div>
            <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?php echo $categories->getId(); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="<?php echo $categories->getTitle(); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="description" aria-describedby="description" name="description" value="<?php echo $categories->getDescription(); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="picture" aria-describedby="picture" name="picture" value="<?php echo $categories->getPicture(); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>