<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-americas"></i> <?php echo e($title); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('map')); ?>"><i class="fa-solid fa-map-location"></i> Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('table')); ?>"><i class="fa-solid fa-table"></i> Table</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php /**PATH C:\Users\user\Documents\Kuliah\Semester4\Praktikum\Bahan\PGWEBL\laravel\resources\views/components/navbar.blade.php ENDPATH**/ ?>