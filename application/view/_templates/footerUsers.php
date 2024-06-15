    <!-- jQuery -->
    <script src="<?php echo URL; ?>gen/vendors/jquery/dist/jquery.min.js"></script>
    <!-- js de sweetAlert -->
    <script src="<?php echo URL;?>js/sweetalert2.min.js"></script>
    <script src="<?php echo URL;?>js/editUsers.js"></script>
    <script src="<?php echo URL;?>js/editProduct.js"></script>

    <script>
        $(document).ready(function(){
            <?php
            if (isset($_SESSION['alert']) != false && $_SESSION['alert'] != null) {
                echo $_SESSION['alert'];
                $_SESSION['alert']= null;
            }
            ?>
        })
    </script>

    <!-- Bootstrap -->
    <script src="<?php echo URL; ?>gen/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo URL; ?>gen/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo URL; ?>gen/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo URL; ?>gen/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo URL; ?>gen/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo URL; ?>gen/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo URL; ?>gen/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo URL; ?>gen/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo URL; ?>gen/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo URL; ?>gen/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo URL; ?>gen/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo URL; ?>gen/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo URL; ?>gen/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo URL; ?>gen/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo URL; ?>gen/build/js/custom.min.js"></script>
	
    </body>
</html>