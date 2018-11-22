<?php namespace Tropa\Contact\Components;


use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Tropa\Contact\Models\Contact;
use Tropa\Subscriptions\Models\Subscription;

class ContactForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form',
        ];
    }

    public function onSend()
    {

        $name = Input::get('name');
        $email = Input::get('email');
        $message = Input::get('message');
        $subscribe = Input::get('subscribe');

        $validator = Validator::make([
           'name' =>  $name,
           'email' =>  $email,
           'message' =>  $message,
        ],[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if($validator->fails())
        {
            return ['#result' => $this->renderPartial('contactform::messages', [
                'errors' => $validator->messages()->all()
            ])];
        }
        else
        {
            $contact = new Contact;
            $contact->name = $name;
            $contact->email = $email;
            $contact->message = $message;
            $contact->save();

            if($subscribe == 'on')
            {
                $existing = Subscription::where(['email' => $email])->first();
                if(!$existing)
                {
                    $subscription = new Subscription;
                    $subscription->email = $email;
                    $subscription->save();
                }
            }

            return ['#result' => $this->renderPartial('contactform::messages', [
                'success' => 'Your contact has been received'
            ])];
        }

    }
}