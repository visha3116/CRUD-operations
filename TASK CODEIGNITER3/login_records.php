<html>
    <head>
        <title>Login record</title>
        <style>
            .result,.result td, .result th{
                border: 1px solid black;
                border-collapse:collapse;
                padding:7px;
                margin:auto;
                background-color:lightblue;
            }
            .result th{
                background-color:lightskyblue;
            }
        </style>
    </head>
    <body>
        <a href= "<?=base_url('login/college')?>">go to login page</a>


        <?php
        if (isset($data)){
            ?>
        <form action = "<?=base_url('login/update')?>" method= "post">
            <table cellspacing="20">
                <tr>
                    <td>Id</td>
                    <td><input name="stid" value="<?=$data[0]->id?>"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="stname" value="<?=$data[0]->student_name?>"></td>
                </tr>
                <tr>
                    <td>dob</td>
                    <td><input name="stdob" value="<?=$data[0]->student_dob?>"></td>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                </tr>
            </table>
        </form>
        <?php
        }else{
        ?>
        <table class ="result">
            <tr>
                <th>Action</th>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
            </tr>
            <?php
            if(isset($table)){
                foreach ($table as $row) {        
            ?>
             <tr>
                <td> <a href ="<?=base_url('login/edit/'.$row->id)?>"> Edit</a></td>
                <td><?=$row->id?></td>
                <td><?=$row->student_name?></td>
                <td><?=$row->student_dob?></td>
             </tr>
             <?php
            }
        }  
    }
        ?>           
         </table>
    </body>
</html>