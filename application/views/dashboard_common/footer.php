<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- AOS JS file  -->
<script src="<?php echo base_url(); ?>assest/website1/js/aos.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assest/website1/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assest/website1/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assest/website1/js/adminlte.min.js"></script>
<!-- Custom Js  -->
<script src="<?php echo base_url(); ?>assest/website1/js/main.js"></script>
<script type="text/javascript">
    $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
    });

    $('.alert-danger').delay(7000).fadeOut();    
    $('.alert').delay(5000).fadeOut(); 


    <?php if($this->session->flashdata('success')){ ?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php }else if($this->session->flashdata('error')){  ?>
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php }else if($this->session->flashdata('warning')){  ?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php }else if($this->session->flashdata('info')){  ?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php } ?>
</script>
</body>
</html>