<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
              'price'=> 'DIGITAL COMICS',
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
    
    
    
        return view('index', compact('links','comics','buyImages','footerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        return view('comics.create' ,compact('links', 'buyImages', 'footerList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $formData = $request->all();

        $comic = new Comic();

        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->thumb = $formData['thumb'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date = $formData['sale_date'];
        $comic->type = $formData['type'];
        $comic->artists = $formData['artists'];
        $comic->writers = $formData['writers'];

        $comic->save();
        
        return redirect()->route('comic.index');
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
    public function edit(Comic $comic)
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
        return view('comics/edit' ,compact('comic','footerList','buyImages','links'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formData = $request->all();

        $comic->update($formData);

        $comic->save();

        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index');
    }

    private function validation($request){
        //metodo con messaggio stampatp da laravel 

        // $request->validate([
        //     'title'=> 'required|min:2|max:100',
        //     'description'=> 'required|min:2',
        //     'thumb'=> 'required|min:2',
        //     'price'=> 'required|min:2|max:20',
        //     'series'=> 'required|min:2|max:100',
        //     'sale_date'=> 'required|min:2|max:100',
        //     'type'=> 'required|min:2|max:50',
        //     'artists'=> 'required|min:2',
        //     'writers'=> 'required|min:2',

        // ]);

        // metodo con messaggio modificato da noi

        $formData = $request->all();

        $validator = Validator::make($formData,

        [
            'title'=> 'required|min:2|max:100',
            'description'=> 'required|min:2',
            'thumb'=> 'required|min:2',
            'price'=> 'required|min:2|max:20',
            'series'=> 'required|min:2|max:100',
            'sale_date'=> 'required|min:2|max:100',
            'type'=> 'required|min:2|max:50',
            'artists'=> 'required|min:2',
            'writers'=> 'required|min:2',
        ],
        
        [
            'title.required'=> 'Questo campo non può essere lascaito vuoto',
            'title.min'=> 'Questo campo deve avere minimo 2 caratter',
            'title.max'=> 'Questo campo può avere massimo 100 caratteri',
            'description.required'=> 'Questo campo non può essere lascaito vuoto',
            'description.min'=> 'Questo campo deve avere minimo 2 caratter',
            'thumb.required'=> 'Questo campo non può essere lascaito vuoto',
            'thumb.min'=> 'Questo campo deve avere minimo 2 caratter',
            'price.required'=> 'Questo campo non può essere lascaito vuoto',
            'price.min'=> 'Questo campo deve avere minimo 2 caratter',
            'price.max'=> 'Questo campo può avere massimo 20 caratteri',
            'series.required'=> 'Questo campo non può essere lascaito vuoto',
            'series.min'=> 'Questo campo deve avere minimo 2 caratter',
            'series.max'=> 'Questo campo può avere massimo 100 caratteri',
            'sale_date.required'=> 'Questo campo non può essere lascaito vuoto',
            'sale_date.min'=> 'Questo campo deve avere minimo 2 caratter',
            'sale_date.max'=> 'Questo campo può avere massimo 100 caratteri',
            'type.required'=> 'Questo campo non può essere lascaito vuoto',
            'type.min'=> 'Questo campo deve avere minimo 2 caratter',
            'type.max'=> 'Questo campo può avere massimo 50 caratteri',
            'artists.required'=> 'Questo campo non può essere lascaito vuoto',
            'artists.min'=> 'Questo campo deve avere minimo 2 caratter',
            'writers.required'=> 'Questo campo non può essere lascaito vuoto',
            'writers.min'=> 'Questo campo deve avere minimo 2 caratter',
            
        ])->validate();

        return $validator;
    }
}
