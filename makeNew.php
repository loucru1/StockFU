<?php 
session_start();
if (!isset($_SESSION['logged_user'])){
    header('Location: StockFuLogin.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- JS file for easyAutocomplete-->
    <script src="EasyAutocomplete-1.3.3/jquery.easy-autocomplete.min.js"></script> 

    <!-- CSS file -->
    <link rel="stylesheet" href="EasyAutocomplete-1.3.3/easy-autocomplete.min.css"> 

    <!-- Additional CSS Themes file - not required-->
    <link rel="stylesheet" href="EasyAutocomplete-1.3.3/easy-autocomplete.themes.min.css"> 

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StockFu | New Chart</title>
</head>

<style type="text/css">
    footer{
        position: fixed;
        bottom: 0px;
        left: 0px;
        right: 0px;
        height: 50px;
        color: white;
        text-align: center;
        background: #9C9A9A;
    }
    td{
        padding: 30px;
        text-align: center;
    }
    .stockChart{
        border-style: solid;
        border-color: black;
        border-width: 5px;
        width: 75%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    #toolbar{
        left: 0px;
        right: 0px;
        top: 0px;
        position: absolute;
        background: #9C9A9A;
        width: 100%
    }
    #page-title{
        font-size: 200px;
    }
    #navbar-element{
        padding: 30px;
    }
</style>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <h1 class="page-title">Make a new chart<h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>
                            Stock name or symbol:<br>
                            <!--<input type="text" name="stock">-->
                            <input id="stock" />
                            <script>
                            var optionsList = [{"name":"blue"},{"name":"blargh"},{"name":"green"}];
                            var options = {data: optionsList, getValue: "name", list: { match: { enabled: true}}};
                            $("#stock").easyAutocomplete(options);
                            </script>
                            <input type="button" name="addstock" id="add" value="+">
                        </td>
                        <td>
                            Start Date:<br>
                            <input type="button" name="startDate" value="Start Date">
                        </td>
                        <td>
                            End Date:<br>
                            <input type="button" name="endDate" value="End Date">
                        </td>
                        <td>
                            Type of chart you want to show:<br>
                            <input type="radio" name="stockValue" value="Open"> Open<br>
                            <input type="radio" name="stockValue" value="High"> High<br>
                            <input type="radio" name="stockValue" value="Low"> Low
                        </td>
                        <td>
                            Make chart public?<br>
                            <input type="checkbox" name="public">
                        </td>
                        <td>
                            <a href="test.php">
                                <input type="button" name="finish" value="Finish">
                            </a>
                        </td>
                    </tr>
                    <tr id="secondOne" style="display: none;">
                        <td>
                            Stock name or symbol:<br>
                            <input type="text" name="stock">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <img src="sample.png" id="stockChart">
    </div>
    <script type="text/javascript">
        $('#add').click(function(){
            $('#secondOne').toggle("fast");
        });
    </script>
    <footer>
        <!-- Tell people that this is my website do not steal -->
        <div id="copyright">
            Copyright &copy; 2016 The Web Development Group. All rights reserved.
        </div>
	</footer> 
    
</body>
</html>