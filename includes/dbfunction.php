<?php
	function GetCountOfQuery($conn, $sql, $params = [], $types = "") {
        $stmt = mysqli_prepare($conn, $sql);
        
        if (!$stmt) {
            return 0;
        }
        if (!empty($params)) {
            mysqli_stmt_bind_param($stmt, $types, ...$params);
        }
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['total'] ?? 0;
        }
        return 0; 
    }


	function GetDataFromQuery($conn, $sql, $params = [], $types = "")
	{
		$stmt = mysqli_prepare($conn, $sql);
        
        if (!$stmt) {
            return [];
        }
        if (!empty($params)) {
            mysqli_stmt_bind_param($stmt, $types, ...$params);
        }
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return []; 
	}
?>