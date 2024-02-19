<?php
$sql = DB::update('update zayavkas set status = ? where id = ?',['Отклонена',$id]);
