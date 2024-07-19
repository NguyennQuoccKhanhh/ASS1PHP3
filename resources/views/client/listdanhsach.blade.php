@extends('client.layouts.master')

@section('title')
    Danh sách tất cả bài viết
@endsection

@section('content')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Danh sách bài viết</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active text-white">Danh sách bài viết </li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Tìm kiếm bài viết</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="Nhập danh mục..."
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Bộ lọc:</label>
                                <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                    form="fruitform">
                                    <option value="volvo">Danh mục 1</option>
                                    <option value="saab">Danh mục 2</option>
                                    <option value="opel">Danh mục 3</option>
                                    <option value="audi">Danh mục 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                @include('client.layouts.partials.menu-doc')
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="{{ route('chitiet') }}"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/client/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top"
                                                alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Danh mục</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Tiêu đề</h4>
                                            <p>Miêu tả ngắn </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i>Xem chi tiết bài viết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        <a href="#" class="rounded">&laquo;</a>
                                        <a href="#" class="active rounded">1</a>
                                        <a href="#" class="rounded">2</a>
                                        <a href="#" class="rounded">3</a>
                                        <a href="#" class="rounded">4</a>
                                        <a href="#" class="rounded">5</a>
                                        <a href="#" class="rounded">6</a>
                                        <a href="#" class="rounded">&raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->
@endsection