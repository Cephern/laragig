<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie mauris id ante pellentesque blandit. Vestibulum iaculis interdum massa, a volutpat dolor elementum quis. Pellentesque neque justo, faucibus at odio eget, pretium euismod orci. Nulla non dolor diam. Donec fringilla blandit nisl sed congue. Donec laoreet efficitur tortor id aliquet.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie mauris id ante pellentesque blandit. Vestibulum iaculis interdum massa, a volutpat dolor elementum quis. Pellentesque neque justo, faucibus at odio eget, pretium euismod orci. Nulla non dolor diam. Donec fringilla blandit nisl sed congue. Donec laoreet efficitur tortor id aliquet.'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}