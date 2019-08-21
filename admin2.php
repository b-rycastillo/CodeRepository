<!DOCTYPE html>

<html>

<title>W3.CSS</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

* {

  box-sizing: border-box;

}

 

/* Add a gray background color with some padding */

body {


  padding: 20px;
  
  padding-top: 0px;
  padding-bottom: 1px;
  padding-left: 0px;
  padding-right: 10px;
  background: #f1f1f1;

}

 

/* Header/Blog Title */

.header {
    padding:    10px;
    font-size: 40px;
    text-align: center;
    background: white;
    //position: fixed;
    width: 102%;
    background-color: #236FAA;
    color: white;
    margin-right: -20px;
    //border-radius: 5px;
    //border: 3px solid white;
    //box-shadow: 10px 10px 5px grey;
}

 

/* Create two unequal columns that floats next to each other */

/* Left column */

.leftcolumn {  

  float: left;

  width: 60%;

}

 

/* Right column */

.rightcolumn {

  float: left;

  width: 40%;

  padding-left: 20px;

}

 

/* Add a card effect for articles */

.card {

   background-color: white;

   padding: 15px;

   margin-top: 20px;
   border-radius: 1em;
   border-color: #236FAA;
   border-style: outset;
   border: 2px ridge black;
   //box-shadow: 10px 10px 5px grey;

}

 

/* Clear floats after the columns */

.row:after {

  content: "";

  display: table;

  clear: both;

}

 

/* Footer */

.footer {
    padding: 2px;
    text-align: center;
    background: #ddd;
    margin-top: 1em;
    background-color: #236FAA;
    color: white;
    //border: 10px ridge white;
    box-shadow: 10px 10px 5px grey;
    width: 102%;
}


    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */

     @media screen and (max-width: 800px) {

          .leftcolumn, .rightcolumn {  

            width: 100%;

            padding: 0;

            }

    }
    
    a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        background-color: white;
        text-decoration: none;
        color: initial;
        text-align: center;
    }
    
    hr {
                border: 0;
                clear:both;
                display:block;
                width: 96%;                
                background-color: black;
                height: 1px;
            }

</style>

<body>



    <div class="w3-sidebar w3-bar-block w3-blue w3-card" style="width: 9.2em; background-color: #f1f1f1 !important; height: auto; margin-top: 5em; color: black !important;">

        <button style="border-right: 3px solid black; border-top: 3px solid black;" class="w3-button w3-block w3-left-align" onclick="myAccFunc()">

          <i class='fas fa-door-open' style='font-size:24px'></i>  Login<br />Authorization <i class="fa fa-caret-down"></i>

        </button>

        <div id="demoAcc" class="w3-hide w3-white w3-card">

            <a href="#" class="w3-bar-item w3-button">Low</a>

            <a href="medium.php" class="w3-bar-item w3-button">Medium</a>

            <a href="#" class="w3-bar-item w3-button">High</a>

        </div>



        <button style="border-right: 3px solid black; border-top: 3px solid black;" class="w3-button w3-block w3-left-align" onclick="myAccFunc1()">

            Accordion <i class="fa fa-caret-down"></i>

        </button>

        <div id="demoAcc1" class="w3-hide w3-white w3-card">

            <a href="#" class="w3-bar-item w3-button">Link</a>

            <a href="#" class="w3-bar-item w3-button">Link</a>

        </div>



        <button style="border-right: 3px solid black; border-top: 3px solid black;" class="w3-button w3-block w3-left-align" onclick="myAccFunc2()">

            Accordion <i class="fa fa-caret-down"></i>

        </button>

        <div id="demoAcc2" class="w3-hide w3-white w3-card">

            <a href="#" class="w3-bar-item w3-button">Link</a>

            <a href="#" class="w3-bar-item w3-button">Link</a>

        </div>



        <button style="border-right: 3px solid black; border-top: 3px solid black; border-bottom: 3px solid black;" class="w3-button w3-block w3-left-align" onclick="myAccFunc3()">

            Accordion <i class="fa fa-caret-down"></i>

        </button>

        <div id="demoAcc3" class="w3-hide w3-white w3-card">

            <a href="#" class="w3-bar-item w3-button">Link</a>

            <a href="#" class="w3-bar-item w3-button">Link</a>

        </div>

    </div>



    <div class="header" style="">

        <h3 style="" > <i class='fas fa-book-open' style='font-size:18px'></i> Low Level User Authorization Codes <i class='fas fa-book-open' style='font-size:18px'></i> </h3>

    </div>
    
    <?php
        $connect = @mysqli_connect('127.0.0.1','root','12345678','demo') or
        die('connection is not successful ERROR:'. mysqli_connect_error());
        echo "<br />";
        $desc_array = array("useless_desc");
        $language_array = array();
    ?>
    
    <div style="margin-left: 11em; margin-top: .5em; " class= "row"> 
        <div class= "leftcolumn"> 
        <p style="margin-left: 1em;" >We've added snippets of login authorization codes written in different languages to save you some time.</p>
    <?php if (isset($_POST['submit'])): ?>
    
        <?php

                    $messages=array();
                    $count = 0;

                    if(isset($_POST['submit'])){
 
                        if ( empty($_POST['name']) || empty($_POST['language']) || empty($_POST['desc']) || empty($_FILES['userfile']['type']) ){
                            ++$count;
                        }

                        if($count > 0){
                            echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '>You must enter a value in each field.</p>";
                        }
                        else{
                        //print_r($_FILES);
                            $user = $_POST['name'];
                            $language = ucwords($_POST['language']);    
                            $cur_date = $_POST['cur_date'];
                            $desc = $_POST['desc'];
                            $level = $_POST['level'];
                            $file_name = $_FILES['userfile']['name'];
                            $file_type = $_FILES['userfile']['type'];
                            $file_data =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
                            $query2 = "INSERT INTO login_blogs (level, language, description, user, date, file_name, file_type, file_data)VALUES('".$level."', '".$language."', '".$desc."', '".$user."', '".$cur_date."', '".$file_name."', '".$file_type."', '".$file_data."')";
                            $result2 = mysqli_query($connect, $query2);
                            if($result2){
                                echo "<div style='border-radius: 1em; background-color:grey; color: white; padding: 1em;'>Thank you! Your code have been posted.<hr><br/>Name: $user <br/>Description: $desc </div>";
                            }
                            else{
                                echo "<div style='border-radius: 1em; background-color:grey; color: white; padding: 1em; width: 50%;' >There was an error uploading your code.</div>";
                            }
                        }
                    }
                    $query = "SELECT * FROM login_blogs WHERE level = 1 ";  


        ?>
    
    <?php elseif (isset($_POST['filter_sort'])) : ?> 
    
        <?php
            $edit = 0;
            if ( empty($_POST['sort_type']) && !empty($_POST['lan_filter']) ){     
                $language = $_POST['lan_filter'];
                $query = "SELECT * FROM login_blogs WHERE level = 1 AND language = '".$language."' ";
                echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '> $language code snippets</p>";
                $edit = 1;
            }
            elseif ( !empty($_POST['sort_type']) && empty($_POST['lan_filter']) ){
                if ( $_POST['sort_type'] == 'user' ){
                    $sorting = $_POST['sort_type'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 ORDER BY ".$sorting." ASC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '>Code snippets sorted by ascending $sorting name order</p>";
                    $edit = 2;
                }
                elseif ( $_POST['sort_type'] == 'date' ){
                    $sorting = $_POST['sort_type'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 ORDER BY ".$sorting." DESC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '>Code snippets sorted by descending $sorting </p>";
                    $edit = 3;
                }
            }
            elseif ( !empty($_POST['sort_type']) && !empty($_POST['lan_filter']) ){
                $language = $_POST['lan_filter'];
                if ( $_POST['sort_type'] == 'user' ){
                    $sorting = $_POST['sort_type'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 AND language = '".$language."' ORDER BY ".$sorting." ASC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '> $language code snippets sorted by ascending $sorting name order</p>";
                    $edit = 4;
                }
                elseif ( $_POST['sort_type'] == 'date' ){
                    $sorting = $_POST['sort_type'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 AND language = '".$language."' ORDER BY ".$sorting." DESC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '> $language code snippets sorted by descending $sorting </p>";
                    $edit = 5;
                }
            }
            else{
                $query = "SELECT * FROM login_blogs WHERE level = 1 ";
            }
            
        
        ?>
    
    <?php elseif (isset($_POST['delete'])) : ?> 
    
        <?php
        
            if(isset($_POST['num_del']) && !empty($_POST['num_del']) ){
                        
                            if( ($_POST['num_del'])  < count($_POST['last_array']) ){
                                $number_delete = $_POST['num_del'];
                                $new_array = $_POST['last_array'];
                                $desc_delete = $new_array[$number_delete];
                                $query1 = "DELETE FROM login_blogs WHERE blog_id = '".$desc_delete."'";
                                $result1 = mysqli_query($connect, $query1);
                                
                                if($result1){
                                    echo "<p style='text-align:center; padding: 1em; border-radius: 1em; background-color: #515151; width: 50%; color: white; '> Code $number_delete snippet deleted.</p>";
                                }
                                else{
                                    echo "<p style='text-align:center; padding: 1em; border-radius: 1em; background-color: #515151; width: 50%; color: white; '> $Problem deleting code snippet.</p>";
                                }
                            }
                            else{
                                echo "<p style='text-align:center; padding: 1em; border-radius: 1em; background-color: #515151; width: 50%; color: white; '>None of the code snippets match the number you entered.</p>";
                            }
            }
                        
            else{
                echo "<p style='padding: 1em; border-radius: 1em; background-color: #515151 ; width: 50%; color: white; '>You must enter the number of the code snippet you wish to delete.</p>";
            }
            
            
            if (!empty($_POST['edited'])) {
                $level = $_POST['edited'];
                
                if ($level == 1){
                    $hidden_language = $_POST['hidden_language'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 AND language = '".$hidden_language."' ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '> $hidden_language code snippets</p>";
                    $edit = 1;
                    $language = $hidden_language;
                }
                elseif ($level == 2){
                    $hidden_sorting = $_POST['hidden_sorting'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 ORDER BY ".$hidden_sorting." ASC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '>Code snippets sorted by ascending $hidden_sorting name order</p>";
                    $edit = 2;
                    $sorting = $hidden_sorting;
                }
                elseif ($level == 3){
                    $hidden_sorting = $_POST['hidden_sorting'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 ORDER BY ".$hidden_sorting." DESC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '>Code snippets sorted by descending $hidden_sorting </p>";
                    $edit = 3;
                    $sorting = $hidden_sorting;
                }
                elseif ($level == 4){
                    $hidden_language = $_POST['hidden_language'];
                    $hidden_sorting = $_POST['hidden_sorting'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 AND language = '".$hidden_language."' ORDER BY ".$hidden_sorting." ASC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '> $hidden_language code snippets sorted by ascending $hidden_sorting name order</p>";
                    $edit = 4;
                    $language = $hidden_language;
                    $sorting = $hidden_sorting;
                }
                elseif ($level == 5){
                    $hidden_language = $_POST['hidden_language'];
                    $hidden_sorting = $_POST['hidden_sorting'];
                    $query = "SELECT * FROM login_blogs WHERE level = 1 AND language = '".$hidden_language."' ORDER BY ".$hidden_sorting." DESC ";
                    echo "<p style='padding: 1em; border-radius: 1em; text-align: center; background-color: #236FAA; color: white; '> $hidden_language code snippets sorted by descending $hidden_sorting </p>";
                    $edit = 5;
                    $language = $hidden_language;
                    $sorting = $hidden_sorting;
                }
            }
            else{
                $query = "SELECT * FROM login_blogs WHERE level = 1 ";  
            }
        
        ?>
    
    <?php else: ?> 
    
        <?php
            $query = "SELECT * FROM login_blogs WHERE level = 1 ";  
        ?>
        
    <?php endif; ?>  
        <?php           
            $query2 = "SELECT * FROM login_blogs WHERE level = 1 "; 
            $result2 = mysqli_query($connect, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            do {
                $checko = 0;
                foreach ($language_array as $value){
                    if ( strtolower(trim($value)) == strtolower(trim($row2['language'])) ){
                        $checko = 1;
                    }
                }
                if ($checko == 0){
                    array_push($language_array,"{$row2['language']}");
                }
                $row2 = mysqli_fetch_assoc($result2);
            } while ($row2); 
            
            $result = mysqli_query($connect, $query);

            $row = mysqli_fetch_assoc($result);
            do {
            echo "<div style='background-color: #fff9c9;' class='card'>";
                $current = count($desc_array);
                //echo " # $current";
                echo " <div style='display: flex; margin: auto; flex-wrap: wrap; ' > <p style='padding: 10px; border: 1px solid black; margin: auto; margin-top: 10px;' ># $current <br/> Language: {$row['language']} </p>";
                echo "<p style='padding: 10px; border: 1px solid black; margin: auto; margin-top: 10px;' >Author: {$row['user']} ";
                echo "<br/>Date: {$row['date']} 
                
                </p> ";
                echo "<p style='padding: 10px; border: 1px solid black; margin: auto; margin-top: 10px;'> Download code: <a target='blank_' href='view.php?id=".$row['blog_id']."'>".$row['file_name']."</a>";
                echo "<br/>";
                echo "Description: <a target='blank_' href='viewDescription.php?id=".$row['blog_id']."'>".$row['user']."-description.txt</a> </p>";
                echo "</div> </div>";
                array_push($desc_array,"{$row['blog_id']}");
                
                $row = mysqli_fetch_assoc($result);
            } while ($row);
            mysqli_close($connect);
        ?> 
              
        
        <br/>
            
        </div>
        <div style="display: flex; align-content:center; justify-content: center;" class= "rightcolumn">
            <div style="border:none; background-color: inherit; color: black; width: 25em; " class="card">
            
                <form id="form1" action="admin2.php" style="display:flex; flex-direction:column; max-width: 100%;" method="post" enctype="multipart/form-data">
                    <h4 style="text-align: center;"> <i class="fa fa-pencil-square-o" style="font-size:24px"></i> Post your Code</h4>
                    <?php
                        $cur_date = date ("Y-m-d H:i");
                        echo '<input type="hidden" name="cur_date" value="'.$cur_date.'">';
                        foreach($desc_array as $value)
                        {
                          echo '<input type="hidden" name="last_array[]" value="'.$value.'">';
                        }
                    ?>
                    <br/>
                    <button style="width: 60%; margin: auto; border-radius: 10px; background-color: #37962f; color: white" href="submit.php" > <i class="fa fa-pencil-square-o"></i> <a href="submit.php">Post</a></button>
                    <hr>
                    <h4 style="text-align: center;"> <i class='fas fa-filter' style='font-size:24px'></i> Filter Results</h4>                   
                    Language:
                    <select name="lan_filter">
                    <option style="display:none">
                    <?php
                        foreach ($language_array as $value){
                            echo "<option value='$value'>$value</option>";
                        }
                        
                        if ($edit == 1){
                            echo '<input type="hidden" name="edited" value="1">';
                            echo '<input type="hidden" name="hidden_language" value="'.$language.'">';
                        }
                        elseif ($edit == 2){
                            echo '<input type="hidden" name="edited" value="2">';
                            echo '<input type="hidden" name="hidden_sorting" value="'.$sorting.'">';
                        }
                        elseif ($edit == 3){
                            echo '<input type="hidden" name="edited" value="3">';
                            echo '<input type="hidden" name="hidden_sorting" value="'.$sorting.'">';
                        }
                        elseif ($edit == 4){
                            echo '<input type="hidden" name="edited" value="4">';
                            echo '<input type="hidden" name="hidden_language" value="'.$language.'">';
                            echo '<input type="hidden" name="hidden_sorting" value="'.$sorting.'">';
                        }
                        elseif ($edit == 5){
                            echo '<input type="hidden" name="edited" value="5">';
                            echo '<input type="hidden" name="hidden_language" value="'.$language.'">';
                            echo '<input type="hidden" name="hidden_sorting" value="'.$sorting.'">';
                        }
                    ?>
                    </select> 
                    <br/>
                    <h4 style="text-align: center;"> <i class="fa fa-unsorted" style="font-size:24px"></i> Sort Results</h4>
                    Sort By:
                    <select name="sort_type"> 
                        <option style="display:none">
                        <option value='user'>User Name</option>
                        <option value='date'>Newest-Oldest</option>
                    </select>              
                    <br/>
                    <button style="margin-top: 1em; width: 60%; margin: auto; border-radius: 10px; background-color:#c98d0a; color: white;" type="submit" name="filter_sort" form="form1" value="Filter/Sort"> <i class="fa fa-sort-amount-asc" ></i> Filter/Sort</button>
                    <button style="width: 60%; margin: auto; margin-top: 1em ; border-radius: 10px; background-color: #236FAA; color: white;" href="admin2.php" > <i class="fa fa-backward"></i> Original</button>
                    <hr>
                    <h4 style="text-align: center;"> <i class='fas fa-eraser' style='font-size:24px'></i> Delete a comment</h4> 
                    <small>Delete comment #: <input style="width: 2em;" type="text" name="num_del" /></small>
                    <br/>
                    <button style="width: 60%; margin: auto; border-radius: 10px; color: white; background-color: #a11010;" type="submit" name="delete" form="form1" value="Delete"> <i class='fas fa-eraser'></i> Delete</button>
                </form>
            
            </div>
            
        </div>
    </div>
    <br/>
    <div class="footer">

        <h3 style="" > <i class='fas fa-globe' style='font-size:20px'></i> OST Inc. 2019 <i class='fas fa-globe' style='font-size:20px'></i> </h3>

    </div>
    
<script>
    function myAccFunc() {

  var x = document.getElementById("demoAcc");

  if (x.className.indexOf("w3-show") == -1) {

    x.className += " w3-show";

    x.previousElementSibling.className += " w3-blue";

  } else {

    x.className = x.className.replace(" w3-show", "");

    x.previousElementSibling.className =

    x.previousElementSibling.className.replace(" w3-blue", "");

  }

}



function myAccFunc1() {

  var x = document.getElementById("demoAcc1");

  if (x.className.indexOf("w3-show") == -1) {

    x.className += " w3-show";

    x.previousElementSibling.className += " w3-blue";

  } else {

    x.className = x.className.replace(" w3-show", "");

    x.previousElementSibling.className =

    x.previousElementSibling.className.replace(" w3-blue", "");

  }

}



function myAccFunc2() {

  var x = document.getElementById("demoAcc2");

  if (x.className.indexOf("w3-show") == -1) {

    x.className += " w3-show";

    x.previousElementSibling.className += " w3-blue";

  } else {

    x.className = x.className.replace(" w3-show", "");

    x.previousElementSibling.className =

    x.previousElementSibling.className.replace(" w3-blue", "");

  }

}



function myAccFunc3() {

  var x = document.getElementById("demoAcc3");

  if (x.className.indexOf("w3-show") == -1) {

    x.className += " w3-show";

    x.previousElementSibling.className += " w3-blue";

  } else {

    x.className = x.className.replace(" w3-show", "");

    x.previousElementSibling.className =

    x.previousElementSibling.className.replace(" w3-blue", "");

  }

}

</script>



</body>

</html>
