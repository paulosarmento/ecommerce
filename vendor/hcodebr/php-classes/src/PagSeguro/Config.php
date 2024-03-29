<?php

namespace Hcode\PagSeguro;

class Config {

    const SANDBOX = true;

    const SANDBOX_EMAIL = "financeiro@solaresportes.com.br";
    const PRODUCTION_EMAIL = "financeiro@solaresportes.com.br";

    const SANDBOX_TOKEN = "3EC4B15505CA44F289DA164E7278BB35";
    const PRODUCTION_TOKEN = "fa41756b-cb35-43da-a5d1-d42890ef00bfaa1e7fd8498cb257dec7f96aeb13bcf2b6f1-2671-461b-8c76-4d1683c6980e";

    const SANDBOX_SESSION = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

    const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    const PRODUCTION_SESSIONS_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

    const SANDBOX_URL_TRANSACTION = "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions";
    const PRODUCTION_URL_TRANSACTION = "https://ws.pagseguro.uol.com.br/v2/transactions";
    
    const SANDBOX_URL_NOTIFICATION = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/";
	const PRODUCTION_URL_NOTIFICATION =	"https://ws.pagseguro.uol.com.br/v3/transactions/notifications/";

    const MAX_INSTALLMENT_NO_INTEREST = 6;
    const MAX_INSTALLMENT = 16;

    const NOTIFICATION_URL = "http://www.html5dev.com.br/payment/notification";


    public static function getAuthentication():array
    {
        if(Config::SANDBOX === true)
        {
            return[
                "email"=>Config::SANDBOX_EMAIL,
                "token"=>Config::SANDBOX_TOKEN
            ];
        } else {

            return[
                "email"=>Config::PRODUCTION_EMAIL,
                "token"=>Config::PRODUCTION_TOKEN
            ];
        }
    }

    public static function getUrlSessions():string
    {
        return (Config::SANDBOX === true) ? Config::SANDBOX_SESSION : Config::PRODUCTION_SESSIONS;
    }

    public static function getUrlJS()
    {
        return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_SESSIONS_URL_JS;

    }
    public static function getUrlTransaction()
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_TRANSACTION :
		Config::PRODUCTION_URL_TRANSACTION;

	}

	public static function getNotificationTransactionURL()
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_NOTIFICATION :
		Config::PRODUCTION_URL_NOTIFICATION;

	}



}