<?php

/* IngetisSiteBundle::admin.html.twig */
class __TwigTemplate_26d5dfc143fe653981fae50b08ed56d406b607d9d22d50264127dfc0d64009db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- font Awesome -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Morris chart -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- jvectormap -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- fullCalendar -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>

</head>
<body class=\"skin-blue\">
<!-- header logo: style can be found in header.less -->
<header class=\"header\">
<a href=\"index.html\" class=\"logo\">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    AdminLTE
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class=\"navbar navbar-static-top\" role=\"navigation\">
<!-- Sidebar toggle button-->
<a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
    <span class=\"sr-only\">Toggle navigation</span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
</a>
<div class=\"navbar-right\">
<ul class=\"nav navbar-nav\">
<!-- Messages: style can be found in dropdown.less-->
<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-envelope\"></i>
        <span class=\"label label-success\">4</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have 4 messages</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                <li><!-- start message -->
                    <a href=\"#\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                        </div>
                        <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li><!-- end message -->
                <li>
                    <a href=\"#\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                        </div>
                        <h4>
                            AdminLTE Design Team
                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                        </div>
                        <h4>
                            Developers
                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                        </div>
                        <h4>
                            Sales Department
                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                        </div>
                        <h4>
                            Reviewers
                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
    </ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-warning\"></i>
        <span class=\"label label-warning\">10</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have 10 notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                <li>
                    <a href=\"#\">
                        <i class=\"ion ion-ios7-people info\"></i> 5 new members joined today
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa fa-warning danger\"></i> Very long description here that may not fit into the page and may cause design problems
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa fa-users warning\"></i> 5 new members joined
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <i class=\"ion ion-ios7-cart success\"></i> 25 sales made
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"ion ion-ios7-person danger\"></i> You changed your username
                    </a>
                </li>
            </ul>
        </li>
        <li class=\"footer\"><a href=\"#\">View all</a></li>
    </ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-tasks\"></i>
        <span class=\"label label-danger\">9</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have 9 tasks</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                <li><!-- Task item -->
                    <a href=\"#\">
                        <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                        </h3>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <span class=\"sr-only\">20% Complete</span>
                            </div>
                        </div>
                    </a>
                </li><!-- end task item -->
                <li><!-- Task item -->
                    <a href=\"#\">
                        <h3>
                            Create a nice theme
                            <small class=\"pull-right\">40%</small>
                        </h3>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <span class=\"sr-only\">40% Complete</span>
                            </div>
                        </div>
                    </a>
                </li><!-- end task item -->
                <li><!-- Task item -->
                    <a href=\"#\">
                        <h3>
                            Some task I need to do
                            <small class=\"pull-right\">60%</small>
                        </h3>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <span class=\"sr-only\">60% Complete</span>
                            </div>
                        </div>
                    </a>
                </li><!-- end task item -->
                <li><!-- Task item -->
                    <a href=\"#\">
                        <h3>
                            Make beautiful transitions
                            <small class=\"pull-right\">80%</small>
                        </h3>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <span class=\"sr-only\">80% Complete</span>
                            </div>
                        </div>
                    </a>
                </li><!-- end task item -->
            </ul>
        </li>
        <li class=\"footer\">
            <a href=\"#\">View all tasks</a>
        </li>
    </ul>
</li>
<!-- User Account: style can be found in dropdown.less -->
<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"glyphicon glyphicon-user\"></i>
        <span>Jane Doe <i class=\"caret\"></i></span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header bg-light-blue\">
            <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            <p>
                Jane Doe - Web Developer
                <small>Member since Nov. 2012</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class=\"user-body\">
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Followers</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Sales</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>
<div class=\"wrapper row-offcanvas row-offcanvas-left\">
<!-- Left side column. contains the logo and sidebar -->
<aside class=\"left-side sidebar-offcanvas\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
                <p>Hello, Jane</p>

                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            <li class=\"active\">
                <a href=\"index.html\">
                    <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"pages/widgets.html\">
                    <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"badge pull-right bg-green\">new</small>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-bar-chart-o\"></i>
                    <span>Charts</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-angle-double-right\"></i> Morris</a></li>
                    <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-angle-double-right\"></i> Flot</a></li>
                    <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-angle-double-right\"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-laptop\"></i>
                    <span>UI Elements</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-angle-double-right\"></i> General</a></li>
                    <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-angle-double-right\"></i> Icons</a></li>
                    <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-angle-double-right\"></i> Buttons</a></li>
                    <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-angle-double-right\"></i> Sliders</a></li>
                    <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-angle-double-right\"></i> Timeline</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-edit\"></i> <span>Forms</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-angle-double-right\"></i> General Elements</a></li>
                    <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-angle-double-right\"></i> Advanced Elements</a></li>
                    <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-angle-double-right\"></i> Editors</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-table\"></i> <span>Tables</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-angle-double-right\"></i> Simple tables</a></li>
                    <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-angle-double-right\"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href=\"pages/calendar.html\">
                    <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                    <small class=\"badge pull-right bg-red\">3</small>
                </a>
            </li>
            <li>
                <a href=\"pages/mailbox.html\">
                    <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                    <small class=\"badge pull-right bg-yellow\">12</small>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-folder\"></i> <span>Examples</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-angle-double-right\"></i> Invoice</a></li>
                    <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-angle-double-right\"></i> Login</a></li>
                    <li><a href=\"pages/examples/register.html\"><i class=\"fa fa-angle-double-right\"></i> Register</a></li>
                    <li><a href=\"pages/examples/lockscreen.html\"><i class=\"fa fa-angle-double-right\"></i> Lockscreen</a></li>
                    <li><a href=\"pages/examples/404.html\"><i class=\"fa fa-angle-double-right\"></i> 404 Error</a></li>
                    <li><a href=\"pages/examples/500.html\"><i class=\"fa fa-angle-double-right\"></i> 500 Error</a></li>
                    <li><a href=\"pages/examples/blank.html\"><i class=\"fa fa-angle-double-right\"></i> Blank Page</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class=\"right-side\">
<!-- Content Header (Page header) -->
<section class=\"content-header\">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">

<!-- Small boxes (Stat box) -->
<div class=\"row\">
    <div class=\"col-lg-3 col-xs-6\">
        <!-- small box -->
        <div class=\"small-box bg-aqua\">
            <div class=\"inner\">
                <h3>
                    150
                </h3>
                <p>
                    New Orders
                </p>
            </div>
            <div class=\"icon\">
                <i class=\"ion ion-bag\"></i>
            </div>
            <a href=\"#\" class=\"small-box-footer\">
                More info <i class=\"fa fa-arrow-circle-right\"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class=\"col-lg-3 col-xs-6\">
        <!-- small box -->
        <div class=\"small-box bg-green\">
            <div class=\"inner\">
                <h3>
                    53<sup style=\"font-size: 20px\">%</sup>
                </h3>
                <p>
                    Bounce Rate
                </p>
            </div>
            <div class=\"icon\">
                <i class=\"ion ion-stats-bars\"></i>
            </div>
            <a href=\"#\" class=\"small-box-footer\">
                More info <i class=\"fa fa-arrow-circle-right\"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class=\"col-lg-3 col-xs-6\">
        <!-- small box -->
        <div class=\"small-box bg-yellow\">
            <div class=\"inner\">
                <h3>
                    44
                </h3>
                <p>
                    User Registrations
                </p>
            </div>
            <div class=\"icon\">
                <i class=\"ion ion-person-add\"></i>
            </div>
            <a href=\"#\" class=\"small-box-footer\">
                More info <i class=\"fa fa-arrow-circle-right\"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class=\"col-lg-3 col-xs-6\">
        <!-- small box -->
        <div class=\"small-box bg-red\">
            <div class=\"inner\">
                <h3>
                    65
                </h3>
                <p>
                    Unique Visitors
                </p>
            </div>
            <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
            </div>
            <a href=\"#\" class=\"small-box-footer\">
                More info <i class=\"fa fa-arrow-circle-right\"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row -->

<!-- top row -->
<div class=\"row\">
    <div class=\"col-xs-12 connectedSortable\">

    </div><!-- /.col -->
</div>
<!-- /.row -->

<!-- Main row -->
<div class=\"row\">
<!-- Left col -->
<section class=\"col-lg-6 connectedSortable\">
    <!-- Box (with bar chart) -->
    <div class=\"box box-danger\" id=\"loading-example\">
        <div class=\"box-header\">
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <button class=\"btn btn-danger btn-sm refresh-btn\" data-toggle=\"tooltip\" title=\"Reload\"><i class=\"fa fa-refresh\"></i></button>
                <button class=\"btn btn-danger btn-sm\" data-widget='collapse' data-toggle=\"tooltip\" title=\"Collapse\"><i class=\"fa fa-minus\"></i></button>
                <button class=\"btn btn-danger btn-sm\" data-widget='remove' data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
            </div><!-- /. tools -->
            <i class=\"fa fa-cloud\"></i>

            <h3 class=\"box-title\">Server Load</h3>
        </div><!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <div class=\"row\">
                <div class=\"col-sm-7\">
                    <!-- bar chart -->
                    <div class=\"chart\" id=\"bar-chart\" style=\"height: 250px;\"></div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"pad\">
                        <!-- Progress bars -->
                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Bandwidth</span>
                            <small class=\"pull-right\">10/200 GB</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Transfered</span>
                            <small class=\"pull-right\">10 GB</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-red\" style=\"width: 70%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">Activity</span>
                            <small class=\"pull-right\">73%</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-light-blue\" style=\"width: 70%;\"></div>
                        </div>

                        <div class=\"clearfix\">
                            <span class=\"pull-left\">FTP</span>
                            <small class=\"pull-right\">30 GB</small>
                        </div>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 70%;\"></div>
                        </div>
                        <!-- Buttons -->
                        <p>
                            <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-cloud-download\"></i> Generate PDF</button>
                        </p>
                    </div><!-- /.pad -->
                </div><!-- /.col -->
            </div><!-- /.row - inside box -->
        </div><!-- /.box-body -->
        <div class=\"box-footer\">
            <div class=\"row\">
                <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <label>
                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"80\" data-width=\"60\" data-height=\"60\"
                               data-fgColor=\"#f56954\"/>
                    </label>

                    <div class=\"knob-label\">CPU</div>
                </div><!-- ./col -->
                <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <label>
                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                               data-fgColor=\"#00a65a\"/>
                    </label>

                    <div class=\"knob-label\">Disk</div>
                </div><!-- ./col -->
                <div class=\"col-xs-4 text-center\">
                    <label>
                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                               data-fgColor=\"#3c8dbc\"/>
                    </label>

                    <div class=\"knob-label\">RAM</div>
                </div><!-- ./col -->
            </div><!-- /.row -->
        </div><!-- /.box-footer -->
    </div><!-- /.box -->

    <!-- Custom tabs (Charts with tabs)-->
    <div class=\"nav-tabs-custom\">
        <!-- Tabs within a box -->
        <ul class=\"nav nav-tabs pull-right\">
            <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a></li>
            <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
            <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Sales</li>
        </ul>
        <div class=\"tab-content no-padding\">
            <!-- Morris chart - Sales -->
            <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
            <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
        </div>
    </div><!-- /.nav-tabs-custom -->

    <!-- Calendar -->
    <div class=\"box box-warning\">
        <div class=\"box-header\">
            <i class=\"fa fa-calendar\"></i>
            <div class=\"box-title\">Calendar</div>

            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <!-- button with a dropdown -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-warning btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                    </ul>
                </div>
            </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <!--The calendar -->
            <div id=\"calendar\"></div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

    <!-- quick email widget -->
    <div class=\"box box-info\">
        <div class=\"box-header\">
            <i class=\"fa fa-envelope\"></i>
            <h3 class=\"box-title\">Quick Email</h3>
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
            </div><!-- /. tools -->
        </div>
        <div class=\"box-body\">
            <form action=\"#\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\"/>
                </div>
                <div>
                    <textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
                </div>
            </form>
        </div>
        <div class=\"box-footer clearfix\">
            <button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send <i class=\"fa fa-arrow-circle-right\"></i></button>
        </div>
    </div>

</section><!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class=\"col-lg-6 connectedSortable\">
<!-- Map box -->
<div class=\"box box-primary\">
    <div class=\"box-header\">
        <!-- tools box -->
        <div class=\"pull-right box-tools\">
            <button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\"><i class=\"fa fa-calendar\"></i></button>
            <button class=\"btn btn-primary btn-sm pull-right\" data-widget='collapse' data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\"><i class=\"fa fa-minus\"></i></button>
        </div><!-- /. tools -->

        <i class=\"fa fa-map-marker\"></i>
        <h3 class=\"box-title\">
            Visitors
        </h3>
    </div>
    <div class=\"box-body no-padding\">
        <div id=\"world-map\" style=\"height: 300px;\"></div>
        <div class=\"table-responsive\">
            <!-- .table - Uses sparkline charts-->
            <table class=\"table table-striped\">
                <tr>
                    <th>Country</th>
                    <th>Visitors</th>
                    <th>Online</th>
                    <th>Page Views</th>
                </tr>
                <tr>
                    <td><a href=\"#\">USA</a></td>
                    <td><div id=\"sparkline-1\"></div></td>
                    <td>209</td>
                    <td>239</td>
                </tr>
                <tr>
                    <td><a href=\"#\">India</a></td>
                    <td><div id=\"sparkline-2\"></div></td>
                    <td>131</td>
                    <td>958</td>
                </tr>
                <tr>
                    <td><a href=\"#\">Britain</a></td>
                    <td><div id=\"sparkline-3\"></div></td>
                    <td>19</td>
                    <td>417</td>
                </tr>
                <tr>
                    <td><a href=\"#\">Brazil</a></td>
                    <td><div id=\"sparkline-4\"></div></td>
                    <td>109</td>
                    <td>476</td>
                </tr>
                <tr>
                    <td><a href=\"#\">China</a></td>
                    <td><div id=\"sparkline-5\"></div></td>
                    <td>192</td>
                    <td>437</td>
                </tr>
                <tr>
                    <td><a href=\"#\">Australia</a></td>
                    <td><div id=\"sparkline-6\"></div></td>
                    <td>1709</td>
                    <td>947</td>
                </tr>
            </table><!-- /.table -->
        </div>
    </div><!-- /.box-body-->
    <div class=\"box-footer\">
        <button class=\"btn btn-info\"><i class=\"fa fa-download\"></i> Generate PDF</button>
        <button class=\"btn btn-warning\"><i class=\"fa fa-bug\"></i> Report Bug</button>
    </div>
</div>
<!-- /.box -->

<!-- Chat box -->
<div class=\"box box-success\">
    <div class=\"box-header\">
        <h3 class=\"box-title\"><i class=\"fa fa-comments-o\"></i> Chat</h3>
        <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
            <div class=\"btn-group\" data-toggle=\"btn-toggle\" >
                <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i></button>
                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
            </div>
        </div>
    </div>
    <div class=\"box-body chat\" id=\"chat-box\">
        <!-- chat item -->
        <div class=\"item\">
            <img src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\" alt=\"user image\" class=\"online\"/>
            <p class=\"message\">
                <a href=\"#\" class=\"name\">
                    <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                    Mike Doe
                </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
            </p>
            <div class=\"attachment\">
                <h4>Attachments:</h4>
                <p class=\"filename\">
                    Theme-thumbnail-image.jpg
                </p>
                <div class=\"pull-right\">
                    <button class=\"btn btn-primary btn-sm btn-flat\">Open</button>
                </div>
            </div><!-- /.attachment -->
        </div><!-- /.item -->
        <!-- chat item -->
        <div class=\"item\">
            <img src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" alt=\"user image\" class=\"offline\"/>
            <p class=\"message\">
                <a href=\"#\" class=\"name\">
                    <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                    Jane Doe
                </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
            </p>
        </div><!-- /.item -->
        <!-- chat item -->
        <div class=\"item\">
            <img src=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" alt=\"user image\" class=\"offline\"/>
            <p class=\"message\">
                <a href=\"#\" class=\"name\">
                    <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                    Susan Doe
                </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
            </p>
        </div><!-- /.item -->
    </div><!-- /.chat -->
    <div class=\"box-footer\">
        <div class=\"input-group\">
            <input class=\"form-control\" placeholder=\"Type message...\"/>
            <div class=\"input-group-btn\">
                <button class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
            </div>
        </div>
    </div>
</div><!-- /.box (chat box) -->

<!-- TO DO List -->
<div class=\"box box-primary\">
    <div class=\"box-header\">
        <i class=\"ion ion-clipboard\"></i>
        <h3 class=\"box-title\">To Do List</h3>
        <div class=\"box-tools pull-right\">
            <ul class=\"pagination pagination-sm inline\">
                <li><a href=\"#\">&laquo;</a></li>
                <li><a href=\"#\">1</a></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">&raquo;</a></li>
            </ul>
        </div>
    </div><!-- /.box-header -->
    <div class=\"box-body\">
        <ul class=\"todo-list\">
            <li>
                <!-- drag handle -->
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                <!-- checkbox -->
                <label>
                    <input type=\"checkbox\" value=\"\" name=\"\"/>
                </label>
                <!-- todo text -->
                <span class=\"text\">Design a nice theme</span>
                <!-- Emphasis label -->
                <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                <!-- General tools such as edit or delete-->
                <div class=\"tools\">
                    <i class=\"fa fa-edit\"></i>
                    <i class=\"fa fa-trash-o\"></i>
                </div>
            </li>
            <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                <label>
                    <input type=\"checkbox\" value=\"\" name=\"\"/>
                </label>
                <span class=\"text\">Make the theme responsive</span>
                <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                <div class=\"tools\">
                    <i class=\"fa fa-edit\"></i>
                    <i class=\"fa fa-trash-o\"></i>
                </div>
            </li>
            <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                <label>
                    <input type=\"checkbox\" value=\"\" name=\"\"/>
                </label>
                <span class=\"text\">Let theme shine like a star</span>
                <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                <div class=\"tools\">
                    <i class=\"fa fa-edit\"></i>
                    <i class=\"fa fa-trash-o\"></i>
                </div>
            </li>
            <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                <label>
                    <input type=\"checkbox\" value=\"\" name=\"\"/>
                </label>
                <span class=\"text\">Let theme shine like a star</span>
                <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                <div class=\"tools\">
                    <i class=\"fa fa-edit\"></i>
                    <i class=\"fa fa-trash-o\"></i>
                </div>
            </li>
            <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                <label>
                    <input type=\"checkbox\" value=\"\" name=\"\"/>
                </label>
                <span class=\"text\">Check your messages and notifications</span>
                <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                <div class=\"tools\">
                    <i class=\"fa fa-edit\"></i>
                    <i class=\"fa fa-trash-o\"></i>
                </div>
            </li>
            <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                <label>
                    <input type=\"checkbox\" value=\"\" name=\"\"/>
                </label>
                <span class=\"text\">Let theme shine like a star</span>
                <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                <div class=\"tools\">
                    <i class=\"fa fa-edit\"></i>
                    <i class=\"fa fa-trash-o\"></i>
                </div>
            </li>
        </ul>
    </div><!-- /.box-body -->
    <div class=\"box-footer clearfix no-border\">
        <button class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
    </div>
</div><!-- /.box -->

</section><!-- right col -->
</div><!-- /.row (main row) -->

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


<!-- jQuery 2.0.2 -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- jQuery UI 1.10.3 -->
<script src=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Morris.js charts -->
<script src=\"";
        // line 949
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 954
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- fullCalendar -->
<script src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 959
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.j"), "html", null, true);
        echo "s\" type=\"text/javascript\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- iCheck -->
<script src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- AdminLTE App -->
<script src=\"";
        // line 968
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 974
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1093 => 974,  1087 => 971,  1081 => 968,  1075 => 965,  1070 => 963,  1065 => 961,  1060 => 959,  1055 => 957,  1050 => 955,  1046 => 954,  1041 => 952,  1036 => 950,  1032 => 949,  1027 => 947,  1022 => 945,  865 => 791,  849 => 778,  824 => 756,  355 => 290,  311 => 249,  173 => 114,  158 => 102,  143 => 90,  128 => 78,  113 => 66,  69 => 25,  64 => 23,  59 => 21,  54 => 19,  49 => 17,  44 => 15,  39 => 13,  34 => 11,  29 => 9,  19 => 1,);
    }
}
