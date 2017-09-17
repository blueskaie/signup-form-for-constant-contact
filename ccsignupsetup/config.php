<?php
class CC_Config { 
var $login = 'username';
var $password = 'password';
var $apikey = "api for cc"; 
var $contact_lists = array("Member (Do you work for a local business located within The Waterfront BIA boundaries? (East of Stadium Rd., west of Yonge St., south of Harbour St. & the south side of Lake Shore Blvd. West.)","Other (Main database)","WBIA Friends (Do you do business with a member of The Waterfront BIA team?)");
var $force_lists = false; 
var $included_fields = array("EmailAddress","FirstName","LastName");
var $custom_field_labels = array("Custom Field 1","Custom Field 2","Custom Field 3","Custom Field 4","Custom Field 5","Custom Field 6","Custom Field 7","Custom Field 8","Custom Field 9","Custom Field 10","Custom Field 11","Custom Field 12","Custom Field 13","Custom Field 14","Custom Field 15");
var $show_contact_lists = true;
var $actionBy = "ACTION_BY_CONTACT"; 
var $success_url = "http://localhost/ccsignup/thank.html";
var $failure_url = "http://localhost/ccsignup/index.php";
var $make_dialog = "";
} 
?>