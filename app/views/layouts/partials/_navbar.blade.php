
<div id="navbar" class="navbar navbar-default">

    <div class="navbar-container" id="navbar-container">

        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">

            <a href="#" class="navbar-brand">
                <small>
                    Merry Christmas Mom!
                </small>
            </a>

        </div>

        <div class="navbar-buttons navbar-header pull-right hidden-xs" role="navigation">
            <ul class="nav ace-nav">

                <li class="light-blue">

                    @if ($currentUser)
                        {{ link_to('/logout', 'Logout' ) }}
                    @else
                        {{ link_to('/login', 'Login' ) }}
                    @endif

                </li>

            </ul>
        </div>
    </div>
</div>