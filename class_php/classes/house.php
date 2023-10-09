<?php

    class House {
        private $country = '';
        private $city = '';
        private $area = '';

        function __construct($country, $city, $area) {
            $this->country = $country;
            $this->city = $city;
            $this->area = $area;

        }

        function showData() {

            $country = $this->country;
            if($country !== '') {
                echo 'country: '. $this->country;
                echo 'city: '. $this->city;
                echo 'area: '. $this->area;

            } else {
                echo 'Вы не ввели данные';
            }


    
        }


    }


?>