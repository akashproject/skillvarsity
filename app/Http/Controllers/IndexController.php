<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trait\afterLeadSubmit;
use App\Models\Contact;

class IndexController extends Controller
{
    use afterLeadSubmit;
    public $_statusOK = 200;
    public $_statusErr = 500;
    
    public function index(Request $request)
    {
        try {
            return view("index");
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    public function submitMobileOtp(Request $request){
        try {
            $data = $request->all();
            $otpvalue = rand(1111,9999);
            $lastdigit = substr($_POST['mobile'], -4);

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mysmsshop.in/V2/http-api.php?apikey=8bhPdcPVJabXWdla&senderid=ICAEDU&number='.$_POST['mobile'].'&message='.$otpvalue.'%20is%20your%20One%20Time%20Password%20(OTP)%20for%20online%20course%20enquiry%20at%20ICA%20Edu%20Skills%20Pvt%20Ltd.%20for%20the%20mobile%20number%20xxxxxx'.$lastdigit.'.%20Thank%20you%20for%20your%20inquiry.%20PLS%20DO%20NOT%20SHARE%20IT%20WITH%20ANYONE%20APART%20FROM%20ICA%20representative.',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $data = array(
                "lastdigit" => $lastdigit,
                "otp_value" => $otpvalue,
            ); 

            if($response){
                $data['status'] = "success";
            } else {
                $data['status'] = "failed";
            }

            return response()->json($data, $this->_statusOK);

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function captureLead(Request $request)
    {
        try {
           
            $postData = $request->all();
            $validatedData = $request->validate([
                "lead_mobile_number" => "required",
                "lead_first_name" => "required",
            ]);
            
            $ee = $this->leadCaptureLeadToExtraage($postData);
            $cogno = $this->cognoai_api_calling($postData);
            $postData['crm_status'] = $ee->original;
            $postData['whatsApp_status'] = $cogno->original;
            $insert_lead_to_db = $this->captureLeadToDB($postData);

            return redirect('/thank-you');

        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }

    public function saveContact(Request $request)
    {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "contact_first_name" => "required",
                "contact_last_name" => "required",
                "contact_email" => "required",
                "contact_subject" => "required",
                "contact_message" => "required",
            ]);

            Contact::create($postData);

            return redirect()->back()->with('message', 'Request has been submitted successfully!');

        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
        
    }
}
