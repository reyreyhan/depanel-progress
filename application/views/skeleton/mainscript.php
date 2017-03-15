<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url('assets/js/bootstrap-checkbox-radio-switch.js'); ?>"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url('assets/js/chartist.min.js'); ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/js/bootstrap-notify.js'); ?>"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url('assets/js/light-bootstrap-dashboard.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/demo.js'); ?>"></script>

<script type="text/javascript">
  var base = 'http://localhost/depanelv2fg/'
  var div = window.location.href.replace(base,'').split('/')[0]
  if(div != ''){
    $('.'+div).addClass('active')
  } else {
    $('.home').addClass('active')
  }
</script>
