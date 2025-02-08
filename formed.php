<?php
session_start();
include("db.php");

if($SERVER['REQUEST_METHOD']=="POST")
{
    $nName=$_POST['Name'];
    $age=$_POST['Age'];
    $dob=$_POST['dateofbirth'];
    $orp=$_POST['orphan'];
    $loc=$_POST['location'];
    $gend=$_POST['gender'];
    $sufer=$_POST['suffer'];
    $write=$_POST['writehere'];
    $person=$_POST['pname'];
    $mail=$_POST['email'];
    $pl=$_POST['place'];
    $con=$_POST['phn'];
    if(!empty($location)  && !empty($Age) && ! is_numeric($Age))
    {
        $query="insert into form(Name,Age,dateofbirth,orphan,location,gender,suffer,writehere,pname,email,place,phn) values('$nName',' $age', '$dob',$orp','$loc','$gend','$sufer','$write','$person','$mail','$pl','$con')";


        mysqli_query($con,$query);
        echo"<script type='text/javascript'>alert('Successfully Register')</script>";
    }
    else
    {
        echo"<script type='text/javascript'>alert('please enter some valid information')</script>";

}

?>



<html>
    <head>
        <style>
            body{
                background-image:url('https://media.istockphoto.com/id/1399900774/photo/black-and-white-portrait-of-sad-anonymous-little-boy.jpg?s=612x612&w=0&k=20&c=-jaAUqYyOlkkPmsBAqvlKzd9Fw_f4WluGHHrEOWOryA=') ;
                
                background-attachment:fixed ;
                background-repeat:no-repeat ;
                background-size:cover;
                margin-left:20%;
                
            }
            h3{
                color:rgb(255, 255, 255);
            }

        h1
        {
                color:rgb(255, 255, 255);
                align:middle;
        }
       
        form{ align-items:end;
        height:1000px;
        width:1000px;
        margin:5px;
        margin-top:1px;

        }
        submit
        {
            margin:5px 0;
            padding:5px 10px;
            background-color:rgb(0, 0, 0);
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
        td{
            align:center;
            height:30;
            font: weight 900px;
            color:white;

        }
        th{

            align:center;
            color:white;
        }
        

        </style>
        <title>Registration form</title>
    </head>
    <body>
        <div class="left">
       <form method="POST">
        <h1 style="align:middle;">Registration form</h1>
    <h3 align="left">Fill the registartion form below with appropriate data</h3>
    <table style="border;
    background-color: rgb(159, 140, 140));
    column-gap:4;
    row-gap:3;
    padding-left:100px;
    padding-right:100px;
    padding-top:100px;padding-bottom: 100Px;
    align:middle;">
    <th><u>Registration Form </u></th>
    <br>
    <tr>
    <td>Name</td>
     <td><input type="text" name="Name" value="" required/></td>
     </tr><br>
     <tr>
    <td>Age/approximate age</td>
     <td> <input type="number" name="Age" value="" required/></td>
     </tr><br>
     <tr>
        <td>Date of birth</td>
        <td>
            <input type="text" name="dateofbirth"value=""/>
        </td>
     </tr>
     <tr>
        <td>whether the child is orphan or missed child</td>
       <td> 
        <select name="orphan">
            <option value="select">Select</option>
            <option value="Boy">ORPHAN</option>
            <option value="bodyGrowth">MISSED CHILD</option> 
            </select>
        </td>
     </tr>
     <tr>
    <td>Location</td>
     <td> <input type="text" name="location" value="" required/></td>
     </tr><br>
     <tr>
    <td>Gender</td>
     <td> 
        <select name="gender">
            <option value="select">Select</option>
            <option value="Boy">BOY</option>
            <option value="bodyGrowth">GIRL</option> 
            </select>
        
        </td>
     </tr><br><br>
     <td> whether child is suffering with any health issues</td>
     <td> 
        <select name="suffer">
        <option value="select">Select</option>
        <option value="malnutritiontion">Malnutrition</option>
        <option value="bodyGrowth">BodyGrowth</option> 
        <option value="mental disablity">Menetal disability</option> 
        <option value="eye defect">Eye defeact</option>
        </select><br>
        <label for="fnmae">if the child is suffering with any other health issues mention below:</label><br>
        <textarea rows="4" cols="40" name="writehere" wrap="hard">enter text here</textarea>><br>
        </td>
     </tr><br>
     
     
     <th><u>Guardian Form</u></th> 
     

     <tr>
        <td>
            Name who is joing the child
        </td>
        <td>
            <input type ="text" name="pname" value=""/>
        </td>
     </tr>
     <tr>
        <td>
            email address
        </td>
        <td>
            <input type ="email" id="email" pattern="[a-zA-Z0-9._%+?]+@[a-zA-Z0-9._%+?]+\.[a-zA-z]{3}$" required/>
        </td>
     </tr>
     <tr>
        <td>
            location of guardian
        </td>
        <td>
            <input type ="text" name="place" value=""/>
        </td>
     </tr>
     <tr>
        <td>
            contact no
        </td>
        <td>
            <input type ="tel"  id="phone"name="phn" value="" pattern="[0-9]{10}"/>
            
        </td>
     </tr>
     <th>click on the submit button to finish the registration</th>
     <td> 
        <input type="submit" value="Submit"/></td>
     </table>
    </div>
     
    
    
</form>
    

     

    </body>
</html>