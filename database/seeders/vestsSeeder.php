<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class vestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vests')->insert([
            [
            'naslov' => "Muškarci se sada identifikuju kao žene u teretani zbog povoljnije mesečne članarine!",
            'slug' => "vest-12082024-1",
            'datum' => now()->toDateString(),
            'sazetak' => "Da li mislite da je fer da žene imaju jeftiniji pristup teretani? U poslednjih par dana se pojavio izrečit skok u broju muškaraca koji bi rekao da nije i time nastajanje komplesknog problema koji se dotiče pitanja rodnog identiteta i antidiskriminacionih politika.",
            'sadrzaj' => "'Stalno krše zakon o zabrani diskriminacije!', govori jedan od mladića. 'Prvo diskriminišu muškarce s većim cenama, a onda diskriminišu transrodne muškarce tako što ih ne priznaju kao žene. Sramota!' Kada smo pitali žene zašto misle da njihove članarine treba biti jeftinije, dobili smo razne odgovore, ali većina žena se složila da su one manje zahtevne u teretani u poređenju s muškarcima. Provode tamo znatno manje vremena i zauzimaju manje opreme i tegova, pa samim tim prave manju gužvu. Muškarci koji treniraju su se složili da, iako većina žena zaista tamo ne zauzima istu količinu tegova kao oni, podjednako prave gužvu zauzimajući puno prostora sa strunjačama i provodeći dugo vremena za mašinama bez deljenja. Čak i ako žene zaista zauzimaju manje prostora i prave manju gužvu, većina se slaže da cene ne bi trebalo da se menjaju po pretpostavci koliko će neko biti zahtevan, jer bi tada trebalo da cene budu jeftinije, na primer, za početnike i starije ljude koji će takođe potencijalno provoditi manje vremena tamo i koristiti manje opreme od iskusnijih članova. Kako god, ovaj problem deluje kao da ne može da se reši jednostavnom 'Ko je u pravu' raspravom. Istraženo je da je ovog meseca broj članarina opao za 40% u poređenju s prošlim mesecom, a čak 60% u poređenju s ovim istim mesecom prošle godine. Ne samo da teretanu napuštaju muškarci, već i žene! 'Ne mogu više da idem u ženski WC bez da ne naiđem na muškarca koji tera neki inat', govori jedan ženski član. 'Svaki put kada uđem u salu, osećam se kao da svi žele da me udave zbog stvari na koje ja nisam uticala', govori druga. Pored gubitka članova, postoje i pretnje pravnim akcijama zbog diskriminacije. Ono što je na početku izgledalo kao šala, sada se pretvara u problem, ali sve više izgleda kao da će njegovo rešenje ići u korist muških članova.",
            'image_thumbnail' => "https://www.bodybuilding.com/images/2021/june/janae-marie-kroc-is-always-in-training-1-700xh.jpg",
            'image_full' => "https://cdn.24.co.za/files/Cms/General/d/5912/b9e53df86f7049928cc4a6108d286ead.jpg",
            'kategorija_id' => 1,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
        ],[ 
            'naslov' => "Da li nova prodavnica proteinska pića ima veze sa nestancima pasa?",
            'slug' => "vest-13082024-1",
            'datum' => now()->toDateString(),
            'sazetak' => "Prodaja proteinskih pića je značajno napredovala proteklih godina, baš tako je napredovao i broj uličnih pasa. Stanovnici su krenuli da primećuju razliku u broju pasa lutalica, a postoji i teorija da je za to kriva nova prodavnica koja proizvodi proteinske napitke zvana WoofShakes.",
            'sadrzaj' => " Otvorena 18. aprila ove godine, prodavnica proteinskih napitaka 'WoofShakes' brzo je postala glavna tema u lokalnoj zajednici zbog svog popularnog proizvoda koji sadrži 70 grama proteina u boci od 0,5 litara, dok se istovremeno hvali niskom kalorijskom vrednošću. Međutim, s rastom popularnosti ove prodavnice, stanovnici su primetili dramatičan pad u broju uličnih pasa u gradu. Mnogi su počeli da povezuju nestanak pasa s otvaranjem 'WoofShakes', a teorija je da prodavnica možda ima nekakvu vezu sa nestankom ovih životinja. Pre nego što su se preselili u Smederevsku Palanku, 'WoofShakes' je bio prisutan u Velikoj Plani, gde je situacija bila slična - ulični psi su nestali nakon otvaranja i zatvaranja prodavnice. Iako glasine sugerišu da bi psi mogli biti povezani s proizvodima 'WoofShakes', predstavnici prodavnice odlučili su da se oglase kako bi razjasnili situaciju. 'Mi nemamo nikakve veze sa nestankom pasa; to je čista slučajnost. Naziv 'WoofShakes' je inspirisan idejom da će ljudi biti željni naših proizvoda kao psi, a ne zato što su proizvodi napravljeni od pasa,' izjavio je jedan od radnika. Kupci prodavnice su ignorisali glasine i naglasili da im je najvažnije to što su proizvodi ukusni, bogati proteinima i povoljni. 'Ne zanima nas da li su pravljeni od kučetine ili od banana. Ukusni su, imaju puno proteina i nisu skupi,' rekli su kupci. Iako još uvek nije potvrđeno da li konzumiranje napitaka iz 'WoofShakes' može štetiti zdravlju, stručnjaci savetuju oprez dok se glasine ne rasvetle. Problematika ostaje otvorena, a lokalna zajednica se i dalje bavi pitanjem da li je ova prodavnica na neki način povezana sa nestankom uličnih pasa. ",
            'image_thumbnail' => "https://img.freepik.com/premium-vector/muscular-cartoon-dog-with-protein-shake-illustration_770200-3141.jpg",
            'image_full' => "https://www.hepper.com/wp-content/uploads/2021/11/dog-with-freshly-squeezed-juice.jpg",
            'kategorija_id' => 2,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
        ],[
            'naslov' => "Hakovan bioskop u sred emotivoanja dečijeg filma! Roditelji žele novac nazad!",
            'slug' => "vest-13082024-2",
            'datum' => now()->toDateString(),
            'sazetak' => "Deca i njihovi roditelji ostavljeni u šoku nakon što se na projekcionom platnu pojavila strašna slika u sred emitovanja dečijeg filma 'U mojoj glavi 2'.",
            'sadrzaj' => "Danas, oko 18 časova, emitovan je dečiji film 'U mojoj glavi 2' u bioskopu u Smederevskoj Palanci. Karte su se vrlo brzo rasprodale, i čitav bioskop bio je preplavljen decom i njihovim roditeljima. Nešto što je počelo kao smešan film o malim ljudima koji upravljaju emocijama tinejdžerke u njenoj glavi pretvorilo se u horor kada je, nakon 45 minuta emitovanja, platno iznenada ugašeno i mrak je preplavio čitavu prostoriju. Svi su bili uvereni da je u pitanju samo privremeni kvar i da će se veseli animirani film uskoro ponovo pojaviti na ekranu, ali kada se platno ponovo uključilo, svi su bili zaprepašćeni. Strašni fiktivni lik poznat kao 'Jeff the Killer' pojavio se preko celog ekrana dok su zvuci vriskova izlazili iz zvučnika. Ceo bioskop je brzo preplavio teror dok su roditelji pokušavali da što brže izađu iz bioskopa sa svojom decom. Nijedno dete nije fizički povređeno, ali smo sigurni da će ovaj prizor ostaviti mentalne posledice na njih duži period. Radnici bioskopa su vratili novac svim posetiocima, ali roditelji su odlučili da podnesu tužbu protiv bioskopa. Radnici bioskopa su potvrdili da niko od njih nije učestvovao u incidentu i da se ne radi o nekoj bolesnoj šali već o nepoznatom hakeru. Policija trenutno obavlja istragu da bi pronašla osobu odgovornu za ovo delo.",
            'image_thumbnail' => "https://wp.scoopwhoop.com/wp-content/uploads/2016/06/5773d112fb778573224eb1b3_506526827.jpg",
            'image_full' => "https://i.ytimg.com/vi/ooXa1LO0K5U/sddefault.jpg",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,
        ],[
            'naslov' => "Otvoren novi lokal za druzenje i pomoć starijim ljudima!",
            'slug' => "vest-14082024-1",
            'datum' => now()->toDateString(),
            'sazetak' => "'Vremeplovac' je novi lokal koji je posvećen starijoj populaciji. U vremeplovcu će vas udariti nostalgija i osetićete se ponovo mladim. Kod nas se pušta tradicionalna muzika, konzumira tradicionalna hrana i piju samo najbolja pića.",
            'sadrzaj' => "Moderni kafići i restorani nisu toliko privlačni starijoj publici koliko su zanimljivi mlađim generacijama. Da li ste starija osoba i osećate se kao da ne znate gde da odete? Ako je odgovor da, onda je 'Vremeplovac' savršena destinacija za vas. 'Vremeplovac' je dizajniran da se svidi starijoj populaciji svojim starinskim izgledom i vedrim raspoloženjem. U 'Vremeplovcu' se pušta samo stara srpska muzika koja će vas vratiti u stare dane i naterati da đuskate, jedete samo pravu domaću hranu i pijete samo tradicionalna pića. Pored restorana, u 'Vremeplovcu' možete očekivati i mnoge dodatne usluge, kao što su fizioterapeuti koji će vam pomoći sa bolovima, lekari sa kojima se možete posavetovati i bašta u kojoj možete uživati u toplom đakuziju. Svake subote se održavaju zanimljivi izlasci na koje se možete prijaviti i tokom kojih ćete obići najlepša mesta Srbije koja interesuju stariju populaciju. Ukratko, 'Vremeplovac' je mesto gde možete provoditi svoje slobodno vreme, družiti se i osećati se ponovo mladim.",
            'image_thumbnail' => "https://st2.depositphotos.com/1594308/12211/i/450/depositphotos_122113342-stock-photo-friendly-seniors-holding-by-hands.jpg",
            'image_full' => "https://impeccabuild.com.au/wp-content/uploads/2020/08/Cafe-Theme-Ideas-Vintage-Cafe-Fitout-ImpeccaBuild-2-scaled.jpg",
            'kategorija_id' => 4,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
        ]]);  
    }
}
