<?php foreach ($submenu as $item): ?>
    <li>
        <a class="dropdown-item" href="#" onclick="getItem('<?php echo $item->subid; ?>')"
                        ondblclick="addSubMenu('<?php echo $item->subid; ?>')">
            <?php echo $item->title; ?>
            <ul class="dropdown-menu" id="submeNu<?php echo $item->subid; ?>" aria-labelledby="navbarDropdown">
                        </ul>
        </a>
    </li>
<?php endforeach; ?>