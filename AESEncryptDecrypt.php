<?php

    class AESEncryptDecrypt {

        public $password = '5P4rH51Uv_Z02O';
        public $method = 'aes-256-cbc';
        public $strong = false;
        public $iv_length;
        public $iv;

        
        /**
         * Función que encrypta 
         */
        public function encrypt($data) {  
            $this->iv_length = openssl_cipher_iv_length($this->method);
            $this->iv = openssl_random_pseudo_bytes($this->iv_length, );
            return base64_encode(openssl_encrypt($data, $this->method, $this->password, true, $this->iv)); 
        }

        /**
         * Función que desencrypta 
         */
        public function decrypt($data){ 
            $this->iv_length = openssl_cipher_iv_length($this->method);
            $this->iv = openssl_random_pseudo_bytes($this->iv_length, $this->strong);
            return openssl_decrypt(base64_decode($data), $this->method, $this->password, true, $this->iv); 
        }
    
    }
?>