<?php if (!defined('APPLICATION')) exit();
echo '<ul class="DataList Activities">';
if (count($this->Data('Activities')) > 0) {
   include($this->FetchViewLocation('activities', 'activity', 'dashboard'));
   echo '<div class="PagerWrap">';
   PagerModule::Write(array('CurrentRecords' => count($this->Data('Activities'))));
   echo '</div>';
} else {
   ?>
<li><div class="Empty"><?php echo T('Not much happening here, yet.'); ?></div></li>
   <?php
}
echo '</ul>';