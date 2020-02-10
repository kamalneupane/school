<footer>


    <!--footer starts-->
    <div class="container-fluid footer">
        <div class="row mainfooter">
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <h3>About Us</h3>
                <p>Joseph High School grew from humble beginning with 2 teachers and 35 students, into one of the renowned Educational Institutes of Nepal in 21 years.</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <h3>Courses</h3>
                <ul>

                    <li>All Courses</li>
                    <li>Play Group</li>
                    <li>School Level</li>
                    <li>Management</li>
                    <li>Humanities</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <h3>Quick links</h3>
                <ul>
                    <li>About</li>
                    <li>Mission & Vision</li>
                    <li>News</li>
                    <li>Gallery</li>
                    <li>Contact</li>
                </ul>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <h3>Connect with us</h3>
                <ul class="social">
                    <li><i class="fa fa-facebook-f"></i></li>
                    <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-instagram"></i></li>
                    <li><i class="fa fa-youtube-square"></i></li>
                    <li><i class="fa fa-linkedin-in"></i></li>

                </ul>

            </div>
        </div>
    </div>




    <!--footer ends here-->
</footer>
<div class="scroll-top" id="scroll-top">
    <i class="fas fa-chevron-up"></i>
</div>

<!--Scripts-->

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{ asset('js/slick.min.js') }}"></script>
{{--Page Scroller--}}
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#scroll-top').addClass('show');
        } else {
            $('#scroll-top').removeClass('show');
        }
    });
    $(document).ready(function() {
        $('#scroll-top').click(function() {
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });
    });
</script>
{{--Custom file input--}}
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
{{--Slick Slider--}}
<script>
    $(document).ready(function() {
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                     centerPadding: '40px'
                }
            }
        ]
    });
    });

</script>
{{--Disable Right Click--}}
{{--<script>--}}
    {{--$(document).bind("contextmenu",function(){--}}
        {{--return false;--}}
    {{--});--}}
{{--</script>--}}

@yield('footer-plugins')
</body>
</html>