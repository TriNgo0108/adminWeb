<!-- Can change a function-->
<nav class="navbar-sidebar col-3 col-sm-3 col-md-3 col-lg-3">
    <ul class="navbar-nav">
        <li class="nav-item img-bg">
            <a href="/adminWE/dashboard">
                <img class="img-fluid" src="http://localhost/adminWE/img/admin-logo.png" alt="logo">
            </a>
        </li>
        <?php
        $requestPage = $_SERVER['REQUEST_URI'];
        switch ($requestPage) {
            case (preg_match('/\/adminWE\/dashboard/', $requestPage) ? true : false): ?>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link active" href="/adminWE/dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/add">
                        <i class="fas fa-puzzle-piece"></i>
                        Thêm sản phẩm</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-wrench"></i>
                        Chỉnh sửa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/edit/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/figure">Figure</a>
                        </li>
                        <li class>
                            <a class="nav-link" href="/adminWE/edit/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/manga">Manga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-trash-alt"></i>
                        Xóa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/delete/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/figure">Figure</a>
                        </li>
                        <li class>
                            <a class="nav-link" href="/adminWE/delete/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/manga">Manga</a>
                        </li>
                    </ul>
                </li>
            <?php break;
            case (preg_match('/\/adminWE\/add/', $requestPage) ? true : false): ?>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link active" href="/adminWE/add">
                        <i class="fas fa-puzzle-piece"></i>
                        Thêm sản phẩm</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-wrench"></i>
                        Chỉnh sửa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/edit/game">Game</a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="/adminWE/edit/figure">Figure</a>
                        </li>
                        <li class>
                            <a class="nav-link" href="/adminWE/edit/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/manga">Manga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-trash-alt"></i>
                        Xóa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/delete/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/figure">Figure</a>
                        </li>
                        <li class>
                            <a class="nav-link" href="/adminWE/delete/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/Manga">Manga</a>
                        </li>
                    </ul>
                </li>
            <?php break;
            case (preg_match('/\/adminWE\/edit/', $requestPage) ? true : false): ?>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/add">
                        <i class="fas fa-puzzle-piece"></i>
                        Thêm sản phẩm</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-wrench"></i>
                        Chỉnh sửa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/edit/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/figure">Figure</a>
                        </li>
                        <li class>
                            <a class="nav-link" href="/adminWE/edit/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/manga">Manga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-trash-alt"></i>
                        Xóa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/delete/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/figure">Figure</a>
                        </li>
                        <li class>
                            <a class="nav-link" href="/adminWE/delete/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/Manga">Manga</a>
                        </li>
                    </ul>
                </li>
            <?php break;
            case (preg_match('/\/adminWE\/delete/', $requestPage) ? true : false): ?>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/add">
                        <i class="fas fa-puzzle-piece"></i>
                        Thêm sản phẩm</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-wrench"></i>
                        Chỉnh sửa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/edit/game">Game</a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="/adminWE/edit/figure">Figure</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/manga">Manga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-trash-alt"></i>
                        Xóa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/delete/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/figure">Figure</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/Manga">Manga</a>
                        </li>
                    </ul>
                </li>
            <?php break;
            case (preg_match('/\/adminWE\/user/', $requestPage) ? true : false): ?>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/add">
                        <i class="fas fa-puzzle-piece"></i>
                        Thêm sản phẩm</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-wrench"></i>
                        Chỉnh sửa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/edit/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/figure">Figure</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/manga">Manga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-trash-alt"></i>
                        Xóa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/delete/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/figure">Figure</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/Manga">Manga</a>
                        </li>
                    </ul>
                </li>
            <?php break;
            default:
            ?>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        Tổng quan</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link" href="/adminWE/add">
                        <i class="fas fa-puzzle-piece"></i>
                        Thêm sản phẩm</a>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-wrench"></i>
                        Chỉnh sửa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/edit/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/figure">Figure</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/edit/manga">Manga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-2 mb-2">
                    <a class="nav-link js-arrow" href="">
                        <i class="fas fa-trash-alt"></i>
                        Xóa sản phẩm
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a class="nav-link" href="/adminWE/delete/game">Game</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/figure">Figure</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/dvd">DVD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/adminWE/delete/Manga">Manga</a>
                        </li>
                    </ul>
                </li>

        <?php } ?>
    </ul>
</nav>