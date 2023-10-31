      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         لیست کاربر 
          <small>توضیحات</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
          <li class="active">صفحه</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">جدول داده ها مثال ۱</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap text-center">
                  <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row"><div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc">#</th>
                      <th class="sorting"  >نام و نام خانوادگی</th>
                      <th class="sorting"  >ایمیل</th>
                      <th class="sorting"  >نقش کاربری</th>
                      <th class="sorting"  >وضیعیت</th>                     
                      <th class="sorting"  >عملیات</th>                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr role="row" class="odd">
                      <?php foreach($users as $key => $user) : $user=(object) $user ; ?>
                      <td class="sorting_1"><?=($key + 1)?></td>
                      <!-- <td><?php //echo $user['full_name'] ;?> </td> -->
                      <td><?= $user->full_name ; ?></td>
                      <td><?= $user->email ; ?></td>
                      <td><?= getRole($user->role) ; ?></td>
                      <td><?= userStatus($user->confirmed) ; ?></td>
                      <td>
                      <a href="<?=(getUriByAliensName('confirmeUser') . '?userId=' . $user->uid) ;?>"class="btn btn-success" ><span class="fa fa-check"></span></a>
                        <a href="<?=(getUriByAliensName('editUser') . '?userId=' . $user->uid) ;?>" class="btn btn-info" ><span class="fa fa-edit"></span></a>
                        <form method="post" action="<?=getUriByAliensName('removeUser')?>" class="inline">
                         <?=CSRFInput() ;?>
                          <button class="btn btn-danger" value="<?=$user->uid?>" name="user_id" type="submit" >
                             <span class="fa fa-times "></span>
                          </button>
                        </form>
                        
                      </td>
                    </tr>
                    <?php endforeach ;?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">                
              <div class="col-sm-12">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous <?= $page == 1 ? 'disabled' : '' ?>" id="example2_previous">
                      <a href="<?=$page > 1 ? getUriByAliensName('listUserAdmin') . '?page=' . ($page - 1) : '' ; ?>" aria-controls="example2" data-dt-idx="0" tabindex="0">قبلی</a></li>
                      
                      <?php for($i = 1; $i <= $totalPage ; $i++) : ?>
                        <li class="paginate_button <?=$i == $page ? 'active' : '' ; ?>"><a href="<?=getUriByAliensName('listUserAdmin') . '?page=' . $i ; ?>" aria-controls="example2" data-dt-idx="2" tabindex="0"><?=$i?></a></li>
                      <?php endfor ;?>
                     
                      <li class="paginate_button next <?= $page == $totalPage ? 'disabled' : '' ?>" id="example2_next">
                      <a href="<?= $page > $totalPage ? '' : getUriByAliensName('listUserAdmin') . '?page=' . ($page + 1) ; ?>" aria-controls="example2" data-dt-idx="7" tabindex="0">بعدی</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
