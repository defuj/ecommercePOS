<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller {

	public function loadOngkir()
	{
		$destination = $this->input->post('destination');
		$weight = $this->input->post('weight');
		$courier = $this->input->post('courier');
		$post_fields = 'origin=440&destination='.$destination.'&weight='.$weight.'&courier='.$courier;
		rtrim($post_fields, '&');

		$ch = curl_init();												//<-- init curl
		curl_setopt_array($ch, array(			
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",		//<-- url rajaongkir
		  CURLOPT_HTTPHEADER => array(										//<-- header http
		    "content-type: application/x-www-form-urlencoded",			//<-- content type
		    "key:f377578c71065bee2e2f45b1336ab296"						//<-- api key rajaongkir
		  ),
		  CURLOPT_POST => 4, 											//<-- jumlah fields {origin,destination,weight,courier}
		  CURLOPT_POSTFIELDS => $post_fields,							//<-- field yang akan dikirim
		));
		$output = curl_exec($ch);
		curl_close($ch);
		$output = json_decode($output);
		die($output);
	}
}
