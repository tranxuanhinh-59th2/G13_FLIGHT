<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.4-web/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        
        <header class="top">
            <div class="header-left">
                <a class="typography-logo" href="">
                    <svg viewBox="0 0 24 24" class="icon-logo" focusable="false" aria-hidden="true">
                        <path d="M22 11.5c0-1-.2-1.9-.6-2.8-1.4-4.2-5.6-7-10-6.8h-.1c-1.7.2-3.4.7-4.9 1.8-4.6 3-5.8 9.2-2.8 13.9v.1c.2.2.3.6.6.8l.1.1c1.9 2.2 4.7 3.6 7.7 3.6h8.7c.8 0 1.3-.6 1.3-1.3v-9.4z"></path>
                        <path fill="#FFF" d="M16.9 16.8c-.7.9-1.7 1.4-2.8 1.5-.5 0-1-.1-1.4-.5-.3-.3-.5-.8-.4-1.2 0-.2 0-.4.1-.6 0-.2.1-.5.2-.8l1-3.8c-.2.3-.4.5-.6.8-.9 1.8-1.7 3.7-2.4 5.6 0 .1-.1.3-.2.4h-.1c-.1.1-.3.2-.5.2s-.4-.1-.5-.2c-.3-.2-.4-.4-.5-.6-.1-.3-.2-.5-.2-.8s0-.5.1-.8l2.5-9.9c0-.1.1-.2.2-.2l1.7-.5h.1c.1 0 .1.1.1.2l-3.1 12v.2c0-.1.1-.2.2-.5l.3-.9c.2-.7.5-1.4.7-2s.5-1.3.8-1.9c.3-.6.6-1.1 1.1-1.6.1-.1.2-.2.3-.2v-.1s0-.1.1-.1v-.1h.2c.3 0 .5.1.7.3.2.3.2.6.2.9 0 .4-.1.8-.2 1.2l-.3 3.2c-.1.4-.1.8-.1 1.2.1.2.3.3.8.2.7-.2 1.3-.5 1.8-.9.1 0 .2.2.1.3z"></path>
                    </svg>
                </a>

            </div>
            <div class="header-between">
                <div class="header-between-menu" role="tablist">
                    <ul class="nav justify-content-center ">

                        <li class="nav-item">

                            <a class="nav-bangtin" aria-current="page" href="#"><i class="fas fa-newspaper"></i>Bảng tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-tour" href="#"><i class="fab fa-fly"></i>Trải nghiệm</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-tour" href="#"><i class="fas fa-map-marked-alt"></i>Tour</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-khachsan" href="#"><i class="fas fa-building"></i>Khách sạn</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-ve" href="#"><i class="fas fa-plane-departure"></i>vé máy bay</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-thuexe" href="#"><i class="fas fa-car"></i>Cho thuê xe</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-shopping" href="#"><i class="fas fa-shopping-bag"></i>Mua sắm</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="header-right">
                <ul class="menu-right">
                    <li class="nav-item" data-bs-placement="bottom" title="Giỏ hàng">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item" data-bs-placement="bottom" title="Tài khoản thanh toán">
                        <a class="nav-link" href="#"><i class="fas fa-id-card"></i></a>
                    </li>
                    <li class="nav-item" data-bs-placement="bottom" title="Messenger">
                        <a class="nav-link" href="#"><i class="far fa-comment"></i></a>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-user-circle"></i>
                    </li>
                </ul>

            </div>
        </header>

        <nav id="content">
            <div class="content-header">
                <div class="text-left">
                    <b>
                        <h5>Tìm kiếm chuyến bay cho hành trình của bạn!</h5>
                    </b>
                </div>
                <div class="text-right">
                    <button class="seat-lookupd" type="botton">Tra cứu đặt chỗ</button>
                </div>
            </div>

            <div class="content-center">
                <div class="content-center-top">
                    <div class="content-center-block">
                        <div class="content-center-top-left">
                            <button class="btn-btn-primary" type="button">Một Chiều</button>
                            <button class="btn-btn-primary" type="button">Khứ Hồi</button>
                            <button class="btn-btn-primary" type="button">Nhiều Chặng</button>
                        </div>
                        <div class="content-center-mid">
                            <span></span>
                        </div>
                        <div class="content-center-top-dow">
                            <div class="flightsearch">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="lable-address">Điểm khởi hành</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane-departure"></i></span>
                                                <input type="text" class="form-control" placeholder="Nhập địa điểm" aria-label="Nhập điểm điến" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="lable-address">Điểm đến</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane-arrival"></i></span>
                                                <input type="text" class="form-control" placeholder="Nhập địa điểm" aria-label="Nhập điểm điến" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="lable-address">Ngày đi</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                                                <input type="text" class="form-control" placeholder="Ngày đi" aria-label="Nhập điểm điến" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="lable-address">Số hành khách</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-friends"></i></span>
                                                <input type="text" class="form-control" value="1 người lớn, 0 trẻ em, 0 em bé" aria-label="Nhập điểm điến" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="check-seach">
                                <button class="btn-check-seach" type="button">Tìm kiếm</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="content-bottom">
                <div class="block-bottom">
                    <div class="img-left">
                        <img src="" alt="">
                    </div>
                    <div class="contacst">
                        <span>
                            <h4>Tổng đài chăm sóc khách hàng</h4>
                            <a href="#">1900571248</a>
                        </span>
                    </div>
                    <div class="care-account">
                        <span>
                            <h4>Tài khoản trung tâm chăm sóc khách hàng</h4>
                            <a href="#">https://www.hahalolo.com/@chamsockhachhang</a>
                        </span>
                    </div>
                </div>
            </div>

            
        </nav>

        <footer class="footer">
             <div class="content-footer">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="assets/images/images.jpg" class="card-img-top" alt="no img">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn"> <b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="assets/images/images (2).jpg" class="card-img-top" alt="no img">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>