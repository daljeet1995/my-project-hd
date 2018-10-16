<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Issue Book List</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                      <div class="container">
                          <?php include('Common/left_menu.php'); ?> 
                           <div class="col-sm-5">
                                 <table >
                                     <tr>
                                        <th><b><font size="3" color="#FFF">Id</font></b></th>
                                        <th><b><font color="#FFF" style="margin: 25px";>Name</font></b></th>
                                        <th><b><font color="#FFF" style="margin: 26px";>B_Name</font></b></th>
                                        <th><b><font color="#FFF" style="margin: 26px";>Address</font></b></th>
                                        <th><b><font color="#FFF" style="margin-right: 33px;">Email</font></b></th>
                                        <th colspan="2"><b><font color="#FFF">Operation</font></b></th>
                                     </tr>
                                     <br/>
                                     <tr>
                                        <td><b><font size="3">1</font></b></td>
                                        <td><b><font size="3" style="margin: 25px";>a</font></b></td>
                                        <td><b><font size="3" style="margin: 26px";>a</font></b></td>
                                        <td><b><font size="3" style="margin: 26px";>a</font></b></td>
                                        <td><b><font size="3">a</font></b></td>
                                        <td><b><font><a href="<?= base_url('index.php/home/sub_book'); ?>" class="btn btn-default">Submit Now</a></font></b></td>

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