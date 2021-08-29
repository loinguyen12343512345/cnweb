<?php
  include('menu.php');
?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.687097179386!2d106.6604133145106!3d10.758580892333683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ef01bbd40a5%3A0x3480b2ad18feaea!2zMTg3IE5ndXnhu4VuIENow60gVGhhbmgsIFBoxrDhu51uZyAxMiwgUXXhuq1uIDUsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1628672600162!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <section class="contact py-5 bg-light" id="contact">
    <div class="container">
      <div class="row">
         <hr class="abc">
          <div class="col-md-12">

              <h4>LIÊN HỆ</h4>
            <hr>
          </div>
        <div class="col-md-5" style="font-size: 14px;">
            <img src="./img/logo-foo.png">
            <div class="dckd" style="margin-top: 10px;">
                
            <h5 style="font-weight: bold; font-size: 17px;">Địa chỉ kinh doanh:</h5>
            <ul class="list-unstyled">
                <p><i class="fa fa-map-marker"></i> 187 Nguyễn Chí Thanh, Phường 12, Quận 5, TP HCM </p>
                <p><i class="fa fa-envelope"></i>  sabeco@sabeco.com.vn  </p>
            </ul>
            
            </div>
            <div class="vphcm">
            <h5 style="font-weight: bold; font-size: 17px;">Văn phòng đại diện tại TP HCM:</h5>
            <ul class="list-unstyled">
                
                <p><i class="fa fa-map-marker"></i>  Tầng 5, Tòa nhà Vincom Center Đồng Khởi ,72 Lê Thánh Tôn/ 45A Lý Tự Trọng, P. Bến Nghé, Quận 1, TPHCM  </p>
                <p><i class="fa fa-phone"></i>  (+84) 28 38 294 081 - 28 38 294 083 - 28 38 296 342  </p>
                <p><i class="fa fa-phone"></i>  (+84) 28 38 296 856  </p>
            </ul>
            </div>
            <div class="dhxk">
                <h5 style="font-weight: bold; font-size: 17px;">Đặt hàng xuất khẩu:</h5>
                <ul class="list-unstyled">
                
                 <p><i class="fa fa-envelope"></i>  sales.export@sabeco.com.vn  </p>
            </ul>
            </div>
            <div class="vphn">
            <h5 style="font-weight: bold; font-size: 17px;">Văn phòng đại diện tại Hà Nội:</h5>
            <ul class="list-unstyled">
                
                <p><i class="fa fa-map-marker"></i>  Tầng 6, 97 Trần Hưng Đạo, P. Cửa Nam, Q. Hoàn Kiếm, Hà Nội  </p>
                <p><i class="fa fa-phone"></i>  (+84) 24 39 745 877  </p>
                <p><i class="fa fa-phone"></i>  (+84) 24 39 745 878  </p>
            </ul>
            </div>
            <hr>
            
        </div>
        <div class="col-md-7">
            
            <div class="card">
                <div class="card-body">
                     <form>
                        <p style="font-size: 15px">Nếu bạn có ý kiến góp ý hoặc yêu cầu cần hỗ trợ từ SABECO, vui lòng liên lạc ngay với chúng tôi tại đây. Chúng tôi sẽ xem xét và phản hồi sớm nhất có thể.</p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <input id="ht" name="ht" placeholder="Họ tên" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                  <input id="dc" name="dc" placeholder="Địa chỉ" class="form-control" type="text">
                                </div>
                                
                              </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <input id="td" name="td" placeholder="Tiêu đề" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="Mobile No." name="Mobile No." placeholder="Số điện thoại" class="form-control" required="required" type="text">
                                </div>
                                
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                          
                                          <select id="inputState" class="form-control" style="font-size: 15px">
                                            <option selected>Vấn đề liên hệ: </option>
                                            <option> Thông tin sản phẩm</option>
                                            <option> Góp ý</option>
                                            <option> Thắc mắc - Khiếu nại</option>
                                            <option> Tuyển dụng</option>
                                            <option> Truyền thông</option>
                                            <option> Khác</option>
                                          </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                          <textarea id="comment" name="comment"  placeholder="Nội dung"class="form-control"></textarea>
                                </div>
                            </div> 
                            
                            <div class="form-row">
                                <button type="button" class="btn btn-danger " style="width: 80px;border-radius: 20px; background-color: #B22222;">Gửi</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
      </div>
      
      
    </div>
    </section>
<?php
  include('footer.php')
?>