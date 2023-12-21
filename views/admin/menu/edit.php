
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
            بروز رسانی اطلاعات کاربری
          <small>توضیحات</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
          <li class="active">صفحه</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">بروز رسانی اطلاعات کاربری</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?=getUriByAliensName('updateUser')?>">
              <?=CSRFInput() ;?>
              <input type="hidden" name="user_id" value="<?=$userId?>">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">
                      ایمیل
                      <span class="label label-danger"><?=getErrorByKey('email')?></span>
                    </label>
                    <input type="text" value="<?= $user_info['email']; ?>" name="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل" disabled >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">رمز عبور</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور">
                  </div>
                  <div class="form-group">
                    <label for="fullname">نام و نام خانوادگی
                      <span class="label label-danger"><?= getErrorByKey('fullname') ;?></span>
                    </label>
                    <input type="text" name="fullname" value="<?= $user_info['full_name']; ?>" class="form-control" id="fullname" placeholder="نام و نام خانوادگی">
                  </div>
                  <div class="form-group">
                    <label for="mobile">شماره مبایل</label>
                    <input type="text" name="mobile" value="<?= $user_info['mobile'] ;?>" class="form-control" id="mobile" placeholder="شماره مبایل">
                  </div>
                  <div class="form-group">
                    <label for="role">نقش کاربری</label>
                    <select name="role" id="role" class="form-control">
                      <option value="">یک مورد را انخاب کنید</option>
                      <option value="1" <?= ($user_info['role'] == 1 ? 'selected' : ''); ?>>کاربر</option>
                      <option value="2" <?= ($user_info['role'] == 2 ? 'selected' : ''); ?>>مدیر</option>
                    </select>
                  </div>
                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-left">بروز رسانی </button>
                </div>
              </form>
            </div>
            <!-- /.box -->

          </div>
      </div>

      </section>
      <!-- /.content -->
