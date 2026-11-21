<?php


class PeopleRepository
{
    static function getPeople() : array
    {
        return [
            '1' => [
                'nome' => '',
                'cognome' => '',
                'nazionalita' => '',
                'anno_nascita' => '',
                'immagine' => '',
                'descrizione-img' => '',
            ],
            '2' => [
                'nome' => '',
                'cognome' => '',
                'nazionalita' => '',
                'anno_nascita' => '',
                'immagine' => '',
                'descrizione-img' => '',
            ],
            '3' => [
                'nome' => '',
                'cognome' => '',
                'nazionalita' => '',
                'anno_nascita' => '',
                'immagine' => '',
                'descrizione-img' => '',
            ],
        ];
    }

    static function getPeopleByID(int $id) : array {
        $persone = self::getPeople();
        return $persone[$id];
    }
}