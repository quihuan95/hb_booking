<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class CategorynewsrelationshipTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorynewsrelationship')->delete();
        
        \DB::table('categorynewsrelationship')->insert(array (
            0 => 
            array (
                'id' => 22,
                'news_id' => 140,
                'cats_id' => 1,
            ),
            1 => 
            array (
                'id' => 23,
                'news_id' => 140,
                'cats_id' => 9,
            ),
            2 => 
            array (
                'id' => 24,
                'news_id' => 130,
                'cats_id' => 1,
            ),
            3 => 
            array (
                'id' => 25,
                'news_id' => 130,
                'cats_id' => 9,
            ),
            4 => 
            array (
                'id' => 28,
                'news_id' => 142,
                'cats_id' => 1,
            ),
            5 => 
            array (
                'id' => 29,
                'news_id' => 142,
                'cats_id' => 5,
            ),
            6 => 
            array (
                'id' => 51,
                'news_id' => 144,
                'cats_id' => 1,
            ),
            7 => 
            array (
                'id' => 52,
                'news_id' => 144,
                'cats_id' => 3,
            ),
            8 => 
            array (
                'id' => 53,
                'news_id' => 125,
                'cats_id' => 6,
            ),
            9 => 
            array (
                'id' => 73,
                'news_id' => 153,
                'cats_id' => 6,
            ),
            10 => 
            array (
                'id' => 74,
                'news_id' => 152,
                'cats_id' => 1,
            ),
            11 => 
            array (
                'id' => 75,
                'news_id' => 152,
                'cats_id' => 2,
            ),
            12 => 
            array (
                'id' => 81,
                'news_id' => 156,
                'cats_id' => 12,
            ),
            13 => 
            array (
                'id' => 82,
                'news_id' => 157,
                'cats_id' => 12,
            ),
            14 => 
            array (
                'id' => 83,
                'news_id' => 158,
                'cats_id' => 6,
            ),
            15 => 
            array (
                'id' => 86,
                'news_id' => 133,
                'cats_id' => 1,
            ),
            16 => 
            array (
                'id' => 87,
                'news_id' => 133,
                'cats_id' => 12,
            ),
            17 => 
            array (
                'id' => 88,
                'news_id' => 65,
                'cats_id' => 12,
            ),
            18 => 
            array (
                'id' => 90,
                'news_id' => 61,
                'cats_id' => 1,
            ),
            19 => 
            array (
                'id' => 91,
                'news_id' => 61,
                'cats_id' => 12,
            ),
            20 => 
            array (
                'id' => 92,
                'news_id' => 64,
                'cats_id' => 12,
            ),
            21 => 
            array (
                'id' => 93,
                'news_id' => 60,
                'cats_id' => 12,
            ),
            22 => 
            array (
                'id' => 99,
                'news_id' => 155,
                'cats_id' => 7,
            ),
            23 => 
            array (
                'id' => 100,
                'news_id' => 154,
                'cats_id' => 7,
            ),
            24 => 
            array (
                'id' => 102,
                'news_id' => 162,
                'cats_id' => 16,
            ),
            25 => 
            array (
                'id' => 103,
                'news_id' => 163,
                'cats_id' => 16,
            ),
            26 => 
            array (
                'id' => 107,
                'news_id' => 160,
                'cats_id' => 2,
            ),
            27 => 
            array (
                'id' => 108,
                'news_id' => 160,
                'cats_id' => 20,
            ),
            28 => 
            array (
                'id' => 109,
                'news_id' => 160,
                'cats_id' => 13,
            ),
            29 => 
            array (
                'id' => 110,
                'news_id' => 145,
                'cats_id' => 1,
            ),
            30 => 
            array (
                'id' => 111,
                'news_id' => 145,
                'cats_id' => 6,
            ),
            31 => 
            array (
                'id' => 112,
                'news_id' => 165,
                'cats_id' => 16,
            ),
            32 => 
            array (
                'id' => 113,
                'news_id' => 164,
                'cats_id' => 16,
            ),
            33 => 
            array (
                'id' => 118,
                'news_id' => 168,
                'cats_id' => 2,
            ),
            34 => 
            array (
                'id' => 119,
                'news_id' => 168,
                'cats_id' => 5,
            ),
            35 => 
            array (
                'id' => 120,
                'news_id' => 167,
                'cats_id' => 1,
            ),
            36 => 
            array (
                'id' => 121,
                'news_id' => 167,
                'cats_id' => 2,
            ),
            37 => 
            array (
                'id' => 122,
                'news_id' => 167,
                'cats_id' => 5,
            ),
            38 => 
            array (
                'id' => 141,
                'news_id' => 172,
                'cats_id' => 1,
            ),
            39 => 
            array (
                'id' => 142,
                'news_id' => 172,
                'cats_id' => 2,
            ),
            40 => 
            array (
                'id' => 143,
                'news_id' => 172,
                'cats_id' => 10,
            ),
            41 => 
            array (
                'id' => 144,
                'news_id' => 173,
                'cats_id' => 1,
            ),
            42 => 
            array (
                'id' => 145,
                'news_id' => 173,
                'cats_id' => 2,
            ),
            43 => 
            array (
                'id' => 146,
                'news_id' => 173,
                'cats_id' => 7,
            ),
            44 => 
            array (
                'id' => 147,
                'news_id' => 173,
                'cats_id' => 9,
            ),
            45 => 
            array (
                'id' => 148,
                'news_id' => 173,
                'cats_id' => 10,
            ),
            46 => 
            array (
                'id' => 149,
                'news_id' => 174,
                'cats_id' => 1,
            ),
            47 => 
            array (
                'id' => 150,
                'news_id' => 174,
                'cats_id' => 2,
            ),
            48 => 
            array (
                'id' => 151,
                'news_id' => 174,
                'cats_id' => 10,
            ),
            49 => 
            array (
                'id' => 152,
                'news_id' => 175,
                'cats_id' => 1,
            ),
            50 => 
            array (
                'id' => 153,
                'news_id' => 175,
                'cats_id' => 2,
            ),
            51 => 
            array (
                'id' => 154,
                'news_id' => 175,
                'cats_id' => 10,
            ),
            52 => 
            array (
                'id' => 166,
                'news_id' => 179,
                'cats_id' => 1,
            ),
            53 => 
            array (
                'id' => 167,
                'news_id' => 179,
                'cats_id' => 9,
            ),
            54 => 
            array (
                'id' => 168,
                'news_id' => 179,
                'cats_id' => 10,
            ),
            55 => 
            array (
                'id' => 169,
                'news_id' => 180,
                'cats_id' => 1,
            ),
            56 => 
            array (
                'id' => 170,
                'news_id' => 180,
                'cats_id' => 2,
            ),
            57 => 
            array (
                'id' => 171,
                'news_id' => 180,
                'cats_id' => 10,
            ),
            58 => 
            array (
                'id' => 172,
                'news_id' => 181,
                'cats_id' => 1,
            ),
            59 => 
            array (
                'id' => 173,
                'news_id' => 181,
                'cats_id' => 2,
            ),
            60 => 
            array (
                'id' => 174,
                'news_id' => 181,
                'cats_id' => 6,
            ),
            61 => 
            array (
                'id' => 175,
                'news_id' => 181,
                'cats_id' => 10,
            ),
            62 => 
            array (
                'id' => 176,
                'news_id' => 182,
                'cats_id' => 1,
            ),
            63 => 
            array (
                'id' => 177,
                'news_id' => 182,
                'cats_id' => 2,
            ),
            64 => 
            array (
                'id' => 178,
                'news_id' => 182,
                'cats_id' => 10,
            ),
            65 => 
            array (
                'id' => 179,
                'news_id' => 183,
                'cats_id' => 1,
            ),
            66 => 
            array (
                'id' => 180,
                'news_id' => 183,
                'cats_id' => 2,
            ),
            67 => 
            array (
                'id' => 181,
                'news_id' => 183,
                'cats_id' => 6,
            ),
            68 => 
            array (
                'id' => 182,
                'news_id' => 183,
                'cats_id' => 10,
            ),
            69 => 
            array (
                'id' => 183,
                'news_id' => 184,
                'cats_id' => 1,
            ),
            70 => 
            array (
                'id' => 184,
                'news_id' => 184,
                'cats_id' => 2,
            ),
            71 => 
            array (
                'id' => 185,
                'news_id' => 184,
                'cats_id' => 6,
            ),
            72 => 
            array (
                'id' => 186,
                'news_id' => 184,
                'cats_id' => 10,
            ),
            73 => 
            array (
                'id' => 187,
                'news_id' => 185,
                'cats_id' => 1,
            ),
            74 => 
            array (
                'id' => 188,
                'news_id' => 185,
                'cats_id' => 2,
            ),
            75 => 
            array (
                'id' => 189,
                'news_id' => 185,
                'cats_id' => 6,
            ),
            76 => 
            array (
                'id' => 190,
                'news_id' => 185,
                'cats_id' => 10,
            ),
            77 => 
            array (
                'id' => 191,
                'news_id' => 186,
                'cats_id' => 1,
            ),
            78 => 
            array (
                'id' => 192,
                'news_id' => 186,
                'cats_id' => 2,
            ),
            79 => 
            array (
                'id' => 193,
                'news_id' => 186,
                'cats_id' => 10,
            ),
            80 => 
            array (
                'id' => 194,
                'news_id' => 187,
                'cats_id' => 1,
            ),
            81 => 
            array (
                'id' => 195,
                'news_id' => 187,
                'cats_id' => 2,
            ),
            82 => 
            array (
                'id' => 196,
                'news_id' => 187,
                'cats_id' => 6,
            ),
            83 => 
            array (
                'id' => 197,
                'news_id' => 187,
                'cats_id' => 10,
            ),
            84 => 
            array (
                'id' => 203,
                'news_id' => 188,
                'cats_id' => 1,
            ),
            85 => 
            array (
                'id' => 204,
                'news_id' => 188,
                'cats_id' => 2,
            ),
            86 => 
            array (
                'id' => 205,
                'news_id' => 188,
                'cats_id' => 3,
            ),
            87 => 
            array (
                'id' => 206,
                'news_id' => 188,
                'cats_id' => 6,
            ),
            88 => 
            array (
                'id' => 207,
                'news_id' => 188,
                'cats_id' => 10,
            ),
            89 => 
            array (
                'id' => 212,
                'news_id' => 190,
                'cats_id' => 1,
            ),
            90 => 
            array (
                'id' => 213,
                'news_id' => 190,
                'cats_id' => 2,
            ),
            91 => 
            array (
                'id' => 214,
                'news_id' => 190,
                'cats_id' => 6,
            ),
            92 => 
            array (
                'id' => 215,
                'news_id' => 190,
                'cats_id' => 9,
            ),
            93 => 
            array (
                'id' => 216,
                'news_id' => 190,
                'cats_id' => 10,
            ),
            94 => 
            array (
                'id' => 230,
                'news_id' => 195,
                'cats_id' => 1,
            ),
            95 => 
            array (
                'id' => 231,
                'news_id' => 195,
                'cats_id' => 2,
            ),
            96 => 
            array (
                'id' => 232,
                'news_id' => 195,
                'cats_id' => 10,
            ),
            97 => 
            array (
                'id' => 239,
                'news_id' => 196,
                'cats_id' => 1,
            ),
            98 => 
            array (
                'id' => 240,
                'news_id' => 196,
                'cats_id' => 2,
            ),
            99 => 
            array (
                'id' => 241,
                'news_id' => 196,
                'cats_id' => 3,
            ),
            100 => 
            array (
                'id' => 242,
                'news_id' => 196,
                'cats_id' => 5,
            ),
            101 => 
            array (
                'id' => 243,
                'news_id' => 196,
                'cats_id' => 6,
            ),
            102 => 
            array (
                'id' => 244,
                'news_id' => 196,
                'cats_id' => 10,
            ),
            103 => 
            array (
                'id' => 253,
                'news_id' => 198,
                'cats_id' => 1,
            ),
            104 => 
            array (
                'id' => 254,
                'news_id' => 198,
                'cats_id' => 2,
            ),
            105 => 
            array (
                'id' => 255,
                'news_id' => 198,
                'cats_id' => 3,
            ),
            106 => 
            array (
                'id' => 256,
                'news_id' => 198,
                'cats_id' => 5,
            ),
            107 => 
            array (
                'id' => 257,
                'news_id' => 198,
                'cats_id' => 6,
            ),
            108 => 
            array (
                'id' => 258,
                'news_id' => 198,
                'cats_id' => 7,
            ),
            109 => 
            array (
                'id' => 259,
                'news_id' => 198,
                'cats_id' => 9,
            ),
            110 => 
            array (
                'id' => 260,
                'news_id' => 198,
                'cats_id' => 10,
            ),
            111 => 
            array (
                'id' => 269,
                'news_id' => 200,
                'cats_id' => 1,
            ),
            112 => 
            array (
                'id' => 270,
                'news_id' => 200,
                'cats_id' => 2,
            ),
            113 => 
            array (
                'id' => 271,
                'news_id' => 200,
                'cats_id' => 3,
            ),
            114 => 
            array (
                'id' => 272,
                'news_id' => 200,
                'cats_id' => 5,
            ),
            115 => 
            array (
                'id' => 273,
                'news_id' => 200,
                'cats_id' => 6,
            ),
            116 => 
            array (
                'id' => 274,
                'news_id' => 200,
                'cats_id' => 7,
            ),
            117 => 
            array (
                'id' => 275,
                'news_id' => 200,
                'cats_id' => 10,
            ),
            118 => 
            array (
                'id' => 276,
                'news_id' => 200,
                'cats_id' => 13,
            ),
            119 => 
            array (
                'id' => 306,
                'news_id' => 205,
                'cats_id' => 1,
            ),
            120 => 
            array (
                'id' => 307,
                'news_id' => 205,
                'cats_id' => 2,
            ),
            121 => 
            array (
                'id' => 308,
                'news_id' => 205,
                'cats_id' => 9,
            ),
            122 => 
            array (
                'id' => 309,
                'news_id' => 206,
                'cats_id' => 1,
            ),
            123 => 
            array (
                'id' => 310,
                'news_id' => 206,
                'cats_id' => 2,
            ),
            124 => 
            array (
                'id' => 311,
                'news_id' => 206,
                'cats_id' => 3,
            ),
            125 => 
            array (
                'id' => 312,
                'news_id' => 206,
                'cats_id' => 10,
            ),
            126 => 
            array (
                'id' => 313,
                'news_id' => 206,
                'cats_id' => 23,
            ),
            127 => 
            array (
                'id' => 314,
                'news_id' => 206,
                'cats_id' => 25,
            ),
            128 => 
            array (
                'id' => 315,
                'news_id' => 207,
                'cats_id' => 1,
            ),
            129 => 
            array (
                'id' => 316,
                'news_id' => 207,
                'cats_id' => 2,
            ),
            130 => 
            array (
                'id' => 317,
                'news_id' => 207,
                'cats_id' => 3,
            ),
            131 => 
            array (
                'id' => 318,
                'news_id' => 207,
                'cats_id' => 5,
            ),
            132 => 
            array (
                'id' => 319,
                'news_id' => 207,
                'cats_id' => 6,
            ),
            133 => 
            array (
                'id' => 320,
                'news_id' => 207,
                'cats_id' => 10,
            ),
            134 => 
            array (
                'id' => 321,
                'news_id' => 207,
                'cats_id' => 24,
            ),
            135 => 
            array (
                'id' => 322,
                'news_id' => 208,
                'cats_id' => 1,
            ),
            136 => 
            array (
                'id' => 323,
                'news_id' => 208,
                'cats_id' => 2,
            ),
            137 => 
            array (
                'id' => 324,
                'news_id' => 208,
                'cats_id' => 3,
            ),
            138 => 
            array (
                'id' => 325,
                'news_id' => 208,
                'cats_id' => 6,
            ),
            139 => 
            array (
                'id' => 326,
                'news_id' => 208,
                'cats_id' => 7,
            ),
            140 => 
            array (
                'id' => 327,
                'news_id' => 208,
                'cats_id' => 10,
            ),
            141 => 
            array (
                'id' => 328,
                'news_id' => 208,
                'cats_id' => 24,
            ),
            142 => 
            array (
                'id' => 335,
                'news_id' => 209,
                'cats_id' => 1,
            ),
            143 => 
            array (
                'id' => 336,
                'news_id' => 209,
                'cats_id' => 2,
            ),
            144 => 
            array (
                'id' => 337,
                'news_id' => 209,
                'cats_id' => 3,
            ),
            145 => 
            array (
                'id' => 338,
                'news_id' => 209,
                'cats_id' => 6,
            ),
            146 => 
            array (
                'id' => 339,
                'news_id' => 209,
                'cats_id' => 7,
            ),
            147 => 
            array (
                'id' => 340,
                'news_id' => 209,
                'cats_id' => 10,
            ),
            148 => 
            array (
                'id' => 341,
                'news_id' => 210,
                'cats_id' => 1,
            ),
            149 => 
            array (
                'id' => 342,
                'news_id' => 210,
                'cats_id' => 6,
            ),
            150 => 
            array (
                'id' => 343,
                'news_id' => 210,
                'cats_id' => 9,
            ),
            151 => 
            array (
                'id' => 344,
                'news_id' => 210,
                'cats_id' => 10,
            ),
            152 => 
            array (
                'id' => 345,
                'news_id' => 211,
                'cats_id' => 1,
            ),
            153 => 
            array (
                'id' => 346,
                'news_id' => 211,
                'cats_id' => 2,
            ),
            154 => 
            array (
                'id' => 347,
                'news_id' => 211,
                'cats_id' => 9,
            ),
            155 => 
            array (
                'id' => 348,
                'news_id' => 211,
                'cats_id' => 10,
            ),
            156 => 
            array (
                'id' => 349,
                'news_id' => 212,
                'cats_id' => 1,
            ),
            157 => 
            array (
                'id' => 350,
                'news_id' => 212,
                'cats_id' => 2,
            ),
            158 => 
            array (
                'id' => 351,
                'news_id' => 212,
                'cats_id' => 3,
            ),
            159 => 
            array (
                'id' => 352,
                'news_id' => 212,
                'cats_id' => 6,
            ),
            160 => 
            array (
                'id' => 353,
                'news_id' => 212,
                'cats_id' => 9,
            ),
            161 => 
            array (
                'id' => 354,
                'news_id' => 212,
                'cats_id' => 10,
            ),
            162 => 
            array (
                'id' => 358,
                'news_id' => 213,
                'cats_id' => 1,
            ),
            163 => 
            array (
                'id' => 359,
                'news_id' => 213,
                'cats_id' => 2,
            ),
            164 => 
            array (
                'id' => 360,
                'news_id' => 213,
                'cats_id' => 10,
            ),
            165 => 
            array (
                'id' => 361,
                'news_id' => 213,
                'cats_id' => 29,
            ),
            166 => 
            array (
                'id' => 362,
                'news_id' => 214,
                'cats_id' => 1,
            ),
            167 => 
            array (
                'id' => 363,
                'news_id' => 214,
                'cats_id' => 10,
            ),
            168 => 
            array (
                'id' => 364,
                'news_id' => 214,
                'cats_id' => 29,
            ),
            169 => 
            array (
                'id' => 365,
                'news_id' => 215,
                'cats_id' => 1,
            ),
            170 => 
            array (
                'id' => 366,
                'news_id' => 215,
                'cats_id' => 2,
            ),
            171 => 
            array (
                'id' => 367,
                'news_id' => 215,
                'cats_id' => 10,
            ),
            172 => 
            array (
                'id' => 368,
                'news_id' => 215,
                'cats_id' => 25,
            ),
            173 => 
            array (
                'id' => 369,
                'news_id' => 215,
                'cats_id' => 26,
            ),
            174 => 
            array (
                'id' => 370,
                'news_id' => 215,
                'cats_id' => 27,
            ),
            175 => 
            array (
                'id' => 371,
                'news_id' => 215,
                'cats_id' => 28,
            ),
            176 => 
            array (
                'id' => 372,
                'news_id' => 215,
                'cats_id' => 29,
            ),
            177 => 
            array (
                'id' => 392,
                'news_id' => 219,
                'cats_id' => 1,
            ),
            178 => 
            array (
                'id' => 393,
                'news_id' => 219,
                'cats_id' => 2,
            ),
            179 => 
            array (
                'id' => 394,
                'news_id' => 219,
                'cats_id' => 3,
            ),
            180 => 
            array (
                'id' => 395,
                'news_id' => 219,
                'cats_id' => 9,
            ),
            181 => 
            array (
                'id' => 396,
                'news_id' => 219,
                'cats_id' => 10,
            ),
            182 => 
            array (
                'id' => 397,
                'news_id' => 219,
                'cats_id' => 29,
            ),
            183 => 
            array (
                'id' => 407,
                'news_id' => 222,
                'cats_id' => 1,
            ),
            184 => 
            array (
                'id' => 408,
                'news_id' => 222,
                'cats_id' => 2,
            ),
            185 => 
            array (
                'id' => 409,
                'news_id' => 222,
                'cats_id' => 25,
            ),
            186 => 
            array (
                'id' => 410,
                'news_id' => 223,
                'cats_id' => 1,
            ),
            187 => 
            array (
                'id' => 411,
                'news_id' => 223,
                'cats_id' => 2,
            ),
            188 => 
            array (
                'id' => 412,
                'news_id' => 223,
                'cats_id' => 25,
            ),
            189 => 
            array (
                'id' => 413,
                'news_id' => 224,
                'cats_id' => 1,
            ),
            190 => 
            array (
                'id' => 414,
                'news_id' => 224,
                'cats_id' => 2,
            ),
            191 => 
            array (
                'id' => 415,
                'news_id' => 224,
                'cats_id' => 3,
            ),
            192 => 
            array (
                'id' => 416,
                'news_id' => 224,
                'cats_id' => 10,
            ),
            193 => 
            array (
                'id' => 417,
                'news_id' => 224,
                'cats_id' => 25,
            ),
            194 => 
            array (
                'id' => 418,
                'news_id' => 225,
                'cats_id' => 1,
            ),
            195 => 
            array (
                'id' => 419,
                'news_id' => 225,
                'cats_id' => 6,
            ),
            196 => 
            array (
                'id' => 420,
                'news_id' => 225,
                'cats_id' => 10,
            ),
            197 => 
            array (
                'id' => 421,
                'news_id' => 225,
                'cats_id' => 25,
            ),
            198 => 
            array (
                'id' => 422,
                'news_id' => 226,
                'cats_id' => 1,
            ),
            199 => 
            array (
                'id' => 423,
                'news_id' => 226,
                'cats_id' => 2,
            ),
            200 => 
            array (
                'id' => 424,
                'news_id' => 226,
                'cats_id' => 10,
            ),
            201 => 
            array (
                'id' => 425,
                'news_id' => 226,
                'cats_id' => 25,
            ),
            202 => 
            array (
                'id' => 426,
                'news_id' => 227,
                'cats_id' => 1,
            ),
            203 => 
            array (
                'id' => 427,
                'news_id' => 227,
                'cats_id' => 10,
            ),
            204 => 
            array (
                'id' => 428,
                'news_id' => 227,
                'cats_id' => 25,
            ),
            205 => 
            array (
                'id' => 429,
                'news_id' => 228,
                'cats_id' => 1,
            ),
            206 => 
            array (
                'id' => 430,
                'news_id' => 228,
                'cats_id' => 10,
            ),
            207 => 
            array (
                'id' => 431,
                'news_id' => 228,
                'cats_id' => 25,
            ),
            208 => 
            array (
                'id' => 432,
                'news_id' => 229,
                'cats_id' => 1,
            ),
            209 => 
            array (
                'id' => 433,
                'news_id' => 229,
                'cats_id' => 2,
            ),
            210 => 
            array (
                'id' => 434,
                'news_id' => 229,
                'cats_id' => 10,
            ),
            211 => 
            array (
                'id' => 435,
                'news_id' => 229,
                'cats_id' => 25,
            ),
            212 => 
            array (
                'id' => 436,
                'news_id' => 230,
                'cats_id' => 1,
            ),
            213 => 
            array (
                'id' => 437,
                'news_id' => 230,
                'cats_id' => 2,
            ),
            214 => 
            array (
                'id' => 438,
                'news_id' => 230,
                'cats_id' => 10,
            ),
            215 => 
            array (
                'id' => 439,
                'news_id' => 230,
                'cats_id' => 25,
            ),
            216 => 
            array (
                'id' => 440,
                'news_id' => 231,
                'cats_id' => 1,
            ),
            217 => 
            array (
                'id' => 441,
                'news_id' => 231,
                'cats_id' => 2,
            ),
            218 => 
            array (
                'id' => 442,
                'news_id' => 231,
                'cats_id' => 10,
            ),
            219 => 
            array (
                'id' => 443,
                'news_id' => 231,
                'cats_id' => 25,
            ),
            220 => 
            array (
                'id' => 455,
                'news_id' => 234,
                'cats_id' => 1,
            ),
            221 => 
            array (
                'id' => 456,
                'news_id' => 234,
                'cats_id' => 10,
            ),
            222 => 
            array (
                'id' => 457,
                'news_id' => 234,
                'cats_id' => 25,
            ),
            223 => 
            array (
                'id' => 497,
                'news_id' => 245,
                'cats_id' => 1,
            ),
            224 => 
            array (
                'id' => 498,
                'news_id' => 245,
                'cats_id' => 10,
            ),
            225 => 
            array (
                'id' => 503,
                'news_id' => 247,
                'cats_id' => 10,
            ),
            226 => 
            array (
                'id' => 512,
                'news_id' => 251,
                'cats_id' => 1,
            ),
            227 => 
            array (
                'id' => 513,
                'news_id' => 251,
                'cats_id' => 10,
            ),
            228 => 
            array (
                'id' => 514,
                'news_id' => 251,
                'cats_id' => 24,
            ),
            229 => 
            array (
                'id' => 521,
                'news_id' => 236,
                'cats_id' => 1,
            ),
            230 => 
            array (
                'id' => 522,
                'news_id' => 236,
                'cats_id' => 10,
            ),
            231 => 
            array (
                'id' => 523,
                'news_id' => 236,
                'cats_id' => 25,
            ),
            232 => 
            array (
                'id' => 524,
                'news_id' => 233,
                'cats_id' => 1,
            ),
            233 => 
            array (
                'id' => 525,
                'news_id' => 233,
                'cats_id' => 3,
            ),
            234 => 
            array (
                'id' => 526,
                'news_id' => 233,
                'cats_id' => 6,
            ),
            235 => 
            array (
                'id' => 527,
                'news_id' => 233,
                'cats_id' => 10,
            ),
            236 => 
            array (
                'id' => 528,
                'news_id' => 233,
                'cats_id' => 25,
            ),
            237 => 
            array (
                'id' => 543,
                'news_id' => 254,
                'cats_id' => 1,
            ),
            238 => 
            array (
                'id' => 544,
                'news_id' => 254,
                'cats_id' => 10,
            ),
            239 => 
            array (
                'id' => 545,
                'news_id' => 254,
                'cats_id' => 2,
            ),
            240 => 
            array (
                'id' => 546,
                'news_id' => 255,
                'cats_id' => 1,
            ),
            241 => 
            array (
                'id' => 547,
                'news_id' => 255,
                'cats_id' => 10,
            ),
            242 => 
            array (
                'id' => 548,
                'news_id' => 255,
                'cats_id' => 2,
            ),
            243 => 
            array (
                'id' => 549,
                'news_id' => 256,
                'cats_id' => 1,
            ),
            244 => 
            array (
                'id' => 550,
                'news_id' => 256,
                'cats_id' => 10,
            ),
            245 => 
            array (
                'id' => 551,
                'news_id' => 256,
                'cats_id' => 2,
            ),
            246 => 
            array (
                'id' => 552,
                'news_id' => 257,
                'cats_id' => 1,
            ),
            247 => 
            array (
                'id' => 553,
                'news_id' => 257,
                'cats_id' => 10,
            ),
            248 => 
            array (
                'id' => 554,
                'news_id' => 257,
                'cats_id' => 2,
            ),
            249 => 
            array (
                'id' => 555,
                'news_id' => 258,
                'cats_id' => 10,
            ),
            250 => 
            array (
                'id' => 556,
                'news_id' => 258,
                'cats_id' => 2,
            ),
            251 => 
            array (
                'id' => 557,
                'news_id' => 258,
                'cats_id' => 29,
            ),
            252 => 
            array (
                'id' => 558,
                'news_id' => 259,
                'cats_id' => 10,
            ),
            253 => 
            array (
                'id' => 559,
                'news_id' => 259,
                'cats_id' => 2,
            ),
            254 => 
            array (
                'id' => 560,
                'news_id' => 260,
                'cats_id' => 10,
            ),
            255 => 
            array (
                'id' => 561,
                'news_id' => 260,
                'cats_id' => 2,
            ),
            256 => 
            array (
                'id' => 562,
                'news_id' => 260,
                'cats_id' => 31,
            ),
            257 => 
            array (
                'id' => 563,
                'news_id' => 261,
                'cats_id' => 10,
            ),
            258 => 
            array (
                'id' => 564,
                'news_id' => 261,
                'cats_id' => 2,
            ),
            259 => 
            array (
                'id' => 565,
                'news_id' => 261,
                'cats_id' => 31,
            ),
            260 => 
            array (
                'id' => 566,
                'news_id' => 262,
                'cats_id' => 10,
            ),
            261 => 
            array (
                'id' => 567,
                'news_id' => 262,
                'cats_id' => 2,
            ),
            262 => 
            array (
                'id' => 577,
                'news_id' => 263,
                'cats_id' => 2,
            ),
            263 => 
            array (
                'id' => 578,
                'news_id' => 263,
                'cats_id' => 10,
            ),
            264 => 
            array (
                'id' => 579,
                'news_id' => 263,
                'cats_id' => 31,
            ),
            265 => 
            array (
                'id' => 597,
                'news_id' => 264,
                'cats_id' => 13,
            ),
            266 => 
            array (
                'id' => 598,
                'news_id' => 264,
                'cats_id' => 16,
            ),
            267 => 
            array (
                'id' => 599,
                'news_id' => 265,
                'cats_id' => 13,
            ),
            268 => 
            array (
                'id' => 600,
                'news_id' => 265,
                'cats_id' => 16,
            ),
            269 => 
            array (
                'id' => 601,
                'news_id' => 265,
                'cats_id' => 17,
            ),
            270 => 
            array (
                'id' => 602,
                'news_id' => 266,
                'cats_id' => 13,
            ),
            271 => 
            array (
                'id' => 603,
                'news_id' => 266,
                'cats_id' => 16,
            ),
            272 => 
            array (
                'id' => 604,
                'news_id' => 266,
                'cats_id' => 17,
            ),
            273 => 
            array (
                'id' => 605,
                'news_id' => 267,
                'cats_id' => 13,
            ),
            274 => 
            array (
                'id' => 606,
                'news_id' => 267,
                'cats_id' => 16,
            ),
            275 => 
            array (
                'id' => 607,
                'news_id' => 267,
                'cats_id' => 17,
            ),
            276 => 
            array (
                'id' => 608,
                'news_id' => 268,
                'cats_id' => 13,
            ),
            277 => 
            array (
                'id' => 609,
                'news_id' => 268,
                'cats_id' => 16,
            ),
            278 => 
            array (
                'id' => 610,
                'news_id' => 268,
                'cats_id' => 17,
            ),
            279 => 
            array (
                'id' => 611,
                'news_id' => 269,
                'cats_id' => 13,
            ),
            280 => 
            array (
                'id' => 612,
                'news_id' => 269,
                'cats_id' => 16,
            ),
            281 => 
            array (
                'id' => 613,
                'news_id' => 269,
                'cats_id' => 17,
            ),
            282 => 
            array (
                'id' => 614,
                'news_id' => 270,
                'cats_id' => 13,
            ),
            283 => 
            array (
                'id' => 615,
                'news_id' => 270,
                'cats_id' => 16,
            ),
            284 => 
            array (
                'id' => 616,
                'news_id' => 270,
                'cats_id' => 17,
            ),
            285 => 
            array (
                'id' => 617,
                'news_id' => 271,
                'cats_id' => 13,
            ),
            286 => 
            array (
                'id' => 618,
                'news_id' => 271,
                'cats_id' => 16,
            ),
            287 => 
            array (
                'id' => 619,
                'news_id' => 271,
                'cats_id' => 17,
            ),
            288 => 
            array (
                'id' => 620,
                'news_id' => 272,
                'cats_id' => 13,
            ),
            289 => 
            array (
                'id' => 621,
                'news_id' => 272,
                'cats_id' => 16,
            ),
            290 => 
            array (
                'id' => 622,
                'news_id' => 272,
                'cats_id' => 17,
            ),
            291 => 
            array (
                'id' => 623,
                'news_id' => 273,
                'cats_id' => 13,
            ),
            292 => 
            array (
                'id' => 624,
                'news_id' => 273,
                'cats_id' => 16,
            ),
            293 => 
            array (
                'id' => 625,
                'news_id' => 273,
                'cats_id' => 17,
            ),
            294 => 
            array (
                'id' => 626,
                'news_id' => 274,
                'cats_id' => 18,
            ),
            295 => 
            array (
                'id' => 627,
                'news_id' => 274,
                'cats_id' => 19,
            ),
            296 => 
            array (
                'id' => 628,
                'news_id' => 274,
                'cats_id' => 20,
            ),
            297 => 
            array (
                'id' => 629,
                'news_id' => 275,
                'cats_id' => 10,
            ),
            298 => 
            array (
                'id' => 630,
                'news_id' => 275,
                'cats_id' => 29,
            ),
            299 => 
            array (
                'id' => 631,
                'news_id' => 276,
                'cats_id' => 25,
            ),
            300 => 
            array (
                'id' => 632,
                'news_id' => 276,
                'cats_id' => 32,
            ),
            301 => 
            array (
                'id' => 633,
                'news_id' => 276,
                'cats_id' => 33,
            ),
            302 => 
            array (
                'id' => 634,
                'news_id' => 277,
                'cats_id' => 24,
            ),
            303 => 
            array (
                'id' => 637,
                'news_id' => 278,
                'cats_id' => 31,
            ),
            304 => 
            array (
                'id' => 638,
                'news_id' => 278,
                'cats_id' => 37,
            ),
            305 => 
            array (
                'id' => 639,
                'news_id' => 279,
                'cats_id' => 10,
            ),
            306 => 
            array (
                'id' => 640,
                'news_id' => 279,
                'cats_id' => 2,
            ),
            307 => 
            array (
                'id' => 644,
                'news_id' => 283,
                'cats_id' => 31,
            ),
            308 => 
            array (
                'id' => 645,
                'news_id' => 283,
                'cats_id' => 37,
            ),
            309 => 
            array (
                'id' => 654,
                'news_id' => 288,
                'cats_id' => 31,
            ),
            310 => 
            array (
                'id' => 655,
                'news_id' => 288,
                'cats_id' => 44,
            ),
            311 => 
            array (
                'id' => 656,
                'news_id' => 289,
                'cats_id' => 31,
            ),
            312 => 
            array (
                'id' => 657,
                'news_id' => 289,
                'cats_id' => 43,
            ),
            313 => 
            array (
                'id' => 662,
                'news_id' => 292,
                'cats_id' => 31,
            ),
            314 => 
            array (
                'id' => 663,
                'news_id' => 292,
                'cats_id' => 43,
            ),
            315 => 
            array (
                'id' => 665,
                'news_id' => 294,
                'cats_id' => 10,
            ),
            316 => 
            array (
                'id' => 666,
                'news_id' => 294,
                'cats_id' => 44,
            ),
            317 => 
            array (
                'id' => 670,
                'news_id' => 296,
                'cats_id' => 1,
            ),
            318 => 
            array (
                'id' => 671,
                'news_id' => 296,
                'cats_id' => 31,
            ),
            319 => 
            array (
                'id' => 672,
                'news_id' => 296,
                'cats_id' => 46,
            ),
            320 => 
            array (
                'id' => 673,
                'news_id' => 297,
                'cats_id' => 1,
            ),
            321 => 
            array (
                'id' => 674,
                'news_id' => 297,
                'cats_id' => 31,
            ),
            322 => 
            array (
                'id' => 675,
                'news_id' => 298,
                'cats_id' => 1,
            ),
            323 => 
            array (
                'id' => 676,
                'news_id' => 298,
                'cats_id' => 25,
            ),
            324 => 
            array (
                'id' => 677,
                'news_id' => 298,
                'cats_id' => 47,
            ),
            325 => 
            array (
                'id' => 678,
                'news_id' => 299,
                'cats_id' => 31,
            ),
            326 => 
            array (
                'id' => 686,
                'news_id' => 302,
                'cats_id' => 34,
            ),
            327 => 
            array (
                'id' => 687,
                'news_id' => 302,
                'cats_id' => 31,
            ),
            328 => 
            array (
                'id' => 688,
                'news_id' => 303,
                'cats_id' => 1,
            ),
            329 => 
            array (
                'id' => 689,
                'news_id' => 303,
                'cats_id' => 10,
            ),
            330 => 
            array (
                'id' => 690,
                'news_id' => 303,
                'cats_id' => 2,
            ),
            331 => 
            array (
                'id' => 691,
                'news_id' => 303,
                'cats_id' => 34,
            ),
            332 => 
            array (
                'id' => 692,
                'news_id' => 304,
                'cats_id' => 1,
            ),
            333 => 
            array (
                'id' => 693,
                'news_id' => 304,
                'cats_id' => 2,
            ),
            334 => 
            array (
                'id' => 694,
                'news_id' => 304,
                'cats_id' => 49,
            ),
            335 => 
            array (
                'id' => 695,
                'news_id' => 305,
                'cats_id' => 1,
            ),
            336 => 
            array (
                'id' => 696,
                'news_id' => 305,
                'cats_id' => 10,
            ),
            337 => 
            array (
                'id' => 697,
                'news_id' => 305,
                'cats_id' => 2,
            ),
            338 => 
            array (
                'id' => 698,
                'news_id' => 305,
                'cats_id' => 34,
            ),
            339 => 
            array (
                'id' => 709,
                'news_id' => 308,
                'cats_id' => 1,
            ),
            340 => 
            array (
                'id' => 710,
                'news_id' => 308,
                'cats_id' => 10,
            ),
            341 => 
            array (
                'id' => 711,
                'news_id' => 308,
                'cats_id' => 2,
            ),
            342 => 
            array (
                'id' => 712,
                'news_id' => 308,
                'cats_id' => 29,
            ),
            343 => 
            array (
                'id' => 713,
                'news_id' => 308,
                'cats_id' => 34,
            ),
            344 => 
            array (
                'id' => 714,
                'news_id' => 309,
                'cats_id' => 1,
            ),
            345 => 
            array (
                'id' => 715,
                'news_id' => 309,
                'cats_id' => 10,
            ),
            346 => 
            array (
                'id' => 716,
                'news_id' => 309,
                'cats_id' => 2,
            ),
            347 => 
            array (
                'id' => 717,
                'news_id' => 309,
                'cats_id' => 29,
            ),
            348 => 
            array (
                'id' => 718,
                'news_id' => 309,
                'cats_id' => 34,
            ),
            349 => 
            array (
                'id' => 719,
                'news_id' => 310,
                'cats_id' => 1,
            ),
            350 => 
            array (
                'id' => 720,
                'news_id' => 310,
                'cats_id' => 10,
            ),
            351 => 
            array (
                'id' => 721,
                'news_id' => 310,
                'cats_id' => 2,
            ),
            352 => 
            array (
                'id' => 722,
                'news_id' => 310,
                'cats_id' => 29,
            ),
            353 => 
            array (
                'id' => 723,
                'news_id' => 310,
                'cats_id' => 34,
            ),
            354 => 
            array (
                'id' => 724,
                'news_id' => 280,
                'cats_id' => 24,
            ),
            355 => 
            array (
                'id' => 729,
                'news_id' => 311,
                'cats_id' => 29,
            ),
            356 => 
            array (
                'id' => 730,
                'news_id' => 311,
                'cats_id' => 35,
            ),
            357 => 
            array (
                'id' => 731,
                'news_id' => 311,
                'cats_id' => 10,
            ),
            358 => 
            array (
                'id' => 732,
                'news_id' => 311,
                'cats_id' => 24,
            ),
            359 => 
            array (
                'id' => 733,
                'news_id' => 312,
                'cats_id' => 1,
            ),
            360 => 
            array (
                'id' => 734,
                'news_id' => 312,
                'cats_id' => 9,
            ),
            361 => 
            array (
                'id' => 735,
                'news_id' => 312,
                'cats_id' => 34,
            ),
            362 => 
            array (
                'id' => 736,
                'news_id' => 312,
                'cats_id' => 49,
            ),
            363 => 
            array (
                'id' => 740,
                'news_id' => 313,
                'cats_id' => 1,
            ),
            364 => 
            array (
                'id' => 741,
                'news_id' => 313,
                'cats_id' => 34,
            ),
            365 => 
            array (
                'id' => 742,
                'news_id' => 313,
                'cats_id' => 10,
            ),
            366 => 
            array (
                'id' => 749,
                'news_id' => 314,
                'cats_id' => 1,
            ),
            367 => 
            array (
                'id' => 750,
                'news_id' => 314,
                'cats_id' => 10,
            ),
            368 => 
            array (
                'id' => 761,
                'news_id' => 307,
                'cats_id' => 1,
            ),
            369 => 
            array (
                'id' => 762,
                'news_id' => 307,
                'cats_id' => 2,
            ),
            370 => 
            array (
                'id' => 763,
                'news_id' => 307,
                'cats_id' => 29,
            ),
            371 => 
            array (
                'id' => 764,
                'news_id' => 307,
                'cats_id' => 34,
            ),
            372 => 
            array (
                'id' => 765,
                'news_id' => 307,
                'cats_id' => 10,
            ),
            373 => 
            array (
                'id' => 766,
                'news_id' => 306,
                'cats_id' => 1,
            ),
            374 => 
            array (
                'id' => 767,
                'news_id' => 306,
                'cats_id' => 2,
            ),
            375 => 
            array (
                'id' => 768,
                'news_id' => 306,
                'cats_id' => 10,
            ),
            376 => 
            array (
                'id' => 769,
                'news_id' => 306,
                'cats_id' => 46,
            ),
            377 => 
            array (
                'id' => 770,
                'news_id' => 306,
                'cats_id' => 49,
            ),
            378 => 
            array (
                'id' => 771,
                'news_id' => 301,
                'cats_id' => 1,
            ),
            379 => 
            array (
                'id' => 772,
                'news_id' => 301,
                'cats_id' => 10,
            ),
            380 => 
            array (
                'id' => 773,
                'news_id' => 301,
                'cats_id' => 31,
            ),
            381 => 
            array (
                'id' => 774,
                'news_id' => 301,
                'cats_id' => 49,
            ),
            382 => 
            array (
                'id' => 775,
                'news_id' => 300,
                'cats_id' => 1,
            ),
            383 => 
            array (
                'id' => 776,
                'news_id' => 300,
                'cats_id' => 25,
            ),
            384 => 
            array (
                'id' => 777,
                'news_id' => 300,
                'cats_id' => 31,
            ),
            385 => 
            array (
                'id' => 778,
                'news_id' => 295,
                'cats_id' => 1,
            ),
            386 => 
            array (
                'id' => 779,
                'news_id' => 295,
                'cats_id' => 31,
            ),
            387 => 
            array (
                'id' => 780,
                'news_id' => 295,
                'cats_id' => 45,
            ),
            388 => 
            array (
                'id' => 781,
                'news_id' => 293,
                'cats_id' => 31,
            ),
            389 => 
            array (
                'id' => 782,
                'news_id' => 291,
                'cats_id' => 31,
            ),
            390 => 
            array (
                'id' => 783,
                'news_id' => 291,
                'cats_id' => 43,
            ),
            391 => 
            array (
                'id' => 784,
                'news_id' => 290,
                'cats_id' => 31,
            ),
            392 => 
            array (
                'id' => 785,
                'news_id' => 290,
                'cats_id' => 43,
            ),
            393 => 
            array (
                'id' => 786,
                'news_id' => 287,
                'cats_id' => 31,
            ),
            394 => 
            array (
                'id' => 787,
                'news_id' => 287,
                'cats_id' => 43,
            ),
            395 => 
            array (
                'id' => 790,
                'news_id' => 216,
                'cats_id' => 1,
            ),
            396 => 
            array (
                'id' => 791,
                'news_id' => 216,
                'cats_id' => 2,
            ),
            397 => 
            array (
                'id' => 792,
                'news_id' => 216,
                'cats_id' => 3,
            ),
            398 => 
            array (
                'id' => 793,
                'news_id' => 216,
                'cats_id' => 5,
            ),
            399 => 
            array (
                'id' => 794,
                'news_id' => 216,
                'cats_id' => 6,
            ),
            400 => 
            array (
                'id' => 795,
                'news_id' => 216,
                'cats_id' => 7,
            ),
            401 => 
            array (
                'id' => 796,
                'news_id' => 216,
                'cats_id' => 10,
            ),
            402 => 
            array (
                'id' => 797,
                'news_id' => 216,
                'cats_id' => 24,
            ),
            403 => 
            array (
                'id' => 798,
                'news_id' => 217,
                'cats_id' => 1,
            ),
            404 => 
            array (
                'id' => 799,
                'news_id' => 217,
                'cats_id' => 2,
            ),
            405 => 
            array (
                'id' => 800,
                'news_id' => 217,
                'cats_id' => 10,
            ),
            406 => 
            array (
                'id' => 801,
                'news_id' => 217,
                'cats_id' => 26,
            ),
            407 => 
            array (
                'id' => 806,
                'news_id' => 218,
                'cats_id' => 1,
            ),
            408 => 
            array (
                'id' => 807,
                'news_id' => 218,
                'cats_id' => 2,
            ),
            409 => 
            array (
                'id' => 808,
                'news_id' => 218,
                'cats_id' => 10,
            ),
            410 => 
            array (
                'id' => 809,
                'news_id' => 218,
                'cats_id' => 30,
            ),
            411 => 
            array (
                'id' => 810,
                'news_id' => 220,
                'cats_id' => 1,
            ),
            412 => 
            array (
                'id' => 811,
                'news_id' => 220,
                'cats_id' => 2,
            ),
            413 => 
            array (
                'id' => 812,
                'news_id' => 220,
                'cats_id' => 29,
            ),
            414 => 
            array (
                'id' => 813,
                'news_id' => 220,
                'cats_id' => 10,
            ),
            415 => 
            array (
                'id' => 814,
                'news_id' => 220,
                'cats_id' => 24,
            ),
            416 => 
            array (
                'id' => 815,
                'news_id' => 221,
                'cats_id' => 1,
            ),
            417 => 
            array (
                'id' => 816,
                'news_id' => 221,
                'cats_id' => 2,
            ),
            418 => 
            array (
                'id' => 817,
                'news_id' => 221,
                'cats_id' => 29,
            ),
            419 => 
            array (
                'id' => 818,
                'news_id' => 221,
                'cats_id' => 10,
            ),
            420 => 
            array (
                'id' => 819,
                'news_id' => 232,
                'cats_id' => 1,
            ),
            421 => 
            array (
                'id' => 820,
                'news_id' => 232,
                'cats_id' => 6,
            ),
            422 => 
            array (
                'id' => 821,
                'news_id' => 232,
                'cats_id' => 10,
            ),
            423 => 
            array (
                'id' => 822,
                'news_id' => 232,
                'cats_id' => 25,
            ),
            424 => 
            array (
                'id' => 827,
                'news_id' => 235,
                'cats_id' => 1,
            ),
            425 => 
            array (
                'id' => 828,
                'news_id' => 235,
                'cats_id' => 6,
            ),
            426 => 
            array (
                'id' => 829,
                'news_id' => 235,
                'cats_id' => 10,
            ),
            427 => 
            array (
                'id' => 830,
                'news_id' => 235,
                'cats_id' => 25,
            ),
            428 => 
            array (
                'id' => 831,
                'news_id' => 237,
                'cats_id' => 1,
            ),
            429 => 
            array (
                'id' => 832,
                'news_id' => 237,
                'cats_id' => 2,
            ),
            430 => 
            array (
                'id' => 833,
                'news_id' => 237,
                'cats_id' => 10,
            ),
            431 => 
            array (
                'id' => 834,
                'news_id' => 237,
                'cats_id' => 26,
            ),
            432 => 
            array (
                'id' => 839,
                'news_id' => 239,
                'cats_id' => 1,
            ),
            433 => 
            array (
                'id' => 840,
                'news_id' => 239,
                'cats_id' => 2,
            ),
            434 => 
            array (
                'id' => 841,
                'news_id' => 239,
                'cats_id' => 10,
            ),
            435 => 
            array (
                'id' => 842,
                'news_id' => 239,
                'cats_id' => 25,
            ),
            436 => 
            array (
                'id' => 843,
                'news_id' => 239,
                'cats_id' => 27,
            ),
            437 => 
            array (
                'id' => 844,
                'news_id' => 240,
                'cats_id' => 1,
            ),
            438 => 
            array (
                'id' => 845,
                'news_id' => 240,
                'cats_id' => 2,
            ),
            439 => 
            array (
                'id' => 846,
                'news_id' => 240,
                'cats_id' => 25,
            ),
            440 => 
            array (
                'id' => 847,
                'news_id' => 240,
                'cats_id' => 28,
            ),
            441 => 
            array (
                'id' => 848,
                'news_id' => 241,
                'cats_id' => 1,
            ),
            442 => 
            array (
                'id' => 849,
                'news_id' => 241,
                'cats_id' => 10,
            ),
            443 => 
            array (
                'id' => 850,
                'news_id' => 241,
                'cats_id' => 25,
            ),
            444 => 
            array (
                'id' => 851,
                'news_id' => 243,
                'cats_id' => 1,
            ),
            445 => 
            array (
                'id' => 852,
                'news_id' => 243,
                'cats_id' => 10,
            ),
            446 => 
            array (
                'id' => 853,
                'news_id' => 243,
                'cats_id' => 25,
            ),
            447 => 
            array (
                'id' => 854,
                'news_id' => 242,
                'cats_id' => 1,
            ),
            448 => 
            array (
                'id' => 855,
                'news_id' => 242,
                'cats_id' => 10,
            ),
            449 => 
            array (
                'id' => 856,
                'news_id' => 242,
                'cats_id' => 25,
            ),
            450 => 
            array (
                'id' => 857,
                'news_id' => 244,
                'cats_id' => 1,
            ),
            451 => 
            array (
                'id' => 858,
                'news_id' => 244,
                'cats_id' => 2,
            ),
            452 => 
            array (
                'id' => 859,
                'news_id' => 244,
                'cats_id' => 3,
            ),
            453 => 
            array (
                'id' => 860,
                'news_id' => 244,
                'cats_id' => 9,
            ),
            454 => 
            array (
                'id' => 861,
                'news_id' => 246,
                'cats_id' => 1,
            ),
            455 => 
            array (
                'id' => 862,
                'news_id' => 246,
                'cats_id' => 2,
            ),
            456 => 
            array (
                'id' => 863,
                'news_id' => 246,
                'cats_id' => 10,
            ),
            457 => 
            array (
                'id' => 864,
                'news_id' => 246,
                'cats_id' => 24,
            ),
            458 => 
            array (
                'id' => 865,
                'news_id' => 248,
                'cats_id' => 1,
            ),
            459 => 
            array (
                'id' => 866,
                'news_id' => 248,
                'cats_id' => 2,
            ),
            460 => 
            array (
                'id' => 867,
                'news_id' => 248,
                'cats_id' => 10,
            ),
            461 => 
            array (
                'id' => 868,
                'news_id' => 249,
                'cats_id' => 1,
            ),
            462 => 
            array (
                'id' => 869,
                'news_id' => 249,
                'cats_id' => 29,
            ),
            463 => 
            array (
                'id' => 870,
                'news_id' => 249,
                'cats_id' => 10,
            ),
            464 => 
            array (
                'id' => 871,
                'news_id' => 250,
                'cats_id' => 1,
            ),
            465 => 
            array (
                'id' => 872,
                'news_id' => 250,
                'cats_id' => 10,
            ),
            466 => 
            array (
                'id' => 873,
                'news_id' => 252,
                'cats_id' => 1,
            ),
            467 => 
            array (
                'id' => 874,
                'news_id' => 252,
                'cats_id' => 10,
            ),
            468 => 
            array (
                'id' => 875,
                'news_id' => 252,
                'cats_id' => 24,
            ),
            469 => 
            array (
                'id' => 876,
                'news_id' => 253,
                'cats_id' => 1,
            ),
            470 => 
            array (
                'id' => 877,
                'news_id' => 253,
                'cats_id' => 10,
            ),
            471 => 
            array (
                'id' => 878,
                'news_id' => 253,
                'cats_id' => 24,
            ),
            472 => 
            array (
                'id' => 881,
                'news_id' => 281,
                'cats_id' => 31,
            ),
            473 => 
            array (
                'id' => 882,
                'news_id' => 281,
                'cats_id' => 37,
            ),
            474 => 
            array (
                'id' => 883,
                'news_id' => 284,
                'cats_id' => 31,
            ),
            475 => 
            array (
                'id' => 884,
                'news_id' => 284,
                'cats_id' => 37,
            ),
            476 => 
            array (
                'id' => 885,
                'news_id' => 285,
                'cats_id' => 31,
            ),
            477 => 
            array (
                'id' => 886,
                'news_id' => 285,
                'cats_id' => 37,
            ),
            478 => 
            array (
                'id' => 887,
                'news_id' => 286,
                'cats_id' => 31,
            ),
            479 => 
            array (
                'id' => 888,
                'news_id' => 286,
                'cats_id' => 43,
            ),
            480 => 
            array (
                'id' => 893,
                'news_id' => 189,
                'cats_id' => 1,
            ),
            481 => 
            array (
                'id' => 894,
                'news_id' => 189,
                'cats_id' => 2,
            ),
            482 => 
            array (
                'id' => 895,
                'news_id' => 189,
                'cats_id' => 6,
            ),
            483 => 
            array (
                'id' => 896,
                'news_id' => 189,
                'cats_id' => 10,
            ),
            484 => 
            array (
                'id' => 897,
                'news_id' => 191,
                'cats_id' => 1,
            ),
            485 => 
            array (
                'id' => 898,
                'news_id' => 191,
                'cats_id' => 2,
            ),
            486 => 
            array (
                'id' => 899,
                'news_id' => 191,
                'cats_id' => 6,
            ),
            487 => 
            array (
                'id' => 900,
                'news_id' => 191,
                'cats_id' => 10,
            ),
            488 => 
            array (
                'id' => 901,
                'news_id' => 192,
                'cats_id' => 1,
            ),
            489 => 
            array (
                'id' => 902,
                'news_id' => 192,
                'cats_id' => 2,
            ),
            490 => 
            array (
                'id' => 903,
                'news_id' => 192,
                'cats_id' => 9,
            ),
            491 => 
            array (
                'id' => 904,
                'news_id' => 192,
                'cats_id' => 10,
            ),
            492 => 
            array (
                'id' => 905,
                'news_id' => 193,
                'cats_id' => 1,
            ),
            493 => 
            array (
                'id' => 906,
                'news_id' => 193,
                'cats_id' => 2,
            ),
            494 => 
            array (
                'id' => 907,
                'news_id' => 193,
                'cats_id' => 10,
            ),
            495 => 
            array (
                'id' => 908,
                'news_id' => 194,
                'cats_id' => 1,
            ),
            496 => 
            array (
                'id' => 909,
                'news_id' => 194,
                'cats_id' => 10,
            ),
            497 => 
            array (
                'id' => 910,
                'news_id' => 197,
                'cats_id' => 1,
            ),
            498 => 
            array (
                'id' => 911,
                'news_id' => 197,
                'cats_id' => 2,
            ),
            499 => 
            array (
                'id' => 912,
                'news_id' => 197,
                'cats_id' => 3,
            ),
        ));
        \DB::table('categorynewsrelationship')->insert(array (
            0 => 
            array (
                'id' => 913,
                'news_id' => 197,
                'cats_id' => 5,
            ),
            1 => 
            array (
                'id' => 914,
                'news_id' => 197,
                'cats_id' => 6,
            ),
            2 => 
            array (
                'id' => 915,
                'news_id' => 197,
                'cats_id' => 7,
            ),
            3 => 
            array (
                'id' => 916,
                'news_id' => 197,
                'cats_id' => 9,
            ),
            4 => 
            array (
                'id' => 917,
                'news_id' => 197,
                'cats_id' => 10,
            ),
            5 => 
            array (
                'id' => 918,
                'news_id' => 199,
                'cats_id' => 1,
            ),
            6 => 
            array (
                'id' => 919,
                'news_id' => 199,
                'cats_id' => 2,
            ),
            7 => 
            array (
                'id' => 920,
                'news_id' => 199,
                'cats_id' => 3,
            ),
            8 => 
            array (
                'id' => 921,
                'news_id' => 199,
                'cats_id' => 5,
            ),
            9 => 
            array (
                'id' => 922,
                'news_id' => 199,
                'cats_id' => 6,
            ),
            10 => 
            array (
                'id' => 923,
                'news_id' => 199,
                'cats_id' => 7,
            ),
            11 => 
            array (
                'id' => 924,
                'news_id' => 199,
                'cats_id' => 9,
            ),
            12 => 
            array (
                'id' => 925,
                'news_id' => 199,
                'cats_id' => 10,
            ),
            13 => 
            array (
                'id' => 933,
                'news_id' => 201,
                'cats_id' => 1,
            ),
            14 => 
            array (
                'id' => 934,
                'news_id' => 201,
                'cats_id' => 2,
            ),
            15 => 
            array (
                'id' => 935,
                'news_id' => 201,
                'cats_id' => 3,
            ),
            16 => 
            array (
                'id' => 936,
                'news_id' => 201,
                'cats_id' => 5,
            ),
            17 => 
            array (
                'id' => 937,
                'news_id' => 201,
                'cats_id' => 6,
            ),
            18 => 
            array (
                'id' => 938,
                'news_id' => 201,
                'cats_id' => 7,
            ),
            19 => 
            array (
                'id' => 939,
                'news_id' => 201,
                'cats_id' => 10,
            ),
            20 => 
            array (
                'id' => 940,
                'news_id' => 202,
                'cats_id' => 1,
            ),
            21 => 
            array (
                'id' => 941,
                'news_id' => 202,
                'cats_id' => 2,
            ),
            22 => 
            array (
                'id' => 942,
                'news_id' => 202,
                'cats_id' => 3,
            ),
            23 => 
            array (
                'id' => 943,
                'news_id' => 202,
                'cats_id' => 5,
            ),
            24 => 
            array (
                'id' => 944,
                'news_id' => 202,
                'cats_id' => 6,
            ),
            25 => 
            array (
                'id' => 945,
                'news_id' => 202,
                'cats_id' => 7,
            ),
            26 => 
            array (
                'id' => 946,
                'news_id' => 202,
                'cats_id' => 10,
            ),
            27 => 
            array (
                'id' => 947,
                'news_id' => 203,
                'cats_id' => 1,
            ),
            28 => 
            array (
                'id' => 948,
                'news_id' => 203,
                'cats_id' => 2,
            ),
            29 => 
            array (
                'id' => 949,
                'news_id' => 203,
                'cats_id' => 3,
            ),
            30 => 
            array (
                'id' => 950,
                'news_id' => 203,
                'cats_id' => 5,
            ),
            31 => 
            array (
                'id' => 951,
                'news_id' => 203,
                'cats_id' => 6,
            ),
            32 => 
            array (
                'id' => 952,
                'news_id' => 203,
                'cats_id' => 7,
            ),
            33 => 
            array (
                'id' => 953,
                'news_id' => 203,
                'cats_id' => 10,
            ),
            34 => 
            array (
                'id' => 954,
                'news_id' => 204,
                'cats_id' => 1,
            ),
            35 => 
            array (
                'id' => 955,
                'news_id' => 204,
                'cats_id' => 2,
            ),
            36 => 
            array (
                'id' => 956,
                'news_id' => 204,
                'cats_id' => 3,
            ),
            37 => 
            array (
                'id' => 957,
                'news_id' => 204,
                'cats_id' => 5,
            ),
            38 => 
            array (
                'id' => 958,
                'news_id' => 204,
                'cats_id' => 6,
            ),
            39 => 
            array (
                'id' => 959,
                'news_id' => 204,
                'cats_id' => 7,
            ),
            40 => 
            array (
                'id' => 960,
                'news_id' => 204,
                'cats_id' => 9,
            ),
            41 => 
            array (
                'id' => 961,
                'news_id' => 204,
                'cats_id' => 10,
            ),
            42 => 
            array (
                'id' => 962,
                'news_id' => 177,
                'cats_id' => 1,
            ),
            43 => 
            array (
                'id' => 963,
                'news_id' => 177,
                'cats_id' => 2,
            ),
            44 => 
            array (
                'id' => 964,
                'news_id' => 177,
                'cats_id' => 3,
            ),
            45 => 
            array (
                'id' => 965,
                'news_id' => 177,
                'cats_id' => 10,
            ),
            46 => 
            array (
                'id' => 966,
                'news_id' => 178,
                'cats_id' => 1,
            ),
            47 => 
            array (
                'id' => 967,
                'news_id' => 178,
                'cats_id' => 2,
            ),
            48 => 
            array (
                'id' => 968,
                'news_id' => 178,
                'cats_id' => 6,
            ),
            49 => 
            array (
                'id' => 969,
                'news_id' => 178,
                'cats_id' => 10,
            ),
            50 => 
            array (
                'id' => 991,
                'news_id' => 317,
                'cats_id' => 1,
            ),
            51 => 
            array (
                'id' => 992,
                'news_id' => 317,
                'cats_id' => 32,
            ),
            52 => 
            array (
                'id' => 993,
                'news_id' => 317,
                'cats_id' => 33,
            ),
            53 => 
            array (
                'id' => 1005,
                'news_id' => 315,
                'cats_id' => 1,
            ),
            54 => 
            array (
                'id' => 1006,
                'news_id' => 315,
                'cats_id' => 2,
            ),
            55 => 
            array (
                'id' => 1007,
                'news_id' => 315,
                'cats_id' => 10,
            ),
            56 => 
            array (
                'id' => 1008,
                'news_id' => 318,
                'cats_id' => 1,
            ),
            57 => 
            array (
                'id' => 1009,
                'news_id' => 318,
                'cats_id' => 24,
            ),
            58 => 
            array (
                'id' => 1019,
                'news_id' => 320,
                'cats_id' => 2,
            ),
            59 => 
            array (
                'id' => 1020,
                'news_id' => 320,
                'cats_id' => 49,
            ),
            60 => 
            array (
                'id' => 1024,
                'news_id' => 319,
                'cats_id' => 1,
            ),
            61 => 
            array (
                'id' => 1025,
                'news_id' => 319,
                'cats_id' => 35,
            ),
            62 => 
            array (
                'id' => 1027,
                'news_id' => 321,
                'cats_id' => 1,
            ),
            63 => 
            array (
                'id' => 1030,
                'news_id' => 322,
                'cats_id' => 1,
            ),
            64 => 
            array (
                'id' => 1031,
                'news_id' => 322,
                'cats_id' => 25,
            ),
            65 => 
            array (
                'id' => 1034,
                'news_id' => 323,
                'cats_id' => 1,
            ),
            66 => 
            array (
                'id' => 1037,
                'news_id' => 324,
                'cats_id' => 2,
            ),
            67 => 
            array (
                'id' => 1038,
                'news_id' => 324,
                'cats_id' => 10,
            ),
            68 => 
            array (
                'id' => 1039,
                'news_id' => 238,
                'cats_id' => 1,
            ),
            69 => 
            array (
                'id' => 1040,
                'news_id' => 238,
                'cats_id' => 2,
            ),
            70 => 
            array (
                'id' => 1041,
                'news_id' => 238,
                'cats_id' => 6,
            ),
            71 => 
            array (
                'id' => 1042,
                'news_id' => 238,
                'cats_id' => 10,
            ),
            72 => 
            array (
                'id' => 1043,
                'news_id' => 238,
                'cats_id' => 31,
            ),
            73 => 
            array (
                'id' => 1062,
                'news_id' => 326,
                'cats_id' => 1,
            ),
            74 => 
            array (
                'id' => 1064,
                'news_id' => 327,
                'cats_id' => 1,
            ),
            75 => 
            array (
                'id' => 1072,
                'news_id' => 329,
                'cats_id' => 1,
            ),
            76 => 
            array (
                'id' => 1073,
                'news_id' => 329,
                'cats_id' => 2,
            ),
            77 => 
            array (
                'id' => 1089,
                'news_id' => 330,
                'cats_id' => 1,
            ),
            78 => 
            array (
                'id' => 1090,
                'news_id' => 330,
                'cats_id' => 2,
            ),
            79 => 
            array (
                'id' => 1091,
                'news_id' => 330,
                'cats_id' => 35,
            ),
            80 => 
            array (
                'id' => 1092,
                'news_id' => 325,
                'cats_id' => 1,
            ),
            81 => 
            array (
                'id' => 1093,
                'news_id' => 325,
                'cats_id' => 32,
            ),
            82 => 
            array (
                'id' => 1094,
                'news_id' => 325,
                'cats_id' => 13,
            ),
            83 => 
            array (
                'id' => 1095,
                'news_id' => 325,
                'cats_id' => 25,
            ),
            84 => 
            array (
                'id' => 1096,
                'news_id' => 325,
                'cats_id' => 31,
            ),
            85 => 
            array (
                'id' => 1097,
                'news_id' => 328,
                'cats_id' => 1,
            ),
            86 => 
            array (
                'id' => 1098,
                'news_id' => 328,
                'cats_id' => 9,
            ),
            87 => 
            array (
                'id' => 1109,
                'news_id' => 7,
                'cats_id' => 1,
            ),
            88 => 
            array (
                'id' => 1110,
                'news_id' => 7,
                'cats_id' => 2,
            ),
            89 => 
            array (
                'id' => 1111,
                'news_id' => 3,
                'cats_id' => 1,
            ),
            90 => 
            array (
                'id' => 1112,
                'news_id' => 3,
                'cats_id' => 2,
            ),
            91 => 
            array (
                'id' => 1115,
                'news_id' => 5,
                'cats_id' => 1,
            ),
            92 => 
            array (
                'id' => 1116,
                'news_id' => 5,
                'cats_id' => 2,
            ),
            93 => 
            array (
                'id' => 1117,
                'news_id' => 6,
                'cats_id' => 1,
            ),
            94 => 
            array (
                'id' => 1118,
                'news_id' => 6,
                'cats_id' => 2,
            ),
            95 => 
            array (
                'id' => 1119,
                'news_id' => 4,
                'cats_id' => 1,
            ),
            96 => 
            array (
                'id' => 1120,
                'news_id' => 4,
                'cats_id' => 2,
            ),
        ));
        
        
    }
}