<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/design.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/d0870bddbc.js" crossorigin="anonymous"></script>
    <title>SHOP</title>
</head>

<body>
    <div class="wrapper">
        <div class="main_content">
            <div class="header">

                <div class="logo"><img src="logo.svg" width="60" height="60" alt="" srcset=""> </div>
                <div class="number_hours"> <button id="number"><a href="test">+63 961-202-8946 </button></a> <button id="number"><a href="test">CS Open 9:00 AM TO 6:00 PM </button> </a></div>
                <div class="cal_button" id="test"> <button id="req-call"><a href="test">Request a Call </button></a></div>
                <div class="social_media"> <a href="http://" class="fab fa-facebook fa-3x fa-color fa-border"><span></a><a href="http://" class="fa fa-twitter"></a></span></div>
            </div>
            <div class="tabs">
                <ul>
                    <li><i class="fas fa-tshirt"></i><a href="#shirt">SHIRTS</a></li>
                    <li><a href="#shorts">SHORTS</a></li>
                    <li><a href="#jeans">JEANS</a></li>
                    <li><a href="#mugs">MUGS</a></li>
                </ul>
            </div>
            <div class="main_info">
                <img src="./assets/img/background.svg" alt="" srcset="">
                <div class="about_product">
                    <section id="shirt">
                        <h1>For shirts only for shirt</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ut laborum ea iste saepe. Cumque quo vero, iusto id, dignissimos vel modi illum deleniti provident possimus adipisci fugit. Consequuntur, quaerat.</p>
                    </section>
                    <section id="shorts">
                        <h1>For shirts only for shirt</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ut laborum ea iste saepe. Cumque quo vero, iusto id, dignissimos vel modi illum deleniti provident possimus adipisci fugit. Consequuntur, quaerat.</p>
                    </section>
                    <section id="jeans">
                        <h1>For shirts only for shirt</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ut laborum ea iste saepe. Cumque quo vero, iusto id, dignissimos vel modi illum deleniti provident possimus adipisci fugit. Consequuntur, quaerat.</p>
                    </section>
                    <section id="mugs">
                        <h1>For shirts only for shirt</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ut laborum ea iste saepe. Cumque quo vero, iusto id, dignissimos vel modi illum deleniti provident possimus adipisci fugit. Consequuntur, quaerat.</p>
                    </section>
                </div>

            </div>
        </div>


    </div>


    <script>
        function moveScroller() {
            var $anchor = $("#scroller-anchor");
            var $scroller = $('#scroller');

            var move = function() {
                var st = $(window).scrollTop();
                var ot = $anchor.offset().top;
                if (st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "0px"
                    });
                } else {
                    $scroller.css({
                        position: "relative",
                        top: ""
                    });
                }
            };
            $(window).scroll(move);
            move();
        }

        $(function() {
            moveScroller();
        });
    </script>


</body>

</html>