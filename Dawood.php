
<html>

    <head>
        <title>Dawood</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="newjavascript.js" type="text/javascript"></script>
        <script src="ifcondition.js" type="text/javascript"></script>
        <script src="function.js" type="text/javascript"></script>
        <script src="formvalidation.js" type="text/javascript"></script>
        <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
        
        
   </head>
	
   <body class="body" style="color:blueviolet">
   <form action="get.php" method="GET" align="center" name="Form" onsubmit="return validate();">
        <img src="download.jpg"/>
            <h1 align="center">Admission Form </h1>
            <table class="table table-striped table-bordered table-hover" align="center" border="5" width="50%" length="50%" >
               <tr class="success">
                   <td><b>First Name:</b></td>
                   <td><input type="text"/></td>
               </tr>
               <tr class="warning">
                   <td><b>Second Name:</b> </td>
                   <td><input type="text"</td>
               </tr>
               <tr class="danger">
                   <td><b>User ID:</b></td>
                   <td><input type="text"/></td>
               </tr>
               <tr class="info">
                   <td><b>Password:</b></td>
                   <td><input type="text"/></td>
               </tr>
               <tr>
                   <td><b>Adress:</b></td>
                   <td><textarea rows = "5" cols = "50"></textarea>
                   </td>
               </tr>
               <tr>
                   <td><b>Contact No:<b/></td>
                   <td><input type="text"/>
               </tr>
               <tr>
                   <td><b>Gender:</b></td>
                       <td><input type="radio" name="subject" value="Male"/><b>Male</b>
                   <input type="radio" name="subject" value="Female"/><b>Female</b></td>
               </tr>
               <tr>
                   <td><b>Course:</b><select name = "dropdown">
                        <option class="green" value = "Web" selected>Web</option>
                        <option class="green" value = "C++">C++</option>
                        <option class="green" value = "Networking" selected>Networking</option></select>
                   </td>
               
                   <td><b>Country:</b> <select name="dropdown">
                           <option class="pink" value="Pakistan">Pakistan</option>
                           <option class="pink" value="UAE">UAE</option>
                           <option class="pink" value="USA">USA</option>
                           <option class="pink" value="India">India</option>
                           <option class="pink" value="Saudi Arabia">Saudi Arabia</option></select>
                   </td>
               </tr>

            </table>
            <div align="center">
        <input class="red" type = "submit" value = "Submit" name="submit">
       </div>
       </form>
       
   </body>
   
</html>