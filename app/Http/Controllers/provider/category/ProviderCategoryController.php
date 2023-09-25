<?php

namespace App\Http\Controllers\provider\category;

use App\Constants\Constants;
use App\Http\Controllers\Controller;
use App\Models\ProviderCategory;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProviderCategoryController extends Controller
{
    public function store(Request $request)
    {
        $validate = ProviderCategory::$rules;
        if ($validate) {
            $data = $request->all();
            $CategoryName = $data['CategoryName'];
            $gradeExists = ProviderCategory::where("CategoryName", "=", $CategoryName)->where("status", "=", Constants::STATUS_ACTIVE)->first();
            try {
                $createProvider = ProviderCategory::create($data);
                if ($createProvider) {
                    $response = 'Category Saved Successfully';
                    Log::channel('daily')->info($response . ' ' . $data);
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
