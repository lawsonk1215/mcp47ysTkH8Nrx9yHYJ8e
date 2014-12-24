
<div id="sidebar" class="sidebar responsive">

    <ul class="nav nav-list">

        <li>
            <a href="/">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Slideshow </span>
            </a>
            <b class="arrow"></b>
        </li>

        <li>
            <a href="/gallery">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Gallery </span>
            </a>
            <b class="arrow"></b>
        </li>

        @if ($currentUser)

            <li>
                <a href="/add-pictures">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Add Pictures </span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="/add-family">
                    <i class="menu-icon fa fa-tachometer"></i>
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