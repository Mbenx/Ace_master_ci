<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?= title();?> | Ace Admin</title>

        <meta name="description" content="top menu &amp; navigation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />
        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>
    </head>

    <body class="no-skin">
        <?php $this->load->view('Backend_template/header'); ?>
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>
            <?php $this->load->view('Backend_template/content'); ?>
            <?php echo $contents; ?>     
            <?php $this->load->view('Backend_template/footer'); ?>         
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
                if ('ontouchstart' in document.documentElement)
                    document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
                jQuery(function ($) {
                    var $sidebar = $('.sidebar').eq(0);
                    if (!$sidebar.hasClass('h-sidebar'))
                        return;

                    $(document).on('settings.ace.top_menu', function (ev, event_name, fixed) {
                        if (event_name !== 'sidebar_fixed')
                            return;

                        var sidebar = $sidebar.get(0);
                        var $window = $(window);

                        //return if sidebar is not fixed or in mobile view mode
                        var sidebar_vars = $sidebar.ace_sidebar('vars');
                        if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
                            $sidebar.removeClass('lower-highlight');
                            //restore original, default marginTop
                            sidebar.style.marginTop = '';

                            $window.off('scroll.ace.top_menu')
                            return;
                        }
                        var done = false;
                        $window.on('scroll.ace.top_menu', function (e) {

                            var scroll = $window.scrollTop();
                            scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
                            if (scroll > 17)
                                scroll = 17;


                            if (scroll > 16) {
                                if (!done) {
                                    $sidebar.addClass('lower-highlight');
                                    done = true;
                                }
                            } else {
                                if (done) {
                                    $sidebar.removeClass('lower-highlight');
                                    done = false;
                                }
                            }

                            sidebar.style['marginTop'] = (17 - scroll) + 'px';
                        }).triggerHandler('scroll.ace.top_menu');

                    }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

                    $(window).on('resize.ace.top_menu', function () {
                        $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
                    });
                });
        </script>
    </body>
</html>
