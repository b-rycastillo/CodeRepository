<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/prism.css">
    <link rel=stylesheet href="css/docs.css">
    <link rel="stylesheet" href="css/codemirror.css">
    <script src="js/codemirror.js"></script>
    <script src="js/placeholder.js"></script>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <style>
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .CodeMirror { border: 1px solid silver; }
        .CodeMirror-empty { outline: 1px solid #c22; }
        .CodeMirror-empty.CodeMirror-focused { outline: none; }
        .CodeMirror pre.CodeMirror-placeholder { color: #999; }
        
    </style>

</head>
<body style="background-color: #236FAA;" >

    <?php if (isset($_POST['submit'])): ?>
    
    <?php
    
        $count = 0;
        $connect = @mysqli_connect('127.0.0.1','root','12345678','demo') or
        die('connection is not successful ERROR:'. mysqli_connect_error());
        echo "<br />";
    
        if ( !empty($_POST['filename'])) {
        //Save File
        $file = fopen($_POST['filename'] ,"r+");
        $text = $_POST["code"];
        file_put_contents('description.txt', $text);
        $description_file = file_get_contents("description.txt");
        fclose($file);
        
        if ( empty($_POST['code']) || empty($_POST['level']) || empty($_POST['language']) || empty($_POST['service']) || empty($_FILES['userfile']['type']) ){
            ++$count;
        }

        if($count > 0){
            echo "<div style='border-radius: 1em; margin-top:10em; margin-left:10%; margin-right:10%; text-align:center; background-color:#e5f0ff; color: black; padding: 3em;' >You must enter a value for each field. <br/><br/> <a href='admin2.php' >Return to the blog page</a> or <a href='submit.php' >Try to post code again</a> </div>";
        }
        else{
            $user = $_POST['name'];
            $language = $_POST['language'];
            $cur_date = $_POST['cur_date'];
            $level = $_POST['level'];
            $service = $_POST['service'];
            $file_name = $_FILES['userfile']['name'];
            $file_type = $_FILES['userfile']['type'];
            $file_data =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));  
            if ($service == "Login Authorization"){
                $query2 = "INSERT INTO login_blogs (level, language, description, user, date, file_name, file_type, file_data)VALUES('".$level."', '".$language."', '".$description_file."', '".$user."', '".$cur_date."', '".$file_name."', '".$file_type."', '".$file_data."')";
            }
            $result2 = mysqli_query($connect, $query2);
            if($result2){
                echo "<div style='border-radius: 1em; margin-top:10em; margin-right:10%; margin-left:10%; text-align:center; background-color:#e5f0ff; color: black; padding: 3em;'>Thank you $user"."! Your code has been posted.<hr><br/> <a href='admin2.php' >Return to the blog page</a> or <a href='submit.php' >Submit another code</a> </div>";
            }
            else{
                echo "<div style='border-radius: 1em; margin-top:10em; margin-right:10%; margin-left:10%; text-align:center; background-color:#e5f0ff; color: black; padding: 3em;' >There was an error uploading your code. <br/> <a href='admin2.php' >Return to the blog page</a> or <a href='submit.php' >Submit another code</a> </div>";
            }
            
        }
        
    }
    
    ?>
    
    <?php else: ?>
    
	<div style="background-color: #236FAA; " class="container-contact100">
		<div class="wrap-contact100">
			<form method="post" action="submit.php" class="contact100-form validate-form" enctype="multipart/form-data">
				<span class="contact100-form-title" style="font-family: "Trebuchet MS, Helvetica, sans-serif;" >
				 <i class="fa fa-pencil-square-o" style="font-size:34px"></i>	Post Your Code
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>


				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Code Type *</span>
					<div>
						<select style="width: 275px;" class="chosen-select" data-placeholder="Choose a Code Type" name="service">
							<option value=""></option>
							<option>Login Authorization</option>
							<option>Algorithms</option>
							<option>UX</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Language *</span>
                    <div>
                        <select style="width: 275px;" name="language" data-placeholder="Choose a Programming Language" class="chosen-select" tabindex="1">
                                    <option value=""></option>
                                    <option value="Python">Python</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Java">Java</option>
                                    <option value="C#">C#</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value=".NET">.NET</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Javascript">Javascript</option>
                                    <option value="SQL">SQL</option>
                                    <option value="JQuery">JQuery</option>   
                        </select>
                        <div class="dropDownSelect2"></div>                                 
                    </div>
                </div>
                
                
                
                
                <div class="wrap-contact100-form-radio">
                        <span class="label-input100">Select the level of your code</span>

                        <div class="contact100-form-radio m-t-15">
                            <input class="input-radio100" id="radio6" type="radio" name="level" value="1" checked="checked">
                            <label class="label-radio100" for="radio6">
                                Low
                            </label>
                        </div>

                        <div class="contact100-form-radio">
                            <input class="input-radio100" id="radio7" type="radio" name="level" value="2">
                            <label class="label-radio100" for="radio7">
                                Medium
                            </label>
                        </div>

                        <div class="contact100-form-radio">
                            <input class="input-radio100" id="radio8" type="radio" name="level" value="3">
                            <label class="label-radio100" for="radio8">
                                High
                            </label>
                        </div>
                </div>
                
                
                <?php
                    $cur_date = date ("Y-m-d H:i");
                    echo '<input type="hidden" name="cur_date" value="'.$cur_date.'">';
                ?>
                
				<div style="margin-top: 1em; background-color:#eaf2ff; " class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Description">
                    <span class="label-input100">Description</span>
                    
                    <textarea id="code" name="code" placeholder="Enter your description here..."></textarea>
                    <input type="hidden" name="filename" value="description.txt">
                    
                </div>
                
                
                <label class="custom-file-upload">
                    <input type="file" name="userfile" />
                    <i class="fa fa-cloud-upload"></i> Choose File
                </label>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit" >
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
                
              <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
              <script src="js/chosen.jquery.js" type="text/javascript"></script>
              <script src="js/prism.js" type="text/javascript" charset="utf-8"></script>
              <script src="js/init.js" type="text/javascript" charset="utf-8"></script>
                
			</form>
		</div>
	</div>

    <?php endif; ?> 

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
        
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true
        });
        
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
        
        var textareas = document.getElementsByTagName('textarea');
        var count = textareas.length;
        for(var i=0;i<count;i++){
        textareas[i].onkeydown = function(e){
        if(e.keyCode==9 || e.which==9){
            e.preventDefault();
            var s = this.selectionStart;
            this.value = this.value.substring(0,this.selectionStart) + "\t" + this.value.substring(this.selectionEnd);
            this.selectionEnd = s+1; 
        }
    }
}
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
