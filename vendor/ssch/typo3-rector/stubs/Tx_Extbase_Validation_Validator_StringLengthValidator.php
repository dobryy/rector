<?php

namespace RectorPrefix20211109;

if (\class_exists('Tx_Extbase_Validation_Validator_StringLengthValidator')) {
    return;
}
class Tx_Extbase_Validation_Validator_StringLengthValidator
{
}
\class_alias('Tx_Extbase_Validation_Validator_StringLengthValidator', 'Tx_Extbase_Validation_Validator_StringLengthValidator', \false);
