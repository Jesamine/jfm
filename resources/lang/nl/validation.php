<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute moet worden aanvaard.',
    'active_url'           => ':attribute is geen geldig URL.',
    'after'                => ':attribute moet een datum na :date te zijn.',
    'alpha'                => ':attribute mag alleen bestaan uit letters.',
    'alpha_dash'           => ':attribute mag alleen bestaan uit letters, nummers, en streepjes.',
    'alpha_num'            => ':attribute mag alleen bestaan uit letters and nummers.',
    'array'                => ':attribute moet een array zijn.',
    'before'               => ':attribute moet een datum zijn vòòr :date.',
    'between'              => [
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'file'    => ':attribute moet tussen :min en :max kilobytes zijn.',
        'string'  => ':attribute moet tussen :min and :max tekens zijn.',
        'array'   => ':attribute moet tussen :min and :max items zijn.',
    ],
    'boolean'              => ':attribute veld moet waar of onwaar zijn.',
    'confirmed'            => ':attribute bevestiging komt niet overeen.',
    'date'                 => ':attribute is geen geldige datum.',
    'date_format'          => ':attribute komt niet overeen met formaat :format.',
    'different'            => ':attribute en :other moeten anders zijn.',
    'digits'               => ':attribute moet :digits cijfers bevatten.',
    'digits_between'       => ':attribute moet tussen :min and :max cijfers bestaan.',
    'distinct'             => ':attribute veld heeft een dubbele waarde.',
    'email'                => ':attribute moet een geldig e-mail adres zijn.',
    'exists'               => 'De geselecteerde :attribute is ongeldig.',
    'filled'               => ':attribute veld is verplicht.',
    'image'                => ':attribute moet een afbeelding zijn.',
    'in'                   => 'De geselecteerde :attribute is ongeldig.',
    'in_array'             => ':attribute veld bestaat niet in :other.',
    'integer'              => ':attribute moet een geheel getal zijn.',
    'ip'                   => ':attribute moet een geldig IP adres zijn.',
    'json'                 => ':attribute moet een geldig JSON string zijn.',
    'max'                  => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file'    => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => ':attribute mag niet groter zijn dan :max tekens.',
        'array'   => ':attribute mag niet groter zijn dan :max items.',
    ],
    'mimes'                => ':attribute moet een bestand zijn van type: :values.',
    'min'                  => [
        'numeric' => ':attribute moet minstens :min zijn.',
        'file'    => ':attribute moet minstens :min kilobytes zijn.',
        'string'  => ':attribute moet minstens :min tekens zijn.',
        'array'   => ':attribute moet minstens :min items hebben.',
    ],
    'not_in'               => 'De geslecteerde :attribute is ongeldig.',
    'numeric'              => ':attribute moet een nummer zijn.',
    'present'              => ':attribute veld moet aanwezig zijn.',
    'regex'                => ':attribute formaat is ongeldig.',
    'required'             => ':attribute veld is verplicht.',
    'required_if'          => ':attribute veld is verplicht wanneer :other :value is.',
    'required_unless'      => ':attribute veld is verplicht tenzij :other in :values is.',
    'required_with'        => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all'    => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_without'     => ':attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => ':attribute veld is verplicht wanneer geen :values aanwezig zijn.',
    'same'                 => ':attribute en :other moeten overeen komen.',
    'size'                 => [
        'numeric' => ':attribute moet :size zijn.',
        'file'    => ':attribute moet :size kilobytes zijn.',
        'string'  => ':attribute moet :size tekens zijn.',
        'array'   => ':attribute moet uit :size items bestaan.',
    ],
    'string'               => ':attribute moet een string zijn.',
    'timezone'             => ':attribute moet een geldig tijdzone zijn.',
    'unique'               => ':attribute is al bezet.',
    'url'                  => ':attribute formaat is ongeldig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
