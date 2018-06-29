<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    html, body {
        height: 100%;
        min-height: 100%;
        margin: 0;
        padding: 0;
    }

    div#mobi_menu {
        display: none;
        position: fixed;
        z-index: 11;
        width: 100vh;
        height: 100vh;
        background-color: rgba(255, 255, 255, 0.8);
    }

    div#main_mobi_menu {
        position: fixed;
        width: 80%;
        height: 100%;
        overflow: scroll;
        background-image: url('images/bg/body.png');
        color: white;
        min-height: 100%;
        padding: 16px;
    }

    div#main_mobi_menu_containt {
        position: absolute;
        left: 10%;
        width: 90%;
        /*width: 100%;*/
        height: 100%;
        overflow: scroll;
        background-image: url('images/bg/body.png');
        color: white;
        min-height: 100%;
        padding: 16px;
    }

    div#main_mobi_menu_details {
        display: none;
        position: fixed;
        z-index: 13;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
    }

    div#ls_menu ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    div#ls_menu ul li {
        position: relative;
        line-height: 28px;
        /*padding-left: 8px;*/

    }

    div#ls_menu ul li > div {
        line-height: 28px;
        color: white;
        width: 100%;
        overflow: hidden;
        display: inline-block;
        text-overflow: ellipsis;
        white-space: nowrap;

    }

</style>
<div id="mobi_menu">

    <div id="main_mobi_menu">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between border-bottom border-light pb-3">
                <p class="m-0"><i class="fas fa-phone"></i> Call : 0965 322 239</p>
                <div class="closed-menu">
                    <i class="fab fa-xing pr-1"></i><span>Đóng</span>
                </div>
            </div>

            <div class="col-md-12">
                <img src="images/uploads/logo2f.png" alt="">
            </div>
            <div class="col-md-12 border-bottom border-light pb-2">
                <label class="sr-only" for="inlineFormInputGroup">Search</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
                </div>
            </div>
            <div class="col-md-12 mt-3" id="ls_menu">
                <ul>
                    <li>
                        <div class="menu-1"><i class="flaticon-lamp-1"></i> ĐÈN TRANH TRÍ & CHIẾU SÁNG</div>
                    </li>
                    <li>
                        <div class="menu-2"><i class="flaticon-lamp-1"></i> THIẾT BỊ ĐIỆN</div>
                    </li>
                    <li>
                        <div class="menu-3"><i class="flaticon-lamp-1"></i> THIẾT BỊ NƯỚC & VỆ SINH</div>
                    </li>
                    <li>
                        <div class="menu-4"><i class="flaticon-lamp-1"></i> THIẾT BỊ NHÀ BẾP</div>
                    </li>
                    <li>
                        <div class="menu-5"><i class="flaticon-lamp-1"></i> MORE...!</div>
                    </li>
                    <li>
                        <div class="menu-6"><i class="flaticon-lamp-1"></i> LIÊN HỆ CHÚNG TÔI</div>
                    </li>


                </ul>
            </div>

            <div class="col-md-12 mt-3 p-0" id="" style="bottom: 0">
                <img src="images/bg/footer-menu.png" alt="">
            </div>
        </div>
    </div>
</div>


<div id="main_mobi_menu_details">
    <div id="main_mobi_menu_containt" class="position-relative">
        <div class="row position-relative">
            <div class="col-md-12 d-flex justify-content-between border-bottom border-light pb-3">
                <div class="mobi-back-main-menu"><i class="fas fa-chevron-left"></i> DANH MỤC SẢN PHẨM</div>
                <div class="closed-menu">
                    <i class="fab fa-xing pr-1"></i><span>Đóng</span>
                </div>
            </div>
            <div class="col-md-12 mt-3" id="ls_menu">
                <ul>
                    <li>
                        <div class="menu-1"><i class="flaticon-lamp-1"></i> ĐÈN TRANH TRÍ & CHIẾU SÁNG</div>
                    </li>
                    <li>
                        <div class="menu-2"><i class="flaticon-lamp-1"></i> THIẾT BỊ ĐIỆN</div>
                    </li>
                    <li>
                        <div class="menu-1"><i class="flaticon-lamp-1"></i> ĐÈN TRANH TRÍ & CHIẾU SÁNG</div>
                    </li>
                    <li>
                        <div class="menu-2"><i class="flaticon-lamp-1"></i> THIẾT BỊ ĐIỆN</div>
                    </li>
                    <li>
                        <div class="menu-1"><i class="flaticon-lamp-1"></i> ĐÈN TRANH TRÍ & CHIẾU SÁNG</div>
                    </li>
                    <li>
                        <div class="menu-2"><i class="flaticon-lamp-1"></i> THIẾT BỊ ĐIỆN</div>
                    </li>
                    <li>
                        <div class="menu-3"><i class="flaticon-lamp-1"></i> THIẾT BỊ NƯỚC & VỆ SINH</div>
                    </li>
                    <li>
                        <div class="menu-4"><i class="flaticon-lamp-1"></i> THIẾT BỊ NHÀ BẾP</div>
                    </li>
                    <li>
                        <div class="menu-5"><i class="flaticon-lamp-1"></i> MORE...!</div>
                    </li>
                    <li>
                        <div class="menu-6"><i class="flaticon-lamp-1"></i> LIÊN HỆ CHÚNG TÔI</div>
                    </li>


                </ul>
            </div>

            <div class="col-md-12 mt-3 p-0" id="" style="bottom: 0">
                <img src="images/bg/footer-menu.png" alt="" style="width: 100%;height: auto;">
            </div>

        </div>
    </div>
</div>

<div class="container d-none d-block d-sm-none p-0 position-relative">
    <div style="width: 96%;margin: auto">
        {{ Html::image('images/uploads/logo2.png','',array('class'=>'no-style')) }}
    </div>
    <div class="d-flex justify-content-start pt-1 text-white" style="background:#015357;" id="mobi_hidden_menu">
        <a href="#" style="font-size:  26px;padding-left:  10px;">
            <i class="fa fa-bars text-white" aria-hidden="true"></i>
        </a>
        <p class="pt-1 pl-2" style="font-size: 18px;"> ĐÈN CHIẾU SÁNG THỊNH PHÁT</p>
    </div>
</div>

<script>

    $(document).ready(function () {

        $('#mobi_hidden_menu').click(function () {
            // $("#mobi_menu").css("display", "block");
            $("#mobi_menu").fadeIn();
            // $("#main-mobi-menu").css("width","100%");
        });

        $('.closed-menu').click(function () {
            $("#mobi_menu").fadeOut();
            $("#main_mobi_menu_details").fadeOut()
        });

        $('.mobi-back-main-menu').click(function () {

            $("#mobi_menu").fadeIn();
            $("#main_mobi_menu_details").fadeOut()

        });



        $('.menu-1').click(function () {

            $("#mobi_menu").fadeOut();
            $("#main_mobi_menu_details").fadeIn()

        });
    });

</script>