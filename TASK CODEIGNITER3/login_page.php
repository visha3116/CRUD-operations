<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
        if (isset($status)){
            echo $status;
            echo '<br>'.$test;
        }
        if(isset($msg)){
            echo '<h2>' . $msg. '<h2>';
        }
        ?>
        <form action="<?=base_url('login/savedata/')?>" method="post">
            <table cellspacing="20">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="stname"></td>  
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="number" name="stdob"></td>  
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login">
                    <a href= "<?=base_url('login/fetchdata')?>">view record</a>                
                </td>  
                </tr>
            </table>
        </form>
    </body>
</html>