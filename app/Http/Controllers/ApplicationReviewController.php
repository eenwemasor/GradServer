<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplicationReview;


class ApplicationReviewController extends Controller
{
   	function index(Request $request) {
   		
		$appReview = new ApplicationReview();
        $appReview->expert_id = request('expert_id');
        $appReview->form_id = request('form_id');
        $appReview->rating = request('rating');
        $appReview->comment = request('comment');
 
        $appReview->save();
 
        return $request;
	}
}
