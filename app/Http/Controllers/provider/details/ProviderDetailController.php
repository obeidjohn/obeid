<?php

namespace App\Http\Controllers\provider\details;

use App\Constants\Constants;
use App\Http\Controllers\Controller;
use App\Models\ProviderCategory;
use App\Models\ProviderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ProviderDetailController extends Controller
{
    public function index()
    {
        $d['details'] = ProviderDetail::all();
        $d['category'] = ProviderCategory::all();
        $d['statusActive'] = Constants::STATUS_ACTIVE;
        return view('manage.provider.index',$d);
    }

    public function store(Request $request)
    {
        $validate = ProviderDetail::$rules;
        if ($validate) {
            $data = $request->all();
            $providerName = $data['Name'];
            $gradeExists = ProviderDetail::where("Name", "=", $providerName)->where("status", "=", Constants::STATUS_ACTIVE)->first();
            try {
                $createProvider = ProviderDetail::create($data);
                if($createProvider){
                    $response = 'Provider Saved Successfully';
                    Log::channel('daily')->info($response . ' ' . $data);

                    // return ['success' => true, 'response' => $response];
                return back()->with('success', $response);

                }
            } catch (\Exception $error) {
                $response = 'Operation Failed,Please Contact System Administrator ' . $error;
                Log::channel('daily')->error($response . ' ' . $error->getMessage());

                // return ['success' => 'failure', 'response' => $response];
                return back()->with('failure', $response);

            }
        }
    }
}
