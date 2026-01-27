<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-sp_tg" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-sp_tg" class="form-horizontal">
		  <ul class="nav nav-tabs">
			<li class="active"><a href="#tab-settings" data-toggle="tab"><i class="fa fa-cog"></i> <?php echo $text_settings; ?></a></li>
            <li><a href="#tab-help" data-toggle="tab"><i class="fa fa-life-ring"></i> <?php echo $text_help; ?></a></li>
          </ul>
		  <div class="tab-content">
		  <div class="tab-pane active" id="tab-settings">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="sp_tg_status" id="input-status" class="form-control">
                <?php if ($sp_tg_status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div> 
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_telegram_bot_id; ?></label>
               <div class="col-sm-10">
                    <input type="text" name="sp_tg_telegram_bot_id" value="<?php echo $sp_tg_telegram_bot_id; ?>" class="form-control" />
               </div>
		  </div>
		  <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_telegram_send_to_id; ?></label>
               <div class="col-sm-10">
                    <input type="text" name="sp_tg_telegram_send_to_id" value="<?php echo $sp_tg_telegram_send_to_id; ?>" class="form-control" />
               </div>
		  </div>
		 <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_telegram_send_status; ?></label>
               <div class="col-sm-10">
                 <div class="well well-sm" style="height: 150px; overflow: auto;">
                   <?php foreach ($order_statuses as $order_status) { ?>
                   <div class="checkbox">
                     <label>
                       <?php if (in_array($order_status['order_status_id'], $sp_tg_telegram_send_status)) { ?>
                       <input type="checkbox" name="sp_tg_telegram_send_status[]" value="<?php echo $order_status['order_status_id']; ?>" checked="checked" />
                       <?php echo $order_status['name']; ?>
                       <?php } else { ?>
                       <input type="checkbox" name="sp_tg_telegram_send_status[]" value="<?php echo $order_status['order_status_id']; ?>" />
                       <?php echo $order_status['name']; ?>
                       <?php } ?>
                     </label>
                   </div>
                   <?php } ?>
                 </div>
               </div>
             </div>
			<div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_telegram_message; ?></label>
               <div class="col-sm-10">
				    <textarea name="sp_tg_telegram_message" rows="20" class="form-control"><?php echo $sp_tg_telegram_message; ?></textarea>
               </div>
		  </div>
	  <fieldset>
	  </div>
		<div class="tab-pane" id="tab-help">
		   <legend><?php echo $text_help; ?></legend>
		   <?php echo $text_credits; ?>
		</div>
		</div>
		</form>
    </div>
  </div>
</div>
</div>
<?php echo $footer; ?>