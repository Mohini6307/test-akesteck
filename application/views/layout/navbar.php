<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($menu as $row): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="javascript:void(0);"  data-bs-toggle="dropdown" aria-expanded="false"
                            aria-current="page" onclick="getItem('<?php echo $row->id; ?>')"
                            ondblclick="addSubMenu('<?php echo $row->id; ?>')">
                            <?php echo $row->menu_item; ?>
                        </a>
                        <ul class="dropdown-menu" id="submeNu<?php echo $row->id; ?>" aria-labelledby="navbarDropdown">
                        </ul>

                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="d-flex">
                <button class="btn btn-sm btn-success" onclick="addMenu()">Add Menu</button>
            </div>
        </div>
    </div>
</nav>