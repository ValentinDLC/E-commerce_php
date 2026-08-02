<?php

namespace App\Support;

class Products
{
    public static function all(): array
    {
        return [
            ['slug'=>'casablanca-settat','num'=>'#01','name'=>'Casablanca-Settat','price'=>69,'color'=>'C1272D/FAF9F6','desc'=>"Maillot édition Casablanca-Settat. Coupe technique, tissu respirant, broderie du blason régional."],
            ['slug'=>'marrakech-safi','num'=>'#02','name'=>'Marrakech-Safi','price'=>69,'color'=>'006233/FAF9F6','desc'=>"Maillot édition Marrakech-Safi. Rouge ocre et vert forêt, hommage à la ville rouge."],
            ['slug'=>'fes-meknes','num'=>'#03','name'=>'Fès-Meknès','price'=>72,'color'=>'1A1A1A/D4AF37','desc'=>"Maillot édition Fès-Meknès. Noir et or, hommage à l'artisanat de la médina."],
            ['slug'=>'tanger-tetouan','num'=>'#04','name'=>'Tanger-Tétouan','price'=>69,'color'=>'8B1A1F/FAF9F6','desc'=>"Maillot édition Tanger-Tétouan. Détroit, deux mers, une identité."],
            ['slug'=>'rabat-sale','num'=>'#05','name'=>'Rabat-Salé','price'=>72,'color'=>'003D20/D4AF37','desc'=>"Maillot édition Rabat-Salé. Vert profond et or, capitale et héritage."],
            ['slug'=>'oujda-oriental','num'=>'#06','name'=>'Oujda-Oriental','price'=>69,'color'=>'C1272D/FAF9F6','desc'=>"Maillot édition Oujda-Oriental. Terre de passage, terre de caractère."],
            ['slug'=>'souss-massa','num'=>'#07','name'=>'Souss-Massa','price'=>69,'color'=>'006233/FAF9F6','desc'=>"Maillot édition Souss-Massa. Agadir et l'Atlantique, énergie pure."],
            ['slug'=>'beni-mellal-khenifra','num'=>'#08','name'=>'Béni Mellal-Khénifra','price'=>69,'color'=>'1A1A1A/D4AF37','desc'=>"Maillot édition Béni Mellal-Khénifra. Montagnes et plaines fertiles."],
            ['slug'=>'draa-tafilalet','num'=>'#09','name'=>'Drâa-Tafilalet','price'=>72,'color'=>'8B1A1F/FAF9F6','desc'=>"Maillot édition Drâa-Tafilalet. Portes du désert, terre d'oasis."],
            ['slug'=>'guelmim-oued-noun','num'=>'#10','name'=>'Guelmim-Oued Noun','price'=>69,'color'=>'003D20/D4AF37','desc'=>"Maillot édition Guelmim-Oued Noun. Porte du Sahara."],
            ['slug'=>'laayoune-sakia-el-hamra','num'=>'#11','name'=>'Laâyoune-Sakia El Hamra','price'=>69,'color'=>'C1272D/FAF9F6','desc'=>"Maillot édition Laâyoune-Sakia El Hamra. Sud marocain, fierté immense."],
            ['slug'=>'dakhla-oued-ed-dahab','num'=>'#12','name'=>'Dakhla-Oued Ed-Dahab','price'=>72,'color'=>'006233/FAF9F6','desc'=>"Maillot édition Dakhla-Oued Ed-Dahab. Océan et désert, extrême sud."],
        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $p) {
            if ($p['slug'] === $slug) return $p;
        }
        return null;
    }
}
