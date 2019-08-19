<?php

namespace App\Http\Requests;

use App\ShareSheet;
use Illuminate\Foundation\Http\FormRequest;

class ShareSheetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_name' => 'required|max:255',
            'friend_name' => 'required|max:255',
            'friend_email' => 'required|email|max:255',
        ];
    }

    /**
     * Save the posted form as a share request.
     *
     * @return \App\ShareSheet
     */
    public function persist()
    {
        return ShareSheet::create(
            $this->only([
                'customer_name',
                'friend_name',
                'friend_email',
            ])
        );
    }
}
