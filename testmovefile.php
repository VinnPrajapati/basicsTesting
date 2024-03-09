<?php
error_reporting(E_ALL);


$int_chk_url = "https://hiring.cogentlab.com/csa/storage/app/public/" . $intid . ".pdf";
$dest_path = getenv('ASSET_URL') . "/alldocs/checklist_pdf/";

try {
    // Use PHP's rename function to move the file
    File::move($int_chk_url, $dest_path);
} catch (Exception $th) {
    // Handle exceptions
    dd($th->getMessage());
}
