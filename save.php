 <?php
    include ('phpToPDF/phpToPDF.php');

    //It is possible to include a file that outputs html and store it in a variable 
    //using output buffering.
    
    $my_html = "http://phptopdf.com/";

    //Set Your Options -- we are saving the PDF as 'my_filename.pdf' to a 'my_pdfs' folder
    $pdf_options = array(
      "source_type" => 'url',
      "source" => $my_html,
      "action" => 'download',
      "save_directory" => '',
      "file_name" => 'my_filename.pdf');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);
    echo ("<a href='my_filename.pdf'>Download Your PDF</a>");
?> 