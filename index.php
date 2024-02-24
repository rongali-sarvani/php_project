<html>
    <head>
        <style>
            *
            {
                margin: 0px;
                padding: 0px;
                font-family: 'roboto',sans-serif;
            }
.container
{
    width:100%;
    height:100vh;
    background-image: linear-gradient(rgb(227, 173, 184),rgba(79, 75, 75, 0.7)),url(welcometoanits.jpg);
    background-position: center;
    background-size: cover;
}
h1
{
    background-color: black;
    padding: 20px;
    color: white;
}

h2
{
    color:white;
    background-color:rgb(11, 12, 12);
    padding:20px;
}
.t1
{
    margin-top: 180px;
    margin-left:1100px;
    margin-bottom: 500px;
    margin-right:100px;
    border-radius:10px;
    border-color:rgb(15, 14, 14);
    background-color:rgb(15, 14, 14);
    width:400px;
    height:350px;
}
button
{
    width:100px;
    height:30px;
    font-size: medium;
}

.t2
{
   background-color:rgb(41, 170, 41);
   border-color:rgb(57, 157, 57);
   border-radius:5px;
   
   
}

.t4
{
    background-color: crimson;
    color: gold;
    border-radius:5px;
}
td
{
    text-align: center;
    color: white;
}
tr
{
    margin-left: 20px;
}
a
{
    color:goldenrod;
}
.logbtn
{
    margin-left:950px;
   
   
}
form
{
    display:none;
}
.image
{
    
    width:200px;
    height:230px;
    display:inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing:border-box;
    cursor:pointer;
    margin:10px 15px;
    background-image: url(pic1.jpg);
    background-position: center;
    background-size: cover;
}


.images
{
    float:left;
    margin-top: 200px;
    
}


        </style>
    </head>
    <body>
        <div class="container">

          <div> <h1>ANITS TRANSPORT <button  class="logbtn" onclick="document.getElementById('f1').style.display='block'" style="width:100px;">login</button></h1>
            
        </div>
        <div class="images" >
            <div class="image">
                <h4>A bus</h4>
            </div>
            <div class="image">
                <h4>B bus</h4>
            </div>
            <div class="image">
                <h4>C bus</h4>
            </div>
            <div class="image">
                <h4>D bus</h4>
            </div>
        </div>

          <div class="loginpage"> 
            <form id="f1" onsubmit="return validation()" action="authentication.php" method="POST">
            <fieldset class="t1">
                <h2 align="center">login</h2>
                <hr>
                <br>
                <table align="center" cellspacing="10px">
                    <tr>         
                        <td><label for="user">username:</label></td> 
                        <td><input type="text" id="user" name="user" required></td>
                    </tr>
           
                    <tr>
                        <td><label for="pass">password:</label></td>
                        <td><input type="password" id="pass" name="pass" ></td> 
                    </tr>

                    <tr>
                        <td><label>Id: </label></td>
                        <td><input type="text" name="id"></td>
                    </tr>
                </table>
    
        <table align="center" width="100%">
            <tr>
                <td align="center"><button type="submit" class="t2">login</button>
                  
                </td>
                
            </tr>
                
        </table>
        
        <table align="center">
            <tr>         
           
           <td><input type="checkbox" checked="checked">Remember me</td>
           </tr>
          
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
           <tr>
           <td><button type="button" class="t4">Cancel</button></td>
           <td>Forgot <a href="#">password?</a></td>
            </tr>
            
         </table>
        
        
        </fieldset>
        </form>
    </div>
        <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            } 

            
        
    
        </script>

        </div>
    </body>
</html>