<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function replyMail(Request $request)
    {
        try {
            $contact = Contact::findOrFail($request->id);
            $messageContent = $request->message;
            $email = $request->email;
            Mail::send('admin.email.reply_contact', compact('messageContent'), function ($messageContent) use ($email) {
                $messageContent->to($email)->subject('Phản hồi liên hệ khách hàng');
            });
            $contact->is_replied = 1;
            $contact->save();
            return response()->json([
                'success' => true,
                'message' => 'Đã phản hồi qua email!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể gửi mail! Lỗi ' . $th->getMessage(),
            ]);
        }
    }

    public function returnBlade()
    {
        $contacts = Contact::orderBy('is_replied')->orderByDesc('created_at')->get();
        return view('admin.pages.contacts', compact('contacts'));
    }
}
