<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmissionController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $submission = Submission::create($request->all());

        // Отправка email
        Mail::raw("Name: {$submission->name}\nEmail: {$submission->email}\nТелефон: {$submission->phone}", function ($message) use ($submission) {
            $message->to($submission->email)
                ->subject('Обратная связь');
        });

        return redirect('/form')->with('success', 'Форма отправлена!');
    }
}
