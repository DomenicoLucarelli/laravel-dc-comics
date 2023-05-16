<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        // dd($comics);
        
        $links =[
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS',
            'SHOP'
        ];
    
        $buyImages = [
           [
              'title'=> 'DIGITAL COMICS',
                'img'=> 'resources/img/buy-comics-digital-comics.png',
            ],
    
           [
              'title'=> 'DC MERCHANDISE',
                'img'=> 'resources/img/buy-comics-merchandise.png',
            ],
    
           [
              'title'=> 'SUBSCRIPTION',
                'img'=> 'resources/img/buy-comics-shop-locator.png',
            ],
    
           [
              'title'=> 'COMIC SHOP LOCATOR',
                'img'=> 'resources/img/buy-comics-subscriptions.png',
            ],
    
           [
              'title'=> 'DC POWER VISA',
                'img'=> 'resources/imgbuy-dc-power-visa.svg',
            ]
        ];
    
        $footerList = [
            [
               'name' => 'DC COMICS',
               'links' => [
                    'Characters',
                    'Comics',
                    'Movie',
                    'TV',
                    'Games',
                    'Video',
                    'News',
                ],
            ],
    
            [
               'name' => 'DC ',
               'links' => [
    
                    'Terms of use',
                    'Privacy policy',
                    'Ad choices',
                    'Advertising',
                    'jobs',
                    'Subscriptions',
                    'Talent workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop help',
                    'Contact Us',
    
                ],
            ],
    
            [
               'name' => 'SITES',
               'links' => [
                    'DC',
                    'MAD Magazine',
                    'DC kids',
                    'DC Universe',
                    'DC Power Visa',
    
                ],
            ],
    
    
            [
               'name' => 'SHOP',
               'links' => [
                    'Shop DC',
                    'Shop DC Collectibles',
    
                ],
            ],
    
    
    
        ];
    
    
    
        return view('home', compact('links','comics','buyImages','footerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'ciao';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $links =[
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS',
            'SHOP'
        ];
    
        $buyImages = [
           [
              'title'=> 'DIGITAL COMICS',
                'img'=> 'resources/img/buy-comics-digital-comics.png',
            ],
    
           [
              'title'=> 'DC MERCHANDISE',
                'img'=> 'resources/img/buy-comics-merchandise.png',
            ],
    
           [
              'title'=> 'SUBSCRIPTION',
                'img'=> 'resources/img/buy-comics-shop-locator.png',
            ],
    
           [
              'title'=> 'COMIC SHOP LOCATOR',
                'img'=> 'resources/img/buy-comics-subscriptions.png',
            ],
    
           [
              'title'=> 'DC POWER VISA',
                'img'=> 'resources/imgbuy-dc-power-visa.svg',
            ]
        ];
    
        $footerList = [
            [
               'name' => 'DC COMICS',
               'links' => [
                    'Characters',
                    'Comics',
                    'Movie',
                    'TV',
                    'Games',
                    'Video',
                    'News',
                ],
            ],
    
            [
               'name' => 'DC ',
               'links' => [
    
                    'Terms of use',
                    'Privacy policy',
                    'Ad choices',
                    'Advertising',
                    'jobs',
                    'Subscriptions',
                    'Talent workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop help',
                    'Contact Us',
    
                ],
            ],
    
            [
               'name' => 'SITES',
               'links' => [
                    'DC',
                    'MAD Magazine',
                    'DC kids',
                    'DC Universe',
                    'DC Power Visa',
    
                ],
            ],
    
    
            [
               'name' => 'SHOP',
               'links' => [
                    'Shop DC',
                    'Shop DC Collectibles',
    
                ],
            ],
    
    
    
        ];

        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic','links','buyImages','footerList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
