<?php
/**
 * @var array $elements
 * @var string $title
 */
?>

<h1 class="title"><?= $title ?></h1>

<a href="<?= base_url('create-user') ?>" class="btn btn-blue">
    <span>Neu anlegen</span>
</a>

<table class="default-table">
    <thead>
        <tr>
            <th scope="col">Benutzername</th>
            <th scope="col">Administrator</th>
            <th scope="col">Angelegt am</th>
            <th scope="col">Aktualisiert am</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($elements as $element) : ?>
            <tr>
                <td><?= $element['username'] ?></td>
                <td><?= $element['administrator'] ? 'Ja' : 'Nein' ?></td>
                <td><?= format_timestamp($element['created']) ?></td>
                <td><?= format_timestamp($element['updated']) ?></td>
                <td class="table-actions">
                    <a href="<?= base_url('show-user/' . $element['id']) ?>" class="btn btn-blue">
                        <span>Details</span>
                    </a>

                    <a href="<?= base_url('update-user/' . $element['id']) ?>" class="btn btn-green">
                        <span>Bearbeiten</span>
                    </a>

                    <a href="javascript:void(0)" class="btn btn-red">
                        <span>Löschen</span>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>