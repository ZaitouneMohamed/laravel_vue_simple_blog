<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="http://127.0.0.1:8000/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="http://127.0.0.1:8000/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <router-link to="/admin" class="d-block">admin</router-link>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <router-link to="/admin/posts" class="nav-link">
                                <i class="fa-solid fa-bookmark"></i>
                                <p>
                                    Posts
                                    <span class="right badge badge-success">5</span>
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <p>
                                    Sub Categoiries
                                    <span class="right badge badge-success">
                                        9
                                    </span>
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa-solid fa-tag"></i>
                                <p>
                                    products
                                    <span class="right badge badge-success">
                                        4
                                    </span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </aside>
    <!-- Sidebar -->
    <!-- /.sidebar -->
</template>

<script>
</script>
