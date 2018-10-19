<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Organisation;
use App\EPUBType;
use Validator;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::limit(10)->orderBy('id','desc')->get();

        return view('Book.index',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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

    public function update_book($id)
    {
        $organisations = Organisation::get();
        $bookInfo = Book::find($id);
        $epubtypes = EPUBType::get();
        return view('Book.updateBook',['bookInfo'=>$bookInfo,'organisations'=>$organisations,'languages'=>$this->languageList(),'epubtypes'=>$epubtypes]);
    }

    public function process_update_book(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'creator'=>'required',
            'record_reference'=>'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $books = Book::find($id);
        $books->organisation_id = $request['organisation'];
        $books->title = $request['title'];
        $books->creator = $request['creator'];
        $books->record_reference = $request['record_reference'];
        $books->doi =$request['doi'];
        $books->isbn = $request['isbn'];
        $books->language = $request['language'];
        $books->epubtype_id = $request['epubtype'];
        (empty($request['resource']) ? NULL : '');
        $books->description = $request['description'];
        $books->created =  date("Y-m-d H:i:s");
        $books->modified = date("Y-m-d H:i:s");
        $books->save();

    }


    public function languageList()
    {
        return array(
            'en' =>	__('English'),
            'fr' => __('French'),
            'de' => __('German'),
            'ga' => __('Irish'),
            'es' => __('Spanish; Castilian'),
            'ab' => __('Abkhazian'),
            'aa' => __('Afar'),
            'af' => __('Afrikaans'),
            'sq' => __('Albanian'),
            'am' => __('Amharic'),
            'an' => __('Aragonese'),
            'ar' => __('Arabic'),
            'hy' => __('Armenian'),
            'as' => __('Assamese'),
            'ay' => __('Aymara'),
            'az' => __('Azerbaijani'),
            'ae' => __('Avestan'),
            'ba' => __('Bashkir'),
            'eu' => __('Basque'),
            'be' => __('Belarusian'),
            'bn' => __('Bengali'),
            'bg' => __('Bulgarian'),
            'bh' => __('Bihari'),
            'bi' => __('Bislama'),
            'bs' => __('Bosnian'),
            'br' => __('Breton'),
            'my' => __('Burmese'),
            'ca' => __('Catalan'),
            'ch' => __('Chamorro'),
            'ce' => __('Chechen'),
            'zh' => __('Chinese'),
            'co' => __('Corsican'),
            'kw' => __('Cornish'),
            'cu' => __('Church Slavic; Slavonic; Old Bulgarian'),
            'cv' => __('Chuvash'),
            'hr' => __('Croatian'),
            'cs' => __('Czech'),
            'da' => __('Danish'),
            'dv' => __('Divehi; Dhivehi; Maldivian'),
            'nl' => __('Dutch'),
            'dz' => __('Dzongkha'),
            'eo' => __('Esperanto'),
            'et' => __('Estonian'),
            'fo' => __('Faroese'),
            'fj' => __('Fijian'),
            'fi' => __('Finnish'),
            'gd' => __('Gaelic; Scottish Gaelic'),
            'gl' => __('Galician'),
            'ka' => __('Georgian'),
            'el' => __('Greek), Modern (1453-)'),
            'gn' => __('Guarani'),
            'gu' => __('Gujarati'),
            'ht' => __('Haitian; Haitian Creole'),
            'ha' => __('Hausa'),
            'he' => __('Hebrew'),
            'hz' => __('Herero'),
            'hi' => __('Hindi'),
            'ho' => __('Hiri Motu'),
            'hu' => __('Hungarian'),
            'is' => __('Icelandic'),
            'io' => __('Ido'),
            'id' => __('Indonesian'),
            'ia' => __('Interlingua (International Auxiliary Language Association)'),
            'ie' => __('Interlingue'),
            'iu' => __('Inuktitut'),
            'ik' => __('Inupiaq'),
            'it' => __('Italian'),
            'ja' => __('Japanese'),
            'jv' => __('Javanese'),
            'kl' => __('Kalaallisut'),
            'ks' => __('Kashmiri'),
            'kk' => __('Kazakh'),
            'kn' => __('Kannada'),
            'km' => __('Khmer'),
            'ki' => __('Kikuyu; Gikuyu'),
            'rw' => __('Kinyarwanda'),
            'ky' => __('Kirghiz'),
            'kv' => __('Komi'),
            'ko' => __('Korean'),
            'kj' => __('Kuanyama; Kwanyama'),
            'ku' => __('Kurdish'),
            'lo' => __('Lao'),
            'la' => __('Latin'),
            'lv' => __('Latvian'),
            'li' => __('Limburgan; Limburger; Limburgish'),
            'ln' => __('Lingala'),
            'lt' => __('Lithuanian'),
            'lb' => __('Luxembourgish; Letzeburgesch'),
            'mk' => __('Macedonian'),
            'mg' => __('Malagasy'),
            'mi' => __('Maori'),
            'mh' => __('Marshallese'),
            'ms' => __('Malay'),
            'ml' => __('Malayalam'),
            'mt' => __('Maltese'),
            'gv' => __('Manx'),
            'mr' => __('Marathi'),
            'mn' => __('Mongolian'),
            'mo' => __('Moldavian'),
            'na' => __('Nauru'),
            'nv' => __('Navaho), Navajo'),
            'nd' => __('Ndebele), North'),
            'ng' => __('Ndonga'),
            'nr' => __('Ndebele), South'),
            'ne' => __('Nepali'),
            'se' => __('Northern Sami'),
            'no' => __('Norwegian'),
            'nb' => __('Norwegian Bokmal'),
            'nn' => __('Norwegian Nynorsk'),
            'ny' => __('Nyanja; Chichewa; Chewa'),
            'oc' => __('Occitan (post 1500); Provencal'),
            'or' => __('Oriya'),
            'om' => __('Oromo'),
            'os' => __('Ossetian; Ossetic'),
            'pi' => __('Pali'),
            'pa' => __('Panjabi'),
            'fa' => __('Persian'),
            'pl' => __('Polish'),
            'pt' => __('Portuguese'),
            'ps' => __('Pushto'),
            'qu' => __('Quechua'),
            'rm' => __('Raeto-Romance'),
            'rn' => __('Rundi'),
            'ro' => __('Romanian'),
            'ru' => __('Russian'),
            'sa' => __('Sanskrit'),
            'sm' => __('Samoan'),
            'sg' => __('Sango'),
            'sc' => __('Sardinian'),
            'sr' => __('Serbian'),
            'sn' => __('Shona'),
            'ii' => __('Sichuan Yi'),
            'sd' => __('Sindhi'),
            'si' => __('Sinhala; Sinhalese'),
            'sk' => __('Slovak'),
            'sl' => __('Slovenian'),
            'so' => __('Somali'),
            'st' => __('Sotho), Southern'),
            'su' => __('Sundanese'),
            'sw' => __('Swahili'),
            'ss' => __('Swati'),
            'sv' => __('Swedish'),
            'tl' => __('Tagalog'),
            'ty' => __('Tahitian'),
            'tg' => __('Tajik'),
            'ta' => __('Tamil'),
            'tt' => __('Tatar'),
            'te' => __('Telugu'),
            'th' => __('Thai'),
            'bo' => __('Tibetan'),
            'ti' => __('Tigrinya'),
            'to' => __('Tonga (Tonga Islands)'),
            'ts' => __('Tsonga'),
            'tn' => __('Tswana'),
            'tr' => __('Turkish'),
            'tk' => __('Turkmen'),
            'tw' => __('Twi'),
            'ug' => __('Uighur'),
            'uk' => __('Ukrainian'),
            'ur' => __('Urdu'),
            'uz' => __('Uzbek'),
            'vi' => __('Vietnamese'),
            'vo' => __('Volapuk'),
            'wa' => __('Walloon'),
            'cy' => __('Welsh'),
            'fy' => __('Western Frisian'),
            'wo' => __('Wolof'),
            'xh' => __('Xhosa'),
            'yi' => __('Yiddish'),
            'yo' => __('Yoruba'),
            'za' => __('Zhuang; Chuang'),
            'zu' => __('Zulu'));
    }


}
