<?php

    class AESEncrypt {

        public $password;
        public $method;
        public $strong;
        public $iv_length;
        public $iv;

        public __construc(){
            this->$password = "5P4rH51Uv_Z02O";
            this->$method = 'aes-256-cbc';
            this->$strong = false;
            this->$iv_length = openssl_cipher_iv_length(this->$method);
            this->$iv = openssl_random_pseudo_bytes(this->$iv_length, this->$strong);
        }

        function encrypt($data) { return base64_encode(openssl_encrypt($data, $method, $password, true, $iv)); }

        function decrypt($data){ return openssl_decrypt(base64_decode($enc_data), $method, $password, true, $iv); }


    }
?>