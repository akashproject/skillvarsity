<?php

namespace App\Trait;
use App\Models\Lead;

trait afterLeadSubmit
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function leadCaptureLeadToExtraage($postData){


        $apiData =  array(
            'AuthToken' => 'ICAUNIPRO-17-10-2018',
            'Source' => "icaunipro",
            'FirstName' => $postData['lead_first_name'],
            'LastName' => $postData['lead_last_name'],
            'Email' => $postData['lead_email'],
            'MobileNumber' => $postData['lead_mobile_number'],
            'Center' => $postData['city'],
            'address' => $postData['lead_city'],
            'Location' => isset($postData['university'])?$postData['university']:'',
            'LeadType' => $postData['LeadType'],
            'LeadSource' => $postData['utm_source'],
            'LeadName' => $postData['utm_campaign'],
            'textb1' => $postData['utm_url'],
            'textb2' => $postData['utm_term'],
            'textb3' => $postData['utm_content'],
            'textb4' => $postData['utm_adgroup'],
            'field5' => $postData['utm_device']
        );        
        $url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead"; 		
        $curl = curl_init();
        
        $data = json_encode($apiData);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        return response()->json($resp, $this->_statusOK);
    }

    function cognoai_api_calling($postData){
        $whatsappArray = (object) array(
            "authorization" => "1d27951f-1532-48a2-b892-b84453945a06", 
            "campaign_id" => "250174", 
            "whatsapp_bsp" => "1", 
            "client_data" => array(
                "phone_number" => "+91".$postData['lead_mobile_number'], 
                "name" => $postData['lead_first_name'].' '.$postData['lead_last_name'], 
                "dynamic_data" => array(
                    "1"=> $postData['lead_first_name'].' '.$postData['lead_last_name']
                )
            ) 
        );
        
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.cognocart.com/campaign/external/send-event-based-triggered-whatsapp-campaign/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($whatsappArray),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));
    
        $resp = curl_exec($curl);
        curl_close($curl);
        return response()->json($resp, $this->_statusOK);
    }

    public function captureLeadToDB($leadData){
        try {
           
            $data = array(
                'first_name' => $leadData['lead_first_name'],
                'last_name' => $leadData['lead_last_name'],
                'email' => $leadData['lead_email'],
                'mobile' => $leadData['lead_mobile_number'],
                'university' => (isset($leadData['university']))?$leadData['university']:'',
                'pincode' => (isset($leadData['pincode']))?$leadData['pincode']:'',
                'latitude' => (isset($_COOKIE['lat']))?$_COOKIE['lat']:'',
                'longitude' => (isset($_COOKIE['lng']))?$_COOKIE['lat']:'',
                'utm_source' => $leadData['utm_source'],
                'utm_campaign' => $leadData['utm_campaign'],
                'crm_status' => $leadData['crm_status'],
                'whatsApp_status' => $leadData['whatsApp_status'],
                'message_status' => (isset($leadData['message_status']))?$leadData['message_status']:'',
                'mail_status' => (isset($leadData['mail_status']))?$leadData['mail_status']:'',
            );

            $lead = Lead::create($data);

            return response()->json($lead, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            return response()->json($e, $this->_statusOK);
        }
    }

    public function thankyouNotication($postData){
        try {

            $url = "https://api.st-messaging.com/fe/api/v1/send?username=icaedu1.trans&password=Password@123&unicode=true&from=SKLVAR&to=".$postData["lead_mobile_number"]."&text=Hi+".$postData["lead_first_name"]."%2C+Thank+you+for+your+interest+in+our+graduation+programs.+We+have+received+your+details+and+will+be+in+touch+soon.+Thanks+%26+Regards%2C+SkillVarsity&dltContentId=1207174505809479896&dltPrincipalEntityId=1201159245568554682";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
            "Accept: */*",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($curl);

            return true;
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }
}