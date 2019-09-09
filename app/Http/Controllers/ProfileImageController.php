<?php

namespace App\Http\Controllers;
use App\ProfileImage;
use App\ApplicationReview;

use Illuminate\Http\Request;

class ProfileImageController extends Controller
{
    function index(Request $request) {
   		
		$profileImage = new ProfileImage();
        $profileImage->profileID = request('profileID');
        $profileImage->imageRef = request('imageRef');
        $profileImage->save();
        return $request;
	}

 function update(Request $request){
       $profileID = $request->profileID;
       $imageRef = $request->imageRef;

       $reset_req = ProfileImage::where('profileID', $profileID)->get();
       if(count($reset_req) !== 0){
              $data=array('profileID'=>$profileID,'imageRef'=>$imageRef);
              DB::table('ProfileImage')->where('profileID', $profileID)->update($data);
              return $request;
       }else{
            $profileImage = new ProfileImage();
	        $profileImage->profileID = request('profileID');
	        $profileImage->imageRef = request('imageRef');
	        $profileImage->save();
	        return $request;
       }
   }


	function getProfileImageRef(Request $request){
		$expert_id = $request->expert_id;
		$expertAccount = ProfileImage::where('profileID', $expert_id)->get();

		if(count($expertAccount) === 0 ){
			return "No Image";
		}else{
			return ($expertAccount[0]->imageRef);
		}

	}

	function AverageRatingExpert(Request $request){
		$expert_id = $request->expert_id;
		$allReview = ApplicationReview::where('expert_id', $expert_id)->get();
		$ratingSum = 0;
		$totalRating = count($allReview);

		foreach ($allReview as $key => $value) {
			$ratingSum = $ratingSum + $value;
		}
		if($ratingSum === 0){
			return 0;
		}else{
			return $ratingSum / $totalRating;
		}
	}
}
