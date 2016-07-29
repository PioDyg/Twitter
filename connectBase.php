<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = new mysqli('localhost', 'root', '', 'twitter');

            if ($conn->connect_error){
                die("Błąd bazy, przepraszamy. ");
            }

