<footer class="footer bg-dark  text-light text-center p-4" data-background-color="black">
    <div class="container">
<ul><li class="nav-item">
        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
            <i class="fa fa-twitter"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
            <i class="fa fa-facebook-square"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
            <i class="fa fa-instagram"></i>
        </a>
    </li></ul>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, copyright by
            <a href="" target="_blank">Creative Teams</a> Groups.
        </div>
    </div>
</footer>
<script>$(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });</script>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });


    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
    </body>
</html>
