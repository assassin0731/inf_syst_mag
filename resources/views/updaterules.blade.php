<?php
$sql = DB::update("update rules set rules=? where id_user=?",[$react,$id]);
