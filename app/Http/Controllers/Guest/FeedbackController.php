<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 03:23
 */

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Http\Services\Guest\FeedbackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    protected $feedbackService;

    public function __construct()
    {
        $this->feedbackService = new FeedbackService();
    }

    public function showFeedbackPage()
    {
        return view('customer.feedback');
    }

    public function createFeedback(Request $request){
    $params = $request->all();
    $validator = Validator::make($params, [
        'email' => 'required | email',
        'feedback' => 'required'
    ]);

    if ($validator->fails()) {

        return redirect('feedback')
            ->withErrors($validator)
            ->withInput();
    }


    try {

        $this->feedbackService->createFeedback($params);

        $request->session()->flash('alert-success', 'Send feedback success!');

        return redirect('/feedback');
    }catch (\Exception $e){
        Log::error($e->getMessage());

        $messageError = json_decode($e->getResponse()->getBody(true));
        $validator->errors()->add('message', $messageError->message);

        return redirect('feedback')
            ->withErrors($validator)
            ->withInput();
    }
}
}