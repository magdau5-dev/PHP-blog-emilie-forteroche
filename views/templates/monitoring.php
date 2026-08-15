<?php
/**
 * Ce template affiche la page de monitoring du blog.
 */
?>

<h2>Monitoring du blog</h2>

<table class="monitoringTable">
    <thead>
        <tr>
            <th>
                <a href="index.php?action=monitoring&sort=title&order=<?= ($sort === 'title' && $order === 'asc') ? 'desc' : 'asc' ?>">
                    Titre
                    <?= $sort === 'title'
                        ? ($order === 'asc' ? '↑' : '↓')
                        : '↕'
                    ?>
                </a>
            </th>

            <th>
                <a href="index.php?action=monitoring&sort=views&order=<?= ($sort === 'views' && $order === 'asc') ? 'desc' : 'asc' ?>">
                    Nombre de vues
                    <?= $sort === 'views'
                        ? ($order === 'asc' ? '↑' : '↓')
                        : '↕'
                    ?>
                </a>
            </th>

            <th>
                <a href="index.php?action=monitoring&sort=comments&order=<?= ($sort === 'comments' && $order === 'asc') ? 'desc' : 'asc' ?>">
                    Nombre de commentaires
                    <?= $sort === 'comments'
                        ? ($order === 'asc' ? '↑' : '↓')
                        : '↕'
                    ?>
                </a>
            </th>

            <th>
                <a href="index.php?action=monitoring&sort=date&order=<?= ($sort === 'date' && $order === 'asc') ? 'desc' : 'asc' ?>">
                    Date de publication
                    <?= $sort === 'date'
                        ? ($order === 'asc' ? '↑' : '↓')
                        : '↕'
                    ?>
                </a>
            </th>
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