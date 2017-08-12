<h1>Administrer la page présentation</h1>

<p>
    <a href="?p=admin.memberships.add" class="btn btn-success">Ajouter</a>
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
        <?php foreach($Membership as $Membership): ?>
        <tr>
            <td><?= $Membership->id; ?></td>
            <td><?= $Membership->title; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.presentations.edit&id=<?= $Membership->id; ?>">Editer</a>
                <form action="?p=admin.memberships.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $Membership->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>      
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

