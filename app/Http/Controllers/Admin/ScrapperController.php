<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class ScrapperController extends Controller
{
    private $news =[];
    public function get_data()
    {
        $client = new Client();
        $page = $crawler =$client->request('GET','https://ratopati.com/category/headline-news');
        $page->filter('span > a')->each(function ($item) {
            array_push($this->news, $item->text());
            // echo $node->text()."\n";
        });
        print_r($this->news);
        
        // $page->filter('.item-content')->attr('काँग्रेस')->text();
        // return $page;
    } 
}
