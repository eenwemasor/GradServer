<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Mail\AssignApplicationToExpert;
use \App\Mail\ExpertSuccessMail;


use \App\GraduateSchoolStatementReviewForm;
use \App\GraduateSchoolEssayRedraftForm;
use \App\CoverLetterReviewForm;
use \App\CoverLetterRedraft;
use \App\ResumeReviewForm;
use \App\User;

class SendEmailController extends Controller
{   function sendMail(Request $request) {
	$expert_id = $request->expert_id;
	$form_id = $request->form_id;
	$package = $request->formType;

	$applicationRequesttoAssign = null;

	$expert = User::where('id', $expert_id)->get();

	if ($package ==="graduateSchoolStatementReviewForm") {
		$applicationRequesttoAssign = GraduateSchoolStatementReviewForm::where('form_id', $form_id)->get();
	} else if ($package ==="graduateSchoolEssayRedraftForm") {
		$applicationRequesttoAssign = GraduateSchoolEssayRedraftForm::where('form_id', $form_id)->get();
	} else if ($package ==="coverLetterReviewForm") {
		$applicationRequesttoAssign = CoverLetterReviewForm::where('form_id', $form_id)->get();
	} else if ($package ==="coverLetterRedraft") {
		$applicationRequesttoAssign = CoverLetterRedraft::where('form_id', $form_id)->get();
	} else {
		$applicationRequesttoAssign = ResumeReviewForm::where('form_id', $form_id)->get();
	}

	\Mail::to('qhodeweb@gmail.com')->send(new AssignApplicationToExpert($expert,$applicationRequesttoAssign));
	\Mail::to($expert[0]->email)->send(new ExpertSuccessMail($expert));

    return "success";
}
}

