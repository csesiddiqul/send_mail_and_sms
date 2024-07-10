<?php
namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;

class PdfController extends Controller
{


//    public function index($type, $id) {
//        $html = view($type, compact('type', 'id'))->render();
//
//        $mpdf = new \Mpdf\Mpdf([
//
//            'default_font' => 'mukti',
//            'mode' => 'utf-8'
//
//        ]);
//
//        $mpdf->WriteHTML($html);
//        $filename = "{$type}_{$id}.pdf"; // Constructing the filename based on $type and $id
//        $mpdf->Output();
//    }
//
//

    public function index($type, $id)
    {
        $data = [
            'foo' => 'bar',
            'bengali_text' => 'বাংলা টেক্সট'
        ];

        $html = view('pdf-template', compact('type', 'id', 'data'))->render();

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'default_font_size' => 12,
            'default_font' => 'dejavusans',
            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], [
                public_path('fonts')
            ]),
            'fontdata' => (new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'] + [
                    'notosansbengali' => [
                        'R' => 'NotoSansBengali-Regular.ttf',
                        'B' => 'NotoSansBengali-Bold.ttf',
                    ],
                    'dejavusans' => [
                        'R' => 'DejaVuSans.ttf',
                        'B' => 'DejaVuSans-Bold.ttf',
                    ],
                ],
        ]);

        $mpdf->WriteHTML($html);
        return $mpdf->Output('pdf.pdf', \Mpdf\Output\Destination::INLINE);
    }




//    public function index($type, $id) {
//        $html = view($type, compact('type', 'id'))->render();
//        $mpdf = new \Mpdf\Mpdf([
////            'default_font_size' => 12,
////            'default_font' => 'nikosh',
//            'mode' => 'utf-8',
//            'default_font' => 'notos'
//        ]);
//           $mpdf->WriteHTML($html);
//        $filename = "{$type}_{$id}.pdf"; // Constructing the filename based on $type and $id
////        $mpdf->Output($filename, \Mpdf\Output\Destination::DOWNLOAD);
//        $mpdf->Output();
//    }


//    public function index($type, $id) {
//        $html = view('pdf-template', compact('type', 'id'))->render();
//        $mpdf = new \Mpdf\Mpdf([
//            'default_font' => 'nikosh'
//        ]);
//        $mpdf->WriteHTML($html);
//
//        $filename = "{$type}_{$id}.pdf"; // Constructing the filename based on $type and $id
////        $mpdf->Output($filename, \Mpdf\Output\Destination::DOWNLOAD);
//    }

//    public function index1()
//    {
//        // Load the Blade template and render it to HTML
//        $html = view('pdf-template')->render();
//
//        // Configure Dompdf
//        $options = new Options();
//        $options->set('isHtml5ParserEnabled', true);
//        $options->set('isPhpEnabled', true);
//
//        // Setup Dompdf class
//        $dompdf = new Dompdf($options);
//
//        // Load HTML content
//        $dompdf->loadHtml($html);
//
//        // (Optional) Setup the paper size and orientation
//        $dompdf->setPaper('A4', 'portrait');
//
//        // Load Bengali font (assuming the font file is in `public/fonts/`)
////        $font = public_path('fonts/SolaimanLipi.ttf'); // Replace with your font path
////        $dompdf->setFont($font, '', 14);
//
//        // Render the HTML as PDF
//        $dompdf->render();
//
//        // Output the generated PDF to Browser
//        return $dompdf->stream();
//    }


//    public function index()
//    {
//        // Define the custom fonts
//        $defaultConfig = (new ConfigVariables())->getDefaults();
//        $fontDirs = $defaultConfig['fontDir'];
//
//        $defaultFontConfig = (new FontVariables())->getDefaults();
//        $fontData = $defaultFontConfig['fontdata'];
//
//        $mpdf = new Mpdf([
//            'mode' => 'utf-8',
//            'format' => 'A4',
//            'default_font' => 'dejavusans', // Set a default font
//            'fontDir' => array_merge($fontDirs, [
//                storage_path('fonts'),
//            ]),
//            'fontdata' => $fontData + [
//                    'customfont' => [
//                        'R' => 'NotoSansBengalidd.ttf',
////                        'B' => 'CustomFontBold.ttf',
//                    ],
//                ],
//        ]);
//
//        // Define the HTML content with inline styles for different fonts
//        $html = '
//        <h1 style="font-family: Arial, sans-serif;">PDF Title in Arial</h1>
//        <p style="font-family: DejaVu Sans, sans-serif;">This is the content with special characters in DejaVu Sans: èéêëēėę</p>
//        <p style="font-family: Times New Roman, serif;">This is some text in Times New Roman.</p>
//        <p style="font-family: Courier, monospace;">This is some text in Courier.</p>
//        <p style="font-family: customfont, sans-serif;">This is some text in Custom Font.</p>
//        ';
//
//        // Write the HTML content to the PDF
//        $mpdf->WriteHTML($html);
//
//        // Output the generated PDF to the browser for download
//        $mpdf->Output();
//}

}


