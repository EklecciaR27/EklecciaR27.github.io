<?php
$koneksi = mysqli_connect("localhost", "root", "", "database_pv");
$statistik = query("SELECT * FROM form_pv");

function query($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $rows[ ] = $row;
    }

return $rows; 

}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database_Form</title>
    <link rel="stylesheet" href="stylereadpg.css">  
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
                    <li><a href="form.php">FORM</a></li>
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

    <table cellpadding=10 cellspacing=0>
        <tr>
            <th>LIST</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DATE OF BIRTH</th>
            <th>MESSAGE</th>
            <th>Submit Time</th>
            <th>UPLOAD</th>
            <th colspan = 2>ACTION</th>
        </tr>
        <?php $y = 1?>
        <?php foreach($statistik as $data) : ?>
        <tr>
            <td><?php echo $y; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["phone"]; ?></td>
            <td><?php echo $data["dob"]; ?></td>
            <td><?php echo $data["message"]; ?></td>
            <td><?php echo $data["submit"]; ?></td>
            <td><img src="gambar/<?=$data['gambar']?>" alt="" width="100px"><br><?php echo $data["gambar"]; ?></td>
            <td><a class = "iconupdate" href="update.php?id=<?php echo $data["id"];?>">Update</a></td>
            <td><a class = "icondel" href="delete.php?id=<?php echo $data["id"];?> ">Delete</a></td>
        </tr>
        <?php $y++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>