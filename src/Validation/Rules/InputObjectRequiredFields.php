<?php

namespace GraphQL\Validation\Rules;

use GraphQL\Validation\ValidationContext;

class InputObjectRequiredFields extends ValidationRule
{
    /**
     * Implements the rule specified under 5.6.4 (Input Object Required Fields) in the GraphQL-Specs (version: 2018)
     * @param ValidationContext $validationContext
     * @return void
     */
    public function validate(ValidationContext $validationContext): void
    {
        // This rule is for performance reasons not implemented again, since Executor::execute
        // validates this when coercing variables (while building the ExecutionContext) via
        // Values::getArgumentValues(...)
    }
}

