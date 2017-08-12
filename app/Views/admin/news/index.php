<h1>Administrer les articles</h1>

<p>
    <a href="?p=admin.news.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($news as $news): ?>
        <tr>
            <td><?= $news->id; ?></td>
            <td><?= $news->title; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.news.edit&id=<?= $news->id; ?>">Editer</a>
                <form action="?p=admin.news.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $news->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>