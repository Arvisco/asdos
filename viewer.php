<?php include 'misc.php';

$huh = mysqli_query($c, "SELECT * FROM excel WHERE id LIKE '1'");
$yes = $huh -> fetch_assoc();

// (A) PHPSPREADSHEET TO LOAD EXCEL FILE
require "vendor/autoload.php";
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("storage/".$yes['file']);
 
// (B) COUNT NUMBER OF WORKSHEETS
$allsheets = $spreadsheet->getSheetCount();
 
// (C) LOOP THROUGH ALL WORKSHEETS
for ($i=0; $i<$allsheets; $i++) {
  // (C1) GET WORKSHEET
  $worksheet = $spreadsheet->getSheet($i);
 
  // (C2) LOOP THROUGH ROWS OF CURRENT WORKSHEET
  foreach ($worksheet->getRowIterator() as $row) {
    // (C3) READ CELLS
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);
    foreach ($cellIterator as $cell) { echo $cell->getValue() ."<br>"; }
  }
} ?>



</body>
</html>