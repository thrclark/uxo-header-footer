<?php
$section = 'admin';
$page_title = 'google';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include('includes/header-admin.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-admin.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">Google Analyitics</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group ">
                                        <label class="control-label" for="name"> Google Analytics  ID </label>
                                        <span class="help-block small">Enter an ID provided by Google Analyitics.</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-control" id="name" name="name" type="text" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label"> Tenants </div>
                                        <span class="help-block small"> Select the tenants that will be monitored with this Google Analytics ID.</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <table class="table table-condensed" id="">
                                                    <thead class="sr-only">
                                                        <tr>
                                                            <th>Action</th>
                                                            <th>Tenant</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:1%"><input type="checkbox" class="checkBoxClass" checked></td>
                                                            <td> iu-verify-prd</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:1%"><input type="checkbox" class="checkBoxClass" checked></td>
                                                            <td> iu-verify-unt</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:1%"><input type="checkbox" class="checkBoxClass" checked ></td>
                                                            <td> iu-verify-snd</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:1%"><input type="checkbox" class="checkBoxClass" checked></td>
                                                            <td> iu-verify-dev</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="width:1%"><a href="#" id="checkall">Check all</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a>
                                        <button type="submit" class="btn btn-primary" id="form_save" data-toggle="modal" data-target="#confirm_save">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
</div>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
 $("#checkall").click(function(){

     
       if ($("input[type='checkbox']").prop("checked"))
       {
           $(':checkbox').prop('checked', false);
           $(this).text('Check all');
        }
     else{
         $(':checkbox').prop('checked', true);
          $(this).text('Uncheck all');
     }    

 });

});//]]> 

</script> 
<script>
$(document).ready(function(){
    $("input[type='checkbox']").attr('disabled',true);
    $('#name').keyup(function(){
        if($(this).val().length !=0)
            $("input[type='checkbox']").attr('disabled', false);            
        else
            $("input[type='checkbox']").attr('disabled',true);
    })
});
</script>
</body>
</html>
