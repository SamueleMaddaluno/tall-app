<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubscriberController extends Controller
{
    
    public function verify(Subscriber $subscriber){
        if (! $subscriber->hasVerifiedEmail()){

            $subscriber->markEmailAsVerified();

        }

        return Redirect('/?verified=1');
        

    }

}
