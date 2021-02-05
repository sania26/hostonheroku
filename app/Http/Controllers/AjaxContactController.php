<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;


//use Log;
class AjaxContactController extends Controller
{
    //public function index()
    //{
      //  return view('ajax-contact-us-form');
    //}

    public function store(Request $request)
    {

        /*print_r($request);
        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required|unique:employees|max:255',
          'message' => 'required'
        ]);*/

        $input=$request->all();

        //Log::info($input);

        $save = new Contact;

        $save->name = $request->name;
        $save->email = $request->email;
        $save->message = $request->message;

        $save->save();
        $details = [
            'title' => 'Mail from UATS',
            'body' => 'This is for testing email using smtp',
            'Name'=>$request->name,
            'Email'=>$request->email,
            'Message'=>$request->message
        ];

        Mail::to('sania.tanvir09@gmail.com')->send(new \App\Mail\MyTestMail($details));


        //Call the mail function to send mail

        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }
}
