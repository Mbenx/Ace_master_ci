<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>
            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>
            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>
            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->
    <ul class="nav nav-list">
        <li class="<?php echo class_menu('') ?>">    
            <a href="<?php echo site_url(); ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="<?php echo class_menu('master') ?>">
            <a href="<?php echo base_url('master'); ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Master System </span>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="<?php echo class_submenu_1('siswa') ?>"> 
                    <a href="<?php echo base_url('master/siswa'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Siswa
                    </a>
                </li>
                <li class="<?php echo class_submenu_1('guru') ?>">
                    <a href="<?php echo base_url('master/guru'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Guru
                    </a>
                </li>
                <li class="<?php echo class_submenu_1('kelas') ?>">
                    <a href="<?php echo base_url('master/kelas'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Kelas
                    </a>
                </li>
                <li class="<?php echo class_submenu_1('jurusan') ?>">
                    <a href="<?php echo base_url('master/jurusan'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Jurusan
                    </a>
                </li>
                <li class="<?php echo class_submenu_1('mata_pelajaran') ?>">
                    <a href="<?php echo base_url('master/mata_pelajaran'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Mata Pelajaran
                    </a>
                </li>
                <li class="<?php echo class_submenu_1('tahun_pelajaran') ?>"> 
                    <a href="<?php echo base_url('master/tahun_pelajaran'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tahun Pelajaran
                    </a>
                </li>
            </ul>
        </li>

        <li class="hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    UI &amp; Elements
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="active open hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Layouts
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="active hover">
                            <a href="top-menu.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Top Menu
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="hover">
                            <a href="two-menu-1.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Two Menus 1
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="hover">
                            <a href="two-menu-2.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Two Menus 2
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="hover">
                            <a href="mobile-menu-1.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Default Mobile Menu
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="mobile-menu-2.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mobile Menu 2
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="mobile-menu-3.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mobile Menu 3
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="hover">
                    <a href="typography.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Typography
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="elements.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Elements
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="buttons.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Buttons &amp; Icons
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="content-slider.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Content Sliders
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="treeview.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Treeview
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="jquery-ui.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        jQuery UI
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="nestable-list.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nestable Lists
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>

                        Three Level Menu
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-leaf green"></i>
                                Item #1
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-pencil orange"></i>

                                4th level
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-plus purple"></i>
                                        Add Product
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-eye pink"></i>
                                        View Products
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->
</div>