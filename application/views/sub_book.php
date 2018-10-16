<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Issue Book List</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                      <div class="container">
                          <?php include('Common/left_menu.php'); ?> 
                           <div class="col-sm-5"><br>
                                 <table class="table">
                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Member id</font></b></td>
                                         <td colspan="2"><input type="text" name="mid" class="form-control"></td>
                                         <td colspan="2"><b><font color="#FFF">Name</font></b></td>
                                         <td colspan="2"><input type="text" name="name" class="form-control"></td>
                                     </tr>

                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Address</font></b></td>
                                         <td colspan="2"><input type="text" name="address" class="form-control"></td>
                                         <td colspan="2"><b><font color="#FFF">E-Mail</font></b></td>
                                         <td colspan="2"><input type="text" name="email" class="form-control"></td>
                                     </tr>

                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Book Name</font></b></td>
                                         <td colspan="2"><input type="text" name="bname" class="form-control"></td>
                                         <td colspan="2"><b><font color="#FFF">Price</font></b></td>
                                         <td colspan="2"><input type="text" name="price" class="form-control"></td>
                                     </tr>

                                     <tr>
                                         <td colspan="4"><input type="button" name="sub" value="Submit" class="btn btn-primary"></td>
                                     </tr>


                                 </table>
                               
                           </div>
                      </div>
                </div>
                <div class="col-sm-1"></div>
                   
             </div>
            
        </div>
    </div>
</body>
</html>