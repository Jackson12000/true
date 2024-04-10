<!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile form</title>
    <style>
         .p1{
            font-family: Elephant;
            font-weight: bold;
            font-size: 20px;
            align-items: center;
        }
        form{
            width: 500px;
            height:600px;
        border: 2px solid red;
        }
        tr{
            color: deeppink;
            font-size: 25px;
        }
        tr td{
            font-size: 20px;
            color:  black;
            width: 100px;
            height: 40px;
        }
tr td input{
 font-size: 20px;
            color:  black;
            width: 300px;
            height: 40px;

}
    </style>

</head>
<body>
<center><div>
<button><a href="profiletable.php">profile Data</a></button>
<button><a href="liketable.php">Like Data</a></button>
<button><a href="unliketable.php">Unlike Data</a></button>
<button><a href="roletable.php">Role Data</a></button>
<button><a href="commenttable.php">Comment Data</a></button>
<button><a href="articletable.php">Article Data</a></button>
<button><a href="multimediatable.php">Multimedia Data</a></button>
<button><a href="friendtable.php">Friend Data</a></button>
</div></center>

<center>
<form action="profile.php" method="POST">
    <table><tr><h3  style="font-size: 20px;color: deeppink;"><i>PROFILE FORM</i></h3></tr>
    <tr><td>User ID</td>
    <td><input type="text" name="user" id="user"></td>
    </tr>
    <tr><td>Compus</td>
    <td><input type="text" name="campus" id="campus"></td>
    </tr>
    <tr>
    <td>College</td>
    <td><input type="text" name="college"  required=""></td></tr>
    <tr><td>School</td>
    <td><input type="school" name="School"  required=""></td></tr>

    <tr>
    <td>Department</td>
    <td><input type="department" name="department" value="" required="">
    </td></tr>

    <tr><td>Level</td>
    <td><input type="level" name="level"  required=""></td>
    </tr>
     <tr>
    <td>GroupName</td>
    <td><input type="Group" name="group" value="" required="">
    </td></tr>
     <tr>
    <td>RegNumber</td>
    <td><input type="text" name="regNumber" value="" required="">
    </td></tr>
    <tr><td>    </td><td><input type="submit" name="send"  value="send" style="background-color: black;color: white; width: 100px;">
    <input type="submit" name="send"  value="cancel" style="background-color: black;color: violet;width: 100px;"></td></tr></table>
</form></center>
<div><footer style="background-color:black;text-align: center;width:100%;height:auto; color: white;font-size: 25px;"><p>&copy Designed by Group 8  YEAR TWO BIT GROUP A &reg 2024</p></footer></div>
</body>
</html> 