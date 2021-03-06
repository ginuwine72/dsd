<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>แบบ คร.10</title>
  <?=link_tag('assets/css/bootstrap.min.css');?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php
$profile = unserialize($record['profile']);
$address = unserialize($record['address']);
$address_current = unserialize($record['address_current']);
$education = unserialize($record['education']);
$work = unserialize($record['work']);
$reference = unserialize($record['reference']);
?>
<body>
  <div style="padding:0.5cm 1.5cm;">
    <div class="container" style="padding:1cm;">
      <div class="row hidden-print">
        <button type="button" class="btn btn-default" onclick="window.close()">ปิดหน้านี้</button>
        <button type="button" class="btn btn-default" onclick="window.print()">สั่งพิมพ์หน้านี้</button>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-12"> <p class="text-right">แบบ คร.10</p> </div>
        <div class="col-xs-10 text-center">
          <p><img src="<?=base_url('assets/images/krut.jpg');?>" style="width:200px;height:200px;"></p>
          <h3>คำขอหนังสือรับรองความรู้ความสามารถ</h3>
        </div>
        <div class="col-xs-2" style="margin:0 auto;">
          <div class="thumbnail" style="height:200px;width:100%;">
            <div class="caption"> รูปถ่าย <br> 1 นิ้ว <br> </div>
          </div>
        </div>
        <div class="col-md-12">
          <p class="col-md-4 col-md-offset-8">เขียนที่ ........................................</p>
          <p class="col-md-4 col-md-offset-8">วันที่ .....<?=date('d');?> เดือน .....<?=dropdown_month(date('m'));?> พ.ศ. .....<?=date('Y')+543;?></p>
          <p>1.ข้าพเจ้า ..........<?=$profile['title'].nbs().$profile['firstname'];?>.......... นามสกุล ..........<?=$profile['lastname'];?>..........</p>
          <p>เกิดวันที่ ..........<?=date('d',$profile['birthdate']);?> เดือน ..........<?=dropdown_month(date('m',$profile['birthdate']));?> พ.ศ. ..........<?=date('Y',$profile['birthdate'])+543;?> อายุ ..........<?=age_calculate($profile['birthdate']);?> ปี สัญชาติ ..........<?=$profile['nationality'];?> หมู่โลหิต ..........<?=$profile['blood'];?> </p>
          <?php $profile['id_card'] = (strlen($profile['id_card'])===13) ? $profile['id_card'] : str_repeat(0,13) ;
          $split = str_split($profile['id_card'],1);
          foreach ($split as $key => $value) :
            $split[$key] = '<span style="border:1px solid black;padding:0.1em;">'.$value.'</span>';
          endforeach; ?>
          <p>เลขประจำตัวประชาชน <?=$split[0];?>  <?=$split[1].nbs().$split[2].nbs().$split[3].nbs().$split[4];?>  <?=$split[5].nbs().$split[6].nbs().$split[7].nbs().$split[8].nbs().$split[9];?>  <?=$split[10].nbs().$split[11];?>  <?=$split[12];?></p>
          <p>ที่อยู่ตามทะเบียนบ้าน เลขที่ ..........<?=$address['address'];?>.......... หมู่ ..........<?=$address['moo'];?>.......... ซอย ..........<?=$address['soi'];?>.......... ถนน ..........<?=$address['street'];?>..........</p>
          <p>แขวง/ตำบล ..........<?=$address['tambon'];?>.......... เขต/อำเภอ ..........<?=$address['amphur'];?>..........</p>
          <p>จังหวัด ..........<?=$address['province'];?>.......... รหัสไปรษณีย์ ..........<?=$address['zip'];?>..........</p>
          <p>โทรศัพท์ ..........<?=$address['phone'];?>.......... โทรสาร ..........<?=$address['fax'];?>.......... อีเมล์ ..........<?=$address['email'];?>..........</p>

          <p>ที่อยู่ตามปัจจุบัน เลขที่ ..........<?=$address_current['address'];?>.......... หมู่ ..........<?=$address_current['moo'];?>.......... ซอย ..........<?=$address_current['soi'];?>.......... ถนน ..........<?=$address_current['street'];?>..........</p>
          <p>แขวง/ตำบล ..........<?=$address_current['tambon'];?>.......... เขต/อำเภอ ..........<?=$address_current['amphur'];?>..........</p>
          <p>จังหวัด ..........<?=$address_current['province'];?>.......... รหัสไปรษณีย์ ..........<?=$address_current['zip'];?>..........</p>
          <p>โทรศัพท์ ..........<?=$address_current['phone'];?>.......... โทรสาร ..........<?=$address_current['fax'];?>.......... อีเมล์ ..........<?=$address_current['email'];?>..........</p>

          <p>2.วุฒิการศึกษา ..........<?=$education['degree'];?>.......... สาขา ..........<?=$education['branch'];?>.......... สถานศึกษา ..........<?=$education['place'];?>..........</p>
          <p>3.อาชีพ ..........<?=$work['career'];?>.......... สถานที่ทำงาน ..........<?=$work['place'];?>..........</p>
          <p>4.มีความประสงค์จะขอรับหนังสือรับรองความรู้ความสามารถ ในสาขาอาชีพ</p>
          <span class="col-md-12">
            <p>(1) สาขา ..........<?=$record['career1'];?>..........</p>
            <p>(2) สาขา ..........<?=$record['career2'];?>..........</p>
            <p>(3) สาขา ..........<?=$record['career3'];?>..........</p>
            <p>(4) สาขา ..........<?=$record['career4'];?>..........</p>
            <p>(5) สาขา ..........<?=$record['career5'];?>..........</p>
          </span>
          <p>5.เอกสารหลักฐานประกอบการยื่นคำขอ</p>
          <span class="col-md-12">
            <p> <div class="checkbox"> <label><?=form_checkbox(array('name'=>'reference[picture]'),'picture',set_checkbox('reference[picture]','picture',isset($reference['picture'])));?>(1)รูปถ่ายหน้าตรง ขนาด 1 X 1.5 นิ้ว พื้นหลังสีขาว ซึ่งถ่ายมาแล้วไม่เกินหกเดือน จำนวน 2 รูป</label> </div> </p>
            <p> <div class="checkbox"> <label><?=form_checkbox(array('name'=>'reference[copy]'),'copy',set_checkbox('reference[copy]','copy',isset($reference['copy'])));?>(2)สำเนาบัตรประจำตัวประชาชน</label> </div> </p>
            <p> <div class="checkbox"> <label><?=form_checkbox(array('name'=>'reference[etc]'),'etc',set_checkbox('reference[etc]','etc',(isset($reference['etc'])&&$reference['etc']!='')));?>(3)เอกสารอื่นๆ (โปรดระบุ)</label> ..........<?=(isset($reference['etc'])&&$reference['etc']!='')?$reference['etc']:NULL;?>..........</div> </p>
            <p style="text-indent:1em;">*ข้าพเจ้าขอรับรองว่าข้อความดังกล่าวข้างต้นและเอกสารหลักฐานที่แนบคำขอถูกต้องและเป็นความจริงทุกประการ</p>
          </span>
        </div>
        <div class="col-md-6 col-md-offset-6">
          <br> <br> <p>ลงชื่อ ........................................ ผู้ยื่นคำขอ</p>
          <p>( ............................................................ )</p>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div> <hr>
    <div class="container">
      <div class="row">
        <table class="table table-bordered">
          <tr>
            <td style="width:50%;" class="text-center"> บัตรประจำตัวผู้เข้ารับการประเมิน <br>ศูนย์ประเมินความรู้ความสามารถ </td>
            <td rowspan="2" class="text-center"> <br> <br> <br> ให้ผู้สมัครเก็บบัตรนี้ไว้แสดงหลักฐานเมื่อเข้าประเมิน <br>ถ้าไม่มีบัตรไม่อนุญาตให้เข้าประเมิน </td>
          </tr>
          <tr>
            <td style="width:50%;">
              <div class="col-xs-4">
                <div class="text-center" style="border:1px solid gray;">
                  <br> รูปถ่ายขนาด <br> 1 x 1.5 นิ้ว <br> <br>
                </div>
                <br> ........................................
                <br> (ลายมือชื่อผู้สมัคร)
              </div>
              <div class="col-xs-8">
                ชื่อ ..................................................
                <br>สาขาอาชีพ ........................................
                <br>1.สาขา ........................................
                <br>วันที่ประเมิน ........................................
                <br>2.สาขา ........................................
                <br>วันที่ประเมิน ........................................
              </div>​
              <div class="col-md-12">
                ผู้รับสมัคร ........................................
                <br>วันที่ .......... เดือน .......... พ.ศ. ..........
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <?=script_tag('assets/js/jquery.min.js');?>
  <?=script_tag('assets/js/bootstrap.min.js');?>
</body>
</html>
