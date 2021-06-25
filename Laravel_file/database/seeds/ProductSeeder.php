<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 SOFA
        // 2 BEDFRAME
        // 3 BOOKSHELVES
        // 4 CHAIRS
        // 5 DINING TABLES
        // 6 FOOD CONTAINERS
        // 7 OFFICE CHAIRS
        // 8 CHEST OF DRAWERS
        DB::table('products')->insert([
            // SOFAS
            [
                'product_type_id' => 1,
                'name' => 'HEMLINGBY',
                'description' => 'Two-seat sofa, Bomstad black',
                'stock' => '50',
                'price' => 2995000,
                'image' => 'sofa1.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'KLIPPAN',
                'description' => '2-seat sofa, Vissle grey',
                'stock' => '50',
                'price' => 2895000,
                'image' => 'sofa2.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'GRÖNLID',
                'description' => '2-seat sofa, Ljungen light red',
                'stock' => '50',
                'price' => 7495000,
                'image' => 'sofa3.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'KIVIK',
                'description' => '4-seat sofa, with chaise longue/Grann/Bomstad black',
                'stock' => '50',
                'price' => 29990000,
                'image' => 'sofa4.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'BRÅTHULT',
                'description' => '3-seat sofa, Vissle red/orange',
                'stock' => '50',
                'price' => 4495000,
                'image' => 'sofa5.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'SANDBACKEN',
                'description' => '3-seat sofa, Frillestad light grey',
                'stock' => '50',
                'price' => 5495000,
                'image' => 'sofa6.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'SÖDERHAMN',
                'description' => '1-seat section, Finnsta white',
                'stock' => '50',
                'price' => 4995000,
                'image' => 'sofa7.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'LIDHULT',
                'description' => '2-seat sofa, Lejde grey/black',
                'stock' => '50',
                'price' => 16995000,
                'image' => 'sofa8.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'LANDSKRONA',
                'description' => '2-seat sofa, Grann/Bomstad golden-brown/metal',
                'stock' => '50',
                'price' => 11995000,
                'image' => 'sofa9.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'STOCKSUND',
                'description' => '3-seat sofa, Nolhaga grey-beige/black/wood',
                'stock' => '50',
                'price' => 6995000,
                'image' => 'sofa10.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'VIMLE',
                'description' => '3-seat sofa, with open end/Gunnared beige',
                'stock' => '50',
                'price' => 9090000,
                'image' => 'sofa11.jpg',
            ],
            [
                'product_type_id' => 1,
                'name' => 'FÄRLÖV',
                'description' => '3-seat sofa, Flodafors grey',
                'stock' => '50',
                'price' => 8995000,
                'image' => 'sofa12.jpg',
            ],
            // BEDFRAMES
            [
                'product_type_id' => 2,
                'name' => 'HAUGA',
                'description' => 'Upholstered bed frame, Vissle grey',
                'stock' => '50',
                'price' => 2299000,
                'image' => 'bedframe1.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'MALM',
                'description' => 'Bed frame, high, brown stained ash',
                'stock' => '50',
                'price' => 2799000,
                'image' => 'bedframe2.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'SLATTUM',
                'description' => 'Upholstered bed frame, Knisa light grey',
                'stock' => '50',
                'price' => 2999000,
                'image' => 'bedframe3.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'HEMNES',
                'description' => 'Bed frame, black-brown/Lönset',
                'stock' => '50',
                'price' => 3799000,
                'image' => 'bedframe4.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'MALM',
                'description' => 'Bed frame, high, w 2 storage boxes, brown stained ash veneer/Luröy',
                'stock' => '50',
                'price' => 3899000,
                'image' => 'bedframe5.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'LEIRVIK',
                'description' => 'Bed frame, white/Lönset',
                'stock' => '50',
                'price' => 3999000,
                'image' => 'bedframe6.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'TYSSEDAL',
                'description' => 'Bed frame, white/Luröy',
                'stock' => '50',
                'price' => 4599000,
                'image' => 'bedframe7.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'MALM',
                'description' => 'Bed frame, high, w 2 storage boxes, white stained oak veneer/Luröy',
                'stock' => '50',
                'price' => 5399000,
                'image' => 'bedframe8.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'TUFJORD',
                'description' => 'Upholstered bed frame, Djuparp dark green',
                'stock' => '50',
                'price' => 9999000,
                'image' => 'bedframe9.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'PLATSA',
                'description' => 'Bed frame with 2 door+3 drawers, white/Fonnes',
                'stock' => '50',
                'price' => 9450000,
                'image' => 'bedframe10.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'SAGSTUA',
                'description' => 'Bed frame, white/Luröy',
                'stock' => '50',
                'price' => 2899000,
                'image' => 'bedframe11.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'BJÖRKSNÄS',
                'description' => 'Bed frame, white/Luröy',
                'stock' => '50',
                'price' => 8599000,
                'image' => 'bedframe12.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'HEMNES',
                'description' => 'Bed frame, white stain/Luröy',
                'stock' => '50',
                'price' => 5199000,
                'image' => 'bedframe13.jpg',
            ],
            [
                'product_type_id' => 2,
                'name' => 'GJÖRA',
                'description' => 'Bed frame, birch/Luröy',
                'stock' => '50',
                'price' => 5199000,
                'image' => 'bedframe14.jpg',
            ],
            // BOOKSHELVES
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Bookcase, white',
                'stock' => '50',
                'price' => 2598000,
                'image' => 'bookshelf1.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY/OXBERG',
                'description' => 'Bookcase with doors, white',
                'stock' => '50',
                'price' => 2299000,
                'image' => 'bookshelf2.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Bookcase with panel/glass doors, white',
                'stock' => '50',
                'price' => 2799000,
                'image' => 'bookshelf3.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY/OXBERG',
                'description' => 'Bookcase with glass-doors, white',
                'stock' => '50',
                'price' => 4448000,
                'image' => 'bookshelf4.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'LIATORP',
                'description' => 'Bookcase, white',
                'stock' => '50',
                'price' => 4999000,
                'image' => 'bookshelf5.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BRIMNES',
                'description' => 'Bookcase, white',
                'stock' => '50',
                'price' => 1799000,
                'image' => 'bookshelf6.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'LAIVA',
                'description' => 'Bookcase, black-brown',
                'stock' => '50',
                'price' => 399000,
                'image' => 'bookshelf7.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BRUSALI',
                'description' => 'Bookcase, white',
                'stock' => '50',
                'price' => 1799000,
                'image' => 'bookshelf8.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'LOMMARP',
                'description' => 'Bookcase, dark blue-green',
                'stock' => '50',
                'price' => 2799000,
                'image' => 'bookshelf9.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'HEMNES',
                'description' => 'Bookcase, black-brown/light brown',
                'stock' => '50',
                'price' => 2999000,
                'image' => 'bookshelf10.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'LOMMARP',
                'description' => 'Bookcase, light beige',
                'stock' => '50',
                'price' => 2799000,
                'image' => 'bookshelf11.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Bookcase combination/crnr solution, white stained oak veneer',
                'stock' => '50',
                'price' => 8196000,
                'image' => 'bookshelf12.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Bookcase combination/hght extension, black-brown',
                'stock' => '50',
                'price' => 3798000,
                'image' => 'bookshelf13.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, black-brown',
                'stock' => '50',
                'price' => 300000,
                'image' => 'bookshelf14.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, black-brown',
                'stock' => '50',
                'price' => 200000,
                'image' => 'bookshelf15.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, glass',
                'stock' => '50',
                'price' => 250000,
                'image' => 'bookshelf16.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, white stained oak veneer',
                'stock' => '50',
                'price' => 200000,
                'image' => 'bookshelf17.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, white',
                'stock' => '50',
                'price' => 200000,
                'image' => 'bookshelf18.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, white stained oak veneer',
                'stock' => '50',
                'price' => 300000,
                'image' => 'bookshelf19.jpg',
            ],
            [
                'product_type_id' => 3,
                'name' => 'BILLY',
                'description' => 'Extra shelf, glass',
                'stock' => '50',
                'price' => 150000,
                'image' => 'bookshelf20.jpg',
            ],
            // CHAIRS
            [
                'product_type_id' => 4,
                'name' => 'TEODORES',
                'description' => 'Chair, white',
                'stock' => '50',
                'price' => 395000,
                'image' => 'chair1.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'TOBIAS',
                'description' => 'Chair, transparent/chrome-plated',
                'stock' => '50',
                'price' => 1495000,
                'image' => 'chair2.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'JOKKMOKK',
                'description' => 'Chair, antique stain',
                'stock' => '50',
                'price' => 395000,
                'image' => 'chair3.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'TEODORES',
                'description' => 'Chair, dark grey',
                'stock' => '50',
                'price' => 395000,
                'image' => 'chair4.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'TERJE',
                'description' => 'Folding chair, beech',
                'stock' => '50',
                'price' => 395000,
                'image' => 'chair5.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'TOSSBERG',
                'description' => 'Chair, metal black/grey',
                'stock' => '50',
                'price' => 3995000,
                'image' => 'chair6.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'IDOLF',
                'description' => 'Chair, white',
                'stock' => '50',
                'price' => 995000,
                'image' => 'chair7.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'NISSE',
                'description' => 'Folding chair, black',
                'stock' => '50',
                'price' => 195000,
                'image' => 'chair8.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'ADDE',
                'description' => 'Chair, black',
                'stock' => '50',
                'price' => 160000,
                'image' => 'chair9.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'NORDVIKEN',
                'description' => 'Chair, white',
                'stock' => '50',
                'price' => 895000,
                'image' => 'chair10.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'ODGER',
                'description' => 'Chair, anthracite',
                'stock' => '50',
                'price' => 1295000,
                'image' => 'chair11.jpg',
            ],
            [
                'product_type_id' => 4,
                'name' => 'KARLJAN',
                'description' => 'Chair, dark grey/Kabusa dark grey',
                'stock' => '50',
                'price' => 695000,
                'image' => 'chair12.jpg',
            ],
            // DINING TABLES
            [
                'product_type_id' => 5,
                'name' => 'MELLTORP',
                'description' => 'Table, white',
                'stock' => '50',
                'price' => 799000,
                'image' => 'dining1.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'MELLTORP/TEODORES',
                'description' => 'Table and 4 chairs, white',
                'stock' => '50',
                'price' => 2379000,
                'image' => 'dining2.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'MELLTORP/JANINGE',
                'description' => 'Table and 4 chairs, white/white',
                'stock' => '50',
                'price' => 3579000,
                'image' => 'dining3.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'JOKKMOKK',
                'description' => 'Table and 4 chairs, antique stain',
                'stock' => '50',
                'price' => 2299000,
                'image' => 'dining4.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'EKEDALEN',
                'description' => 'Extendable table, dark brown',
                'stock' => '50',
                'price' => 3999000,
                'image' => 'dining5.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'SKOGSTA',
                'description' => 'Dining table, acacia',
                'stock' => '50',
                'price' => 8999000,
                'image' => 'dining6.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'STENARED',
                'description' => 'Dining table, stone effect quartz/bamboo',
                'stock' => '50',
                'price' => 5999000,
                'image' => 'dining7.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'TÄRENDÖ',
                'description' => 'Table, black',
                'stock' => '50',
                'price' => 599000,
                'image' => 'dining8.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'EKEDALEN',
                'description' => 'Extendable table, white',
                'stock' => '50',
                'price' => 2999000,
                'image' => 'dining9.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'TÄRENDÖ/ADDE',
                'description' => 'Table and 4 chairs, black/black',
                'stock' => '50',
                'price' => 1239000,
                'image' => 'dining10.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'MELLTORP',
                'description' => 'Table, white',
                'stock' => '50',
                'price' => 499000,
                'image' => 'dining11.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'MELLTORP/ADDE',
                'description' => 'Table and 2 chairs, mosaic patterned white/white',
                'stock' => '50',
                'price' => 1019000,
                'image' => 'dining12.jpg',
            ],
            [
                'product_type_id' => 5,
                'name' => 'NORRARYD/SKOGSTA',
                'description' => 'Table and 6 chairs, acacia/black',
                'stock' => '50',
                'price' => 17369000,
                'image' => 'dining13.jpg',
            ],
            // FOOD CONTAINERS
            [
                'product_type_id' => 6,
                'name' => 'PRUTA',
                'description' => 'Food container, set of 17, transparent/green',
                'stock' => '50',
                'price' => 69900,
                'image' => 'food_container1.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'PRUTA',
                'description' => 'Food container, transparent/yellow, 3 pieces',
                'stock' => '50',
                'price' => 19900,
                'image' => 'food_container2.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container with lid, rectangular/plastic',
                'stock' => '50',
                'price' => 109900,
                'image' => 'food_container3.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container with lid, rectangular/plastic',
                'stock' => '50',
                'price' => 79900,
                'image' => 'food_container4.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container with lid, rectangular/plastic',
                'stock' => '50',
                'price' => 149900,
                'image' => 'food_container5.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container, rectangular/plastic',
                'stock' => '50',
                'price' => 29900,
                'image' => 'food_container6.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container, round/plastic',
                'stock' => '50',
                'price' => 14900,
                'image' => 'food_container7.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container, square/plastic',
                'stock' => '50',
                'price' => 29900,
                'image' => 'food_container8.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container, round/plastic',
                'stock' => '50',
                'price' => 19900,
                'image' => 'food_container9.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container, rectangular/plastic',
                'stock' => '50',
                'price' => 39900,
                'image' => 'food_container10.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IDEA 365+',
                'description' => 'Food container, square/plastic',
                'stock' => '50',
                'price' => 19900,
                'image' => 'food_container11.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'ÖVERMÄTT',
                'description' => 'Food cover, set of 3, silicone multicolour',
                'stock' => '50',
                'price' => 69900,
                'image' => 'food_container12.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'PRUTA',
                'description' => 'Food container, set of 17, transparent/orange',
                'stock' => '50',
                'price' => 69900,
                'image' => 'food_container13.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'EFTERFRÅGAD',
                'description' => 'Food vacuum flask, stainless steel',
                'stock' => '50',
                'price' => 179000,
                'image' => 'food_container14.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IKEA 365+',
                'description' => 'Ice pack, round',
                'stock' => '50',
                'price' => 50000,
                'image' => 'food_container15.jpg',
            ],
            [
                'product_type_id' => 6,
                'name' => 'IKEA 365+',
                'description' => 'Ice pack, rectangular',
                'stock' => '50',
                'price' => 50000,
                'image' => 'food_container16.jpg',
            ],
            // OFFICE CHAIRS
            [
                'product_type_id' => 7,
                'name' => 'MARKUS',
                'description' => 'Office chair, Vissle dark grey',
                'stock' => '50',
                'price' => 2999000,
                'image' => 'office_chair1.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'LIDKULLEN',
                'description' => 'Active sit/stand support, Gunnared beige',
                'stock' => '50',
                'price' => 1499000,
                'image' => 'office_chair2.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'TROLLBERGET',
                'description' => 'Active sit/stand support, Grann beige',
                'stock' => '50',
                'price' => 1999000,
                'image' => 'office_chair3.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'ALEFJÄLL',
                'description' => 'Office chair, Grann golden-brown',
                'stock' => '50',
                'price' => 4999000,
                'image' => 'office_chair4.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'FLINTAN',
                'description' => 'Office chair, Vissle grey',
                'stock' => '50',
                'price' => 999000,
                'image' => 'office_chair5.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'ALEFJÄLL',
                'description' => 'Office chair, Glose black',
                'stock' => '50',
                'price' => 4999000,
                'image' => 'office_chair6.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'JÄRVFJÄLLET',
                'description' => 'Office chair with armrests, Gunnared dark grey/black',
                'stock' => '50',
                'price' => 3499000,
                'image' => 'office_chair7.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'LIDKULLEN',
                'description' => 'Active sit/stand support, Gunnared dark grey',
                'stock' => '50',
                'price' => 1499000,
                'image' => 'office_chair8.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'HATTEFJÄLL',
                'description' => 'Office chair, Smidig black',
                'stock' => '50',
                'price' => 4799000,
                'image' => 'office_chair9.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'HATTEFJÄLL',
                'description' => 'Office chair with armrests, Smidig black/black',
                'stock' => '50',
                'price' => 5299000,
                'image' => 'office_chair10.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'LÅNGFJÄLL',
                'description' => 'Conference chair with armrests, Gunnared dark grey/white',
                'stock' => '50',
                'price' => 2299000,
                'image' => 'office_chair11.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'LÅNGFJÄLL',
                'description' => 'Office chair, Gunnared dark grey/white',
                'stock' => '50',
                'price' => 2299000,
                'image' => 'office_chair12.jpg',
            ],
            [
                'product_type_id' => 7,
                'name' => 'FLINTAN/NOMINELL',
                'description' => 'Office chair with armrests, black',
                'stock' => '50',
                'price' => 1249000,
                'image' => 'office_chair13.jpg',
            ],
            // 8 CHEST OF DRAWERS
            [
                'product_type_id' => 8,
                'name' => 'MALM',
                'description' => 'Chest of 2 drawers, white',
                'stock' => '50',
                'price' => 699000,
                'image' => 'drawers1.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'SONGESAND',
                'description' => 'Chest of 6 drawers, white',
                'stock' => '50',
                'price' => 3999000,
                'image' => 'drawers2.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'BRIMNES',
                'description' => 'Chest of 3 drawers, white/frosted glass',
                'stock' => '50',
                'price' => 1999000,
                'image' => 'drawers3.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'HEMNES',
                'description' => 'Chest of 8 drawers, black-brown',
                'stock' => '50',
                'price' => 6999000,
                'image' => 'drawers4.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'TYSSEDAL',
                'description' => 'Chest of 6 drawers, white',
                'stock' => '50',
                'price' => 5999000,
                'image' => 'drawers5.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'NIKKEBY',
                'description' => 'Chest of 2 drawers, grey-green',
                'stock' => '50',
                'price' => 1299000,
                'image' => 'drawers6.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'NORDLI',
                'description' => 'Chest of 3 drawers, anthracite',
                'stock' => '50',
                'price' => 4798000,
                'image' => 'drawers7.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'KOPPANG',
                'description' => 'Chest of 3 drawers, black-brown',
                'stock' => '50',
                'price' => 1799000,
                'image' => 'drawers8.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'KOPPANG',
                'description' => 'Chest of 5 drawers, black-brown',
                'stock' => '50',
                'price' => 2499000,
                'image' => 'drawers9.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'KOPPANG',
                'description' => 'Chest of 6 drawers, black-brown',
                'stock' => '50',
                'price' => 2899000,
                'image' => 'drawers10.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'LOTE',
                'description' => 'Chest of 3 drawers, white',
                'stock' => '50',
                'price' => 449000,
                'image' => 'drawers11.jpg',
            ],
            [
                'product_type_id' => 8,
                'name' => 'NORDLI',
                'description' => 'Chest of 6 drawers, anthracite',
                'stock' => '50',
                'price' => 5999000,
                'image' => 'drawers12.jpg',
            ],
        ]);
    }
}