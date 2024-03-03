

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Пользователь
        <small>Настройки</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Настройки</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">


          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Обновить информацию</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" action="<?php base_url('users/setting') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="username">Имя пользователя</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Имя пользователя" value="<?php echo $user_data['username'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Эл. почта</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Эл. почта" value="<?php echo $user_data['email'] ?>" autocomplete="off">
                </div>                

                <div class="form-group">
                  <label for="fname">Имя</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Имя" value="<?php echo $user_data['firstname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname">Фамилия</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Фамилия" value="<?php echo $user_data['lastname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone">Номер телефона</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона" value="<?php echo $user_data['phone'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="gender">Пол</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1" <?php if($user_data['gender'] == 1) {
                        echo "checked";
                      } ?>>
                      Муж.
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2" <?php if($user_data['gender'] == 2) {
                        echo "checked";
                      } ?>>
                      Жен.
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Оставьте это поле пустым, если не хотите менять пароль
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Пароль</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Пароль" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword">Подтвердите пароль</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Подтвердите пароль" autocomplete="off">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                <a href="<?php echo base_url('users/') ?>" class="btn btn-warning">Назад</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
