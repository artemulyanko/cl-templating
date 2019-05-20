<div class="sidenav">
    <?php foreach ($context['sidebar'] ?? [] as $name => $link): ?>
        <a href="<?= $link ?>"><?= $name ?></a>
    <?php endforeach; ?>
</div>
