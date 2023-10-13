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
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Subject Details</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('subjects.index') }}" class="nav-link">Subject list</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('subjects.create') }}" class="nav-link">Subject
                                create</a> 
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Level Details</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('levels.index') }}" class="nav-link">Level list</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('levels.create') }}" class="nav-link">Level create</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Question Bank</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('questionbanks.index') }}" class="nav-link">QuestionBank list</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('questionbanks.create') }}" class="nav-link">QuestionBank create</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Question Paper</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('questionpapers.index') }}" class="nav-link">QuestionPaper list</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('questionpapers.create') }}" class="nav-link">QuestionPaper create</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Exams</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('exams.index') }}" class="nav-link">Exam list</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('questionbanks.create') }}" class="nav-link">Exam create</a>
                        </li>

                    </ul>
                </li>



                <!-- /forms -->




            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
