<?php
use GuzzleHttp\Client;

class Menu_model extends CI_model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'https://api.codeafive.com/v1/',
            'auth' => ['cafe', 'spontan123'],
        ]);
    }
    public function getAllMenu()
    {

        $response = $this->_client->request('GET', 'menu');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];

    }

    public function getMenuById($id)
    {

        $response = $this->_client->request('GET', 'menu', [
            'query' => [

                'id_produk' => $id,
            ],
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataMenu()
    {
        $data = [
            "stok" => $this->input->post('stok', true),
            "id_produk" => $this->input->post('id_produk', true),

        ];

        $response = $this->_client->request('PUT', 'menu', [
            'form_params' => $data,
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

}
