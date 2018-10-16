<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Admin Login</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    
                <table class="table">
                    <tr>
                        <td><b><font color="white" size="3"> Enter Username </font></b></td>
                        <td><input type="text" name="un" placeholder="Enter Username" class="form-control"> </td>
                    </tr>
                      <tr>

                        <td><b><font color="white" size="3"> Enter Password </font></b></td>
                        <td><input type="text" name="ps" placeholder="Enter Password" class="form-control"> </td>
                      </tr>

                       <tr>
                         <td colspan="2"><input type="checkbox" name="c1" value="yes"> <b><font color="white" size="4"> Remember Me </font></b></td>
                       </tr>
                           
                           <tr>
                            <td colspan="2"><input type="button" name="btn" class="btn btn-primary" value="Login"> </td>
                          </tr>
                </table>
                </div>
                <div class="col-sm-1"></div>
                   
             </div>
            
        </div>
    </div>
</body>
</html>