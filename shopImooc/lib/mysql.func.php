<?php

/**
 * �������ݿ�
 * @return resource
 */
function connect() {
	$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD ) or die ( "���ݿ�����ʧ��Error:" . mysql_errno () . ":" . mysql_error () );
	mysql_set_charset ( DB_CHARSET );
	mysql_select_db ( DB_DBNAME ) or die ( "ָ�����ݿ��ʧ��" );
	return $link;
}

/**
 * ��ɼ�¼����Ĳ���
 * 
 * @param string $table        	
 * @param array $array        	
 * @return number
 */
function insert($table, $array) {
	$keys = join ( ",", array_keys ( $array ) );
	$vals = "'" . join ( ",", array_values ( $array ) ) . "'";
	$sql = "insert {$table}($keys) values({$vals})";
	mysql_query ( $sql );
	return mysql_insert_id ();
}

/**
 * ��¼�ĸ��²���
 * @param string $table
 * @param array $array
 * @param string $where
 * @return number
 */
function update($table, $array, $where = null) {
	foreach ( $array as $key => $val ) {
		if ($str == null) {
			$sep = "";
		} else {
			$sep = ",";
		}
		$str .= $sep . $key . "='" . $val . "'";
	}
	// update imooc_admin set username='king' where id=1;
	$sql = "update {$table} set {$str}" . ($where == null ? null : "where" . $where);
	mysql_query ( $sql );
	return mysql_affected_rows ();
}

/**
 * ɾ����¼����
 * @param string $table
 * @param string $where
 * @return number
 */
function delete($table,$where=null){
	$where=($where==null?null:"where".$where);
	$sql="delete from {$table}{$where}";
	mysql_query($sql);
	return mysql_affected_rows();
}

/**
 * �õ�ָ��һ����¼
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchOne($sql,$result_type=MYSQL_ASSOC){
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result,$result_type);
	return $row;
}

/**
 * �õ�����������м�¼
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchAll($sql,$result_type=MYSQL_ASSOC){
	$result = mysql_query($sql);
	while (@$row=mysql_fetch_array($result,$result_type)){
		$rows[]=$row;
	}
	return $rows;
}

/**
 * �õ�������еļ�¼����
 * @param string $sql
 * @return number
 */
function getResultNum($sql){
	$result=mysql_query($sql);
	return mysql_num_rows($result);
}





