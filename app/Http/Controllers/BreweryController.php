<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class BreweryController extends Controller 
{
  public function index()
  {
    $cervecerias = Brewery:: all();
    return view ("cervecerias", compact ("cervecerias"));
  }
  public function store(Request $request)
  {
    $validateData = $request->validate(
      [
        'name'=> 'required',
        'description'=> 'required',
        'capacity'=> 'required'
      ]);
      //guardar la cerveceria
      $cerveceria = ($validateData);
    $cerveceria= new Brewery();
    $cerveceria->name = $validateData['name'];
    $cerveceria->description = $validateData['description'];
    $cerveceria->capacity = $validateData['capacity'];

    $cerveceria -> save();
      
      return redirect ()-> route("cervecerias.todas");
  }
  public function create()
  {
    return view ("cerveceria-new");
  }
  public function cervecerias()
  { 
    return view("cervecerias",["breweries"=>$this->cervecerias]);
  } 
  public function cerveceria($indice)
  {
    //recuperar info de cerveceria en input
    
    /*  $cerveceria=$this->cervecerias[$indice]; */
    return view("cerveceria",compact("cerveceria"));
  }
    
} 
   


 
/*    $cervecerias=[     
  
      [
      "nombre"=>"BEERS & TRAVELS BARs",
      "desc"=>"Beers & Travels, ubicado en plaza de Manises nº3, es otro templo cervecero de obligada visita para los amantes de la cerveza. Además de contar con tienda, dispone de local y terraza para degustar más de 10 tipos diferentes de cerveza de barril y numerosas opciones en botella. Disponen de tapas surtidas para acompañar y tienen pantallas gigantes para poder ver rugby o fútbol.?",
      "img"=>"blob:https://www.tripadvisor.es/007f835f-e0a0-4b15-8c4f-6b843292ab0c",
      "aforo"=>43
      ],
      [
      "nombre"=>"LA BIRRA DE BRIAN",
      "desc"=>"Ubicada en calle Santa Rosa 3, de Valencia, se encuentra la Birra de Brian, un curioso local apto para los amantes de los Monty Phyton y los más cerveceros. Disponen de una amplísima carta de cervezas artesanales.",
      "img"=>"",
      "aforo"=>17
      ],
      [
        "nombre"=>"THE MARKET CRAFT BEER",
        "desc"=>"The Market está ubicado en carrer de les Danses nº5, muy cerquita de la Lonja de Valencia. Se trata de un auténtico paraíso para los amantes de la cerveza, ya que disponen de una gran y variada gama de cervezas, sobre todo artesanales.
        Es una de las referencias cerveceras de la ciudad, donde podrás encontrar cervezas de todo tipo, como Gose, Ipas, Neipa, Sour, Barley Wine y un largo etcétera acompañadas de pizzas de masa madre y otro tipo de picoteo. Marcas como VIPA, Au yeah!, Smoky Porter, Citra, Herkules, Brew Dog, Traquair o Fills del Pecat, por nombrar algunas, se pueden degustar en este local",
        "img"=>"",
        "aforo"=>20
  
        ],
      [
      "nombre"=>"Cervecería Río Mundo",
      "desc"=>"Se trata de un auténtico templo de las cervezas, un referente en Torrent y en la provincia de Valencia gracias a sus 37 años de historia (en 2021) y sus más de 400 referencias de cervezas europeas que hay en su local. Su nueva carta en este 2021 (que se pueden consultar en CARTA DIGITAL CERVECERÍA RÍO MUNDO) dispone de ensaladas, elaboraciones con verduras, tapas, tostas, montaditos, cazuelas, salchichas y diversas sugerencias a la plancha, además de postres.
      Durante muchos años, ha sido considerada como una auténtica referencia en el mundo de las cervecerías, siendo reconocida como tal dentro y fuera de nuestro país (de hecho, están incluidos en un atlas cervecero).
      Cuentan con la particularidad de que hacen un auténtico maridaje al completo, donde te explican la cerveza, su procedencia y la historia que tiene, todo ello en el momento en que te la sirven.",
      "img"=>"",
      "aforo"=>26
      ]
    ];  */
    
  
       /*  $cerveceria = [      
  
          [
          "nombre"=>"Paulaner",
          "desc"=>"Beers & Travels, ubicado en plaza de Manises nº3, es otro templo cervecero de obligada visita para los amantes de la cerveza. Además de contar con tienda, dispone de local y terraza para degustar más de 10 tipos diferentes de cerveza de barril y numerosas opciones en botella.",
          "img"=>"blob:https://www.tripadvisor.es/007f835f-e0a0-4b15-8c4f-6b843292ab0c",
          "aforo"=>43
          ],
          [
          "nombre"=>"Franciscaner",
          "desc"=>"Ubicada en calle Santa Rosa 3, de Valencia, se encuentra la Birra de Brian, un curioso local apto para los amantes de los Monty Phyton y los más cerveceros. Disponen de una amplísima carta de cervezas artesanales.",
          "img"=>"",
          "aforo"=>17
          ],
          [
            "nombre"=>"Thyris",
            "desc"=>"The Market está ubicado en carrer de les Danses nº5, muy cerquita de la Lonja de Valencia. Se trata de un auténtico paraíso para los amantes de la cerveza, ya que disponen de una gran y variada gama de cervezas, sobre todo artesanales.
            Es una de las referencias cerveceras de la ciudad, donde podrás encontrar cervezas de todo tipo, como Gose, Ipas, Neipa, Sour, Barley Wine y un largo etcétera acompañadas de pizzas de masa madre y otro tipo de picoteo. Marcas como VIPA, Au yeah!, Smoky Porter, Citra, Herkules, Brew Dog, Traquair o Fills del Pecat, por nombrar algunas, se pueden degustar en este local",
            "img"=>"",
            "aforo"=>20
      
            ],
          [
          "nombre"=>"Turia",
          "desc"=>"Se trata de un auténtico templo de las cervezas, un referente en Torrent y en la provincia de Valencia gracias a sus 37 años de historia (en 2021) y sus más de 400 referencias de cervezas europeas que hay en su local. Su nueva carta en este 2021 (que se pueden consultar en CARTA DIGITAL CERVECERÍA RÍO MUNDO) dispone de ensaladas, elaboraciones con verduras, tapas, tostas, montaditos, cazuelas, salchichas y diversas sugerencias a la plancha, además de postres.",
          "img"=>"",
          "aforo"=>26
          ]
        ]; */
    

    