<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Page</title>
    <!--STYLESHEET-->
    <link type="text/css"  rel="stylesheet" href="mystylesheet3.css" />
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Vendor Script -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

</head>
<body>
<!-- <header>
    <h1>Family+</h1>
</header> -->
        <div class="container">
            <div class="imgBx">
                <img src="child1.jpg" alt="Nike Jordan Proto-Lyte Image"> 
            </div>
            <div class="details">
                <div class="content">
                    <h2>Ajax Longbottom. <br>
                        <div>7 years old</div>
                        <br>
                        <span>Hispanic</span>
                        <br>
                        <span>Male</span>
                        
                    </h2>
                    <p>
                        Ajax has a dream of conquering culinary school and having his own 3 michelin star restaurant for desserts.
                    </p>
                    <!-- <p class="product-colors">Available Colors:
                        <span class="black active" data-color-primary="#000" data-color-sec="#212121" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true"></span>
                        <span class="red" data-color-primary="#7E021C" data-color-sec="#bd072d" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_red_black.png?raw=true"></span>
                        <span class="orange" data-color-primary="#CE5B39" data-color-sec="#F18557" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_orange_black.png?raw=true"></span>
                    </p> -->
                    <h4>Help Ajax find a new home.</h4>
                    <a href="adoptNowForm.php">
                        <button class="adoptbtn">Family Request</button>
                    </a>
                    
                </div>
            </div>
        </div>


        <!-- Footer -->
        <!-- <footer>
            <a href="https://stylustechnepal.com" target="_blank">anuzbvbmaniac123@gmail.com</a>
        </footer> -->


        <script>
            // Change The Picture and Associated Element Color when Color Options Are Clicked.
            $(".product-colors span").click(function() {
                $(".product-colors span").removeClass("active");
                $(this).addClass("active");
                $(".active").css("border-color", $(this).attr("data-color-sec"))
                $("body").css("background", $(this).attr("data-color-primary"));
                $(".content h2").css("color", $(this).attr("data-color-sec"));
                $(".content h3").css("color", $(this).attr("data-color-sec"));
                $(".container .imgBx").css("background", $(this).attr("data-color-sec"));
                $(".container .details button").css("background", $(this).attr("data-color-sec"));
                $(".imgBx img").attr('src', $(this).attr("data-pic"));
            });
        </script>
</body>
</html>