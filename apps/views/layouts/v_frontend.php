<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        <?=$template['title'];?> | Wisuda UNMER
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="<?=base_url('../public/assets/vendors/webfontloader.js')?>"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->

    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="<?=base_url('../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')?>" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="<?=base_url('../assets/vendors/base/vendors.bundle.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('../assets/demo/default/base/style.bundle.css')?>" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="<?=base_url('../assets/demo/default/media/img/logo/favicon.ico')?>" />

    <!--Datatable-->
<!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">

</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->

    <?php echo $template['partials']['header']; ?>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <!-- BEGIN: Aside Menu -->
            <?php echo $template['partials']['aside']; ?>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            <?=$template['title'];?>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END Subheader-->
            <?php echo $template['body'];?>
        </div>
    </div>
    <!-- end:: Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">

                    <span class="m-footer__copyright">
                        2019 &copy; UNMER
                        <a href="#" class="m-link">
                            FTI
                        </a>
                    </span>

                    <span class="m-footer__copyright">
                        2019 &copy; UNMER
                        <a href="#" class="m-link">
                            FTI
                        </a>
                    </span>

                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    About
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#"  class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Privacy
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    T&C
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Purchase
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__item m-nav__item">
                            <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
    <div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
					<i class="la la-close"></i>
				</span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                    Messages
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                    Settings
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                    Logs
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                    <div class="m-messenger__messages">
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="<?=base_url('../assets/app/media/img//users/user3.jpg')?>" alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Hi Bob. What time will be the meeting ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Hi Megan. It's at 2.30PM
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="<?=base_url('../assets/app/media/img//users/user3.jpg')?>" alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Will the development team be joining ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Yes sure. I invited them as well
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            2:30PM
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="<?=base_url('../assets/app/media/img//users/user3.jpg')?>"  alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Noted. For the Coca-Cola Mobile App project as well ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Yes, sure.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Please also prepare the quotation for the Loop CRM project as well.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            3:15PM
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-no-pic m--bg-fill-danger">
                                <span>
                                    M
                                </span>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Noted. I will prepare it.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Thanks Megan. I will see you later.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="<?=base_url('../assets/app/media/img//users/user3.jpg')?>"  alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Sure. See you in the meeting soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-messenger__seperator"></div>
                    <div class="m-messenger__form">
                        <div class="m-messenger__form-controls">
                            <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                        </div>
                        <div class="m-messenger__form-tools">
                            <a href="" class="m-messenger__form-attachment">
                                <i class="la la-paperclip"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                <div class="m-list-settings">
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            General Settings
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Email Notifications
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" checked="checked" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Site Tracking
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                SMS Alerts
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Backup Storage
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Audit Logs
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" checked="checked" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            System Settings
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                System Logs
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Error Reporting
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Applications Logs
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Backup Servers
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" checked="checked" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                        <div class="m-list-settings__item">
                            <span class="m-list-settings__item-label">
                                Audit Logs
                            </span>
                            <span class="m-list-settings__item-control">
                                <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                    <label>
                                        <input type="checkbox" name="">
                                        <span></span>
                                    </label>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                <div class="m-list-timeline">
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            System Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                    <span class="m-badge m-badge--warning m-badge--wide">
                                        important
                                    </span>
                                </a>
                                <span class="m-list-timeline__time">
                                    Just now
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
                                <span class="m-list-timeline__time">
                                    11 mins
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoice received
                                </a>
                                <span class="m-list-timeline__time">
                                    20 mins
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                    <span class="m-badge m-badge--success m-badge--wide">
												resolved
											</span>
                                </a>
                                <span class="m-list-timeline__time">
                                    1 hr
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                </a>
                                <span class="m-list-timeline__time">
                                    2 hrs
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                    <span class="m-badge m-badge--danger m-badge--wide">
                                        pending
                                    </span>
                                </a>
                                <span class="m-list-timeline__time">
											3 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
                                <span class="m-list-timeline__time">
											5 hrs
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Applications Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                    <span class="m-badge m-badge--info m-badge--wide">
												urgent
											</span>
                                </a>
                                <span class="m-list-timeline__time">
											7 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                </a>
                                <span class="m-list-timeline__time">
											Just now
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
                                <span class="m-list-timeline__time">
											11 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoices received
                                </a>
                                <span class="m-list-timeline__time">
                                    20 mins
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                </a>
                                <span class="m-list-timeline__time">
                                    1 hr
                                </span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                    <span class="m-badge m-badge--info m-badge--wide">
                                        pending
                                    </span>
                                </a>
                                <span class="m-list-timeline__time">
											2 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                </a>
                                <span class="m-list-timeline__time">
											3 hrs
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Server Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
                                <span class="m-list-timeline__time">
											5 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                </a>
                                <span class="m-list-timeline__time">
											7 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                </a>
                                <span class="m-list-timeline__time">
											Just now
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
                                <span class="m-list-timeline__time">
											11 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoice received
                                </a>
                                <span class="m-list-timeline__time">
											20 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                </a>
                                <span class="m-list-timeline__time">
											1 hr
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                </a>
                                <span class="m-list-timeline__time">
											2 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                </a>
                                <span class="m-list-timeline__time">
											3 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
                                <span class="m-list-timeline__time">
											5 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                </a>
                                <span class="m-list-timeline__time">
											1117 hrs
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- begin::Quick Nav -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!--begin::Base Scripts -->
<script src="<?=base_url('../assets/vendors/base/vendors.bundle.js')?>" type="text/javascript"></script>
<script src="<?=base_url('../assets/demo/default/base/scripts.bundle.js')?>" type="text/javascript"></script>

<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="<?=base_url('../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')?>" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->

<script src="<?=base_url('../assets/app/js/custom.js" type="text/javascript')?>"></script>
<!--end::Page Snippets -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
</body>
<!-- end::Body -->
</html>
