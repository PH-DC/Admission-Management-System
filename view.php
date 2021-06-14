<html>
<head>
    <link rel="stylesheet" href="assets/css/table.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="main-div">
        <h1>List Of Students</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Enrollment Number</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Admission Year</th>
                            <th>Branch</th>
                            <th>Email Id</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                       $servername="localhost";
                       $username="root";
                       $password="";
                       $dbname="student_data";

                       $conn=new mysqli($servername,$username,$password,$dbname);

                       $selectquery = "SELECT * FROM data ";

                       $query = mysqli_query($conn,$selectquery);

                       $nums = mysqli_num_rows($query);


                       while($res = mysqli_fetch_array($query))
                       {   
                        ?>                   
                           <tr>
                            <td><?php echo $res['Senrollid']; ?></td>
                            <td><?php echo $res['Sname']; ?></td>
                            <td><?php echo $res['Sdob']; ?></td>
                            <td><?php echo $res['Sadmission']; ?></td>
                            <td><?php echo $res['Sbranch']; ?></td>
                            <td><?php echo $res['Smail']; ?></td>
                            <td><?php echo $res['Sphone']; ?></td>
                        </tr>

                        <?php
                        
                        }      

                        ?>                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>