<?php

namespace georgemaker\PagSeguro;

class Config {

    const SANDBOX = true;

    const SANDBOX_EMAIL = "contatogeorgemaker@gmail.com";
    const PRODUCTION_EMAIL = "contatogeorgemaker@gmail.com";

    const SANDBOX_TOKEN = "5BEE5651DDA344089236CD185379B11C";
    const PRODUCTION_TOKEN = "994c14a2-20d1-4648-8ea7-7d6d38354d1a8f696fc747c99842137380e9084a688431cc-ee07-47cf-9cc2-3800343152ca";

    const SANDBOX_SESSIONS = "https://sandbox.api.pagseguro.com/charges";
    const PRODUCTION_SESSIONS = "https://api.r2tec.com/edi/v1/";
    //const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

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
}