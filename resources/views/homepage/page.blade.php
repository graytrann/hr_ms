<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::to('assets/css/homepage.css') }}">
    <!-- CDN Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <div class="carousel">
        <div class="carousel_content">
            <div class="carousel_text">
                <div id="para_div">
                    <p>HUMAN RESOURCES MANAGEMENT</p>
                    <p id="refl">HUMAN RESOURCES MANAGEMENT</p>
                </div>
                <!-- HTML !-->
                <div class="carousel_button">
                    <button class="button-27" onclick="redirectToLogin()">GET STARTED</button>

                </div>
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
    <script>
        function redirectToLogin() {
            // Chuyển hướng sang route 'login'
            window.location.href = "{{ route('login') }}";
        }
    </script>
</body>

</html>