<?php
include 'db.php';

// Handling POST data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $sname = $_POST["sname"];
    $s_dob = $_POST["s_dob"];
    $gender = $_POST["gender"];
    $phno = $_POST["phno"];
    $wtsapp = $_POST["wtsapp"];
    $email = $_POST["email"];
    $schltype = $_POST["schltype"];
    $schlstu = $_POST["schlstu"];
    $emis = $_POST["emis"];
    $religion = $_POST["religion"];
    $community = $_POST["community"];
    $caste = $_POST["caste"];
    $nation = $_POST["nation"];
    $mother_tongue = $_POST["mother_tongue"];
    $aadharno = $_POST["aadharno"];
    $disability = $_POST["disability"];
    $adm_no = $_POST["adm_no"];
    $tc_produce = $_POST["tc_produce"];
    $oldtc_issue_no = $_POST["oldtc_issue_no"];
    $oldtc_issue_date = $_POST["oldtc_issue_date"];
    $admdate = $_POST["admdate"];
    $cls = $_POST["cls"];
    $date_of_leave = $_POST["date_of_leave"];
    $newtc_issue_date = $_POST["newtc_issue_date"];
    $reason_for_leaving = $_POST["reason_for_leaving"];
    $remarks = $_POST["remarks"];
    $relation = $_POST["relation"];
    $fname = $_POST["fname"];
    $foccupation = $_POST["foccupation"];
    $gname = $_POST["gname"];
    $goccupation = $_POST["goccupation"];
    $gann_income = $_POST["gann_income"];
    $mname = $_POST["mname"];
    $moccupation = $_POST["moccupation"];
    $ann_income = $_POST["ann_income"];
    $parent_contact = $_POST["parent_contact"];
    $s_address = $_POST["address"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $s_state = $_POST["state"];
    $pin_code = $_POST["pin_code"];

    // Escape variables for security
    $sname = mysqli_real_escape_string($conn, $sname);
    // Repeat for other variables...
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO personal (sname, s_dob, gender, phno, wtsapp, email, schltype, schlstu, emis, religion, community, caste, nation, mother_tongue, aadharno, disability, adm_no, tc_produce, oldtc_issue_no, oldtc_issue_date, admdate, cls, date_of_leave, newtc_issue_date, reason_for_leaving, remarks, relation, fname, foccupation, gname, goccupation, gann_income, mname, moccupation, ann_income, parent_contact, s_address, city, district, s_state, pin_code) 
            VALUES ('$sname', '$s_dob', '$gender', '$phno', '$wtsapp', '$email', '$schltype', '$schlstu', '$emis', '$religion', '$community', '$caste', '$nation', '$mother_tongue', '$aadharno', '$disability', '$adm_no', '$tc_produce', '$oldtc_issue_no', '$oldtc_issue_date', '$admdate', '$cls', '$date_of_leave', '$newtc_issue_date', '$reason_for_leaving', '$remarks', '$relation', '$fname', '$foccupation', '$gname', '$goccupation', '$gann_income', '$mname', '$moccupation', '$ann_income', '$parent_contact', '$s_address', '$city', '$district', '$s_state', '$pin_code')";

    // Execute the SQL statement
    
    if (sqlsrv_query($conn, $sql)) {
        echo "Success";
    } else {
        echo "Error: " . sqlsrv_errors(); // Return error message if execution fails
    }
    

    // Close the connection
    sqlsrv_close($conn);
} else {
    echo "Error: Form submission method is not POST!"; // Return error message if form submission method is not POST
}
?>
