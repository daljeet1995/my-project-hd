<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Add Member</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                      <div class="container">
                          <?php include('Common/left_menu.php'); ?> 
                           <div class="col-sm-5"><br>
                              <p><a href="<?= base_url('index.php/home/member_lst'); ?>" class="pull-right" style="color: #FFF">Member List</a></p>
                                 <table class="table">
                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Name</font></b></td>
                                         <td colspan="2"><input type="text" name="name" placeholder="Name" class="form-control"></td>
                                     </tr>
                                     <tr>
                                          <td colspan="2"><b><font color="#FFF">Address</font></b></td>
                                         <td colspan="2"><input type="text" name="address" placeholder="Address" class="form-control"></td>
                                     </tr>

                                     <tr>
                                        <td colspan="2"><b><font color="#FFF">E-Mail</font></b></td>
                                         <td colspan="2"><input type="text" name="email" placeholder="E-Mail" class="form-control"></td>
                                     </tr>

                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Mobile Number</font></b></td>
                                         <td colspan="2"><input type="text" name="mno" placeholder="Mobile Number" class="form-control"></td>
                                         
                                     </tr>

                                     <tr>
                                         <td colspan="4"><input type="button" name="sub" value="Add" class="btn btn-primary"></td>
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