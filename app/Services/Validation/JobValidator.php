<?php
namespace Serman\Services\Validation;
class JobValidator extends Validator {
    static  $rules = [
        'job' => 'required|min:5',
    ];
}
