<?php
include 'db2.php';
if (isset($_POST["submit"]))
{
$name = $_POST['name'];
$no = $_POST['phone'];
$mail = $_POST['email'];
/*$speci=$_POST['tspe'];*/
/*$teaid = $_POST['tid'];*/
$gender = $_POST['Gender'];
$quali = $_POST['check'];
$new_qual = implode(",",$quali);
   //explode(",",$new_qual);
$filen = $_FILES['file']['name'];
$filename = rand(100,10000)."-".$filen;
$query=mysqli_query($con,"INSERT INTO `teacher_db`(`name`, `mobile`, `email`,`gender`, `qualification`,`photo`) VALUES ('$name','$no','$mail','$gender','$new_qual','$filename')");


 #temporary file name to store file
    $tname = $_FILES['file']['tmp_name'];
    #upload directory path
  $uploads_dir = "img/".$filen;
    #TO move the uploaded file to specific location
   /* move_uploaded_file($tname, $uploads_dir);*/


if($query)
{
  echo "<br>Successful";
}
else
{
  echo "Failed";
}


}
?>

<!DOCTYPE html>
<html>
<head>
<title>FORM</title>
</head>
<body><MARQUEE><h3>AJA Creations</h3></marquee>
<form name="RegForm" method="POST" enctype="multipart/form-data">
<b><center><h2>creating new form<h2></center></b>
Teacher ID:
<input type="text" name="tid" id="tid" placeholder="enter your ID" onkeyup="allLetter(document.RegForm.name)" onkeypress="clearmsg('sp1')"><span id="sp1" style="color:#F00"></span><br>
<br>Name:
<input type="text" name="phone" id="nm" placeholder="Name" maxlength=10 onkeyup="clearmsg('sp2')"><span id="sp2" style="color:#F00"></span>
<br><br>
Mobile:
<input type="textarea" id="phn" value="" name="email" onkeydown="validateEmail(document.RegForm.email)"><span id="sp3" style="color:#F00"></span><br><br>
E-mail:
<input type="textarea" id="email" value="" name="email" onkeydown="validateEmail(document.RegForm.email)"><span id="sp4" style="color:#F00"></span><br><br>
<!-- Specification:
<input type="textarea" id="spec" value="" name="tspe"><br><br> -->
Gender:<br>
&nbsp;<input type="radio" value="male" name="Gender" id="gn" onchange="clearmsg('sp5')">Male<br>
&nbsp;<input type="radio" value="female" name="Gender" id="gn" onchange="clearmsg('sp5')">Female
<span id="sp5" style="color:#F00"></span><br>
<p>Qualification</p>
&nbsp;<input type="checkbox" value="SSLC" name="check[]" onchange="clearmsg('sp6')">SSLC<br>
&nbsp;<input type="checkbox" value="PLUSTWO" name="check[]" onchange="clearmsg('sp6')">Plus two<br>
&nbsp;<input type="checkbox" value="UG" name="check[]" onchange="clearmsg('sp6')">UG<br>
&nbsp;<input type="checkbox" value="PG" name="check[]" onchange="clearmsg('sp6')">PG
<span id="sp6" style="color:#F00"></span><br>
File:
<input type="file" name="file" id="file" name="fl" onchange="clearmsg('sp10')">
<span id="sp10" style="color:#F00"></span><br>
<input type="Submit" value="Submit" name="submit" onclick="return valid()">
</form>





<script type="text/javascript">
           
            function valid()
            {
              var name = document.getElementById('nm').value.trim();
              var mobile = document.getElementById('phn').value.trim();
              var emailid = document.getElementById('em').value.trim();
              var gendr = document.getElementsByName('Gender');
              var qualification = document.getElementsByName('check[]');
              var file1 = document.getElementById('file').value;
              
              if (name=="") 
                {
                  document.getElementById('sp2').innerHTML = "Name field required"; 
                  return false;
                }

              
              if (mobile=="") 
                  {
                      document.getElementById('sp3').innerHTML = "Mobile number required";
                    return false;
                }
                if (isNaN(mobile)) 
                  {
                    document.getElementById('sp3').innerHTML ="Mobile number must be a number";
                    return false;
                  }
                if (mobile.length<10)
                  {
                    document.getElementById('sp3').innerHTML = "Mobile number must contain 10 digits";
                    return false;
                  }
          
                if (emailid=="")
                  {
                      document.getElementById('sp4').innerHTML = "Enter E-mail id";
                      return false;
                  }

              //radio
                  var flag=0;
                  for(i=0;i<gendr.length;i++) 
                  {
                  if (gendr[i].checked==true)
                    {
                      flag=1;
                      break;
                    }
                  }
                  if (flag==0) 
                  {
                      document.getElementById('sp5').innerHTML = "select gender";
                      return false;
                  }
              //checkbox
                  var flagc=0;
                  for(i=0;i<qualification.length;i++)
                    {
                      if(qualification[i].checked==true)
                      {
                        flagc=1;
                        break;
                      }
                    }
                  if(flagc==0) 
                    {
                      document.getElementById('sp6').innerHTML = "select qualification";
                      return false;
                    }
        
                if(file1=="")
                 {
                  document.getElementById('sp10').innerHTML = "file is required";
                  return false;

                 }
                 
              }
              function clearmsg(span)
              {
                document.getElementById(span).innerHTML="";
                return true;
              }
              function allLetter(inputtxt)
              {
                var letters = /^[A-Za-z]+$/;
                if(inputtxt.value.match(letters))
                 {
                  document.getElementById('sp2').innerHTML="";
                  return true;

                 }
                 else
                 {
                  document.getElementById('sp2').innerHTML = "Name field must only contain alphabets";
                  return false;

                 }
              }
              function validateEmail(inputText)
              {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(!(inputText.value.match(mailformat)))
                 {
                  document.getElementById('sp3').innerHTML = "Enter valid email address";
                  return false;
                 }
                 else
                 {
                  clearmsg('sp3');
                 }
              }

                </script>
            </body>
            </html>