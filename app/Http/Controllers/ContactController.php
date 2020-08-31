<?php

namespace App\Http\Controllers;

use App\Contact;
use Notification;
use Illuminate\Http\Request;
use App\Notifications\NotificationToProspect;

class ContactController extends Controller
{
    public function index() {
        $data['contacts'] = Contact::all();

        return view('contact.index',$data);
    }
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'subject' => 'required|max:255',
            'email'=> 'required|email',
            'body' => 'required',
        ]);
        $contact = new Contact();

        $contact->name = $validatedData['name'];
        $contact->last_name = $validatedData['last_name'];
        $contact->subject = $validatedData['subject'];
        $contact->email = $validatedData['email'];
        $contact->body = $validatedData['body'];
        $contact->save();
        $contact->notify(new NotificationToProspect($contact));
        //Notification::send($contact, new NotificationToProspect($contact));
        return redirect()->route('home')->with('status','Recibimos tu mensaje correctamente');
    }

}
