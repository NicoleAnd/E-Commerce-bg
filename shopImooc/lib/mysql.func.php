<?php
function connect(){
	$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("���ݿ�����ʧ��Error:".mysql_errno().":".mysql_error());
	mysql_set_charset(DB_CHARSET);
	mysql_select_db(DB_DBNAME) or die("ָ�����ݿ��ʧ��");
	return $link;
}