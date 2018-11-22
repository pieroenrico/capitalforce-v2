<?php namespace Tropa\Subscriptions\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Tropa\Subscriptions\Models\Subscription;

class SubscriptionForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Subscription Form',
            'description' => 'Subscribe to newsletter',
        ];
    }

    public function onSend()
    {
        $email = Input::get('email');

        $validator = Validator::make([
            'email' =>  $email,
        ],[
            'email' => 'required|email',
        ]);

        if($validator->fails())
        {
            return ['#resultSubscription' => $this->renderPartial('subscriptionform::messages', [
                'errors' => $validator->messages()->all()
            ])];
        }
        else
        {

            $existing = Subscription::where(['email' => $email])->first();
            if($existing)
            {
                return ['#resultSubscription' => $this->renderPartial('subscriptionform::messages', [
                    'errors' => [
                        'Email already exists',
                    ]
                ])];
            }
            else
            {
                $subscription = new Subscription;
                $subscription->email = $email;
                $subscription->save();

                return ['#resultSubscription' => $this->renderPartial('subscriptionform::messages', [
                    'success' => 'Your have been subscribed'
                ])];
            }

        }
    }
}