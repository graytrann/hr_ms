<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::to('assets/css/homepage.css') }}">
    <!-- CDN Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="header_container">
            <div class="header_content">
                <div class="header_logo">
                    <img src="https://media.loveitopcdn.com/3807/logo-hutech-1.png" alt="" srcset="">
                </div>
                <div class="menu">
                    <button class="button_signup" onclick="redirectToRegister()">SIGN UP</button>
                    <button class="button_signin" onclick="redirectToLogin()">SIGN IN</button>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel">
        <div class="carousel_content">
            <div class="carousel_text">
                <div id="para_div">
                    <p>HUMAN RESOURCES MANAGEMENT</p>
                    <p id="refl">HUMAN RESOURCES MANAGEMENT</p>
                </div>
                <!-- HTML !-->
                <!-- <div class="carousel_button">
                    <button class="button-27" onclick="redirectToLogin()">GET STARTED</button>
                </div> -->
            </div>
            <div class="carousel_img">
                <img src="{{ URL::to('assets/images/10-Functions-of-Human-Resource-Management-banner2.webp') }}" alt="" srcset="">

            </div>
        </div>
    </div>
    <div class="introduction">
        <div class="introduction_content">
            <div class="introduction_above">
                <div class="introduction_img">
                    <img src="{{ URL::to('assets/images/snapedit_1710477109457.png') }}" alt="" srcset="">

                </div>
                <div class="introduction_text">
                    <div>
                        <h1>INTRODUCTION</h1>
                        <p>
                            Welcome to our Human Resources website!
                            In today's business world, managing human resources is an essential part of ensuring sustainable growth and success.
                            Our website serves as a comprehensive resource for those seeking information,
                            tools, and the latest strategies in human resource management.</p>
                    </div>
                    <div class="introduction_subImg">
                        <img src="{{ URL::to('assets/images/Screenshot 2024-03-15 at 20.42.09.png') }}" alt="" srcset="">
                        <img src="{{ URL::to('assets/images/Screenshot 2024-03-15 at 20.42.28.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="introduction_below">
                <div class="introduction_card">
                    <i class="fa-solid fa-user"></i>
                    <p>Employee Management</p>
                </div>
                <div class="introduction_card">
                    <i class="fa-regular fa-envelope"></i>
                    <p>Leaves Management</p>
                </div>
                <div class="introduction_card">
                    <i class="fa-solid fa-building"></i>
                    <p>Department Management</p>
                </div>
                <div class="introduction_card">
                    <i class="fa-solid fa-business-time"></i>
                    <p>Overtime Management</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                            <p>Don’t miss any updates of our new templates and extensions.!</p>
                            <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Contact</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">Khải Phong</a></li>
                                <li><a href="#">Thế Ngọc</a></li>
                                <li><a href="#">Thành Trung</a></li>
                                <li><a href="#">Tấn Phát</a></li>
                                <li><a href="#">Duy Khánh</a></li>
                                <li><a href="#">Tấn Hùng</a></li>
                                <li><a href="#">Hữu Phúc</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Term &amp; conditions</a></li>
                                <li><a href="#">Reporting</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                                <a href="#" class="fab fa-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>

    </footer>
    <script>
        function redirectToLogin() {
            // Chuyển hướng sang route 'login'
            window.location.href = "{{ route('login') }}";
        }

        function redirectToRegister() {
            // Chuyển hướng sang route 'login'
            window.location.href = "{{ route('register') }}";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>