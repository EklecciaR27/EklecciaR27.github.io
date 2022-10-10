<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETINTOUCH | PV</title>
    <link rel="stylesheet" href="sstyle.css">  
</head>

<body>
    <div class="line"></div>
    <div class="logo">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9abc83cd-2de2-4604-aa71-0e16b649f129/dfb7rrf-40a1d3ef-2f25-4306-909a-a1b856f3b6ec.png/v1/fill/w_1280,h_220,strp/blackpink_pink_venom_logo_png_by_dystoca_dfb7rrf-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MjIwIiwicGF0aCI6IlwvZlwvOWFiYzgzY2QtMmRlMi00NjA0LWFhNzEtMGUxNmI2NDlmMTI5XC9kZmI3cnJmLTQwYTFkM2VmLTJmMjUtNDMwNi05MDlhLWExYjg1NmYzYjZlYy5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.jJBV4IM_EgVqzOH1g2CpeJ4xLr7CuAQYf522hOoBGiA" width="350px">
    </div>
    
    <h1 id="header1">YG ENTERTAINMENT</h1>
    <nav>
        <div>
            <ul>
                <li><a class="active" href="index.html">MAIN</a></li>
                <li><a href="#Profile">PROFILE</a></li>
                <li><a href="concert.html">CONCERT</a></li>
                <li><a href="about.html">ABOUT</a></li>
            </ul>
            
        </div>
    </nav>
    
    <div class="iconform">
        <img src='iconform.png' alt="ya ini" height="60px" weight="60px">
    </div>

    <div class="header_form">
        YG <br>
        CONNECT GROUP
    </div>

    <div class="contact-box">
        <div class="contact-left">
            <h3>successfully added request</h3>
            <p>
            <b>Name : </b> <br>
            <?php echo $_POST["name"]; ?> <br><br>
            <b>Email address :</b> <br>
            <?php echo $_POST["email"]; ?> <br><br>
            <b>Phone Number :</b> <br>
            <?php echo $_POST["phone"]; ?> <br><br>
            <b>Date Of Birth :</b> <br>
            <?php echo $_POST["dob"]; ?> <br><br>
            </p>

        </div>

        <div class="contact-right">
            <h3>REACH US</h3>
            <table>
                <tr>
                    <td>Email</td>
                    <td>PinkVenom@YGEnt.Com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>+123 43212</td>
                </tr>
                <tr>
                    <td>Office</td>
                    <td>
                        St.Marie Street 27, NewYork <br>
                        Myongdong Han-Po 32, South Korea <br>
                        Thamrin 66, Indonesia <br>
                        Harchico Street 82, Japan <br>
                        Bonjour Street 21, France <br>
                    </td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>@YG_Entertainment</td>
                </tr>
            </table>

        </div>
    </div>

    
    <br>
    <script src="javascript.js"></script>
    
    <div class="tombol">
        <button class="lightmode" onclick="ubahWarna()"><img src="sun.png" height="25px" height="25px"></button>
        <button class="darkmode" onclick="ubahWarna()"><img src="moon.png" height="25px" height="25px"></button>
    </div>

 
    <footer>
        <br>
        Copyright &copy; 2022
        Designed by Ekleccia
    </footer>

    <script>
    const element = document.getElementById("myBtn");
    element.addEventListener("click", function() {
    document.getElementById("addevent").innerHTML = "Great";
    addevent.style.color = "#af4c6b";
    });
    </script>

    <script>
        const header1 = document.getElementById('header1');
        header1.style.color = "white";
    </script>


   

</body>
</html>