 <footer class="footer">
   <div class="text-right h-0" style="overflow:hidden;">
     <div class="position-fixed" style=" bottom: 5%;right:2%;z-index:1;">
       <a href="#" id="go-top" class="fonts icon-angle-up-solid bg-dark p-2 shadow text-white d-none" style="cursor:pointer;"></a>
     </div>
   </div>
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-6">
         2015 - <?php echo date('Y') ?> &copy; Reach - Mulingyuer.com <small class="fonts icon-jiazai mx-2 small"><?php echo timer_stop(); ?></small>
       </div>
       <div class="col-md-6">
         <div class="text-md-right footer-links d-none d-md-block">
           <a href="<?php $this->options->siteUrl(); ?>about.html">About</a>
           <a href="javascript: void(0);">Support</a>
           <a href="javascript: void(0);">Contact Us</a>
         </div>
       </div>
     </div>
   </div>
 </footer>