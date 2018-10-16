<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Add Author</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                      <div class="container">
                          <?php include('Common/left_menu.php'); ?> 
                           <div class="col-sm-5 ">
                             <p class="pull-right" style="margin-top: -15px;"><a href="<?= base_url('index.php/home/issue_book_list'); ?>" style="color: #FFF">Issue Book List</a></p>
                           
                            <hr>
                                <table >
                                      <tr>
                                           <td style="height: 20px;line-height: 20px; font-size: 19px;"> <b><font color="#FFF">Enter Member Id &nbsp;&nbsp; </font></b></td>
                                          <td><input type="text" name="id" placeholder="Enter Member Id" class="form-control"></td>
                                          <td>&nbsp;&nbsp;<input type="button" name="sub" value="Search" title="Search Now" class="btn btn-success"></td>
                                      </tr>
                                 </table>
                                 <hr>
                                 <table class="">
                                   <tr>
                                     <td><center><b><font color="#FFF" size="3">Id&nbsp;&nbsp;</font></b></center></td>
                                     <td><input type="text" name="id1" class="form-control"></td>
                                     <td><center><b><font color="#FFF" size="3" style="margin: 3px;">Name&nbsp;&nbsp;</font></b></center></td>
                                     <td><input type="text" name="name" class="form-control" ></td>
                                   </tr>
                                     
                                      <tr>
                                        <td><center><b><font color="#FFF" size="3">Address&nbsp;&nbsp;</font></b></center></td>
                                        <td><input type="text" name="address" class="form-control"></td>
                                        <td><center><b><font color="#FFF" size="3">E-mail</font></b></center></td>
                                        <td><input type="text" name="email" class="form-control" style="padding-bottom: 33px";></td>
                                      </tr>
                                      <tr>
                                         <td><center><b><font color="#FFF" size="3">Select</font></b></center></td>
                                        <td>
                                          <select name="s_book" class="form-control">
                                            <option> a</option>
                                            <option> b</option>
                                          </select>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td colspan="4"><input type="button" name="btn" value="Book Now" class="btn btn-outline-primary" style="margin-bottom: -38px;"></td>
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