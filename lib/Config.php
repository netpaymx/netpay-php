<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright 2018 NetPay. All rights reserved.
 */

namespace NetPay;

class Config
{
    //-- Account settings
    const API_URL = "https://cert.netpay.com.mx/gateway-ecommerce";
    const USER_NAME = 'ecommerce@netpay.com.mx';
    const PASS = 'ec0m12';
    const STORE_ID_ACQ = '483131';

    //-- General settings
    const CURLOPT_TIMEOUT = 40; //Timeout in seconds

    const AUTH_LOGIN_URL = self::API_URL."/v1/auth/login";

    const CHECKOUT_URL = self::API_URL."/v2/checkout";

    const TRANSACTION_URL = self::API_URL."/v1/transaction-report/transaction/%s/%s";

    const CANCELLED_URL = self::API_URL."/v1/transaction/refund";

    const CHARGE_URL = self::API_URL."/v1/transaction/charge";

    const CREATE_API_KEY = self::API_URL."/v1/store/store-api-key";

    const CREATE_TOKEN_CARD = self::API_URL."/v1/token-card";

    const CUSTOMER_CARDS = self::API_URL."/v1/token-card/customer-tokens";

    const RISK_MANAGER = self::API_URL."/v1/risk-manager/token-card";

    const DELETE_TOKEN_CARD = self::API_URL."/v1/token-card/delete";

    const CREATE_PLAN = self::API_URL."/v1/store/plans";

    const ADD_SUBSCRIPTION = self::API_URL."/v1/store/subscriptions";

    const ADD_CLIENT = self::API_URL."/v1/store/clients";

    const ADD_WEBHOOK = self::API_URL."/v1/store/webhooks";

    const UPDATE_PLAN = self::API_URL."/v1/store/plans/%s";

    const STOP_PLAN = self::API_URL."/v1/store/plans/%s/%s";

    const GET_PLANS = self::API_URL."/v1/store/plans";

    const GET_PLAN = self::API_URL."/v1/store/plans/%s";

    const GET_SUBSCRIPTIONS = self::API_URL."/v1/store/subscriptions";

    const GET_SUBSCRIPTION = self::API_URL."/v1/store/subscriptions/%s";

    const STOP_SUBSCRIPTION = self::API_URL."/v1/store/subscriptions/%s/pause";

    const UPDATE_CLIENT = self::API_URL."/v1/store/clients";

    const GET_CLIENTS = self::API_URL."/v1/store/clients";

    const GET_CLIENT = self::API_URL."/v1/store/clients/%s";

    const UPDATE_WEBHOOK = self::API_URL."/v1/store/webhooks/%s";

    const URL_PORT = null;

    const CARD_TYPES = array(
        '001' => 'Visa',
        '002' => 'MasterCard',
        '003' => 'American Express',
    );
}
