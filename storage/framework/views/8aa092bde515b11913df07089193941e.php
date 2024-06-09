<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">MBatik Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='<?php echo e(Request::is('dashboard-general-dashboard') ? 'active' : ''); ?>'>
                        <a class="nav-link" href="<?php echo e(url('dashboard-general-dashboard')); ?>">General Dashboard</a>
                    </li>

                </ul>
            </li>


            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('user.index')); ?>">All Users</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('category.index')); ?>">All Category</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('product.index')); ?>">All Product</a>
                    </li>

                </ul>
            </li>

    </aside>
</div>
<?php /**PATH /Users/abdulaziz/MyProjects/tubes/laravel-onlineshop-backend/resources/views/components/sidebar.blade.php ENDPATH**/ ?>
