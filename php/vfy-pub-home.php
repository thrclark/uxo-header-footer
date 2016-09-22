<?php $page_title = "home" ?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/pub-header.php') ?>
<div class="main-content container" role=main>
    <div id="main-content">
        <div class="row">
            <div class="col-md-3">
                <?php include ('includes/pub-nav.php') ?>
            </div>
            <div class="col-md-9">
                <div class="primary-content">
                    <section style="display:;" id="all_verifications" ng-app=sortApp ng-controller=mainController>
                        <div class="row section-head">
                            <div class="col-md-6 section-header">
                                <h3>All Verifications</h3>
                            </div>
                            <div class="col-md-6 text-right" style="padding-top: 9px;">
                                <form class="form-inline" style="padding-bottom: 10px;">
                                    <div class="form-group">
                                        <label class="sr-only" for=filtertable>Filter</label>
                                        <input type=text id="filtertable" class="form-control input-sm" placeholder=Filter ng-model=searchstatus>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-condensed table-responsive table-actions">
                            <thead>
                                <tr>
                                    <td><a href="#" ng-click="sortType = 'name'; sortReverse = !sortReverse"> Name <i ng-show="sortType == 'name' &amp;&amp; !sortReverse" class="icon-angle-up"></i> <i ng-show="sortType == 'name' &amp;&amp; sortReverse" class="icon-angle-down"></i> </a></td>
                                    <td><a href="#" ng-click="sortType = 'status'; sortReverse = !sortReverse"> Status <i ng-show="sortType == 'status' &amp;&amp; !sortReverse" class="icon-angle-up"></i> <i ng-show="sortType == 'status' &amp;&amp; sortReverse" class="icon-angle-down"></i> </a></td>
                                    <td><a href="#" ng-click="sortType = 'created'; sortReverse = !sortReverse"> Created <i ng-show="sortType == 'created' &amp;&amp; !sortReverse" class="icon-angle-up"></i> <i ng-show="sortType == 'created' &amp;&amp; sortReverse" class="icon-angle-down"></i> </a></td>
                                    <td><span class="">Actions</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus">
                                    <td>{{ roll.name }}</td>
                                    <td>{{ roll.status }}</td>
                                    <td>{{ roll.created }}</td>
                                    <td class="text-center"><div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<script>
    angular.module('sortApp', []).controller('mainController', function($scope) {
        $scope.sortType = 'name';
        $scope.sortReverse = false;
        $scope.searchstatus = '';
        $scope.sushi = [{
            name: 'HRMS - Citizenship',
            status: 'active',
            created: '2016-03-15'
        }, {
            name: 'FS - W2 Update',
            status: 'active',
            created: '2016-02-02'
        }, {
            name: 'FS - Direct Deposit',
            status: 'inactive',
            created: '2016-03-18'
        }, {
            name: 'FS - Tax Information',
            status: 'inactive',
            created: '2016-05-18'
        }, {
            name: 'IU Notify - Conatct Info',
            status: 'inactive',
            created: '2016-05-28'
        }, {
            name: 'IU Notify - Phone Update',
            status: 'inactive',
            created: '2016-05-17'
        }, {
            name: 'IU Notify - Email Update',
            status: 'inactive',
            created: '2016-05-15'
        }, {
            name: 'HC - Immunization Records',
            status: 'inactive',
            created: '2016-05-17'
        }, {
            name: 'HRMS - Military Status',
            status: 'active',
            created: '2016-04-04'
        }];
    });
</script> 
<script>
    $(document).ready(function() {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function() {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script> 
<script>
    $(document).ready(function() {
        $('#verify_now_select').change(function() {
            $('#verify_now_custom, #verify_now_standard').hide();
            $('#' + $(this).val()).show();
        });

        $('#verify_later_select').change(function() {
            $('#verify_later_custom, #verify_later_standard').hide();
            $('#' + $(this).val()).show();
        });
    });
</script> 
<script>
  $(function() {
    $('#toggle_status').change(function() {
	
       $('.hideable').fadeToggle();
    })
  })
</script> 
<script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function() {
        var $template = $(".template-add-data");
        var hash = 1;
        $(".btn-add-data").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-data" + (++hash))
                .text("Data Group " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-data" + (hash)).addClass("collapse").removeClass("in");
            $newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#accordion1").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
<script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        var $template = $(".template-add-group");
        var hash = 1;
        $(".btn-add-group").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-group" + (++hash))
                .text("Recipient Group " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-group" + (hash)).addClass("collapse").removeClass("in");
            $newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#accordion2").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
<script type="text/javascript">
$(document).ready(function() {
    $('a.addstuff').click(function() {
       $('#myTable tbody').append('<tr> <td><select class="form-control"> <option>unspecified</option> <option>API Source 1</option> <option>API Source 2</option> <option>API Source 3</option> <option>API Source 4</option> <option>API Source 5</option> </select></td> <td><select class="form-control"> <option>unspecified</option> <option>API Source 1</option> <option>API Source 2</option> <option>API Source 3</option> <option>API Source 4</option> <option>API Source 5</option> </select></td> <td><input type="text" class="form-control"></td> <td><input type="text" class="form-control"></td> <td> <a href="#" class="btn btn-xs btn-default deleterow" style="margin-top:5px">delete</a> </td> </tr>');
    });
	
	    


});
</script> 
<script>
$(document).ready(function(){

 $("table").on('click','.deleterow',function(){
       $(this).closest('tr').remove();
     });

});

</script> 
<script>

    var rules_basic = {
        condition: 'AND',
        rules: [{
            id: 'groupid'
           
        }]
    };

    $('#builder-basic').queryBuilder({
        plugins: ['bt-tooltip-errors'],

        filters: [{
            id: 'firstname',
            label: 'First Name',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		{
            id: 'lastname',
            label: 'Last Name',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		
		{
            id: 'email',
            label: 'Email',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		{
            id: 'username',
            label: 'Username',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		{
            id: 'groupid',
            label: 'Group ID',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		{
            id: 'personid',
            label: 'Person ID',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		
		
		
		 {
            id: 'role',
            label: 'Role',
            type: 'integer',
            input: 'select',
            values: {
                1: 'Faculty',
                2: 'Staff',
                3: 'Student',
                
            },
            operators: ['equal', 'not_equal']
        } 
		 ],

        rules: rules_basic
    });

    $('#btn-reset').on('click', function() {
        $('#builder-basic').queryBuilder('reset');
    });

    $('#btn-set').on('click', function() {
        $('#builder-basic').queryBuilder('setRules', rules_basic);
    });

    $('#btn-get').on('click', function() {
        var result = $('#builder-basic').queryBuilder('getRules');

        if (!$.isEmptyObject(result)) {
            alert(JSON.stringify(result, null, 2));
        }
    });
</script> 
<script type="text/javascript">
   // $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            if ($(this).attr("value") == "AND") {

                $("#posting_date_all").show();
                $(".rule-post-container").hide();
            }
            if ($(this).attr("value") == "OR") {
                $("#posting_date_all").hide();
                $(".rule-post-container").show();
            }
        });
        $('button[data-add="rule"]').click(function() {
           
            $(".rule-post-container").hide();
			 $("#posting_date_all").show();
			
			
			
        });
 //   });
</script> 
<script>

$(document).ready(function() {
    $("input[name$='activate']").click(function() {
        var test = $(this).val();

            $(".activate-option").hide();
        $("#activate" + test).show();
    });
});


</script> 
<script>


$(document).ready(function() {
           $(".rule-post-container").show();
});



</script> 
<script>

$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $('#dob').editable({
        format: 'mm-dd-yyyy',    
        viewformat: 'mm/dd/yyyy',    
        datepicker: {
                weekStart: 1
           }
        });
		
		
		$('.postdate').editable({
        format: 'mm-dd-yyyy',      
        viewformat: 'mm/dd/yyyy',    
        datepicker: {
                weekStart: 1
           }
        });
		
});


</script>
</body>
</html>
