<?php

namespace App\Http\Controllers;

use App\Models\ShortCodes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreShortCodesRequest;
use App\Http\Requests\UpdateShortCodesRequest;
use App\Models\A_number_pricing;
use App\Models\Pricelist;

class UploadController extends Controller
{
    public function uploadContent($file, $start){
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes

            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file
            while (($filedata = fgetcsv($file, 210000, ",")) !== FALSE) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i < $start) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading

            return $importData_arr;
        } else {
            //no file was uploaded
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function saveShortcodes(Request $request)
    {
        $file = $request->file('uploaded_file');
        $importData_arr = $this->uploadContent($file, 8);

        // dd($importData_arr);
        $j = 0;
        foreach ($importData_arr as $importData) {
            $j++;
            try {
                DB::beginTransaction();
                ShortCodes::create([
                    'ibis_codes' => $importData[0],
                    'destinations' => $importData[1],
                    'country_code' => $importData[2],
                    'short_code' => $importData[3],
                    'price_min' => $importData[4],
                    'price_status' => $importData[5],
                    'comment' => $importData[6],
                    'cli' => $importData[7],
                    'start_date' => $importData[8],
                    'end_date' => $importData[9],
                ]);


                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
            }
        }

        return redirect()->back()->with('success', "$j records successfully uploaded");
    }

    public function savePricelist(Request $request)
    {
        ini_set('max_execution_time', 500);

        $file = $request->file('uploaded_file');
        $importData_arr = $this->uploadContent($file, 8);
        // dd($importData_arr);
        $j = 0;
        foreach ($importData_arr as $importData) {
            $j++;
            Pricelist::create([
                'ibis_codes' => $importData[0] ?? '',
                'destinations' => $importData[1] ?? '',
                'country_code' => $importData[2] ?? '',
                'area_code' => $importData[3] ?? '',
                'price_min' => $importData[4] ?? '',
                'billing_increment' => $importData[5] ?? '',
                'price_status' => $importData[6] ?? '',
                'comment' => $importData[7] ?? '',
                'cli' => $importData[8] ?? '',
                'start_date' => $importData[9] ?? '',
                'end_date' => $importData[10] ?? '',
            ]);
        }

        return redirect()->back()->with('success', 'saved successfully');
    }

    public function saveANumberPricing(Request $request)
    {
        $file = $request->file('uploaded_file');
        $importData_arr = $this->uploadContent($file, 1);

        $j = 0;
        foreach ($importData_arr as $importData) {
            $j++;
            A_number_pricing::create([
                'destinations' => $importData[0] ?? '',
                'reference_destinations' => $importData[1] ?? '',
                'ibis_codes' => $importData[2] ?? '',
                'origin_group' => $importData[3] ?? '',
                'tde' => $importData[4] ?? '',
                'calendar' => $importData[5] ?? '',
                'price_min' => floatval($importData[6]) ?? '',
                'price_status' => $importData[7] ?? '',
                'start_date' => $importData[8] ?? '',
                'end_date' => $importData[9] ?? '',
                'a_number_origin' => $importData[10] ?? '',
                'a_numbers' => intval($importData[11]) ?? '',
                'a_number_origin_start_date' => $importData[12] ?? '',
                'a_number_origin_end_date' => $importData[13] ?? '',
                'a_number_origin_status' => $importData[14] ?? ''
            ]);
        }

        return redirect()->back()->with('success', 'saved successfully');
    }

    public function checkUploadedFileProperties($extension, $fileSize){
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 38797312; // Uploaded file size limit is 36mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    // public function sendEmail($email, $name){
    //     $data = array(
    //         'email' => $email,
    //         'name' => $name,
    //         'subject' => 'Welcome Message',
    //     );
    //     Mail::send('welcomeEmail', $data, function ($message) use ($data) {
    //         $message->from('welcome@myapp.com');
    //         $message->to($data['email']);
    //         $message->subject($data['subject']);
    //     });
    // }
}
