<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img
                                src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>


                <!-- /main -->

                <!-- Forms -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu"
                        title="Forms"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form
                            components</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="form_inputs.html" class="nav-link">Basic inputs</a>
                        </li>
                        <li class="nav-item"><a href="form_checkboxes_radios.html" class="nav-link">Checkboxes
                                &amp; radios</a></li>

                        <li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap
                                multiselect</a></li>



                        <li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a>
                        </li>
                        <li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual
                                Listboxes</a></li>
                        <li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a>
                        </li>

                        <li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>

                        <li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                        <li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time
                                pickers</a></li>
                        <li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a>
                        </li>

                    </ul>
                </li>

                <!-- /forms -->

                <!-- Components -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu"
                        title="Components"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic
                            components</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                        <li class="nav-item"><a href="components_modals.html" class="nav-link">Modals</a>
                        </li>
                        <li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Dropdown
                                menus</a></li>

                        <li class="nav-item"><a href="components_pills.html" class="nav-link">Pills
                                component</a></li>
                        <li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a>
                        </li>
                        <li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
                        <li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a>
                        </li>
                        <li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and
                                popovers</a></li>
                        <li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a>
                        </li>
                        <li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a>
                        </li>
                        <li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a>
                        </li>
                        <li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a>
                        </li>
                        <li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                        </li>
                        <li class="nav-item"><a href="components_media.html" class="nav-link">Media
                                objects</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content
                            styling</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Content styling">


                        <li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card
                                content</a></li>
                        <li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card
                                layouts</a></li>
                        <li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header
                                elements</a></li>
                        <li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer
                                elements</a></li>

                        <li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Icons">
                        <li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
                        <li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
                        <li class="nav-item"><a href="icons_fontawesome.html" class="nav-link">Font
                                awesome</a>
                        </li>
                    </ul>
                </li>
                <!-- /components -->


                <!-- Page kits -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu"
                        title="Page kits"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General
                            pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="General pages">

                        <li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Blog</a>
                            <ul class="nav nav-group-sub">

                                <li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
                                <li class="nav-item"><a href="blog_single.html" class="nav-link">Single
                                        post</a>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left
                                        sidebar</a></li>
                                <li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right
                                        sidebar</a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Gallery</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media
                                        grid</a>
                                </li>
                                <li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media
                                        with
                                        titles</a></li>
                                <li class="nav-item"><a href="gallery_description.html" class="nav-link">Media
                                        with description</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service
                            pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Service pages">

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Authentication</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="login_simple.html" class="nav-link">Simple
                                        login</a></li>

                                <li class="nav-item"><a href="login_registration.html" class="nav-link">Simple
                                        registration</a></li>


                                <li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed
                                        form</a></li>
                                <li class="nav-item"><a href="login_modals.html" class="nav-link">Inside
                                        modals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Error pages</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a>
                                </li>
                                <li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-people"></i> <span>User
                            pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="User pages">
                        <li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a>
                        </li>
                        <li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a>
                        </li>
                        <li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple
                                profile</a></li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application
                            pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Application pages">

                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Ecommerce set</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product
                                        list</a></li>
                                <li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product
                                        grid</a></li>
                                <li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders
                                        history</a></li>
                                <li class="nav-item"><a href="ecommerce_customers.html"
                                        class="nav-link">Customers</a></li>
                                <li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing
                                        tables</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
