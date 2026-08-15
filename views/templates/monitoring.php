<?php
/**
 * Ce template affiche la page de monitoring du blog.
 */
?>

<h2>Monitoring du blog</h2>

<table class="monitoringTable">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Nombre de vues</th>
            <th>Nombre de commentaires</th>
            <th>Date de publication</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?= Utils::format($article->getTitle()) ?></td>
                <td><?= $article->getViews() ?></td>
                <td><?= $article->getCommentCount() ?></td>
                <td><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>