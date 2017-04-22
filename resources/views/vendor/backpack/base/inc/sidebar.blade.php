@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          <li class="treeview">
              <a href="#"><i class="fa fa-newspaper-o"></i> <span>Pagina's</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/article') }}"><i class="fa fa-vcard"></i> <span>Over JFM</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/category') }}"><i class="fa fa-handshake-o"></i> <span>Ons team</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/tag') }}"><i class="fa fa-bullhorn"></i> <span>Contact</span></a></li>
              </ul>
          </li>

          <li><a href="{{ url(config('backpack.base.route_prefix').'/event') }}"><i class="fa fa-calendar"></i> <span>Activiteiten</span></a></li>

          <li><a href="{{ url(config('backpack.base.route_prefix').'/sponser') }}"><i class="fa fa-address-book"></i> <span>Sponsers</span></a></li>

          <li><a href="{{ url(config('backpack.base.route_prefix').'/history') }}"><i class="fa fa-university"></i> <span>Geschiedenis</span></a></li>

          <li><a href="{{ url(config('backpack.base.route_prefix').'/link') }}"><i class="fa fa-chain"></i> <span>Links (contact)</span></a></li>

          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Gebruikers</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/user') }}"><i class="fa fa-user"></i> <span>Gebruikers</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/role') }}"><i class="fa fa-group"></i> <span>Rollen</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/permission') }}"><i class="fa fa-key"></i> <span>Bemachtigingen</span></a></li>
            </ul>
          </li>

          <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Instellingen</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/elfinder') }}"><i class="fa fa-files-o"></i> <span>Bestandsbeheer</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
              </ul>
          </li>



          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
