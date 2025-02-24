<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Student Data Entry Portal, Student Result Management System In PPHP Mysql" />
    <meta name="author" content="Sudhanshu Pandey" />
    <title>STUDENT DATA ENTRY PORTAL - Result Hosting™</title>
   <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- CUSTOM STYLE CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:500&subset=devanagari,latin" rel="stylesheet" type="text/css"/>
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <style>
  <style>
  body{
    font-family: 'Roboto', sans-serif;
	background-image:    url(../6subjects/images/a+e+d+resultbg.jpg);
    background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;              /* optional, center the image */
	}
</style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

<div class="panel-body">
	<form action="result_hosting_form_action.php" role="form">


	<div class="form-group input-group">
                                            <span class="input-group-addon">
                                            <i class="fa fa-building-o"></i>
                                            </span>
                                            <input type="text" name="sn" id="fname" class="form-control" placeholder="Full Name Of School.." required/>
                                        </div>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" name="stn" id="lname" class="form-control" placeholder="Full Name Of Student" required/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                                            <input type="text" name="fn" id="login" class="form-control" placeholder="Full Name Of Father.." required/>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" placeholder="term" name="dob" id="login" class="form-control" min="1990-01-01" max="2021-12-31" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                                           <select class="form-control" name="gen" id="status" required>
  <option value="">-------------Select Gender-------------</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
                                        
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="hin" id="login" class="form-control" placeholder="Computer test" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="comp1" id="login" class="form-control" placeholder="Computer exam" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="eng" id="login" class="form-control" placeholder="English test" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="eng_exam" id="login" class="form-control" placeholder="English exam" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="math" id="login" class="form-control" placeholder="Maths test" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="math_exam" id="login" class="form-control" placeholder="Maths exam" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="phy" id="login" class="form-control" placeholder="Physics test" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="phy_exam" id="login" class="form-control" placeholder="Physics exam" required/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="chem" id="login" class="form-control" placeholder="Chemistry test" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            <input type="text" name="chem_exam" id="login" class="form-control" placeholder="Chemistry exam" required/>
                                        </div>
                                    
                                     
                                     
                                     <div class="row">
				 
					</span>
				</div>
				
			</div
                                    <hr />
                                    
                                     <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Submit Data</button> Or  <button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span> Reset The Form</button>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
</div>
</div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/plugins/bootstrap.js"></script>
    <script language="javascript" type="text/javascript">   
document.write("<div style='display:none;'>");   
</script><div>   
<h1><a href="#" title="Result Hosting" name="Result Hosting">Result Hosting</a></h1>
<h2><a href="#" title="Result Hosting" name="Result Hosting">Result Hosting</a></h2>  </div>
<script language="javascript" type="text/javascript">   
document.write("</div>");   
</script>
</div> 
</div> 
</body>
</html>