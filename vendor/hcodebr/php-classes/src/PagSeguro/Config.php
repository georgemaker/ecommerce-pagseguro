<?php

namespace georgemaker\PagSeguro;

class Config {

    const SANDBOX = true;

    const SANDBOX_EMAIL = "contatogeorgemaker@gmail.com";
    const PRODUCTION_EMAIL = "contatogeorgemaker@gmail.com";

    const SANDBOX_TOKEN = "5BEE5651DDA344089236CD185379B11C";
    const PRODUCTION_TOKEN = "994c14a2-20d1-4648-8ea7-7d6d38354d1a8f696fc747c99842137380e9084a688431cc-ee07-47cf-9cc2-3800343152ca";

    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/?_ga=2.165561023.1460041926.1591287068-1809990948.1591287065";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/?_ga=2.165440063.1460041926.1591287068-1809990948.1591287065";
    
    const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

    public static function getAuthentication():array
    {

        if (Config::SANDBOX == true)
        {
            return[
                "email"=>Config::SANDBOX_EMAIL,
                "token"=>Config::SANDBOX_TOKEN
            ];

        }else{

            return[
                "email"=>Config::PRODUCTION_EMAIL,
                "token"=>Config::PRODUCTION_TOKEN
            ];

        }
    }

    public static function getUrlSessions():string
    {

        return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;

    }

    public static function getUrlJS()
    {

        return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;

    }
    
}