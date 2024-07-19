<div class="container px-0">
    <nav class="navbar navbar-light bg-white navbar-expand-xl">
        <a href="index.html" class="navbar-brand">
            <h1 class="text-primary display-6"><a href="{{ route('index') }}">Fruitables</a> </h1>
        </a>
        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ route('index') }}" class="nav-item nav-link active">Trang chủ</a>
                <a href="{{ route('listdanhsach') }}" class="nav-item nav-link"> Tổng hợp bài viết</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Chuyên mục bài viết
                    </a>
                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                        <a href="cart.html" class="dropdown-item">Category 1</a>
                        <a href="chackout.html" class="dropdown-item">Category 2</a>
                        <a href="testimonial.html" class="dropdown-item">Category 3</a>
                    </div>
                </div>
                <a href="{{ route('lienhe') }}" class="nav-item nav-link">Liên hệ </a>
            </div>
            <div class="d-flex m-3 me-0">
                <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="fas fa-search text-primary"></i></button>
                <a href="#" class="position-relative me-4 my-auto">
                </a>
                <a href="#" class="my-auto">
                    <i class="fas fa-user fa-2x"></i>
                </a>
            </div>
        </div>
    </nav>
</div>
