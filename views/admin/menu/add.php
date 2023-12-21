
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         ثبت منوی جدید
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
                <h3 class="box-title">ثبت منوی جدید</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?=getUriByAliensName('saveUserAdmin')?>">
              <?=CSRFInput() ;?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">
                      نام
                      <span class="label label-danger"><?=getErrorByKey('name')?></span>
                    </label>
                    <input type="text" value="<?= getOldData('name'); ?>" name="name" class="form-control" id="exampleInputEmail1" placeholder="نام منو">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">نامک </label>
                    <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder=" نامک">
                  </div>
                 
                    <div class="form-group">
                        <label>والد</label>
                        <select name="parent" class="form-control select2 select2-hidden-accessible " style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option selected="selected" value = "parent" >منوی اصلی </option>
                        <?php foreach($menus as $key => $item) :?> 
                        <option value = <?=$item['id'];?>><?=$item['name'];?></option>
                        <?php endforeach ;?>
                        </select>
                    </div>
                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-left">ارسال</button>
                </div>
              </form>
            </div>
            <!-- /.box -->

          </div>
      </div>

      </section>
      <!-- /.content -->
