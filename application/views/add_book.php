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
                                 <table class="table">
                                     <tr>
                                         <td><b><font color="#FFF">Author Name</font></b></td>
                                         <td>
                                             <select name="aname" class="form-control">
                                                 <option>A</option>
                                                 <option>B</option>
                                             </select>
                                         </td>
                                         <td><b><font color="#FFF">Publisher Name</font></b></td>
                                         <td>
                                             <select name="aname" class="form-control">
                                                 <option>A</option>
                                                 <option>B</option>
                                             </select>

                                         </td>
                                     </tr>
                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Book Name</font></b></td>
                                         <td colspan="2"><input type="text" name="name" placeholder="Enter Book Name" class="form-control"></td>
                                     </tr>
                                     <tr>
                                         <td colspan="2"><b><font color="#FFF">Price</font></b></td>
                                         <td colspan="2"><input type="text" name="price" placeholder="Enter price" class="form-control"></td>
                                     </tr>
                                     <tr>
                                         
                                         <td colspan="4"><input type="button" name="book_add" value="Add" class="btn btn-primary"></td>
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