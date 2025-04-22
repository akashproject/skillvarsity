<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trait\afterLeadSubmit;
use App\Models\Contact;
use App\Models\University;
use Illuminate\Support\Facades\DB;

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
            $tel = "https://api.st-messaging.com/fe/api/v1/send?username=icaedu1.trans&password=Password@123&unicode=true&from=SKLVAR&to=".$_POST["mobile"]."&text=".$otpvalue."+is+your+One+Time+Password+%28OTP%29+for+graduation+course+enquiry+at+SkillVarsity+for+the+mobile+number+xxxxxx".$lastdigit.".+Thank+you+for+your+enquiry.&dltContentId=1207174505626246408&dltPrincipalEntityId=1201159245568554682";

            curl_setopt_array($curl, array(
            CURLOPT_URL => $tel,
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
            $university = University::where("name",$postData['university'])->first();
            $city = DB::table('cities')->where('id',$university->city)->first()->name;
            $postData['city'] = $city;
            $ee = $this->leadCaptureLeadToExtraage($postData);
            $cogno = $this->cognoai_api_calling($postData);
            $thankYou = $this->thankyouNotication($postData);
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
