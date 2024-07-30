<?php
namespace App\Controllers;
    class ApiController {
        private $apiUrl = 'https://fakestoreapi.com';
        // * @throws [BadRequest] [If the request fails]
        /**
         * [API get request]
         *
         * @param [String] $endPoint [The endpoint to make the request to]
         * @return [json] [The response from the API]
         */
         
        public function get($endpoint) {
            $ch = curl_init($this->apiUrl . $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            // TODO : manage exception
            // if ($response === ) {
            //     throw new BadRequest("Request failed");
            // }

            curl_close($ch);
                    
            $responseString = (string) $response;
            $responseCroped = str_replace('"', '',$responseString);
            $responseCroped = str_replace('[', '',$responseCroped);
            $responseCroped = str_replace(']', '',$responseCroped);

            $decodedResponse = explode(',',  $responseCroped);
            // var_dump($responseString);
            // echo "<br>";
            // var_dump($responseCroped);
            // echo "<br>";
            // var_dump($decodedResponse);


            return $decodedResponse;
        }
    }