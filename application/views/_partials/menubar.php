<?php $parent = isset($parent) ? $parent : ''; ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?=($parent === 'home') ? 'active' : '';?>" href="<?=site_url();?>">หน้าหลัก</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?=($parent === 'news') ? 'active' : '';?>"> <a href="<?=site_url('admin/news');?>">ข้อมูลข่าวสาร</a> </li>
        <li class="<?=($parent === 'approve') ? 'active' : '';?>"> <a href="<?=site_url('admin/approve');?>">ข้อมูลคำร้อง</a> </li>
        <li class="<?=($parent === 'user') ? 'active' : '';?>"> <a href="<?=site_url('admin/user');?>">ข้อมูลสมาชิก</a> </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle <?=($parent === 'account') ? 'active' : '';?>" data-toggle="dropdown">บัญชีของคุณ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="text-center">
              <?php if ($this->session->has_userdata('avatar')) : ?>
                <?=img('uploads/profiles/'.$this->session->avatar,'',array('class'=>'img-circle','style'=>'width:100px;height:100px;'));?>
              <?php else: ?>
                <i class="fa fa-user fa-2x"></i>
              <?php endif; ?>
            </li>
            <li class="divider"></li>
            <li> <a href="<?=site_url('account/profile');?>">ข้อมูลส่วนตัว</a> </li>
            <li> <a href="<?=site_url('account/profile/attachment');?>">ข้อมูลไฟล์เอกสาร</a> </li>
            <li class="divider"></li>
            <li> <a href="<?=site_url('admin/news');?>">เข้าระบบผู้ดูแล</a> </li>
            <li class="divider"></li>
            <li> <a href="<?=site_url('auth/logout');?>">ออกจากระบบ</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
