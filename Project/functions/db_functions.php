<?php

function getAllData()
{
    global $dbhandle;

    try {
        $query = 'SELECT * FROM jlh_hadir ORDER BY date DESC';
        $result_set = $dbhandle->query($query);

        if (!$result_set) {
            throw new Exception("Gagal mendapatkan data");
        } else {
            return $result_set;
        }
    } catch (Exception $e) {
        die("Something went wrong: " . $e->getMessage());
    }
}   

function getDataById($id)
{
    global $dbhandle;
    try {
        $query = 'SELECT * FROM jlh_hadir WHERE id=?';
        $statement = $dbhandle->prepare($query);

        if (!$statement) {
            throw new Exception("Gagal mendapatkan data");
        }

        $statement->bind_param('i', $id);
        $statement->execute();
        $result_set = $statement->get_result();

        if (!$result_set) {
            throw new Exception("Gagal mendapatkan data");
        } else {
            return $result_set;
        }
    } catch (Exception $e) {
        die("Something went wrong: " . $e->getMessage());
    }
}

function getLatestData()
{
    global $dbhandle;

    try {
        $query = 'SELECT * FROM jlh_hadir ORDER BY date DESC LIMIT 1';
        $result_set = $dbhandle->query($query);

        if (!$result_set) {
            throw new Exception("Gagal mendapatkan data");
        } else {
            return $result_set;
        }
    } catch (Exception $e) {
        die("Something went wrong: " . $e->getMessage());
    }
}

function getLatestUpdatedData()
{
    global $dbhandle;

    try {
        $query = 'SELECT * FROM jlh_hadir ORDER BY updated_at DESC LIMIT 1';
        $result_set = $dbhandle->query($query);

        if (!$result_set) {
            throw new Exception("Gagal mendapatkan data");
        } else {
            return $result_set;
        }
    } catch (Exception $e) {
        die("Something went wrong: " . $e->getMessage());
    }
}

function insertData($date, $total, $hadir, $terlambat, $tdk_hadir)
{
    global $dbhandle;
    try {
        $query = 'INSERT INTO jlh_hadir(`total`, `hadir`, `terlambat`, `tdk_hadir`, `date`) VALUES(?, ?, ?, ?, ?)';
        $statement = $dbhandle->prepare($query);

        if (!$statement) {
            return false;
        }

        $statement->bind_param('sssss',$total, $hadir, $terlambat, $tdk_hadir, $date);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}

function editDataById($id, $date, $total, $hadir, $terlambat, $tdk_hadir)
{
    global $dbhandle;
    try {
        $query = 'UPDATE jlh_hadir SET `total` = ?, `hadir` = ?, `terlambat` = ?, `tdk_hadir` = ?, `date` = ? WHERE (`id` = ?)';

        $statement = $dbhandle->prepare($query);

        if (!$statement) {
            return false;
        }

        $statement->bind_param('sssssi', $total, $hadir, $terlambat, $tdk_hadir, $date, $id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}

function deleteDataById($id)
{
    global $dbhandle;
    try {
        $query = 'DELETE FROM jlh_hadir WHERE id=?';

        $statement = $dbhandle->prepare($query);

        if (!$statement) {
            return false;
        }

        $statement->bind_param('i',$id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}






