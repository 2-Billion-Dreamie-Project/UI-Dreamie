<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
</head>
<body>
    <header>
        <?php include 'header.html' ?> 
    </header>

    <article>
        <section class="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="product.php">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chuột máy tính</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="product-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-page-left">
                            <div class="cate-left">
                                <div class="cate-left-title">
                                    <h4>
                                        <a>danh mục sản phẩm</a>
                                    </h4>
                                </div>

                                <div id="productCate">
                                    <a class="list-cate-title" data-toggle="collapse" href="#cate-left-1" role="button" aria-expanded="true" aria-controls="cate-left-1">
                                        Chuột máy tính
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>

                                    <div class="collapse" id="cate-left-1" data-parent="#productCate">
                                        <div class="card card-body list-cate">
                                            <ul>
                                                <li>
                                                    <a href="product.php"><i class="fa fa-minus" aria-hidden="true"></i> Razer</a>
                                                </li>

                                                <li>
                                                    <a href="product.php"><i class="fa fa-minus" aria-hidden="true"></i> Steelseries</a>
                                                </li>

                                                <li>
                                                    <a href="product.php"><i class="fa fa-minus" aria-hidden="true"></i> Logitech</a>
                                                </li>

                                                <li>
                                                    <a href="product.php"><i class="fa fa-minus" aria-hidden="true"></i> Zowie</a>
                                                </li>

                                                <li>
                                                    <a href="product.php"><i class="fa fa-minus" aria-hidden="true"></i> Microsoft</a>
                                                </li>

                                                <li>
                                                    <a href="product.php"><i class="fa fa-minus" aria-hidden="true"></i> Alienware</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <a class="list-cate-title" data-toggle="collapse" href="#cate-left-2" role="button" aria-expanded="true" aria-controls="cate-left-2">
                                        Bàn phím
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>

                                    <div class="collapse" id="cate-left-2" data-parent="#productCate">
                                        <div class="card card-body list-cate">
                                            abc234
                                        </div>
                                    </div>


                                    <a class="list-cate-title" data-toggle="collapse" href="#cate-left-3" role="button" aria-expanded="true" aria-controls="cate-left-3">
                                        Tai nghe
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>

                                    <div class="collapse" id="cate-left-3" data-parent="#productCate">
                                        <div class="card card-body list-cate">
                                            abc234234
                                        </div>
                                    </div>


                                    <a class="list-cate-title" data-toggle="collapse" href="#cate-left-4" role="button" aria-expanded="true" aria-controls="cate-left-4">
                                        Bàn di chuột
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>

                                    <a class="list-cate-title" data-toggle="collapse" href="#cate-left-5" role="button" aria-expanded="true" aria-controls="cate-left-5">
                                        Ghế gaming
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>

                                    <a class="list-cate-title" data-toggle="collapse" href="#cate-left-6" role="button" aria-expanded="true" aria-controls="cate-left-6">
                                        Tay cầm
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>

                            <div class="cate-left">
                                <div class="cate-left-title">
                                    <h4>
                                        <a>lọc theo giá</a>
                                    </h4>
                                </div>

                                <div class="filter-price">
                                    <input type="range" min="0" max="1000" value="0">
                                    <input type="range" min="1000" max="10000" value="10000">

                                    <p>
                                        <span>0 đ</span> - <span>1.000.000 đ</span>
                                    </p>

                                    <button type="submit">Lọc</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <footer>
        <?php include 'footer.html' ?> 
    </footer>
</body>
</html>