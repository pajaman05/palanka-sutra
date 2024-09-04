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
     * 
     *Osnovni layout 
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
            'image_thumbnail' => "slike/vest-1-thumbnail.PNG",
            'image_full' => "slike/vest-1-full.PNG",
            'kategorija_id' => 1,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
            //`hits` => 0,
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
            'image_thumbnail' => "slike/vest-2-thumb.PNG",
            'image_full' => "slike/vest-2-full.PNG",
            'kategorija_id' => 2,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
            //`hits` => 0,
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
            'image_thumbnail' => "slike/vest-3-thumb.PNG",
            'image_full' => "slike/vest-3-full.PNG",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,
            //`hits` => 0,
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
            'image_thumbnail' => "slike/vest-4-thumb.PNG",
            'image_full' => "slike/vest-4-full.PNG",
            'kategorija_id' => 4,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
            //`hits` => 0,
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
            'image_thumbnail' => "slike/vest-5-thumb.PNG",
            'image_full' => "slike/vest-5-full.PNG",
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
            'image_thumbnail' => "slike/vest-6-thumb.PNG",
            'image_full' => "slike/vest-6-full.PNG",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,

        ],[
            'naslov' => "Znakotron je ponovo u akciji i ovaj put nije samo gradsko vlasništvo u opasnosti!",
            'slug' => "znakotron-2",
            'datum' => now()->toDateString(),
            'sazetak' => "Demon saobraćaja poznat kao Znakotron nam je dokazao da njegova nedavna zlodela mogu da budu nadmašena kada je od sinoć krenuo da prkosi i nedužnim gradjanima.",
            'sadrzaj' => "<p><em>Poslednji put kada je Znakotron bio u centru pažnje, to je bilo zbog misterioznog krađe svih semafora iz centra grada.</em> Svi su verovali da takav incident neće biti nadmašen do juče.</p>
                        <p>Do sada smo znali da je motiv Znakotrona smanjenje gužve u saobraćaju i podsticanje građana da se okrenu gradskom prevozu i pešačenju. Mnogi su smatrali da je to gotovo nemoguće postići, posebno od strane njega. Ipak, uverenja su juče srušena.</p>
                        <p>Ovog popodneva, gužva u saobraćaju smanjena je za <strong>80%</strong> u poređenju sa prošlim ponedeljkom u istim časovima. Ovaj neverovatni rezultat pripisuje se Znakotronu, koji je juče nadmašio sve prethodne poduhvate.</p>
                        <p>Možda se pitate šta je Znakotron mogao učiniti da natera ljude da ostave svoja vozila i koriste druge načine prevoza? Odgovor je: <strong>uništio je njihova vozila!</strong></p>
                        <p>Juče je više od 200 građana prijavilo policiji da su im vozila teško oštećena, dok je oko 100 ljudi prijavilo da su im vozila potpuno <strong>NESTALA!</strong> Ako Znakotron ima sposobnost da izazove ovakve posledice, teško je reći šta još sve može da učini.</p>
                        <p>Identitet Znakotrona još uvek nije otkriven.</p>",
            'image_thumbnail' => "slike/vest-7-thumb.PNG",
            'image_full' => "slike/vest-7-full.PNG",
            'kategorija_id' => 3,
            'user_id' => 2,
            'published' => true,
            'accepted' => true,

        ],[
            'naslov' => "Kontroverzija prati novi smer za kladioničare u goši",
            'slug' => "gosa-kladionicar",
            'datum' => now()->toDateString(),
            'sazetak' => "Da li novi smer za kladioničara sadrži u sebi neki skriveni potencijal ili je samo gubljenje vremena i budalaština? Saznajte o tome šta ovaj smer nudi i zašto je koristan.",
            'sadrzaj' => "<p>Novi smer u obrazovanju za <strong>kladioničare</strong> ne bi trebao da iznenadi, posebno kada se uzme u obzir broj <strong>kladionica</strong> u Srbiji. Dok Smederevska Palanka broji oko desetak kladionica, širom Srbije postoji nekoliko hiljada njih. Ova ideja dobila je podršku od profesora matematike sa dubokim razumevanjem industrije klađenja. <em>'Kladionica nije nikakva prevara niti pljačka. Kladionica je matematika'</em>, ističe profesor, koji je već 30 godina aktivan u ovom polju i naglašava da su klađenje i igre na sreću u suštini kombinacija statistike i kombinatorike.</p>
                        <p>Dok mnogi možda ne shvataju ozbiljno ovaj pristup, činjenica je da su kladionice i igre na sreću značajan deo ekonomije, a ova grana industrije sve više napreduje. Velika grupa stručnjaka prepoznala je potencijal i odlučila da se okupe kako bi pružili nastavu na ovom smeru. Program obuke obuhvata sve aspekte industrije klađenja.</p>
                        <p>Studenti će se upoznati sa <strong>ekonomskim aspektima</strong> poslovanja, uključujući analizu priraštaja i osiguranje. Takođe će učiti o <strong>marketingu</strong>, strategijama za privlačenje i zadržavanje posetilaca, kao i o <strong>najmodernijim uređajima</strong> i njihovom razvoju. Obuka obuhvata i obaveze <strong>operatera</strong> i <strong>supervizora</strong>, kao i pripremu za rad u <strong>tehničkom osoblju</strong>.</p>
                        <p>Treća i četvrta godina studija pružaju mogućnost za učenje o <strong>IT svetu</strong>, što će omogućiti studentima da se zaposle u <strong>online kladionicama</strong>. Četvrta godina takođe uključuje obrazovanje o <strong>kriptovalutama</strong>.</p>
                        <p>Reakcije roditelja na ovaj smer su pomešane. Dok neki izražavaju sumnju, drugi prepoznaju potencijal. <em>'Radije bih da moje dete završi ovaj smer i pronađe posao u online kladionici nego da upiše srednju medicinsku školu i postane medicinska sestra sa malom platom'</em>, komentariše jedan roditelj. Drugi dodaje: <em>'Iako ovaj smer može delovati smešno, smatram da je fantastično što deca mogu da se upoznaju sa finansijama, psihologijom, kompjuterima i marketingom.'</em></p>
                        <p>Ovaj novi smer u obrazovanju za kladioničare predstavlja zanimljiv i inovativan pristup, koji nudi širok spektar veština i znanja primenljivih u brzo rastućem sektoru igara na sreću.</p>",
            'image_thumbnail' => "slike/vest-8-thumb.PNG",
            'image_full' => "slike/vest-8-full.PNG",
            'kategorija_id' => 3,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,

        ],[
            'naslov' => "Dečak od 16 godina zapalio vršnjake koji su ga maltretirali",
            'slug' => "decak-zapalio-nasilinke",
            'datum' => now()->toDateString(),
            'sazetak' => "Aleksandar (16) tvrdi da je preduzeo ono što je morao kao samoodbranu nakon što policija nije shvatila njegove probleme dovoljno ozbiljnim da ga zaštiti.",
            'sadrzaj' => "<p>Život <strong>šesnaestogodišnjeg Aleksandra</strong> nije bio jednostavan. Nakon što je odrasao u <strong>malom selu</strong> sa malo vršnjaka, Aleksandar je sa svojim ocem preselio u <strong>veći grad</strong> i upisao osnovnu školu. Pronalaženje novih prijatelja bilo je izazovno za njega, te je većinu vremena provodio sam. Njegovi bivši poznanici opisuju ga kao <strong>povučenog i čudnog dečaka</strong>, za koga se govorilo da je psihopata. Nisu bili iznenađeni što se trenutni incident dogodio.</p>
                        <p><strong>Vršnjačko nasilje</strong> postalo je ozbiljan problem kada je Aleksandar napunio <strong>12 godina</strong>. Grupa dečaka iz susednog odeljenja svakodnevno ga je maltretirala – vređali su ga, slikali i objavljivali njegove slike na mrežama. Ova situacija se pogoršavala tokom godina, i kada je dostigla vrhunac, Aleksandar je odlučio da se suprotstavi nasilnicima.</p>
                        <p>Pre nedelju dana, pokušao je da im pokaže da više nije uplašen tako što ih je polio vodom i gađao plastičnom flašicom. Nažalost, ovaj potez samo je dodatno uzrujao grupu dečaka. Aleksandar je uspeo da pobegne zahvaljujući <strong>biciklu</strong>, ali je primio pretnje da će ga sačekati ispred kuće i pretući. Zabrinut zbog pretnji, obratio se <strong>policiji</strong>, koja je, nažalost, delovala nezainteresovano, savetujući ga da reši situaciju samostalno, nazivajući to 'dečijim problemima'.</p>
                        <p>Uplašen, Aleksandar je proteklih nedelju dana ostajao kod kuće, primećujući grupu dečaka ispred svog dvorišta. Njegov otac mu je savetovao da 'reši stvari na muški način' i da se potuče sa nasilnicima. Međutim, Aleksandar je znao da ne može sam da se izbori sa <strong>četvoricom dečaka</strong>, čak ni uz oružje.</p>
                        <p>Sinoć, oko <strong>20 časova</strong>, Aleksandar je izašao iz kuće. Kada ga je napala grupa nasilnika, izvadio je <strong>benzin</strong> i polio ih, zatim upotrebio <strong>dezodorans</strong> i <strong>upaljač</strong> kako bi ih zapalio. Troje dečaka preminulo je na ulici, dok je četvrti preminuo u bolnici usled teških opekotina.</p>
                        <p>Aleksandrov otac je jutros <strong>uhapšen</strong>, dok se Aleksandar trenutno nalazi na <strong>psihijatrijskom odeljenju</strong>, gde se suočava sa posledicama ovog tragičnog incidenta.</p>",
            'image_thumbnail' => "slike/vest-9-thumb.PNG",
            'image_full' => "slike/vest-9-full.PNG",
            'kategorija_id' => 3,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,

        ],[
            'naslov' => "Ova limunada nije od limuna!",
            'slug' => "",
            'datum' => now()->toDateString(),
            'sazetak' => "Narod je zgrožen nakon kupovine limunade na štandu koji drži dečak od 8 godina. Ispostavilo se da ono što liči na limunadu je ustvari ništa drugo osim  mokraće i jako puno šećera.",
            'sadrzaj' => "<h1><strong>Mali preduzetnik iz parka iza pozorišta šokirao građane: Limunada sa neočekivanim sastojkom</strong></h1>
                        <p>Prolaznici koji su želeli da podrže <strong>mladog dečaka prodavca limunade</strong> doživeli su neprijatno iznenađenje nakon što su otkrili <strong>šokantnu tajnu njegovog napitka</strong>. Iako su mnogi želeli da pruže podršku simpatičnom detetu koje je, naizgled, samo pokušavalo da zaradi džeparac, malo ko se vratio po drugi put – limunada je imala <strong>neobično gorak ukus</strong>, daleko od osvežavajućeg pića koje su očekivali.</p>
                        <p>Štand, koji je bio smešten u <strong>parku iza gradskog pozorišta</strong>, zatvoren je juče nakon što su posetioci primetili neobičnu praksu dečaka. Naime, dok su prolaznici primećivali da na štandu nikada nije bilo limuna, dečak se često vraćao sa svežim, punim bocama. Ispostavilo se, međutim, da mali preduzetnik nije išao do svoje kuće da natoči još limunade, već se šetao <strong>iza obližnje prodavnice</strong> gde bi flaše punio svojom <strong>mokraćom</strong>.</p>
                        <p>Radnici održavanja parka primetili su šta se događa i odmah obavestili policiju. Dečakovi roditelji, zatečeni situacijom, tvrdili su da nisu imali pojma o njegovom <strong>'malom hobiju'</strong>, dok je mladi prodavac sve vreme ćutao i odbijao da komentariše.</p>
                        <p>Incident je izazvao <strong>burne reakcije u zajednici</strong>, a nadležne službe sada istražuju sve okolnosti ovog bizarnog slučaja.</p>",
            'image_thumbnail' => "slike/vest-10-thumb.PNG",
            'image_full' => "slike/vest-10-full.PNG",
            'kategorija_id' => 3,
            'user_id' => 3,
            'published' => true,
            'accepted' => true,
            // `hits` => 0,
        ]]);  
    }
}
