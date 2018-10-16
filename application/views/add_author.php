<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Add Author</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                      <div class="container">
                          <?php include('Common/left_menu.php'); ?> 
                           <div class="col-sm-5">
                                 <table >
                                      <tr>
                                           <td style="height: 20px;line-height: 20px; font-size: 19px;"> <b><font color="#FFF">Author Name: &nbsp;&nbsp; </font></b></td>
                                          <td><input type="text" name="name" placeholder="Enter Author Name" class="form-control"></td>
                                          <td>&nbsp;&nbsp;<input type="button" name="sub" value="Add" title="Add Now" class="btn btn-success"></td>
                                      </tr>

                                      <tr>
                                          <td colspan="3"></td>
                                      </tr>
                                 </table>
                                 <hr>
                                 <table>
                                       <tr>
                                           <td><center><b><font color="#FFF" size="3">ID</font></b></center></td>
                                           <td><center><b><font color="#FFF" size="3" style="margin: 93px;">Name</font></b></center></td>
                                           <td colspan="2"><center><b><font color="#FFF" size="3">Operation</font></b></center> </td>
                                       </tr>
                                       <tr>
                                          <td><b><font size="3">1</font></b> </td>
                                          <td><b><font size="3" style="margin: 93px;">A</font></b> </td>
                                          <td><b><a href="#"><font color="#ecf0f1" title="Delete" class="fa fa-trash" aria-hidden="true" style="font-size:20px"></font></b></a> </td>
                                          <td><b><a href="#"><font color="#FFF" title="Edit" class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px"></font></a></b> </td>
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