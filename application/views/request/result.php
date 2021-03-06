<div class="panel panel-success">
  <div class="panel-heading"> <h3 class="panel-title">รายการคำร้องที่ดำเนินการอยู่ <?=count($requests);?> รายการ</h3> </div>
  <div class="panel-body"> </div>
  <table class="table table-hover">
    <thead> <tr> <th>ประเภทรายการ</th> <th>วันที่เข้าสอบ</th> <th>บัตรคิว</th> <th>ผลการสอบ</th> </tr> </thead>
    <tbody>
      <?php foreach ($requests as $key => $value) : ?>
        <tr class="rows" style="display:none;">
          <td><?=isset($value['category']) ? $value['category'] : 'หนังสือรับรองความรู้ความสามารถ';?></td>
          <td><?=($value['approve_schedule']!=NULL) ? date('d-m-Y',$value['approve_schedule']) : 'N/A';?></td>
          <td><?=($value['approve_schedule']!=NULL) ? anchor_popup('account/request/queue/'.$value['date_create'],'ดู',array('class'=>'label label-info')) : 'N/A';?></td>
          <td><?=($value['approve_schedule']!=NULL) ? $value['status'] : 'N/A';?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="panel-footer"> <?=anchor('#','ก่อนหน้า',array('class'=>'label label-default','id'=>'more'));?> </div>
</div>

<script type="text/javascript">
$(function(){
  var rows = $('.rows');
  var more = $('#more');

  rows.slice(0,10).show();

  if ($('.rows:hidden').length < 10) {
    more.hide();
  }

  more.on('click',function(e){
    e.preventDefault();
    $('.rows:hidden').slice(0,5).fadeIn('slow');
    if ($('.rows:hidden').length == 0) {
      more.fadeOut('slow');
    }
  });
});
</script>
