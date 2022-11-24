<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    // include("Layout_KhachHang_Header.php");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Spike shoes Website Template | Home :: w3layouts</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <!----start-alert-scroller---->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo').hide();
            $('.vticker').easyTicker();
        });
    </script>
    <!----start-alert-scroller---->
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    <script src="js/menu_jquery.js"></script>
    <!-- //End menu -->
    <!---slider---->
    <link rel="stylesheet" href="css/slippry.css">
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
    <script>
        jQuery('#jquery-demo').slippry({
            // general elements & wrapper
            slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
            // options
            adaptiveHeight: false, // height of the sliders adapts to current slide
            useCSS: false, // true, false -> fallback to js if no browser support
            autoHover: false,
            transition: 'fade'
        });
    </script>
    <!----start-pricerage-seletion---->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script type='text/javascript'>
        //<![CDATA[ 
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [100, 400],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>  
    </script>
    <!----//End-pricerage-seletion---->
    <!---move-top-top---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1200);
            });
        });
    </script>
    <!---//move-top-top---->

</head>

<body>
    <?php
    include("connection.php");
    ?>

    <!---start-wrap---->
    <!---start-header---->
    <div class="header">
        <div class="top-header" style="padding: 5px 0px;">
            <div class="wrap">
                <div class="top-header-left">
                    <ul>
                        <!---cart-tonggle-script---->
                        <script type="text/javascript">
                            $(function() {
                                var $cart = $('#cart');
                                $('#clickme').click(function(e) {
                                    e.stopPropagation();
                                    if ($cart.is(":hidden")) {
                                        $cart.slideDown("slow");
                                    } else {
                                        $cart.slideUp("slow");
                                    }
                                });
                                $(document.body).click(function() {
                                    if ($cart.not(":hidden")) {
                                        $cart.slideUp("slow");
                                    }
                                });
                            });
                        </script>
                        <!---//cart-tonggle-script---->
                        <li><a class="cart" href="#"><span id="clickme"> </span></a></li>
                        <!---start-cart-bag---->
                        <div id="cart">Your Cart is Empty <span>(0)</span></div>
                        <!---start-cart-bag---->

                    </ul>
                </div>
                <div class="top-header-center">
                    <div class="top-header-center-alert-left">
                        <h3>SHOP GIÀY CHÍNH HÃNG</h3>
                    </div>
                    <div class="top-header-center-alert-right">
                        <div class="vticker">
                            <ul>
                                <li>Cung cấp những mặt hàng tốt nhất!!! <label>Hãy đến với chúng tôi.</label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="top-header-right">
                    <ul>
                    <?php
                            if(isset($_SESSION['email'])){
                            ?>
                                <li class="dropdown o">
                                    <img src="https://img.vn/uploads/thuvien/singa-png-20220719150401Tdj1WAJFQr.png" alt="" srcset="">
                                    <button class="nut_dropdown">Dropdown</button>
                                    <div class="noidung_dropdown">
                                        <a style="color:black;" href="profileKH.php">Xem thông tin</a>
                                        <a style="color:black" href="changepwd.php">Đổi mật khẩu</a>
                                        <a style="color:black" href="logout.php">Đăng xuất</a>
                                    </div>

                                </li>
                            <?php
                           }
                           else{
                            ?>
                            <li><a href="login.php">Login</a><span> </span></li>
                            <li><a href="register.php">Join</a></li>
                           <?php
                           }
                           ?>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
        <?php
            include("connection.php");
            $email = $_SESSION['email'];
            $query = "SELECT * FROM khachhang WHERE Email='$email'";
            $result = mysqli_query($con, $query);
            $row=mysqli_fetch_array($result);
            if (mysqli_num_rows($result) <> 0) {
        ?>
	<form method="post" action="profile_edit_script.php">
		<div class="row col-lg-8 border rounded mx-auto mt-3 p-2 shadow-lg">
			<div class="col-md-4 text-center" style="display: block; justify-content: center; margin-top: auto; margin-bottom: auto;">
			<?php
                    if (!($row['AnhKH'])) {
                ?>
                        <img src="imgKH/user.jpg" class="js-image img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
                <?php
                    } else {
                        $anh = $row['AnhKH'];
                        echo "<img src='imgKH/$anh'  class='js-image img-fluid rounded' style='width: 180px;height:180px;object-fit: cover;'>";
                    }
                ?>
				<div>
					<!-- <div class="mb-3">
					  <label for="formFile" class="form-label" style="font-style: italic; font-size: 12px;">(Nhấn bên dưới để chọn ảnh từ thư viện)</label>
					  <input onchange="display_image(this.files[0])" class="js-image-input form-control" type="file" id="formFile" name="anhkh">
					</div> -->
				</div>
			</div>
			<div class="col-md-8">
				
				<div class="h2" style="font-weight: bold;">CHỈNH SỬA THÔNG TIN</div>

				
					<table class="table table-striped">
                        <tr>
                            <th style="font-weight: bold;"> Họ tên</th>
							<td>
								<input value="<?php if(isset($row['HoTen'])) echo $row['HoTen'];?>" type="text" class="form-control" name="hoten">
							</td>
						</tr>
                        <tr>
                            <th style="font-weight: bold;"> Tên tài khoản</th>
							<td>
								<input value="<?php if(isset($row['TaiKhoan'])) echo $row['TaiKhoan'];?>" type="text" class="form-control" name="taikhoan">
							</td>
						</tr>
						<tr>
                            <th style="font-weight: bold;"> Email</th>
							<td>
								<input value="<?php if(isset($row['Email'])) echo $row['Email'];?>" type="text" class="form-control" name="email" style="background-color: #dedeed;" readonly>
							</td>
                        </tr>
						<tr>
                            <th style="font-weight: bold;"> Địa chỉ</th>
							<td>
								<input value="<?php if(isset($row['DiaChi'])) echo $row['DiaChi'];?>" type="text" class="form-control" name="diachikh">
							</td>
						</tr>
                        <tr>
                            <th style="font-weight: bold;"> Điện thoại</th>
							<td>
								<input value="<?php if(isset($row['DienThoaiKH'])) echo $row['DienThoaiKH'];?>" type="text" class="form-control" name="dienthoaikh">
							</td>
						</tr>
                        <tr>
                            <th style="font-weight: bold;"> Ngày sinh</th>
							<td>
								<input value="<?php if(isset($row['NgaySinh'])) echo $row['NgaySinh'];?>" type="date" class="form-control" name="ngaysinh">
							</td>
						</tr>
						<tr>
                            <th style="font-weight: bold;"> Giới tính</th>
							<td>
								<select name="gioitinh" class="form-select form-select mb-3" aria-label=".form-select-lg example">
								    <?php if ($row['GioiTinh'] == 1) {?>
                                        <option value="1" >Nam</option>
                                        <option value="0" >Nữ</option>
                                    <?php
                                    }if ($row['GioiTinh'] == 0) {?>
                                        <option value="0" >Nữ</option>
                                        <option value="1" >Nam</option>
                                    <?php
                                    }
                                    ?>
								</select>
							</td>
						</tr>
						<tr>
                            <th style="font-weight: bold;"> Ảnh đại diện</th>
                            <td>
                                <input type="file" onchange="display_image(this.files[0])" class="js-image-input form-control" id="formFile" name="anhkh" value="<?if ($row['AnhKH']) echo ($row['AnhKH']);?>">
                            </td>
                        </tr>
					</table>
                    <?php
                        }
                    ?>
					<div class="p-2">
                        
						<a href="profile_edit_script.php">
                            <button class="btn btn-primary float-end">Lưu</button>
                        </a>

                        <a href="delete_account.php">
                            <label class="btn btn-danger float-end" style="margin-right: 10px;">Xóa tài khoản</label>
                        </a>
						
						<a href="javascript:window.history.back(-1);">
							<label class="btn btn-secondary">Thoát</label>
						</a>

					</div>
				</form>

			</div>
		</div>
        <div>
            <br><br><br><br><br>
            <?php include("Layout_KhachHang_Footer.php"); ?>
        </div>
</body>
</html>
<script>

	var image_added = false;

	function display_image(file)
	{
		var img = document.querySelector(".js-image");
		img.src = URL.createObjectURL(file);

		image_added = true;
	}

</script>

<style>
    .login-box {
        padding: 0;
        min-height: 700px;
    }
    .login-main h1 {
        color: #08080b;
        font-weight: 700;
        font-size: 1.2em;
        padding: 1em 0;
    }
    .login-main {
        border-top: 1px solid #eee;
    }
    /* Nút Dropdown*/
    .nut_dropdown {
        background: black;
        color: white;

        font-size: 16px;
        border: none;
    }

    /* Thiết lập vị trí cho thẻ div với class dropdown*/
    .dropdown {
        position: absolute;
        display: inline-block;
        z-index: 100000;
    }

    /* Nội dung Dropdown */
    .noidung_dropdown {
        /*Ẩn nội dụng các đường dẫn*/
        display: none;
        position: absolute;
        color: black;
        background: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);


    }


    /* Thiết kế style cho các đường dẫn tronng Dropdown */
    .noidung_dropdown a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;

    }

    /* thay đổi màu background khi hover vào đường dẫn */
    .noidung_dropdown a:hover {
        background-color: #ddd;

    }

    /* hiển thị nội dung dropdown khi hover */

    /* Thay đổi màu background cho nút khi được hover */
    .dropdown:hover .noidung_dropdown {
        display: block;
        z-index: 1000000000000;
    }

    /*Dùng Để hiển thị nội dung*/
    .hienThi {
        display: block;
    }

    .o {

        top: 12px;
        position: absolute;
        right: 230px;
    }

    .o img {
        width: 20px;
        height: 20px;
        border-radius: 50%;

    }
</style>