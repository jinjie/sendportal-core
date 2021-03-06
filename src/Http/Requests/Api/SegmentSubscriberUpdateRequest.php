<?php

declare(strict_types=1);

namespace Sendportal\Base\Http\Requests\Api;

use Sendportal\Base\Rules\CanAccessSubscriber;
use Illuminate\Foundation\Http\FormRequest;

class SegmentSubscriberUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'subscribers' => ['array', 'required'],
            'subscribers.*' => ['integer', new CanAccessSubscriber($this->user())]
        ];
    }
}
