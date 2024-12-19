<?php
    require('menu.php');
?>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" href="?page=<?php echo $menu['Dashboard']['page']; ?>"><?php echo $menu['Dashboard']['name'];?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=<?php echo $menu['Users']['page']; ?>"><?php echo $menu['Users']['name'];?></a>
    </li>
    </ul>
    <ul class="navbar-nav d-flex">
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Wyloguj</a>
    </li>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php foreach ($menu as $element): ?>
        <?php if (isset($element['actions']) && is_array($element['actions'])): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="?page=<?php echo $element['page']; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo $element['name']; ?> </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($element['actions'] as $action): ?>
                            <li>
                            <a class="dropdown-item" href="?page=<?php echo $element['page']; ?>&action=<?php echo $action['action']; ?>">Action</a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else: ?>
            <li class="nav-item">
                <a class="nav-link active" href="?page=<?php echo $element['page']; ?>"><?php echo $element['name']; ?></a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
