<?php include('Common/header.php'); ?>

    <div class="container banner">
        <div class="inner">
             <div class="login">
                <h2>Book Stock Manage</h2>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                      <div class="container">
                          <?php include('Common/left_menu.php'); ?> 
                           <div class="col-sm-10"><br>
                            <div class="col-sm-1"></div>
                              <div class="col-sm-2">
                                 <p><a href="<?= base_url('index.php/home/add_author'); ?>">Add Author</a></p><br>
                                 <p><a href="<?= base_url('index.php/home/add_publisher'); ?>">Add Publisher</a></p>
                             </div>
                             <div class="col-sm-1"></div>
                                <div class="col-sm-3">
                                    <p><a href="<?= base_url('index.php/home/add_book'); ?>">Add Book</a></p><br>
                                    <p><a href="<?= base_url('index.php/home/book_list'); ?>">Book List</a></p>
                                 </div>    
                               
                           </div>
                      </div>
                </div>
                <div class="col-sm-1"></div>
                   
             </div>
            
        </div>
    </div>
</body>
</html>