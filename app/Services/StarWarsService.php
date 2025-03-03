<?php

namespace App\Services;

class StarWarsService
{
    private string $baseUrl = "https://swapi.dev/api/";

    /**
     * Fetch data from the Star Wars API
     */
    private function fetchData(string $endpoint): array
    {
        $url = $this->baseUrl . $endpoint;
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true) ?? [];
    }

    /**
     * Get details of a character by ID
     */
    public function getCharacter(int $id): array
    {
        return $this->fetchData("people/$id/");
    }

    /**
     * Get a list of Star Wars films
     */
    public function getFilms(): array
    {
        return $this->fetchData("films/");
    }

}