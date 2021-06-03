<?php

$remark = "Completed";
$sql = "SELECT * FROM appointments WHERE remarks = '$remark'";
$result = mysqli_query($conn, $sql);
$diagnosis = "None";
$treatment = "None";
/*$sql2 = "INSERT INTO patient_records(UUID, firstname, lastname, email, gender, concern, service, date, doctor)
SELECT  UUID, firstname, lastname, email, gender, concern, service, date, doctor 
FROM appointments a 
WHERE a.UUID,a.firstname,a.lastname, a.email, a.concern, a.service, a.date, a.doctor NOT IN (SELECT UUID, firstname, lastname, email, gender, concern, service, date, doctor FROM patient_records)"; */
$sql2 = "INSERT INTO patient_records(UUID, firstname, lastname, email, gender, concern, service, date, doctor) 
SELECT UUID, firstname, lastname, email, gender, concern, service, date, doctor 
FROM appointments a WHERE a.remarks = '$remark'";
$result2 = mysqli_query($conn, $sql2);
$result2;

$sql4 = "INSERT INTO patient_records(diagnosis, treatment) VALUES ('$diagnosis','$treatment') WHERE diagnosis = '' AND treatment = ''";
$result4 = mysqli_query($conn, $sql2);

$sql3 = "DELETE t1 FROM patient_records t1 
INNER JOIN patient_records t2
WHERE 
    t1.id < t2.id AND
    t1.UUID = t2.UUID";
$result3 = mysqli_query($conn, $sql3);
if($result){
    $result3;
    $result4;
}
?>
