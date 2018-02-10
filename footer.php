 <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">                        
                        <div class="footer_widget_content para_default">
                            <ul class="contact_info">
                               <?php echo dynamic_sidebar('footer-1'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">                        
                        <div class="footer_widget_content para_default">
                            <ul>
                               <?php echo dynamic_sidebar('footer-2'); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">                        
                        <div class="footer_widget_content para_default">
                            <ul>
                                 <?php echo dynamic_sidebar('footer-3'); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">                        
                        <div class="footer_widget_content para_default">
                            <?php echo dynamic_sidebar('footer-4'); ?> 
                            <div class="Newsletter_mail_search">
                                <form action="#" method="post">
                                    <div class="icon-addon addon-md">
                                        <i class="fa fa-paper-plane"></i> <input class="form-control" id="email" placeholder="Email Address" type="text">
                                    </div>
                                </form>
                            </div>
                            <ul class="footer_social_icon">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <p>© Copyright 2017 <span>|</span> Consult by <a href="#">HelloXpartan</a> <span>|</span> All Rights Reserved</p>
            </div>
        </div>
    </footer>

   
    <?php wp_footer(); ?>
</body>
</html>