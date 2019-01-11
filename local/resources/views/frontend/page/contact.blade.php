<div id="contact_info">
    <div class="container">
        <div class="col-md-12 pb-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact_top">
                        <h3 class="title">Gửi liên hệ</h3>
                        <hr>
                        <p>
                            Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với
                            bạn
                            sớm nhất có thể .
                        </p>
                    </div>
                    <div class="contact_bottom">
                        <div class="ip-name input-group">
                            <input class="form-control input-text" placeholder="Tên Của Bạn" name="name-ct" type="text"
                                   value="">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="ip-email input-group">
                            <input class="form-control input-text" placeholder="Email" name="email-ct" type="text"
                                   value="">
                            <div class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>
                        <div class="ip-phone input-group">
                            <input class="form-control input-text" placeholder="Số Điện Thoại" name="phone-ct"
                                   type="text" value="">
                            <div class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>
                        <div class="ip-contentMail input-group">
                    <textarea class="form-control input-area" placeholder="Viết Nội Dung" name="contentMail" cols="30"
                              rows="5"></textarea>
                            <div class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>
                        <div class="button-group">
                            <button id="btnSendMail" type="button" class="btn btn-contact">Gửi Liên Hệ<i
                                        class="fa fa-spinner fa-spin fa-3x fa-fw loadingSending" style="
    font-size: 15px;display: none"></i><i
                                        class="fa fa-check-circle successSending" style="display: none"
                                        aria-hidden="true"></i></button>
                            <span style="display: none">Chúng tôi đã nhận được mail và sẽ phản hồi quý khách trong 24h. Xin cảm ơn.</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact_top">
                        <h3 class="title">Địa chỉ liên hệ</h3>
                        <hr>
                        <h4 class="title">THỊNH PHÁT LIGHTNING </h4>
                        <ul>
                            <li><i class="far fa-building"></i>Địa Chỉ:</li>{{$dataConfig['config-address']}}
                            <li><i class="fas fa-phone"></i>Điện Thoại: {{$dataConfig['config-phone']}}</li>
                            <li><i class="far fa-envelope"></i>{{$dataConfig['config-email']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <iframe
                    width="100%"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCz9f8H5wjJIac5LrePbowoDN8Vp2FEEZ8
    &q=55+Hà+Huy+Giáp,+Q.12,+TPHCM&zoom=17" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>