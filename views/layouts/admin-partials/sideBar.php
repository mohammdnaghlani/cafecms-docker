 <!-- right side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-right image">
        <img src="<?=getAdminAssets('dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-right info">
        <p>علیرضا حسینی زاده</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="جستجو">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">تیتر</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="#"><i class="fa fa-link"></i> <span>لینک</span></a></li>
      <li><a href="#"><i class="fa fa-link"></i> <span>لینک ۲</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>کاربران</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=getUriByAliensName('createUserAdmin') ; ?>">ایجاد کاربر جدید</a></li>
          <li><a href="<?=getUriByAliensName('listUserAdmin') ; ?>">لیست کاربران</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>مدیریت منو</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=getUriByAliensName('addmenu') ; ?>">ایجاد منوی جدید</a></li>
          <li><a href="#">لیست منوها</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
