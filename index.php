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

                            <a class="nav-icon" aria-current="page" href="#">
                                <div class="icon"><i class="fas fa-newspaper"></i></div>Bảng tin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-icon" href="#">
                                <div class="icon"><i class="fab fa-fly"></i></div>Trải nghiệm
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-icon" href="#">
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div>Tour
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-icon" href="#">
                                <div class="icon"><i class="fas fa-building"></i></div> Khách sạn
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-icon" href="#">
                                <div class="icon"><i class="fas fa-plane-departure"></i></div>vé máy bay
                            </a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-icon" href="#">
                                <div class="icon"><i class="fas fa-car"></i></div>Cho thuê xe
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-icon" href="#">
                                <div class="icon"><i class="fas fa-shopping-bag"></i></div>Mua sắm
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="header-right">
                <ul class="menu-right">
                    <li class="nav-item" data-bs-placement="bottom" title="Giỏ hàng">
                        <a class="nav-link active" aria-current="page" href="#">
                            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-placement="bottom" title="Tài khoản thanh toán">
                        <a class="nav-link" href="#">
                            <div class="icon"><i class="fas fa-id-card"></i></div>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-placement="bottom" title="Messenger">
                        <a class="nav-link" href="#">
                            <div class="icon"><i class="far fa-comment"></i></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class = "icon-user" href="admin/login.php">
                            <div class="icon-user"><i class="fas fa-user-circle"></i></div>
                        </a>
                    </li>
                </ul>

            </div>
        </header>

        <nav class="content">
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
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                    Một Chiều
                                </button>
                            </p>
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                    Khứ Hồi
                                </button>
                            </p>
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                    Nhiều Chặng
                                </button>
                            </p>

                            <div style="min-height: 90px;margin-bottom: 15px;">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                    <div class="card card-body" style="width: 100%;">
                                        <div class="flightsearch">
                                            <div class="row align-items-start">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput" class="lable-address">Điểm khởi hành</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane-departure"></i></span>
                                                            <!-- <input type="text" class="form-control" placeholder="Nhập địa điểm" aria-label="Nhập điểm điến" aria-describedby="basic-addon1"> -->
                                                            <select name="diemdi"id="inputClass"  class="form-select idsub">
                                                                <option ></option>                                                                   
                                                                    <?php
                                                                        //Truy vấn CSDL với PHP: 3 cách (mysqli_ thủ tục, mysqli_ oop, PDO)
                                                                        //Bước 01: Kết nối tới Server
                                                                        $conn = mysqli_connect('localhost','root','','banvemaybay');
                                                                        if(!$conn){
                                                                            die("Không thể kết nối");
                                                                        }
                                                                        //Bước 02: Định nghĩa và thực hiện truy vấn
                                                                        //Chỉ muốn 3 bản ghi mới nhất > Theo các bạn, sửa thế nào?
                                                                        $sql = "SELECT * FROM db_chuyenbay ";
                                                                        $result = mysqli_query($conn,$sql);
                                                                        //Bước 03: Xử lý Dữ liệu trả về
                                                                        if(mysqli_num_rows($result) > 0){
                                                                            //Lặp để lấy về từng bản ghi thông qua phương thức: mysqli_fetch_assoc
                                                                            while($row = mysqli_fetch_assoc($result)){
                                                                            $id = $row['ma_chuyen_bay'];
                                                                            $dxp = $row['diem_xuat_phat'];
                                                                            $dd = $row['diem_den'];
                                                                            $time = $row['thoi_gian'];
                                                                            $gia = $row['gia_ve'];
                                                                    ?>               
                                                                            <option value="<?php echo  $dxp ?>"><?php echo $dxp  ?></option>                                                                          
                                                                    <?php
                                                                            }
                                                                        }
                                                                    
                                                                    ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3" method="POST">
                                                        <label for="formGroupExampleInput" class="lable-address">Điểm đến</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane-arrival"></i></span>
                                                            <select name="diemden"id="inputClass"  class="form-select idsub">
                                                                <option ></option>                                                                   
                                                                    <?php
                                                                        //Truy vấn CSDL với PHP: 3 cách (mysqli_ thủ tục, mysqli_ oop, PDO)
                                                                        //Bước 01: Kết nối tới Server
                                                                        $conn = mysqli_connect('localhost','root','','banvemaybay');
                                                                        if(!$conn){
                                                                            die("Không thể kết nối");
                                                                        }
                                                                        //Bước 02: Định nghĩa và thực hiện truy vấn
                                                                        //Chỉ muốn 3 bản ghi mới nhất > Theo các bạn, sửa thế nào?
                                                                        $sql = "SELECT * FROM db_chuyenbay ";
                                                                        $result = mysqli_query($conn,$sql);
                                                                        //Bước 03: Xử lý Dữ liệu trả về
                                                                        if(mysqli_num_rows($result) > 0){
                                                                            //Lặp để lấy về từng bản ghi thông qua phương thức: mysqli_fetch_assoc
                                                                            while($row = mysqli_fetch_assoc($result)){
                                                                            $id = $row['ma_chuyen_bay'];
                                                                            $dxp = $row['diem_xuat_phat'];
                                                                            $dd = $row['diem_den'];
                                                                            $time = $row['thoi_gian'];
                                                                            $gia = $row['gia_ve'];
                                                                    ?>               
                                                                            <option value="<?php echo  $dd ?>"><?php echo $dd  ?></option>                                                                          
                                                                    <?php
                                                                            }
                                                                        }
                                                                    
                                                                    ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3" method="POST">
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
                            <div class="content-bottom">
                                <div class="block-bottom">
                                    <div class="img-left">
                                        <img src="assets/images/tongdai.png" alt="no img">
                                    </div>
                                        <div class="contacst">
                                            <span>
                                                <h4>Tổng đài CSKH</h4>
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
                            </div>
                        </div>
                       


                </div>
            </div>
               
        </nav>

        <!-- <footer class="footer">
            <div class="content-footer">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100" style="width:100%;">
                            <div class="img-infor">
                                <img src="assets/images/images.jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>BAMBOO AIRWAYS GIẢM TỚI 70% GIÁ VÉ CHO CÁC ĐƯỜNG BAY</b></h6>
                                <p class="card-text">Chẳng còn phải quá đắn đo với những kế hoạch ngày xuân khi đã có Bamboo Airways với ưu đãi ngay vào dịp Tết này! Chỉ cần đặt vé cho nhóm từ 02 người, bạn sẽ được giảm ngay 25% cho giá vé bay, lại được nhận ưu đãi đổi tên miễn phí (*) cực tâm lí nữa. Đi chơi xa hay về nhà cũng đừng bỏ qua “lì xì” bay Tết nhà Tre nhé!</p>
                                <a href="#" class="btn"> <b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (2).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>TẾT NÀY BAY AN TOÀN CÙNG VIETJET THÔI!</b></h6>
                                <p class="card-text">Với mong muốn được cùng tất cả hành khách chở Tết Nhâm Dần về nhà và kết nối hương vị Xuân phương xa, Vietravel Airlines chính thức mở bán hàng nghìn vé ưu đãi với giá chỉ từ 518k (chưa bao gồm thuế, phí) trên tất cả các đường bay nội địa hãng đang khai thác.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>MUA VÉ ĐI TẶNG VÉ VỀ - BAY CÔN ĐẢO SAY MÊ CÙNG NHÀ TRE</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>BAMBOO AIRWAYS GIẢM TỚI 70% GIÁ VÉ CHO CÁC ĐƯỜNG BAY</b></h6>
                                <p class="card-text">Chẳng còn phải quá đắn đo với những kế hoạch ngày xuân khi đã có Bamboo Airways với ưu đãi ngay vào dịp Tết này! Chỉ cần đặt vé cho nhóm từ 02 người, bạn sẽ được giảm ngay 25% cho giá vé bay, lại được nhận ưu đãi đổi tên miễn phí (*) cực tâm lí nữa. Đi chơi xa hay về nhà cũng đừng bỏ qua “lì xì” bay Tết nhà Tre nhé!</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>MUA VÉ ĐI TẶNG VÉ VỀ - BAY CÔN ĐẢO SAY MÊ CÙNG NHÀ TRE</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>CHỞ MAI ĐÀO TRÊN NHỮNG CHUYẾN BAY XUÂN</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>CÙNG VIETRAVEL AIRLINES XUÂN CHỌN ĐOÀN VIÊN, TẾT THÊM SUNG TÚC</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>HAHALOLO TUYỂN ĐẠI LÝ VÉ MÁY BAY CẤP 2 TRÊN TOÀN QUỐC.</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>HƯỚNG DẪN BAY AN TOÀN DÀNH CHO KHÁCH BAY NỘI ĐỊA</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width:100%;">
                            <div class="img-infor">
                                <img src="assets/images/images.jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>BAMBOO AIRWAYS GIẢM TỚI 70% GIÁ VÉ CHO CÁC ĐƯỜNG BAY</b></h6>
                                <p class="card-text">Chẳng còn phải quá đắn đo với những kế hoạch ngày xuân khi đã có Bamboo Airways với ưu đãi ngay vào dịp Tết này! Chỉ cần đặt vé cho nhóm từ 02 người, bạn sẽ được giảm ngay 25% cho giá vé bay, lại được nhận ưu đãi đổi tên miễn phí (*) cực tâm lí nữa. Đi chơi xa hay về nhà cũng đừng bỏ qua “lì xì” bay Tết nhà Tre nhé!</p>
                                <a href="#" class="btn"> <b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (2).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>TẾT NÀY BAY AN TOÀN CÙNG VIETJET THÔI!</b></h6>
                                <p class="card-text">Với mong muốn được cùng tất cả hành khách chở Tết Nhâm Dần về nhà và kết nối hương vị Xuân phương xa, Vietravel Airlines chính thức mở bán hàng nghìn vé ưu đãi với giá chỉ từ 518k (chưa bao gồm thuế, phí) trên tất cả các đường bay nội địa hãng đang khai thác.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>MUA VÉ ĐI TẶNG VÉ VỀ - BAY CÔN ĐẢO SAY MÊ CÙNG NHÀ TRE</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>BAMBOO AIRWAYS GIẢM TỚI 70% GIÁ VÉ CHO CÁC ĐƯỜNG BAY</b></h6>
                                <p class="card-text">Chẳng còn phải quá đắn đo với những kế hoạch ngày xuân khi đã có Bamboo Airways với ưu đãi ngay vào dịp Tết này! Chỉ cần đặt vé cho nhóm từ 02 người, bạn sẽ được giảm ngay 25% cho giá vé bay, lại được nhận ưu đãi đổi tên miễn phí (*) cực tâm lí nữa. Đi chơi xa hay về nhà cũng đừng bỏ qua “lì xì” bay Tết nhà Tre nhé!</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>MUA VÉ ĐI TẶNG VÉ VỀ - BAY CÔN ĐẢO SAY MÊ CÙNG NHÀ TRE</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>CHỞ MAI ĐÀO TRÊN NHỮNG CHUYẾN BAY XUÂN</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>CÙNG VIETRAVEL AIRLINES XUÂN CHỌN ĐOÀN VIÊN, TẾT THÊM SUNG TÚC</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>HAHALOLO TUYỂN ĐẠI LÝ VÉ MÁY BAY CẤP 2 TRÊN TOÀN QUỐC.</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img-infor">
                                <img src="assets/images/images (1).jpg" class="card-img-top" alt="no img">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><b>HƯỚNG DẪN BAY AN TOÀN DÀNH CHO KHÁCH BAY NỘI ĐỊA</b></h6>
                                <p class="card-text">Nhu cầu di chuyển cuối năm của hành khách đang có sức tăng rất lớn. Theo đó, Bamboo Airways khởi chạy chương trình khuyến mãi dành cho một số đường bay hot dịp cuối năm. Với chương trình ưu đãi của Bamboo Airways, hành khách sẽ có thêm lựa chọn để trải nghiệm dịch vụ hàng không chất lượng cao với chi phí hợp lý.</p>
                                <a href="#" class="btn"><b>Chi tiết</b></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>  -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>