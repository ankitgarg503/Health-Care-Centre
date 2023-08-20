<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
        .btn:hover {
        background-color: pink;
    }

    .container {
        border: 0px solid rgb(15, 2, 2);
        margin: 80px 90px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    }
    .form-group input {
        font-family:  'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
        display: block;
        width: 408px;
        padding: 2px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 25px;
        border-radius: 8px;
    }
    .container button {
        display: block;
        width: 74%;
        margin: 20px auto;
    }
    .btn {
        font-family:  cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 10px;
        border: 2px solid yellow;
        border-radius: 10px;
        font-size: 20px;
        
        }
        .container h1 {
        text-align: center;
    }
    h1{
        color:purple;
    }
    body{
    background-size: 1600px;
    background-image: url('i5.webp');
    background-repeat: no-repeat;
    height: 715px;
  }

        </style>

        <script>
            function validation()
            {
                var result=true;
                var i=document.getElementsByTagName("input");
                if(i[0].value.length==0)
                {
                    result=false;
                     alert("Name field  CAn't be Empty ");
                    return(result);    
                }
                                
                if(i[1].value.length<=6)
                {
                    result=false;
                     alert("PAssword Contain Atleast 6 characters ");
                    return(result);    
                }
                if(i[2].value.length<=7)
                {
                    result=false;
                     alert("InValid Email Adress ");
                    return(result);    
                }

                if(i[3].value.length<=9)
                {
                    result=false;
                     alert("Mobile number is INVALID ");
                    return(result);    
                }
                if(i[4].value.length<=1)
                {
                    result=false;
                     alert(" Product id is Invalid ");
                    return(result);    
                }
                if(i[5].value.length<=5)
                {
                    result=false;
                     alert(" Adress is Invalid ");
                    return(result);    
                }
                
            }
            </script>

    </head>
    <body bgcolor="black">
        <div class="container">
           <marquee> <h1>Enter Your Details</h1> </marquee>
            <form action="http://localhost/HCC%20project/sconn.php" method="post" onsubmit="return validation()">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <input type="password" name="" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                    <input type="text" name="mail" placeholder="Enter your Email Id">
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" placeholder="Enter your Phone Number">
                </div> 
                <div class="form-group">
                    <input type="text" name="pid" placeholder="Enter your disease">
                </div>
                <div class="form-group">
                    <input type="text" name="adress" placeholder="Enter your Adress">
                </div>
                
               <!-- <input type="submit" value="insert"/>-->
                <button class="btn">Submit</button> 
            </form>
        </div>

    </body>
</html>