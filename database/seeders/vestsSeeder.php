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
            'slug' => "teretana-muskarci-postaju-zene",
            'datum' => now()->toDateString(),
            'sazetak' => "Da li mislite da je fer da žene imaju jeftiniji pristup teretani? U poslednjih par dana se pojavio izrečit skok u broju muškaraca koji bi rekao da nije i time nastajanje komplesknog problema koji se dotiče pitanja rodnog identiteta i antidiskriminacionih politika.",
            'sadrzaj' => "<p><em>'Stalno krše zakon o zabrani diskriminacije!'</em>, govori jedan od mladića. <em>'Prvo diskriminišu muškarce s većim cenama, a onda diskriminišu transrodne muškarce tako što ih ne priznaju kao žene. Sramota!'</em></p>
                        <p>Kada smo pitali žene zašto misle da njihove članarine treba biti jeftinije, dobili smo razne odgovore, ali većina žena se složila da su one **manje zahtevne** u teretani u poređenju s muškarcima. Provode tamo znatno **manje vremena** i zauzimaju manje opreme i tegova, pa samim tim prave **manju gužvu**.</p>
                        <p>Muškarci koji treniraju su se složili da, iako većina žena zaista tamo ne zauzima istu količinu tegova kao oni, podjednako prave gužvu zauzimajući puno prostora sa strunjačama i provodeći dugo vremena za mašinama bez deljenja. Čak i ako žene zaista zauzimaju manje prostora i prave manju gužvu, većina se slaže da cene ne bi trebalo da se menjaju po pretpostavci koliko će neko biti zahtevan, jer bi tada trebalo da cene budu jeftinije, na primer, za početnike i starije ljude koji će takođe potencijalno provoditi manje vremena tamo i koristiti manje opreme od iskusnijih članova.</p>
                        <p>Kako god, ovaj problem deluje kao da ne može da se reši jednostavnom <em>'Ko je u pravu'</em> raspravom. Istraženo je da je ovog meseca broj članarina opao za **40%** u poređenju s prošlim mesecom, a čak **60%** u poređenju s ovim istim mesecom prošle godine. Ne samo da teretanu napuštaju muškarci, već i žene!</p>
                        <p><em>'Ne mogu više da idem u ženski WC bez da ne naiđem na muškarca koji tera neki inat'</em>, govori jedan ženski član. <em>'Svaki put kada uđem u salu, osećam se kao da svi žele da me udave zbog stvari na koje ja nisam uticala'</em>, govori druga.</p>
                        <p>Pored gubitka članova, postoje i pretnje pravnim akcijama zbog diskriminacije. Ono što je na početku izgledalo kao šala, sada se pretvara u problem, ali sve više izgleda kao da će njegovo rešenje ići u korist muških članova.</p>",
            'image_thumbnail' => "https://www.bodybuilding.com/images/2021/june/janae-marie-kroc-is-always-in-training-1-700xh.jpg",
            'image_full' => "https://cdn.24.co.za/files/Cms/General/d/5912/b9e53df86f7049928cc4a6108d286ead.jpg",
            'kategorija_id' => 1,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
        ],[ 
            'naslov' => "Da li nova prodavnica proteinska pića ima veze sa nestancima pasa?",
            'slug' => "psi-postaju-proteini",
            'datum' => now()->toDateString(),
            'sazetak' => "Prodaja proteinskih pića je značajno napredovala proteklih godina, baš tako je napredovao i broj uličnih pasa. Stanovnici su krenuli da primećuju razliku u broju pasa lutalica, a postoji i teorija da je za to kriva nova prodavnica koja proizvodi proteinske napitke zvana WoofShakes.",
            'sadrzaj' => "<p>Otvorena 18. aprila ove godine, prodavnica proteinskih napitaka <em>'WoofShakes'</em> brzo je postala glavna tema u lokalnoj zajednici zbog svog popularnog proizvoda koji sadrži **70 grama proteina** u boci od **0,5 litara**, dok se istovremeno hvali **niskom kalorijskom vrednošću**.</p>
                        <p>Međutim, s rastom popularnosti ove prodavnice, stanovnici su primetili **dramatičan pad** u broju uličnih pasa u gradu. Mnogi su počeli da povezuju nestanak pasa s otvaranjem <em>'WoofShakes'</em>, a teorija je da prodavnica možda ima nekakvu vezu sa nestankom ovih životinja.</p>
                        <p>Pre nego što su se preselili u Smederevsku Palanku, <em>'WoofShakes'</em> je bio prisutan u Velikoj Plani, gde je situacija bila slična - **ulični psi** su nestali nakon otvaranja i zatvaranja prodavnice.</p>
                        <p>Iako glasine sugerišu da bi psi mogli biti povezani s proizvodima <em>'WoofShakes'</em>, predstavnici prodavnice odlučili su da se oglase kako bi razjasnili situaciju. <em>'Mi nemamo nikakve veze sa nestankom pasa; to je čista slučajnost. Naziv 'WoofShakes' je inspirisan idejom da će ljudi biti željni naših proizvoda kao psi, a ne zato što su proizvodi napravljeni od pasa,'</em> izjavio je jedan od radnika.</p>
                        <p>Kupci prodavnice su ignorisali glasine i naglasili da im je najvažnije to što su proizvodi **ukusni**, **bogati proteinima** i **povoljni**. <em>'Ne zanima nas da li su pravljeni od kučetine ili od banana. Ukusni su, imaju puno proteina i nisu skupi,'</em> rekli su kupci.</p>
                        <p>Iako još uvek nije potvrđeno da li konzumiranje napitaka iz <em>'WoofShakes'</em> može štetiti zdravlju, stručnjaci savetuju **oprez** dok se glasine ne rasvetle. Problematika ostaje otvorena, a lokalna zajednica se i dalje bavi pitanjem da li je ova prodavnica na neki način povezana sa nestankom uličnih pasa.</p>",
            'image_thumbnail' => "https://img.freepik.com/premium-vector/muscular-cartoon-dog-with-protein-shake-illustration_770200-3141.jpg",
            'image_full' => "https://www.hepper.com/wp-content/uploads/2021/11/dog-with-freshly-squeezed-juice.jpg",
            'kategorija_id' => 2,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
        ],[
            'naslov' => "Hakovan bioskop u sred emotivoanja dečijeg filma! Roditelji žele novac nazad!",
            'slug' => "jumpscare-bioskop",
            'datum' => now()->toDateString(),
            'sazetak' => "Deca i njihovi roditelji ostavljeni u šoku nakon što se na projekcionom platnu pojavila strašna slika u sred emitovanja dečijeg filma 'U mojoj glavi 2'.",
            'sadrzaj' => "<p>Danas, oko **18 časova**, emitovan je dečiji film <em>'U mojoj glavi 2'</em> u bioskopu u Smederevskoj Palanci. Karte su se vrlo brzo rasprodale, i čitav bioskop bio je preplavljen decom i njihovim roditeljima.</p>
                        <p>Nešto što je počelo kao smešan film o malim ljudima koji upravljaju emocijama tinejdžerke u njenoj glavi pretvorilo se u horor kada je, nakon **45 minuta** emitovanja, platno iznenada ugašeno i mrak je preplavio čitavu prostoriju.</p>
                        <p>Svi su bili uvereni da je u pitanju samo privremeni kvar i da će se veseli animirani film uskoro ponovo pojaviti na ekranu, ali kada se platno ponovo uključilo, svi su bili zaprepašćeni. Strašni fiktivni lik poznat kao <em>'Jeff the Killer'</em> pojavio se preko celog ekrana dok su zvuci vriskova izlazili iz zvučnika.</p>
                        <p>Ceo bioskop je brzo preplavio **teror** dok su roditelji pokušavali da što brže izađu iz bioskopa sa svojom decom. Nijedno dete nije fizički povređeno, ali smo sigurni da će ovaj prizor ostaviti **mentalne posledice** na njih duži period.</p>
                        <p>Radnici bioskopa su vratili novac svim posetiocima, ali roditelji su odlučili da podnesu **tužbu** protiv bioskopa. Radnici bioskopa su potvrdili da niko od njih nije učestvovao u incidentu i da se ne radi o nekoj bolesnoj šali već o **nepoznatom hakeru**. Policija trenutno obavlja **istragu** da bi pronašla osobu odgovornu za ovo delo.</p>",
            'image_thumbnail' => "https://wp.scoopwhoop.com/wp-content/uploads/2016/06/5773d112fb778573224eb1b3_506526827.jpg",
            'image_full' => "https://i.ytimg.com/vi/ooXa1LO0K5U/sddefault.jpg",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,
        ],[
            'naslov' => "Otvoren novi lokal za druzenje i pomoć starijim ljudima!",
            'slug' => "lokal-za-stare",
            'datum' => now()->toDateString(),
            'sazetak' => "'Vremeplovac' je novi lokal koji je posvećen starijoj populaciji. U vremeplovcu će vas udariti nostalgija i osetićete se ponovo mladim. Kod nas se pušta tradicionalna muzika, konzumira tradicionalna hrana i piju samo najbolja pića.",
            'sadrzaj' => "<p>Moderni kafići i restorani nisu toliko privlačni starijoj publici koliko su zanimljivi mlađim generacijama. Da li ste starija osoba i osećate se kao da ne znate gde da odete? Ako je odgovor da, onda je <em>'Vremeplovac'</em> savršena destinacija za vas.</p>
                        <p><em>'Vremeplovac'</em> je dizajniran da se svidi starijoj populaciji svojim **starinskim izgledom** i **vedrim raspoloženjem**. U <em>'Vremeplovcu'</em> se pušta samo **stara srpska muzika** koja će vas vratiti u stare dane i naterati da đuskate, jedete samo **pravu domaću hranu** i pijete samo **tradicionalna pića**.</p>
                        <p>Pored restorana, u <em>'Vremeplovcu'</em> možete očekivati i mnoge dodatne usluge, kao što su **fizioterapeuti** koji će vam pomoći sa bolovima, **lekari** sa kojima se možete posavetovati i **bašta** u kojoj možete uživati u toplom **đakuziju**.</p>
                        <p>Svake subote se održavaju **zanimljivi izlasci** na koje se možete prijaviti i tokom kojih ćete obići **najlepša mesta Srbije** koja interesuju stariju populaciju.</p>
                        <p>Ukratko, <em>'Vremeplovac'</em> je mesto gde možete provoditi svoje slobodno vreme, družiti se i osećati se ponovo mladim.</p>",
            'image_thumbnail' => "https://st2.depositphotos.com/1594308/12211/i/450/depositphotos_122113342-stock-photo-friendly-seniors-holding-by-hands.jpg",
            'image_full' => "https://impeccabuild.com.au/wp-content/uploads/2020/08/Cafe-Theme-Ideas-Vintage-Cafe-Fitout-ImpeccaBuild-2-scaled.jpg",
            'kategorija_id' => 4,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
        ],[
            'naslov' => "Takmičanje u skupljanju smeća! ",
            'slug' => "ocisti-grad", 
            'datum' => now()->toDateString(),
            'sazetak' => "Opština Smederevske Palanke organizuje takmičanju u skupljanju smeća sa ulica. Volunteri se takmiče u timovima i pobednički tim koji skupi najviše smeća osvaja nagradu.",
            'sadrzaj' => "<p><strong>28.08.2024.</strong> će po prvi put biti održano takmičenje <strong>'Očisti Grad'</strong> u Smederevskoj Palanci. <strong>Građani</strong> i svi ostali zainteresovani koji žele da učestvuju u ovoj lepoj i humanitarnoj igri mogu se prijaviti do <strong>26.08.</strong></p>
                        <p>Okupljanje ekipa koje se sastoji od maksimalno 4 ljudi obaviće se u samom centru grada kod fontane, gde će učesnici biti upoznati sa pravilima. Svaki tim biće opremljen sa svime što će im biti potrebno da efikasno skupe što više smeća. Kada napune torbe, moraju se vratiti u centar grada i baciti svo prikupljeno smeće u <strong>kontejnere</strong>.</p>
                        <p>Svaki tim moći će da baca smeće samo u svoje kontejnere, koji će biti obeleženi rednim brojem njihovog tima. Pre pražnjenja smeća, nadglednici će brzinski pregledati vašu prikupljenu masu radi provere da li je zaista sve samo smeće. Kada ispraznite svoje kese, možete nastaviti svoju potragu, ali imajte na umu da sve što prikupite treba da bude isključivo <strong>ulično smeće</strong> i da nije dozvoljeno vaditi smeće iz kanti ili iz vaših domova.</p>
                        <p>Radi prevencije kršenja pravila, <strong>đubretari</strong> će pokupiti svo smeće iz uličnih kontejnera i kanta tokom noći i pred samim takmičenjem tako da će svo nađeno smeće zaista biti samo ono koje zagađuje grad.</p>
                        <p>Takmičenje će trajati od <strong>8:00 do 17:00</strong>, sa pauzom od <strong>12:00 do 13:00</strong> tokom koje će svi takmičari uživati u besplatnoj hrani i piću. U <strong>18:00</strong> biće proglašeni pobednici i dodeljene nagrade. Svima je dozvoljen pristup posmatranju takmičenja, ali je strogo zabranjeno pomagati nekom timu ako niste prijavljeni kandidat.</p>
                        <p>Cilj ovog takmičenja je da se ljudi druže dok rade nešto dobro za svoje okruženje. Ukoliko imate malo slobodnog vremena i želite da pomognete da vaš grad bude čistiji, prijavite se da učestvujete.</p>",
            'image_thumbnail' => "https://media.istockphoto.com/id/127825118/photo/people-cleaning-up-litter-on-grass.jpg?s=612x612&w=0&k=20&c=NErcXJmnVXJClBZ19NTFzrbuQwnk4l99evhXwebAiZs=",
            'image_full' => "https://img.freepik.com/premium-photo/recycle-waste-litter-rubbish-garbage-trash-junk-clean-training-nature-cleaning-volunteer-ecology-green-conceptenvironment-plastic-pollution_1212-7586.jpg",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,
        ],[
            'naslov' => "Znakotron je napravio novi najveći napad! Podli buntovnik ponovo prkosi saobraćaju.",
            'slug' => "znakotron-1",
            'datum' => now()->toDateString(),
            'sazetak' => "Poznati neprijatelj saobraćaja, serijski lopurda uličnih znakov, poznat kao Znakotron je ponovo napravio kriminalno delo, veće od svih prethodnih, ali ovaj put oktriva motive iza svojih dela!",
            'sadrzaj' => "<p><em>'Tinejdžeri rade te stvari, ne moramo mi ništa da radimo, kazniće ih roditelji',</em> policija je mislila kada je prvi put nestao <strong>rdjavi</strong> ulični znak u blizini kiseljaka. Taj znak je bio dovoljno <strong>rdjav</strong> i star da vozačima nije bilo ni prepoznatljivo šta je signalirao. Ljudi su se složili da osoba koja ga je ukrala samo učinila uslugu saobraćaju, međutim to je bio samo početak ovog <strong>misterioznog</strong> stranca.</p>
                        <p>Brzo nakon nestanka prvog znaka, krenuli su da nestaju i drugi ulični znakovi, ovaj put i oni koji su bili funkcionalni i potrebni vozačima. Osoba koja je krala znakove je za sobom ostavljala grafite sa natpisom <strong>'ZNAKOTRON JE BIO OVDE'</strong>. Kada je policija pokušala da pristupi uličnim kamerama, bila je šokirana otkrićem da ova nova ličnost nije nekakav amater, već <strong>profesionalac</strong>. Svi sačuvani video zapisi kamera su bili nedostupni i izbrisani, dok komšiluk i ljudi u prolazu nisu ništa zapazili.</p>
                        <p>Vrlo brzo, Znakotron je postao <strong>legenda</strong> grada. Svi su želeli da saznaju ko je on, zašto baš krade ulične znakove i kako ga još niko nije provalio. Sa tolikom popularnošću dobio je i svoje fanove koji su želeli da budu kao i on. Deca širom grada su krenula da kradu ulične znakove i vandalizuju grad kao i on. Neki su se pretvarali da jesu Znakotron dok su drugi pokušavali da kreiraju svoju ličnost sa drugim imenom.</p>
                        <p>Znakotronu se nisu svideli <strong>imitatori</strong> i <strong>kompeticija</strong>, pa je otkrio identitet od svih ljudi koji su pokušavali da igraju njegovu igru i poslao anonimno policiji sa porukom <strong>'JA SAM JEDAN, JA SAM NEZAMENJIV, JA SAM DEMON SAOBRAĆAJA'</strong>. Svi ljudi koji su pokušali da budu kao Znakotron su primili posledice, osim samog Znakotrona. Sada su se svi plašili ovog čoveka. Niko nije znao šta im može uraditi. Policija je davala sve od sebe, ali izgledalo je kao da je beznadežno.</p>
                        <p>Znakotron nije mogao biti zaustavljen, a jučerašnji dan to samo još više potvrđuje. U periodu između ponoći i 4 ujutru ukradeni su svi semafori kod raskrsnice ispred maksija. Ceo svet je u potpunoj konfuziji! Kako je neko mogao da ukrade 10 semafora u jednoj noći na glavnoj ulici i da ga niko ne uhvati niti primeti?!</p>
                        <p>Na mestu zločina, Znakotron je ostavio poruku u kojoj upozorava svet da je ovo samo početak i da neće da prestane sa njegovim zločinom dok ljudi ne prestanu da manje voze svoja kola i ne krenu više da pešače i koriste gradski prevoz. Kada je ova poruka bila objavljena, reakcije ljudi su bile masivno podeljene. Neki vide Znakotrona kao samozvanog pravdoljubca koji se na kreativni način bori da postigne nešto dobro, dok ga ostali vide kao sebičnog <strong>manijaka</strong> koji ne razume koliko je transport automobilom bitan ljudima.</p>
                        <p>Ono što je sigurno, jeste da je Znakotronov identitet još uvek nepoznat i da on neće stati, ono što nije sigurno je to koliko će on daleko dogurati dok ne dobije ono što želi.</em></p>",
            'image_thumbnail' => "https://wpcdn.us-east-1.vip.tn-cloud.net/www.41nbc.com/content/uploads/2021/02/sign-one-scaled.jpg",
            'image_full' => "https://content.api.news/v3/images/bin/9b2c6f4f112a771e8139fb58a044c44d",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,

        ],[
            'naslov' => "Znakotron je ponovo u akciji i ovaj put nije samo gradsko vlasništvo u opasnosti!",
            'slug' => "znakotron-2",
            'datum' => now()->toDateString(),
            'sazetak' => "Demon saobraćaja poznat kao Znakotron nam je dokazao da njegova nedavna zlodela mogu da budu nadmašena kada je od sinoć krenuo da prkosi i nedužnim gradjanima.",
            'sadrzaj' => "<p><em>Poslednji put kada se govorilo o Znakotronu bilo je kada je misteriozno ukrao sve semafore iz centra grada.</em> Svi su bili uvereni da tako nešto ne može da bude nadmašeno do juče.</p>
                        <p>Već smo upoznati sa time da je motiv Znakotrona da smanji gužvu u saobraćaju i da podstakne ljude da se okrenu gradskom prevozu i pešačenju. Do skoro, svi su bili uvereni da je to nemoguće postići, čak i od strane njega. Kako god, već danas ova uverenja bivaju srušena.</p>
                        <p>Ovog popodneva, gužva u saobraćaju je manja za 80% u poređenju sa prošlim ponedeljkom u istim časovima. Za ovo je odgovoran Znakotron koji je juče prevazišao sebe više nego ikada.</p>
                        <p>Šta je to toliko loše mogao da uradi da natera ljude da ne sednu u sopstvena kola i da se odvezu do posla, pitate se? Odgovor je: Da im polupa ta kola!</p>
                        <p>Juče je preko 200 građana prijavilo policiji da su im kola teško oštećena, a 100 ljudi je prijavilo da su im kola u potpunosti <strong>NESTALA!</strong> Ako je Znakotron u sposobnosti da uradi nešto ovako, ko zna na šta je sve ostalo spreman.</p>
                        <p>Informacije o identitetu su još uvek nepoznate.</em></p>",
            'image_thumbnail' => "https://live.staticflickr.com/5637/20643271324_db1f31129a_b.jpg",
            'image_full' => "https://e3.365dm.com/23/12/1600x900/skynews-car-wreck-essex_6395693.jpg?20231217100949",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,

        ]]);  
    }
}
