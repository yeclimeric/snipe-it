<?php

namespace App\Http\Requests;

use App\Models\ReportTemplate;
use App\Models\Setting;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateSharedTemplateRequest extends CustomAssetReportRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
            return Gate::allows('edit', $this->id);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = array_merge(
            parent::rules(),
            (new ReportTemplate)->getRules(),
            [
                if ($this->created_by == auth()->id()) {
                } //so how do we apply this rule. is it allow or restrict?
            ],
        );
        return $rules;
    }
}
