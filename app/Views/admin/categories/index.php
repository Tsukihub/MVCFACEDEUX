<h1>Administrer les catégories</h1>

<p>
    <a href="?p=admin.categories.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">

    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Page liée</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $category): ?>
        <tr class="category">
            <td><?= $category->id; ?></td>
            <td><?= $category->titre; ?></td>
            <?php if($category->contentType=='posts'){
            $contentType = 'Actualités/rendez-vous';
        }else{
            $contentType = 'actions';
        }
            ?>

            <td><?= $contentType ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.categories.edit&id=<?= $category->id; ?>">Editer</a>
                <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $category->id ?>">
                    <?php if (in_array($category->titre, $icansuppress)) :?><button type="submit" class="btn btn-danger">Supprimer</button><?php else : ?>utilisée<?php endif ?>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

