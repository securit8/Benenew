<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Redirect;
use App\Models\ticket;
use App\Mail\BeneMail;
use Mail;
use QrCodeServiceProvider;

class RoutesController extends Controller
{
    public function payzepost(Request $request){

        $client = new \GuzzleHttp\Client();
 // generating id wich changes tickets status after
           $today=date('YmdHi');
            
       //adding this data into request, to feed database
         $request->request->add(['given_id' => $today]);
        $request->request->add(['status' => 'pending']);
        
       if($request->transfer=="tbilisi1"){
        $price=$request->raodenoba*60;
        $trans="Tbilisi - Black Sea Arena (one way)";
       }
    //    if($request->transfer=="tbilisi2"){
    //     $price=$request->raodenoba*100;
    //     $trans="Tbilisi - Black Sea Arena (two way)";
    //    }
    //    if($request->transfer=="kutais1"){
    //     $price=$request->raodenoba*40;
    //     $trans="Kutaisi - Black Sea Arena (one way)";
    //    }
    //    if($request->transfer=="kutais2"){
    //     $price=$request->raodenoba*60;
    //     $trans="Kutaisi - Black Sea Arena (two way)";
    //    }
       if($request->transfer=="batum1"){
        $price=$request->raodenoba*35;
        $trans="Batumi - Black Sea Arena (one way)";
       }
       if($request->transfer=="batum2"){
        $price=$request->raodenoba*50;
        $trans="Batumi - Black Sea Arena (two way)";
       }
     
       $request->request->add(['Price' => $price]);
       $Name=$request->Name;
       $Name=str_replace(' ', '', $Name);
       $LastName=$request->LastName;
       $LastName=str_replace(' ', '', $LastName);
       $Email=$request->Email;
       $Email=str_replace(' ', '', $Email);
       $Phone=$request->Phone;
       $Phone=str_replace(' ', '', $Phone);
       $raodenoba=$request->raodenoba;
       $transfer=$request->transfer;
       $qr=$today;
        $response = $client->request('POST', 'https://payze.io/api/v1', [
          'body' => '{"method":"justPay","apiKey":"D385FD3954F640A4860478B47C3FC418",
            "apiSecret":"3C37E0F457FC4482B67EED4356B1AF3A","data":{"amount":'.$price.',
                "currency":"GEL","callback":"https://bene-exclusive.com/events/LImperatrice/ok/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='.$transfer.'&Price='.$price.'&raodenoba='.$raodenoba.'&qr='.$qr.'",
                "callbackError":"https://bene-exclusive.com/events/LImperatrice/fail/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='.$transfer.'&Price='.$price.'&raodenoba='.$raodenoba.'&qr='.$qr.'","preauthorize":false,
                "lang":"GE","hookUrl":"https://corp.com/payze_hook?authorization_token=token"}}',
          'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
          ],
        ]);  
        $input = $request->except('_token');
        $ticket = new ticket();
        $ticket->fill($input);
        $ticket->unguard();
		$ticket->save();

          $json = $response->getBody();
         $json = json_decode($json, true);
         $trurl=$json['response'];
        $redirUrl=$trurl['transactionUrl'];


            return Redirect::intended($redirUrl);
        }




  public function okcallback(Request $request,$id){
     
    $savedqr='../public/qrcodes/'.$id.'.png';
    $linkedqr='https://bene-exclusive.com/public/qrcodes/'.$id.'.png';
    \QrCode::size(500)
    ->format('png')
    ->generate($id, public_path($savedqr));
    
 $ticket = ticket::where('given_id', $id)->first();

   $ticket->status="success";
$ticket->save();
$tstatus='success';
$data = [
    'Name'=>$request->Name,
    'LastName'=>$request->Lastname,
    'Email'=>$request->Email,
    'Phone'=>$request->Phone,
    'transfer'=>$request->transfer,
    'Price'=>$request->Price,
    'raodenoba'=>$request->raodenoba,
    'qr'=>$linkedqr,
    'status'=>$tstatus,
];
$toEmail=$request->Email;

    Mail::send('frontend.ticket', $data, function($message) use ($toEmail) 
    {
         $message->to($toEmail, 'Black Sea Tickets')->subject ('Black Sea Tickets');                
         $message->from('info@bene-exclusive.com' , 'Bene Exclusive' )  ;
 
    });
return view('frontend.blacksea')->withErrors(['success', 'payment success']);

    
    // $savedqr='../public/qrcodes/'.$id.'.png';
    // $linkedqr='https://bene-exclusive.com/public/qrcodes/'.$id.'.png';
    // \QrCode::size(500)
    // ->format('png')
    // ->generate($id, public_path($savedqr));
    

    //     $ticket = ticket::where('given_id', $id)->first();
       
    //       $ticket->status="success";
    //    $ticket->save();
    //    $tstatus='success';
    //    $data = [
    //        'Name'=>$request->Name,
    //        'LastName'=>$request->Lastname,
    //        'Email'=>$request->Email,
    //        'Phone'=>$request->Phone,
    //        'transfer'=>$request->transfer,
    //        'Price'=>$request->Price,
    //        'raodenoba'=>$request->raodenoba,
    //        'qr'=>$linkedqr,
    //        'status'=>$tstatus,
    //    ];
    // $toEmail=$request->Email;
    
    //     Mail::send('frontend.ticket', $data, function($message) use ($toEmail) 
    //     {
    //          $message->to($toEmail, 'Black Sea Tickets')->subject ('Black Sea Tickets');                
    //          $message->from('info@bene-exclusive.com' , 'Bene Exclusive' );
      
     
    //     });
    //    return view('frontend.blacksea')->with('success', 'payment success'); 
  }




  public function failcallback(Request $request, $id){
    
    $savedqr='../public/qrcodes/'.$id.'.png';
    $linkedqr='https://bene-exclusive.com/public/qrcodes/'.$id.'.png';
    \QrCode::size(500)
    ->format('png')
    ->generate($id, public_path($savedqr));
    
 $ticket = ticket::where('given_id', $id)->first();

   $ticket->status="fail";
$ticket->save();
$tstatus='fail';
$data = [
    'Name'=>$request->Name,
    'LastName'=>$request->Lastname,
    'Email'=>$request->Email,
    'Phone'=>$request->Phone,
    'transfer'=>$request->transfer,
    'Price'=>$request->Price,
    'raodenoba'=>$request->raodenoba,
    'qr'=>$linkedqr,
    'status'=>$tstatus,
];
$toEmail=$request->Email;

    Mail::send('frontend.ticket', $data, function($message) use ($toEmail) 
    {
         $message->to($toEmail, 'Black Sea Tickets')->subject ('Black Sea Tickets');                
         $message->from('info@bene-exclusive.com' , 'Bene Exclusive' );
  
 
    });
return view('frontend.blacksea')->withErrors(['msg' => 'payment has declined']);
  }


  public function sepguzzle(Request $request){

    $client = new \GuzzleHttp\Client();
// generating id wich changes tickets status after
       $today=date('YmdHi');
        
   //adding this data into request, to feed database
     $request->request->add(['given_id' => $today]);
    $request->request->add(['status' => 'pending']);
    $request->request->add(['raodenoba' => '1']);
    $request->request->add(['transfer' => 'bat1']);
    
   
//    }
   
   $price=3960;
 
   $request->request->add(['Price' => $price]);
   $Name=$request->Name;
   $Name=str_replace(' ', '', $Name);
   $LastName=$request->LastName;
   $LastName=str_replace(' ', '', $LastName);
   $Email=$request->Email;
   $Email=str_replace(' ', '', $Email);
   $Phone=$request->Phone;
   $Phone=str_replace(' ', '', $Phone);
   $transfer="bat1";
   $raodenoba=1;
   $qr=$today;
    $response = $client->request('POST', 'https://payze.io/api/v1', [
      'body' => '{"method":"justPay","apiKey":"D385FD3954F640A4860478B47C3FC418",
        "apiSecret":"3C37E0F457FC4482B67EED4356B1AF3A","data":{"amount":'.$price.',
            "currency":"GEL","callback":"https://bene-exclusive.com/events/LImperatrice/ok/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='."$transfer".'&Price='.$price.'&raodenoba='.$raodenoba.'&qr='.$qr.'",
            "callbackError":"https://bene-exclusive.com/events/LImperatrice/fail/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='.$transfer.'&Price='.$price.'&raodenoba='.$raodenoba.'&qr='.$qr.'","preauthorize":false,
            "lang":"GE","hookUrl":"https://corp.com/payze_hook?authorization_token=token"}}',
      'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);  
    $input = $request->except('_token');
    $ticket = new ticket();
    $ticket->fill($input);
    $ticket->unguard();
    $ticket->save();

      $json = $response->getBody();
     $json = json_decode($json, true);
     $trurl=$json['response'];
    $redirUrl=$trurl['transactionUrl'];


        return Redirect::intended($redirUrl);
    }

public function sepguzzleNext(Request $request){

    $client = new \GuzzleHttp\Client();
// generating id wich changes tickets status after
       $today=date('YmdHi');
        
   //adding this data into request, to feed database
     $request->request->add(['given_id' => $today]);
    $request->request->add(['status' => 'pending']);
    $request->request->add(['raodenoba' => '1']);
    $request->request->add(['transfer' => 'bat1']);
    
   
//    }
   
   $price=1415;
 
   $request->request->add(['Price' => $price]);
   $Name=$request->Name;
   $Name=str_replace(' ', '', $Name);
   $LastName=$request->LastName;
   $LastName=str_replace(' ', '', $LastName);
   $Email=$request->Email;
   $Email=str_replace(' ', '', $Email);
   $Phone=$request->Phone;
   $Phone=str_replace(' ', '', $Phone);
   $transfer="bat1";
   $raodenoba=1;
   $qr=$today;
    $response = $client->request('POST', 'https://payze.io/api/v1', [
      'body' => '{"method":"justPay","apiKey":"D385FD3954F640A4860478B47C3FC418",
        "apiSecret":"3C37E0F457FC4482B67EED4356B1AF3A","data":{"amount":'.$price.',
            "currency":"GEL","callback":"https://bene-exclusive.com/events/LImperatrice/ok/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='."$transfer".'&Price='.$price.'&raodenoba='.$raodenoba.'&qr='.$qr.'",
            "callbackError":"https://bene-exclusive.com/events/LImperatrice/fail/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='.$transfer.'&Price='.$price.'&raodenoba='.$raodenoba.'&qr='.$qr.'","preauthorize":false,
            "lang":"GE","hookUrl":"https://corp.com/payze_hook?authorization_token=token"}}',
      'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);  
    $input = $request->except('_token');
    $ticket = new ticket();
    $ticket->fill($input);
    $ticket->unguard();
    $ticket->save();

      $json = $response->getBody();
     $json = json_decode($json, true);
     $trurl=$json['response'];
    $redirUrl=$trurl['transactionUrl'];


        return Redirect::intended($redirUrl);
    }


   public function index() {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }

    public function news() {
        return view('frontend.news');
    }

    public function fleet(){
        return view('frontend.fleet');
    }

    public function rent(){
        return view('frontend.car-rent');
    }
    
    public function academy(){
        return view('frontend.academy');
    }

    public function taxi(){
        return view('frontend.taxi');
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function  motors(){
        return view('frontend.motors');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function electric(){
        return view('frontend.electric');
    }
    
    public function events(){
        return view('frontend.events');
    }

    public function article1(){
        return view('frontend.news-article1');
    }

    public function Sclass(){
        return view('frontend.S-class');
    }

    public function Sclass2019(){
        return view('frontend.S-class2019');
    }

    public function sprinter(){
        return view('frontend.sprinter');
    }

    public function camry(){
        return view('frontend.camry');
    }

    public function tesla(){
        return view('frontend.tesla');
    }

    public function tourismo(){
        return view('frontend.tourismo');
    }

    public function temsa(){
        return view('frontend.temsa');
    }

    public function eclass(){
        return view('frontend.e-class');
    }

    public function land(){
        return view('frontend.land');
    }

    public function land200(){
        return view('frontend.land200');
    }

    public function vclass(){
        return view('frontend.v-class');
    }

    public function brands(){
        return view('frontend.brands');
    }

  

    public function prado(){
        return view('frontend.prado');
    }

    public function rav4(){
        return view('frontend.rav4');
    }

    public function moiare(){
        return view('frontend.event-moiare');
    }

    public function week(){
        return view('frontend.week');
    }

    public function event(){
        return view('frontend.mercedes-event');
    }

    public function blacksea() {

        return view('frontend.blacksea');
    }

    public function distribution(){
        return view('frontend.distribution');
    }

    public function networking(){
        return view('frontend.networking');
    }

    public function KIAK5(){
        return view('frontend.KIAK5');
    }

    public function MODELY(){
        return view('frontend.MODELY');
    }
    
    public function qrview(){

        return view('qr');
    }
    
    public function seppay() {

        return view('frontend.pay');
    }
    public function seppayNext() {

        return view('frontend.payNext');
    }
}

