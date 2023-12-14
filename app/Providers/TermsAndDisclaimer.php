<?php

namespace App\Providers;

use Waterhole\Forms\Field;
use Waterhole\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class TermsAndDisclaimer extends Field
{
    public function __construct(public ?User $model)
    {
    }

    public function render()
    {
        return view('waterhole.termsDisclaimer');
    }

    public function validating(Validator $validator): void
    {
        $validator->addRules([
            'terms_disclaimer' => ['required', 'accepted'],
        ]);
    }

    public function saving(FormRequest $request): void
    {
        $this->model->terms_disclaimer_accepted = (bool) $request->validated('terms_disclaimer');
    }
}
