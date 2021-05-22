<?php

/*********************************************************************
File:- veriation.php
Author:- Kiran Trimbake

This json file is veriation of reply to the query.
limit for variation is 200 max.
This file get call from reply.php

**********************************************************************/

$bday = new DateTime('07.05.2020'); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
$age=$diff->y.' years, '.$diff->m.' month, '.$diff->d.' days';

$data='{
			"queries": ["'.$query.'"],
			"intents": [{
				"intent": "1",
				"variations": [{
					"variation": "Bye Have a nice day.",
				}]
			},
			{
				"intent": "2",
				"variations": 
					[{
					"variation": "Terms and condition (T and C) link here.",
				}]
			},
			{
				"intent": "3",
				"variations": 
					[{
					"variation": "privacy policies ( PP ) link here.",
				}]
			},
			{
				"intent": "4",
				"variations": 
					[{
					"variation": "Information of Medical Insurance (GHIM).",
				}]
			},			
			{
				"intent": "5",
				"variations": [{
					"variation": "You can call me kid"
				}]
			}, 
			{
				"intent": "6",
				"variations": [{
					"variation": "My name is kid."
				}]
			},
			{
				"intent": "7",
				"variations": [{
					"variation": "Hello How can i help you?",
					
				}]
			},
			{
				"intent": "8",
				"variations": [{
					"variation": "I am greate. How can i help you?",
					
				}]
			},
			{
				"intent": "9",
				"variations": [{
					"variation": "I am '.$age.' old.",					
				}]
			},
			{
				"intent": "10",
				"variations": [{
					"variation": "My age is '.$age.'.",					
				}]
			},
			{
				"intent": "11",
				"variations": [{
					"variation": "OmniTech team is my creator.",					
				}]
			},
			{
				"intent": "12",
				"variations": [{
					"variation": "Hi How can i help you?",
					
				}]
			},
			{
				"intent": "13",
				"variations": [{
					"variation": "You are welcome. Thank you for your interest.",
				}]
			},
			{
				"intent": "14",
				"variations": [{
					"variation": "i was created by OmniTech team.",
				}]
			},
			{
				"intent": "15",
				"variations": [{
					"variation": "You can reset ur password from ssp.fnfis.com",
				}]
			},
			{
				"intent": "16",
				"variations": [{
					"variation": "For covid-19 related any queries you can visit to fisandme.com",
				}]
			},
			{
				"intent": "17",
				"variations": [{
					"variation": "Pune office helpline number is +912067644100",
				}]
			}
			]
		}';
