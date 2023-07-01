<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    public function encrypt(Request $request)
    {
        $message = $request->input('message');
        $encryptedMessage = Crypt::encrypt($message);
        return redirect('/')->with('encryptedMessage', $encryptedMessage);
    }

    public function decrypt(Request $request)
    {
        $encryptedMessage = $request->input('encrypted_message');
        $decryptedMessage = Crypt::decrypt($encryptedMessage);
        return redirect('/')->with('decryptedMessage', $decryptedMessage);
    }
}
