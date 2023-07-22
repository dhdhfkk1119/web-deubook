<!doctype html>
<html lang="en">
<?php
    include "db.php";

?>

<style type="text/css">
    .selectbox{
    -webkit-tap-highlight-color: transparent;
    background-color: #fff;
    border: solid 1px #2493e0;
    border-color: #2493e0;
    color: #2493e0;
    height: 50px;
    display: flex;
    align-items: center;
    text-align: center;
    }

    .nc_select{/*처음 학년과 학과 css*/
    -webkit-tap-highlight-color: transparent;
    background-color: #fff;
    border: solid 1px #2493e0;
    border-color: #2493e0;
    color: #2493e0;
    height: 50px;
    display: flex;
    align-items: center;
    text-align: center;
    }

.com-sm-3{
    -webkit-tap-highlight-color: transparent;
    padding-right: 20px;
    align-items: center;
    text-align: center;
    position:relative;

}
.com-box {
    left:50%;
    
    transform: translate(25%,60%);

}
.form-input input{
        width: 100%;
    border: 1px solid #2493e0;
    height: 50px;
    display: flex;
    align-items: center;
}

.
</style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Martine</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
    
    </style>
</head>

<body>
   <!--::header part start::-->
   <header class="main_menu">
       <?php include "header.php"?>
    </header>
    <!-- Header part end-->
    <!-- banner part start-->

    <section class="banner_part" style="background-image: url('./img/main.png');">
        
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1> D-BOOK</h1>
                            <p>A place where everyone can comfortably read and buy good books at a good price</p>
                            <a href="packages.php" class="btn_1">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

   <!-- booking part start-->
   <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">Search</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="search.php" method="post">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                        <select  name="p_grade" class="nc_select">
                                    <optgroup label="학 년">
                                         <option value="NULL">----학 년----</option>
                                        <option value="1">1 학년</option>
                                        <option value="2">2 학년</option>
                                        <option value="3">3 학년</option>
                                        <option value="4">4 학년</option>
                                    </optgroup>
                                </select>
                                            </div>
                                            <div class="form_colum">
                                       <select name="p_major" id="p_major" class="nc_select">
                                    <optgroup label="단 과" >
                                        <option value="NULL">-------단 과 선 택------</option>
                                        <option value="ICT공과 대학">ICT공과 대학</option>
                                        <option value="공과 대학">공과 대학</option>
                                        <option value="예술디자인체육 대학">예술디자인체육 대학</option>
                                        <option value="IT융합부품소재공과 대학">IT융합부품소재공과 대학</option>
                                        <option value="의료·보건·생활 대학">의료·보건·생활 대학</option>
                                        <option value="한의과 대학">한의과 대학</option>
                                        <option value="상경 대학">상경 대학</option>
                                        <option value="인문사회과학 대학">인문사회과학 대학</option>
                                    </optgroup>
                                </select>
                                            </div>
                               <div class="form_colum">
                                    <select name="p_bu_major" value="ICT공과 대학"  id="ICT"  style="display:block;" class="selectbox">
                                    <optgroup label="학 과" >
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option  value="컴퓨터공학과">컴퓨터공학과</option>
                                        <option value="창의소프트웨어공학부" >창의소프트웨어공학부</option>
                                        <option value="전기전자통신공학부">전기전자통신공학부</option>
                                        <option value="디지털콘텐츠학과">디지털콘텐츠학과</option>
                                        <option value="게임공학과">게임공학과</option>
                                        <option value="영화학과">영화학과</option>
                                        <option value="인공지능학과">인공지능학과</option>
                                        <option value="소프트웨어융합학과">소프트웨어융합학과</option>
                                    </optgroup>
                                </select>

                                <select name="p_bu_major" value="상경 대학"  id="COM"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="경제금융보험학과">경제금융보험학과</option>
                                        <option value="재무부동산학과">재무부동산학과</option>
                                        <option value="부동산금융 자산경영학과">부동산금융 자산경영학과</option>
                                        <option value="무역학과">무역학과</option>
                                        <option value="유통물류학과">유통물류학과</option>
                                        <option value="경영학과">경영학과</option>
                                        <option value="회계학과">회계학과</option>
                                        <option value="정보경영학과">정보경영학과</option>
                                        <option value="국제관광경영학과">국제관광경영학과</option>
                                        <option value="컨벤션경영학과">호텔 컨벤션경영학과</option>
                                        <option value="외식경영학과">외식경영학과</option>
                                        <option value="스마트호스트피탈리티학과">스마트호스트피탈리티학과</option>
                                    </optgroup>
                                </select>

                                <select name="p_bu_major" value="인문사회과학 대학"  id="Human"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="국어국문학과">국어국문학과</option>
                                        <option value="중국어중국학과">중국어중국학과</option>
                                        <option value="일본어학과">일본어학과</option>
                                        <option value="영어영문학과">영어영문학과</option>
                                        <option value="문헌정보학과">문헌정보학과</option>
                                        <option value="평생교육 청소년상담학과">평생교육 청소년상담학과</option>
                                        <option value="사회복지학과">사회복지학과</option>
                                        <option value="광고홍보학과">광고홍보학과</option>
                                        <option value="미디어커뮤니케이션학과">미디어커뮤니케이션학과</option>
                                        <option value="법학과">법학과</option>
                                        <option value="경찰행정학과">경찰행정학과</option>
                                        <option value="소방방재행정학과">소방방재행정학과</option>
                                        <option value="행정학과">행정학과</option>
                                    </optgroup>
                                </select>

                                <select name="p_bu_major" value="한의과 대학"  id="medicine"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="한의예과">한의예과</option>
                                </select>

                                <select name="p_bu_major" value="IT융합부품소재공과 대학"  id="Convergence"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="신소재공학부">신소재공학부</option>
                                        <option value="기계자동차로봇부품공학부">기계자동차로봇부품공학부</option>
                                        <option value="디자인공학부">디자인공학부</option>
                                        <option value="산업융합시스템공학부">산업융합시스템공학부</option>
                                        <option value="미래형자동차학과">미래형자동차학과</option>
                                    </optgroup>
                                </select>

                                <select name="p_bu_major" value="공과 대학"  id="Engineering"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="건설공학부">건설공학부</option>
                                        <option value="화학환경공학부">화학환경공학부</option>
                                        <option value="바이오응용공학부">바이오응용공학부</option>
                                        <option value="조선해양공학과">조선해양공학과</option>
                                    </optgroup>
                                </select>

                                 <select name="p_bu_major" value="예술디자인체육 대학"  id="Sport"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="음악학과">음악학과</option>
                                        <option value="체육학과">체육학과</option>
                                        <option value="디자인조형학과">디자인조형학과</option>
                                        <option value="레저스포츠학과">레저스포츠학과</option>
                                        <option value="패션디자인학과">패션디자인학과</option>
                                        <option value="태권도학과">태권도학과</option>
                                    </optgroup>
                                </select>

                                <select name="p_bu_major" value="의료·보건·생활 대학"  id="Nursing"  style="display:none" class="selectbox">
                                    <optgroup label="학 부">
                                        <option value="NULL">-------학 과 선 택------</option>
                                        <option value="간호학과">간호학과</option>
                                        <option value="임상병리학과">임상병리학과</option>
                                        <option value="치위생학과">치위생학과</option>
                                        <option value="방사선학과">방사선학과</option>
                                        <option value="의료경영학과">의료경영학과</option>
                                        <option value="물리치료학과">물리치료학과</option>
                                        <option value="물리치료학과">보육 가정상담학과</option>
                                        <option value="물리치료학과">식품영양학과</option>
                                    </optgroup>
                                </select>
                                            </div>
                                             <div class="form_colum form-input">
                                              <input type="text" name="p_title">
                                            </div>
                                            <div class="form_btn sub_btn">
                                               <!--  <a href="search.php" class="btn_1">search</a> -->
                                               <input type="submit" class="btn_1 sub_btn">
                                            </div>
                                        </div>
                                         <div>
                                <input type="hidden" name="bu_major" id="aaa" value="">
                                         </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

    <!--::industries end::-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="img/logo.png" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="img/deu_logo.png" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="img/dap_logo.png" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="img/door_logo.png" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="single-footer-widget">
                        <h4>Discover Destination</h4>
                        <ul>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Subscribe our newsletter to get update news and offers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Us</h4>
                        <p>4156, New garden, New York, USA
                                +880 362 352 783</p>
                        <span>contact@martine.com</span>
                        <div class="social-icons">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="chatbot">
        <div>
            <div>
                
            </div>
        </div>
    </div>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
   <!--  <script src="js/jquery.nice-select.min.js"></script> -->
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script type="text/javascript">       

        $("select[name=p_bu_major]").change(function(){
             console.log($(this).val());
             $("#aaa").val($(this).val());            
        });

        $(function() {
            $("#imgFile").on('change', function(){
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                }

              reader.readAsDataURL(input.files[0]);
            }
        }



        $('#p_major').change(function(){
             var major =  $(this).val();
             if(major == "상경 대학"){
                $('#COM').show();
             }else{
                $('#COM').hide();
             }

             if(major == "ICT공과 대학"){
                $('#ICT').show();
             }else{
                $('#ICT').hide();
             }

             if(major == "인문사회과학 대학"){
                $('#Human').show();
             }else{
                $('#Human').hide();
             }

             if(major == "한의과 대학"){
                $('#medicine').show();
             }else{
                $('#medicine').hide();
             }

             if(major == "IT융합부품소재공과 대학"){
                $('#Convergence').show();
             }else{
                $('#Convergence').hide();
             }

              if(major == "공과 대학"){
                $('#Engineering').show();
             }else{
                $('#Engineering').hide();
             }

              if(major == "예술디자인체육 대학"){
                $('#Sport').show();
             }else{
                $('#Sport').hide();
             }

              if(major == "의료·보건·생활 대학"){
                $('#Nursing').show();
             }else{
                $('#Nursing').hide();
             }
        });
    </script>
</body>

</html>