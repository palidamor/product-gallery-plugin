<?php

$plugin_dir_path = get_site_url()."/wp-content/plugins/VCProductGallery";

$border="#000";

$temp_color=get_option('border_color');

if($temp_color!=NULL && $temp_color!="") {

$border=$temp_color;

}

?> 

 <link href="<?php echo $plugin_dir_path; ?>/sweetalert2.min.css" rel="stylesheet">

<script src="<?php echo $plugin_dir_path; ?>/sweetalert2.js"></script>

<style>

.subBtn {

    margin-top: 30px;

}

h2.plugin-title {

    font-size: 26px;

    margin-bottom: 25px;

    padding-left: 2px;

}

.nopad {

padding:0 !important;

    margin-bottom: 25px;

}

</style>

<h2 class="plugin-title">Plugin Settings</h2>



<?php

if(isset($_REQUEST['submitData'])) 

{

$color=$_REQUEST['color'];

update_option('border_color',$color);

?>

<script>

swal("Congrats!", "Settings Saved!", "success");

</script>

<?php

}

?>



 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <link href="<?php echo $plugin_dir_path; ?>/color-picker.css" rel="stylesheet">

<script src="<?php echo $plugin_dir_path; ?>/color-picker.js"></script>



<form method="post">

<div class="form-group col-lg-12 nopad">

<label for="border-color">Set Main Image Border</label>

</div>  

<div id="cp3" class="input-group colorpicker-component col-lg-3">

    <input type="text" value="<?php echo $border; ?>" class="form-control" name="color"/>

    <span class="input-group-addon"><i></i></span>

</div>

<script>

    jQuery(function() {

        jQuery('#cp3').colorpicker({

            color: '<?php echo $border; ?>',

            format: 'rgb'

        });

    });

</script>

  <button type="submit" class="btn btn-info subBtn" name="submitData">Save</button>

</form>