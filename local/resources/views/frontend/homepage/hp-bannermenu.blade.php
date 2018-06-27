<style>
    #fe_h_banner_menu {
        padding: 0px;
        margin: auto;
    }

    #fe_h_banner_menu .col-md-4 {
        padding: 0;
        position: relative;
        margin: auto;
    }

    #fe_h_banner_menu .col-md-4 > div {
        box-shadow: 0px 3px 13px 0px rgba(136, 136, 136, 0.25);
        width: 99%;
        margin: auto;
    }

    #fe_h_banner_menu .col-md-4 > div:hover .img-menu {

        height: 50%;

    }

    .img-menu {
        width: 99%;
        margin: auto;
        position: absolute;
        height: 16%;
        padding: 15px;
        bottom: 2px;
        color: white;
        font-size: 22px;
        background-color: rgba(00, 00, 00, 0.6);
        transition: .3s;

    }

</style>
<div id="fe_h_banner_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div>
                    <a href="">
                        {{ Html::image('images/uploads/banner/banner4.jpg','',array('style'=>'width:100%;height:auto')) }}
                        <div class="img-menu text-center">
                            <p>ĐÈN PHÒNG NGỦ</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 ">

                <div>
                    <a href="">
                        {{ Html::image('images/uploads/banner/banner6.jpg','',array('style'=>'width:100%;height:auto')) }}
                        <div class="img-menu text-center">
                            <p>ĐÈN BÀN LÀM VIỆC</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4">
                <a href="">
                    <div>
                        <a href="">
                            {{ Html::image('images/uploads/banner/banner3.jpg','',array('style'=>'width:100%;height:auto')) }}
                            <div class="img-menu text-center">
                                <p>ĐÈN PHÒNG KHÁCH</p>
                            </div>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>