<style>

    div#fe_h_bottom .col-md-4 div{
        z-index: 1;
        height: 100%;
        text-align: center;
        align-items: center;
        box-shadow: 0px 3px 13px 0px rgba(136, 136, 136, 0.25);
    }
    div#fe_h_bottom .col-md-4 p{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        z-index: 2;
        padding: 6px 0px;
        color: #f69419;
        font-weight: 600;
        /*background-color: rgba(00,00,00,0.1);*/
        width: 100%;
        text-align: center;
        position: absolute;
        top: 50%;
        transform: translate(0%,-50%);
        font-size: 22px;
    }

    div.light-angle{
        position: absolute;
        width: 60%;
        background-color: rgba(255,255,255,0.6);
        top: 0;
        left: 0;
        height: 100%;
    }

    div.light-angle:after {
        content: '';
        line-height: 0;
        font-size: 0;
        width: 0;
        height: 0;
        border-top: 100px solid #fff;
        border-bottom: 50px solid transparent;
        border-left: 0px solid transparent;
        border-right: 30px solid transparent;
        position: absolute;
        opacity: 0.6;
        top: 0;
        left: 100%;
    }
</style>
        <div class="row" id="fe_h_bottom">

            <div class="col-md-4 mb-3">
                <div class="position-relative d-flex align-items-center">
                    {{ Html::image('images/uploads/banner/banner_bottom2.jpg','',array('style'=>'width:100%;height:auto;')) }}
                    <p> HOTLINE: 0965 322 239</p>
                    <div class="light-angle"></div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="position-relative">
                    {{ Html::image('images/uploads/banner/banner_bottom5.jpg','',array('style'=>'width:100%;height:auto;')) }}
                    <p> GIAO HÀNG MIỄN PHÍ</p>
                    <div class="light-angle"></div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="position-relative">
                    {{ Html::image('images/uploads/banner/banner_bottom6.jpg','',array('style'=>'width:100%;height:auto;')) }}
                    <p> SIÊU KHUYẾN MÃI</p>
                    <div class="light-angle"></div>
                </div>
            </div>

        </div>

