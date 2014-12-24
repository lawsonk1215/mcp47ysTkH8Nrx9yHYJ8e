
<div id="sidebar" class="sidebar responsive">

    <ul class="nav nav-list">

        @if (Route::getCurrentRoute()->getPath() == 'slideshow')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/">
                <i class="menu-icon fa fa-film"></i>
                <span class="menu-text"> Slideshow </span>
            </a>
            <b class="arrow"></b>
        </li>

        @if (Route::getCurrentRoute()->getPath() == 'gallery')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/gallery">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Gallery </span>
            </a>
            <b class="arrow"></b>
        </li>

        @if ($currentUser)

            @if (Route::getCurrentRoute()->getPath() == 'add-pictures')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/add-pictures">
                    <i class="menu-icon fa fa-camera-retro"></i>
                    <span class="menu-text"> Add Pictures </span>
                </a>
                <b class="arrow"></b>
            </li>

            @if (Route::getCurrentRoute()->getPath() == 'add-family')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/add-family">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> Add Family </span>
                </a>
                <b class="arrow"></b>
            </li>

        @endif

    </ul>

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

</div>