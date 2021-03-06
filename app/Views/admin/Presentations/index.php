<h1>Administrer la page présentation</h1>

<p>
    <a href="?p=admin.presentations.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($Presentations as $action): ?>
        <tr>
            <td><?= $action->id; ?></td>
            <td><?= $action->title; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.presentations.edit&id=<?= $action->id; ?>">Editer</a>
                <form action="?p=admin.presentations.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $action->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>      
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

