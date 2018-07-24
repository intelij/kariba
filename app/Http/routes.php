<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Controllers\Array2XML;
use Aloha\Twilio\Twilio;

Route::get("sendEmail", function() {

	$to ="poetic_underneath@yahoo.co.uk";
	$subject ="Kariba Finance Bank Account Change Notice";

	$message ="Dear Customer,\n\rPlease note, due to unforeseen circumstances we will now be moving banks with immediate effect and new bank details will be advised to you shortly.\n\r";
	$message .="Please do not use the old account details\n\r";
	$message .="Regards, \nKariba Finance";


	$data = array(
		'firstname'	=> 'Khululekani Mkhonza' ,
		'lastname'	=> ' Mkhonza' ,
		'email'		=> 'Khululekani@Mkhonza.com' ,
		'password'	=> 'password' ,
		'code'		=> '2984756'

	);

	$contacts = [
		["tapiwakas@hotmail.com","tapiwakas@hotmail.com"],
		["07528770897","fayemashy@yahoo.co.uk"],
		["07737385724","cbriantendayi@yahoo.com"],
		["07944020940","kusanny@yaoo.co.uk"],
		["07447009358","Mchimutsa@hotmail.com"],
		["07447091439","tendaimuna@gmail.com"],
		["07405586798","amungwari@ymail.com"],
		["07939822712","kayimaalec@yahoo.com"],
		["07869700708","Chatsikayi@yahoo.co.uk"],
		["07521071736","rumwenye@yahoo.co.uk"],
		["07918356599","memory.marufu4@gmail.com"],
		["07956970621","angelinenyika@gmail.com"],
		["07851209318","brian.nyandebvu@yahoo.com"],
		["07572487292","mryas1302@gmail.com"],
		["07477576626","blancobee45@gmail.com"],
		["07412990286","gsadombamorris@yahoo.co.uk"],
		["07407210904","maglyn10@gmail.com"],
		["07831887288","mmoliffe@yahoo.co.uk"],
		["07596704328","Mildred.mapisa@yahoo.com"],
		["07491057510","teeblessingm@gmail.com"],
		["07455887991","Thandiwemuziya@hotmail.com"],
		["07917742015","Marciagarise@yahoo.co.uk"],
		["07508496559","nheralaina@yahoo.co.uk"],
		["07913665535","chinyamurindim@gmail.com"],
		["07853804045","matmadya@yahoo.com"],
		["07450248368","mmadas@gmail.com"],
		["07585551561","amandasackey@hotmail.com"],
		["07510458452","anyabunze@gmail.com"],
		["07554598883","lindamanyau@yahoo.co.uk"],
		["07931175103","sidndlovu957@yahoo.com"],
		["07539835610","lindel1968@hotmail.co.uk"],
		["07563373877","gchisango@hotmail.com"],
		["07476888830","mshelter14@yahoo.com"],
		["07886913620","bchiren2@jaguarlandrover.com"],
		["07583000424","sandra.campbell@nacro.org.uk"],
		["07946094355","amavurayi@gmail.com"],
		["07460508855","matanhikepg@gmail.com"],
		["07735062308","isabellachingono@yahoo.co.uk"],
		["07984371441","sachies@btinternet.com"],
		["07428591628","gracemusa@live.com"],
		["07716456165","angelinemarwizi@yahoo.com"],
		["07510525771","rmukasanaz@yahoo.co.uk"],
		["07463762217","misspatrah@ymail.com"],
		["07414060051","trishchikomo@yahoo.co.uk"],
		["07950693154","npe.diogo@hotmail.co.uk"],
		["07745579422","Vimbai20@hotmail.com"],
		["07943263329","Lexcious@Gmail.com"],
		["07748503754","lsbc@europe.com"],
		["07867651090","info@wcfl.co.uk"],
		["07749817002","rjaravaza@hotmail.com"],
		["07490067567","Loicechulu@Gmail.com"],
		["07454494456","vonylicious@hotmail.com"],
		["07462202057","hovva04@hotmail.co.uk"],
		["07473535538","nyathi.albert@yahoo.com"],
		["0755842424","netsaishereni@yahoo.com"],
		["07966881916","Ciribotoagnes@yahoo.co.uk"],
		["07413451065","carolt00@yahoo.com"],
		["07743334444","ezekiel.jiya@live.co.uk"],
		["07852816992","mandykachingwe@gmail.com"],
		["07412148135",""],
		["07863067528","eunicechatukuta@yahoo.co.uk"],
		["07585701938","jgardnhood@yahoo.co.uk"],
		["07481139648","malon305@gmail.com"],
		["07446152989","jchimwayange@yahoo.co.uk"],
		["07513816249","wnyaunwa@yahoo.co.uk"],
		["07840917489","tizaimutizira@rocketmail.com"],
		["07470005483","mabvaro@yahoo.co.uk"],
		["07931417904","ewasterfall@hotmail.co.uk"],
		["07949443988","vkalinda@hotmail.com"],
		["07445551243","bozztj@hotmail.com"],
		["07919098472","agathamazengera867@gmail.com"],
		["07816310366","marumecharity@ymail.com"],
		["07402887555","Beejay1603@gmail.com"],
		["07447909637","raymolion2001@yahoo.co.uk"],
		["07473991151","beanyathi@hotmail.com"],
		["07717121248","matinto@hotmail.co.uk"],
		["07578247376","netsaishereni@yahoo.com"],
		["07402820961","lindsy143@gmail.com"],
		["07917475436","sammlots@yahoo.co.uk"],
		["07832268725","bea.manokore@gmail.com"],
		["07429226344","tmesa2001@yahoo.co.uk"],
		["07961590281","bonnienyamachanda@hotmail.co.uk"],
		["07474315727","mmuchato@gmail.com"],
		["07722210864","kanengonicharity@yahoo.co.uk"],
		["07951063905","elnerzaranyika@ymail.com"],
		["07707441902","jjnyabunze@gmail.com"],
		["07511373602","emutebuka@yahoo.com"],
		["07762993041","tgondo@hotmail.co.uk"],
		["07453266742","skufirwa4@yahoo.com"],
		["07931624100","ruziyam@yahoo.co.uk"],
		["07944186977","deechanakira@yahoo.co.uk"],
		["07801449992","medbiochem@hotmail.co.uk"],
		["07486365132","shamisostorey@hotmail.co.uk"],
		["07879345632","enock843@btinternet.com"],
		["07583686519","mgotora321@yahoo.com"],
		["07783067279","tatenda83@yahoo.co.uk"],
		["07951524395","isaacant@hotmail.com"],
		["07515949449","chelegwa@yahoo.com"],
		["07970203615","smusamira@yahoo.com"],
		["07411600832","ggfrey@yahoo.com"],
		["07413764931","muroyiwa@aol.com"],
		["07402047616","Bellatee2000@yahoo.com"],
		["07460214761","happysonrakabopa@gmail.com"],
		["07818117665","charlene.ndundu@yahoo.com"],
		["07522552290","ncube_linda83@yahoo.co.uk"],
		["07411050799","kennymlauzi@gmail.com"],
		["07474930945","schiccodzi@yahoo.co.uk"],
		["07487729264","cathyncube@googlemail.com"],
		["07775959844","braandy2002@gmail.com"],
		["07863639717","scholastic.mapfumo@yahoo.com"],
		["07565461292","r.koroka@yahoo.com"],
		["07877884930","louiseliv12@gmail.com"],
		["07455192666","rufaro.mukanya@yahoo.com"],
		["07894008981","iahlatswayo@yahoo.com"],
		["07960145638","phinsimonpary@hotmail.co.uk"],
		["07774970363","wmavima@hotmail.co.uk"],
		["07434715551","tjtmuchat0@hotmail.co.uk"],
		["07462311138","Dstephenmnkande@yahoo.co.uk"],
		["07508211895","Nakai.pind@gmail.com"],
		["07722100302","bnhamoinesu@yahoo.co.uk"],
		["07951496489","farayi43@gmail.com"],
		["07944147019","pgasa@yahoo.co.uk"],
		["07498651133","maryngwira@yahoo.co.uk"],
		["07455976736","maunduramhaka@gmail.com"],
		["07817285390","soph_alfred@yahoo.com"],
		["07855031055","divatash@live.com"],
		["07977452528","alexmhandu@googlemail.com"],
		["07899851743","garikai@mail.com"],
		["07449113119","e.fashani@gmail.com"],
		["07460089804","toddmaf@gmail.com"],
		["07474864693","Lindazimba@mail.com"],
		["07894908116","Gomovigi@yahoo.co.uk"],
		["07983355776","tendaishumba@yahoo.co.uk"],
		["07506366973","tatenda.nambureti@gmail.com"],
		["07758655154","allengwizo@googlemail.com"],
		["07462991666","morlzen@yahoo.co.uk"],
		["07405770009",""],
		["07722075629","reginamagwenzi9@yahoo.co.uk"],
		["07585777272","Yasinta.martin@yahoo.com"],
		["07944144396","samanthamutongi@hotmail.com"],
		["07472364284","rufaroakoto@hotmail.com"],
		["07533574808","nyashamavura@outlook.com"],
		["07717711035","whitemarjorie@ymail.com"],
		["07575422502","phiriabbs@yahoo.com"],
		["07501478929","Rosendlov2@hotmail.com"],
		["07480392456","Diana.chamboko@yahoo.co.uk"],
		["07733298439","wondernashlee@yahoo.co.uk"],
		["07448894040","rosemaryjinjika@yahoo.co.uk"],
		["07575599858","Shensovushe@yahoo.co.uk"],
		["07475034386","Bon2rise@gmail.com"],
		["07908523686","osmansibanda@hotmail.co.uk"],
		["07554388059","raymurove@gmail.com"],
		["07803438700","eliasmuch@yahoo.co.uk"],
		["07411112171","sunshine_rita@yahoo.com"],
		["07453302671","patiencemagaisa@yahoo.co.uk"],
		["07757944302","sarahmasocha@hotmail.com"],
		["07456035090","ineskaposa@gmail.com"],
		["07576967431","gracechirombo@yahoo.co.uk"],
		["07572799079","nbumstead@ymail.com"],
		["07786874348","tapiwazhakata@yahoo.co.uk"],
		["07960081001","nyakumbijj@yahoo.co.uk"],
		["07400577750","fuchinez@yahoo.co.uk"],
		["07749419104","fungwa.mawarire@gmail.com"],
		["07412258970","S.hombarume@aol.com"],
		["07878459716","bamu.gloria@yahoo.com"],
		["07879529477","Mubikaf@yahoo.com"],
		["07578894896","debra.harry11@yahoo.com"],
		["07908538428","chenai.machinjike@yahoo.com"],
		["07479429809","tendai_brown@msn.com"],
		["07927371993","moillachaza@yahoo.co.uk"],
		["07539442413","qmutizwa@yahoo.co.uk"],
		["07883001400","arlenemhandu@hotmail.com"],
		["07877695725","martha.nhidza@yahoo.co.uk"],
		["07500773734","Florence.musiiwa@yahoo.com"],
		["07982083785","sdmavurayi@gmail.com"],
		["07429038126","bhasvi.caroline@yahoo.com"],
		["07710654017","t.h.nyamukapa@hotmail.co.uk"],
		["07784333724","milliemoyo@yahoo.co.uk"],
		["07475455255","tamarym@yahoo.co.uk"],
		["07858431770","JDMSIMBE1@GMAIL.COM"],
		["07882313653","empireelyon@yahoo.com"],
		["07477162058","melodykamanga@yahoo.co.uk"],
		["07950888637","n.chiduku@live.co.uk"],
		["07925850068","chengembanje05@outlook.com"],
		["07463064662","esanyangore@yahoo.co.uk"],
		["07999168562","lancemphoko@yahoo.co.uk"],
		["07908233221","kgezi@hotmail.com"],
		["07931156633","angelinekashiri@yahoo.co.uk"],
		["07454173124","mafamuffin@yahoo.co.uk"],
		["07846522290","smtemeri@hotmail.co.uk"],
		["07500961925","bfundira@yahoo.co.uk"],
		["07480866306","alfawill76@gmail.com"],
		["07482210328","sykogsn@gmail.com"],
		["07975527536","mwamisele2@hotmail.com"],
		["07533712879","billyhighland@googlemail.com"],
		["07837259326","cornelius_sd@hotmail.com"],
		["07539226418","katijaabdul@hotmail.com"],
		["07802814401","wborerwe@rocketmail.com"],
		["07400141488","overlandmoto@yahoo.co.uk"],
		["07446110741","graceshonhai@gmail.com"],
		["07926108712","nkumbulanikazibone@yahoo.co.uk"],
		["07450457782","taffychikadaya@yahoo.co.uk"],
		["07832515101","nettyjames@hotmail.com"],
		["07496172826","mmushambi@hotmail.com"],
		["07913424567","lena_maurukira@live.co.uk"],
		["07450468224","tasaramoyo@yahoo.com"],
		["07491008614","Ronaldg2010@yahoo.co.uk"],
		["07445992570","tmushapaidze@hotmail.com"],
		["07938918138","maryzvobgo@hotmail.co.uk"],
		["07427510600","annykombo2000@gmail.com"],
		["07951173294","ckbabeywanguxxx@yahoo.co.uk"],
		["07962389607","omohiddin@hotmail.co.uk"],
		["07979872022","nicknhanhi737@hotmail.com"],
		["07546435455","tmbarukunta@gmail.com"],
		["07450409301","ruthmashavira@ymail.com"],
		["07476335527","mimichivhanga@gmail.com"],
		["07985111684","agathazambe@yahoo.co.uk"],
		["07584674567","trudefur@yahoo.com"],
		["07449331380","keitutiger@yahoo.co.uk"],
		["07956970621",""],
		["07429581112","sngwenya4000@yahoo.co.uk"],
		["07828867720","ruthychipendo@yahoo.co.uk"],
		["07447777407","lennynheta@yahoo.co.uk"],
		["07424239866","tony_banjo@live.co.uk"],
		["07990831721","akaonardo@yahoo.com"],
		["07403807045","muradzikwascott@yahoo.com"],
		["07429952457","touchofpearl3@gmail.com"],
		["07538759507","margaret_femi@yahoo.co.uk"],
		["07745702417","nazarenelson@yahoo.com"],
		["07502584039","smafaune3@gmail.com"],
		["07907204037","caroegum@gmail.com"],
		["07539818515","poetic_underneath@yahoo.co.uk"],
		["07432085006","winnetmakuwe@gmail.com"],
		["07887296579","lgagigo@yahoo.co.uk"],
		["07481435235","pzdube@yahoo.co.uk"],
		["07411735656","simplemum3@hotmail.co.uk"],
		["07915292288",""],
		["07456455946","munandip@yahoo.co.uk"],
		["07738915142","mazarire72@yahoo.co.uk"],
		["07903233168","daphnewade@aol.com"],
		["07853355958","tmezt@yahoo.co.uk"],
		["07890043751","kudzichips2@yahoo.co.uk"],
		["07455111221","establisher-rose@hotmail.com"],
		["07492912149","pastorjanemutanga@gmail.com"],
		["07454173053","nmakubika@gmail.com"],
		["07949689829","linamat18@hotmail.co.uk"],
		["07490709425","ddnyathi@yahoo.co.uk"],
		["07447423817","tondecox@yahoo.co.uk"],
		["07904614753","cherop66@yahoo.co.uk"],
		["07480659853","ltmancama@yahoo.co.uk"],
		["07426068810","hidaya01@hotmail.co.uk"],
		["07766984024","schifamba@hotmail.com"],
		["07401252562","ndeymariejoof@hotmail.co.uk"],
		["07577561058","brooke.savanhu@yahoo.co.uk"],
		["07576169286","mexie.kadzutumwakis@gmail.com"],
		["07752538204","kelly_mccallum@live.co.uk"],
		["07832529636","Taffy187@icloud.com"],
		["07799909753","trixi2011@hotmail.co.uk"],
		["07450960813","tonderai_samanyanga@yahoo.co.uk"],
		["07588514941",""],
		["07830458469","edithveremu@ymail.com"],
		["07447928572","Pmakechemu@msn.com"],
		["07414696489","shilk@hotmail.co.uk"],
		["07960071561","Clevmanjoro@yahoo.com"],
		["07865062451","nwandolinda2000@yahoo.co.uk"],
		["07727145344","cynthia263.cj@gmail.com"],
		["07533482341","ksndanga@yahoo.com"],
		["07726297676","ruchirere@hotmail.com"],
		["07952058234","tnyaks@yahoo.com"],
		["07887846853","nonocee@gmail.com"],
		["07982701574","smutizha@gmail.com"],
		["07858055097","rmmashiri@hotmail.com"],
		["07932988320","mauleen40@yahoo.co.uk"],
		["07976226140","patriciamhondiwa@yahoo.co.uk"],
		["07903652159","Maryemelia@gmail.com"],
		["07590569672","brightonchireka@yahoo.com"],
		["07714082038","onemailaway@me.com"],
		["07848930634","wendymush@yahoo.co.uk"],
		["07428310082","gmunemo@yahoo.com"],
		["07480133661","greshelalibinu@hotmail.com"],
		["07456898898","shellomc@hotmail.co.uk"],
		["07429062591","tulucshay84@hotmail.co.uk"],
		["07478755819","estherpilime@yahoo.co.uk"],
		["07472411898","dianasango@yahoo.co.uk"],
		["07799558702","tayzmusiiwa@hotmail.co.uk"],
		["07841527211","Caroltambula@gmail.com"],
		["07932925266","pm_phiri@yahoo.co.uk"],
		["07454329211","nhetak@yahoo.co.uk"],
		["07557410445","mellisa188@hotmail.com"],
		["07481479407","benex18@yahoo.co.uk"],
		["07550085310","mtengwapreston@gmail.com"],
		["07930537376","simba_chase@yahoo.com"],
		["07447603483","pluwani@yahoo.com"],
		["07426250688","tapmancee@yahoo.co.uk"],
		["07553533665","bellachitate@yahoo.co.uk"],
		["07462565454","chipo1984@hotmail.co.uk"],
		["07908144623","gkabba22@gmail.com"],
		["07455029236","mazvitachaya@yahoo.co.uk"],
		["07926588060","tendai.makoni@yahoo.co.uk"],
		["07490786845","mugomba.annalia@yahoo.co.uk"],
		["073980555911","selinabota@yahoo.co.uk"],


		["07983252275","gkaching@hotmail.com"],
		["07591468600","lamontchitepo@hotmail.co.uk"],
		["07985577421","jedza4@gmail.com"],
		["07852691579","esther.nyamukapa@yahoo.co.uk"],
		["07889406222","nigel.nyathi9@gmail.com"],
		["07736817180","ar_manungo@yahoo.co.uk"],
		["07711953613","mobonzy@yahoo.co.uk"],
		["07480247284","marutafungai@hotmail.co.uk"],
		["07975832870","sidlet24@gmail.com"],
		["07775618610","Settiek@yahoo.co.uk"],
		["07514654805","nmatemura@gmail.com"],
		["07841427245","Diankay79@gmail.com"],
		["07475815588","vzimondi@gmail.com"],
		["07445728004","fmuseka@hotmail.co.uk"],
		["07952089103","joelchigome@hotmail.com"],
		["07450959694","florencejaratina@gmail.com"],
		["07400034356","blesswale2003@yahoo.com"],
		["07588803172","selinasibanda@yahoo.co.uk"],
		["07427469692","Cathrinesikirwayi@yahoo.co.uk"],
		["07401115517","chipojeyi@hotmail.co.uk"],
		["07886821854",""],
		["07850384097","juliasajida2000@yahoo.co.uk"],
		["07506962219","shyletkay@yahoo.co.uk"],
		["07474869540","d_halloway@hotmail.co.uk"],
		["07533577315","valemlauzi@yahoo.co.uk"],
		["07474359623","hazelandiki@gmail.com"],
		["07449505916","mmagadzire@gmail.com"],
		["07578802976","bajulaiyebolaji@gmail.com"],
		["07462353663","chirume@live.com"],
		["07870476454","elliot_chinyama2000@yahoo.co.uk"],
		["07463258998","wallacemangove@gmail.com"],
		["07957113279","gerliekaduya79@googlemail.com"],
		["07717713084","dmupambwa@yahoo.co.uk"],
		["07455112216","gladyssango54@yahoo.com"],
		["07757083417","emmanuelmakoni27@gmail.com"],
		["07908855298","kwamekodua12@gmail.com"],
		["07411491368","suengwerume@yahoo.co.uk"],
		["07745553721","lyn1980@hotmail.co.uk"],
		["07490712348","Shellymahachi@yahoo.co.uk"],
		["07787503528","teemagodi@yahoo.co.uk"],
		["07588950192","regmasby@gmail.com"],
		["07545867049","cathrinemaphosa64@gmail"],
		["07788407498","leochirozvani@gmail.com"],
		["07916677614","emuodzi@gmail.com"],
		["07711953613","liezatf@yahoo.co.uk"],
		["07480248394","Gloriabonza@hotmail.co.uk"],
		["07821245680","nyabunzew@yahoo.com"],
		["07805334072","fionabadila@yahoo.co.uk"],
		["07802785805","phillipmatanga77@gmail.com"],
		["07475034386","automartexports@gmail.com"],
		["07463412383","mfhove@hotmail.com"],
		["07939081889","charitymudiwa@yahoo.co.uk"],
		["07907089899","zebhe2000@yahoo.co.uk"],
		["07427414212","kudzy23@hotmail.com"],
		["07846495521","vassilicki2001@yahoo.co.uk"],
		["07500183435","bradenc1979@mail.com"],
		["07516432179","tatenda33.js@gmail.com"],
		["07940439392","rmz54@yahoo.co.uk"],
		["07428175140","kudapj2004@yahoo.co.uk"],
		["07733588041","holylee@hotmail.co.uk"],
		["07710466948","petermukabeta@gmail.com"],
		["07427005838","margaret.kadiki@yahoo.co.uk"],
		["07340741621","thandi_m@yahoo.com"],
		["07391671957","dotndebele@yahoo.co.uk"],
		["07460644148","achiguma@hotmail.co.uk"],
		["07402611637","m.matthew-06@hotmail.com"],
		["07708446172","Misslizkwanga@yahoo.co.uk"],
		["07490681121","cuthbertchibango@hotmail.com"],
		["07428421167","chichiokoro@outlook.com"],
		["07470501295","abbottg39@yahoo.co.uk"],
		["07477560287","purplerainpvtltd@gmail.com"],
		["07449772257","sithulie@hotmail.com"],
		["07913785322","abigailmuriro@hotmail.co.uk"],
		["07469993843","Cynthiamashazhike@hotmail.co.uk"],
		["07508421102","gwindisyd@yahoo.com"],
		["07463908955","mufumisis@yahoo.com"],
		["07825443939","pmafaune@outlook.com"],
		["07872646174","Ochawapiwa@gmail.com"],
		["07957234116","belmadzima@gmail.com"],
		["07426475995","Terri_babesz@hotmail.com"],
		["07505008271","rkashora@gmail.com"],
		["07881202039","alecajida@yahoo.co.uk"],
		["07456080607","toyinmojiajose@gmail.com"],
		["07946623029","tracysakuenda1@hotmail.co.uk"],
		["07476209518","vaidahroki@yahoo.co.uk"],
		["07516399272","thandiwemazula@gmail.com"],
		["07855569931","ccdeborah5@gmail.com"],
		["07400440865","bmafuwe@yahoo.co.uk"],
		["07738089669","chipomotsi29@yahoo.co.uk"],
		["07983728885","Grizzler1@live.co.uk"],
		["07471680979","fungai.maurukira@yahoo.com"],
		["07501928957","langtonmiriyoga@gmail.com"],
		["07450555643","mmbvumbe@yahoo.co.uk"],
		["07578521018","trucilam@yahoo.com"],
		["07904297851","Rayruzvidzo@yahoo.com"],
		["07436983642","Bmanyida268@gmail.com"],
		["07402093804","adamkananji@gmail.com"],
		["07515505067","phyllismutare@gmail.com"],
		["07783099006","gwenmus315@gmail.com"],
		["07429171599","livybrown2003@googlemail.com"],
		["07904372101","chenaimuranda@yahoo.com"],
		["07909447297","trudyphillip1@gmail.com"],
		["07473870829","washie@mail.com"],
		["07585605573","Adele.ndoro@gmail.com"],
		["07490969726","jolajesuayeni@yahoo.co.uk"],
		["07432391954","Gemma.davenport86@gmail.com"],
		["07450959694","Pride.nyamuridzo@gmail.com"],
		["07414764048","davidzenda@yahoo.co.uk"],
		["07883147052","sangozburg@yahoo.co.uk"],
		["07931175103","Sidndlovu957@yahoo.com"],
		["07572879651","bingandadi@gmail.com"],
		["07926125321","dlaminicece35@gmail.com"],
		["07403761542","ruemadiri@gmail.com"],
		["07872310752","fmaxwebo@yahoo.co.uk"],
		["07568468081","emprestrisha30@gmail.com"],
		["07557141824","carolchiz41@gmail.com"],
		["07949766524","Yasinta.martin@yahoo.com"],
		["07456989398","e.masunga@yahoo.co.uk"],
		["07946677087",""],
		["07909601703","chloty@hotmail.co.uk"],
		["07788472009","pchagada@yahoo.co.uk"],
		["07805925038","gsamas@live.co.uk"],
		["07501186831","jackiechibamu@gmail.com"],
		["07429080300","cmaurukira@live.co.uk"],
		["07920117201","chugaspapa@yahoo.com"],
		["07412600057","ppachirera@yahoo.com"],
		["07508568165","tbkamusorifashions@gmail.com"],
		["07340902768","josephalesho@yahoo.com"],
		["07583241513","rkutama@yahoo.co.uk"],
		["07988988025","nrabeca@gmail.com"],
		["07401743432","tmakuve@yahoo.com"],
		["07853592872","victorianyaguze@yahoo.com"],
		["07545626929","sheila_mhungu@sky.com"],
		["07717669792","pzdube@yahoo.co.uk"],
		["07478858181","audreymhuru@yahoo.co.uk"],
		["07943815980","Kudziemutari@msn.com"],
		["07469746633","gettie38@hotmail.co.uk"],
		["07456027472","gchingono@yahoo.co.uk"],
		["07919098406","yvonnechari@yahoo.co.uk"],
		["07576816124","mchigama35@gmail.com"],
		["07882313653","empireelyon@yahoo.com"],
		["07411365895","Matifunga@hotmail.com"],
		["07950992251","dsadomba@yahoo.co.uk"],
		["07900874981","oniefe@yahoo.co.uk"],
		["07999305204","sheilahmagaya@yahoo.co.uk"],
		["07492428145","vmasube@gmail.com"],
		["07450922282","solaaro@hotmail.co.uk"],
		["07960834232","toitei.matt@gmail.com"],
		["07960237643","eenhira@yahoo.co.uk"],
		["07939031519","lmanhambara@yahoo.co.uk"],
		["07446206431","jfhlasi@gmail.com"],
		["07584855532","Tkamhara@Gmail.com"],
		["07577911915","lillianmudzivare@yahoo.co.uk"],
		["07478313372","Savannahtropic@gmail.com"],
		["07903817021","etenul@googlemail.com"],
		["07533286564","dmasomera@yahoo.co.uk"],
		["07507139027","masychloe@yahoo.co.uk"],
		["07578108709","getridet@yahoo.co.uk"],
		["07789911036","wendychiku@yahoo.com"],
		["07583509549","rachelg479@hotmail.com"],
		["07447510327","kelvin.makanza@fhft.nhs.uk"],
		["07455969803","rmavezere@yahoo.com"],
		["07412686488","cjhmany@yahoo.co.uk"],
		["07497826321","adichirova12@gmail.com"],
		["07722075360","jetiposh@hotmail.com"],
		["07802896479","shepherd.nyamandi41@yahoo.co.uk"],
		["07463868978","pedtkunaka@yahoo.co.uk"],
		["07402579633","ytyoseph@yahoo.co.uk"],
		["07500588867","sibusisekile@yahoo.co.uk"],
		["07821714729","jennymakuwa@hotmail.co.uk"],
		["07492945570","zvikoej@yahoo.co.uk"],
		["07990040604","chibinjanawillis@yahoo.co.uk"],
		["07401014753","talentk.kambarami@gmail.com"],
		["07492695687","thandi.moyo@yahoo.com"],
		["07932064852","mercynhandara@yahoo.com"],
		["07848393236","faithguzha@gmail.com"],
		["07445859042","sekaindor@googlemail.com"],
		["07769222496","robbiemaze@yahoo.co.uk"],
		["07550085417","cyniecee@gmail.com"],
		["07853135470","tellomathe@hotmail.com"],
		["07464773277","toddndlovu@outlook.com"],
		["07961974484","albert.masawi@yahoo.co.uk"],
		["07850992767","berrykad@gmail.com"],
		["07444538399","Franconechaz@gmail.com"],
		["07413 097190","Jaybango247@gmail.com"],
		["07877920344","osadebejohn@hotmail.com"],
		["07506219641","faithtachiona12@gmail.com"],
		["07479498898","kudamuduma02@hotmail.co.uk"],
		["07787720997","mmahari@aol.com"],
		["07985686972","alinosnhmns@yahoo.co.uk"],
		["07868440970","lloyd.luwani@yahoo.co.uk"],
		["07584422113",""],
		["07473919909","kumbiraichuma@yahoo.co.uk"],
		["07766320584","ndeysinlove@yahoo.com"],
		["07411287211","rhodachikaponya@yahoo.co.uk"],
		["07575092869","nestairons@yahoo.com"],
		["07572503415","allinechikuni@yahoo.co.uk"],
		["07477835800","bvoro11@gmail.com"],
		["07946312289","echipaike@yahoo.com"],
		["07392836870","tasha-12@hotmail.co.uk"],
		["07886263885","humble.gweshe@originhousing.org.uk"],
		["07549377560","vince75@hotmail.co.uk"],
		["07886821854",""],
		["07932712051","athenkosiq85@gmail.com"],
		["07983951875","poetic_underneath@yahoo.co.uk"],
		["07983951875","k.mkhonza@yahoo.co.uk"]
	];


//print_r($contacts);

	$emails = [];
	foreach ($contacts as $cont) {
		array_push($emails, trim($cont[1]));
	}

	print_r(implode(",", array_slice($emails, 100, 150)));

//	echo"<h1>Second Batch</h1>";
//
//		print_r(implode(",", array_slice($emails, 11, 20)));


//	echo implode(",",$contacts);


	$message = view('user.emails.bankchange', $data);
	$headers  = 'MIME-Version: 1.0' ."\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
	$headers .= 'From: '.CNF_APPNAME.' <'.CNF_EMAIL.'>' ."\r\n";

echo	mail('ks.mkhonza@gmail.com', $subject, $message, $headers);

	foreach ($contacts as $contact) {
		echo"<h4>". $contact[1] ."</h4>";
//		mail($contact[1], $subject, $message, $headers);
		mail(trim($contact[1]), $subject, $message, $headers);
	}

});

Route::get("sendmsg", function() {

	$accountId = 'AC999c7195ec168e6df05b93a550aee6b5';
	$token = 'c9825088e30798c497816713e7aa7f16';
	$fromNumber = '441726932057';
	$fromFriendlyName = 'KaribaFinance';

	$twillio = new Twilio($accountId, $token, $fromNumber);

	$mobiles = ['07983951875', '07539818515'];

	$message ="Please note, due to unforeseen circumstances we will now be moving banks with immediate effect and new bank details will be advised to you shortly.\n\r";
	$message .="Please do not use the old account details\n\r";
	$message .="Regards, \nKariba Finance";

	foreach ($mobiles as $mobile) {
//		$twillio->message($mobile, $message);
	}

	$contacts = [
		["tapiwakas@hotmail.com","tapiwakas@hotmail.com"],
		["07528770897","fayemashy@yahoo.co.uk"],
		["07737385724","cbriantendayi@yahoo.com"],
		["07944020940","kusanny@yaoo.co.uk"],
		["07447009358","Mchimutsa@hotmail.com"],
		["07447091439","tendaimuna@gmail.com"],
		["07405586798","amungwari@ymail.com"],
		["07939822712","kayimaalec@yahoo.com"],
		["07869700708","Chatsikayi@yahoo.co.uk"],
		["07521071736","rumwenye@yahoo.co.uk"],
		["07918356599","memory.marufu4@gmail.com"],
		["07956970621","angelinenyika@gmail.com"],
		["07851209318","brian.nyandebvu@yahoo.com"],
		["07572487292","mryas1302@gmail.com"],
		["07477576626","blancobee45@gmail.com"],
		["07412990286","gsadombamorris@yahoo.co.uk"],
		["07407210904","maglyn10@gmail.com"],
		["07831887288","mmoliffe@yahoo.co.uk"],
		["07596704328","Mildred.mapisa@yahoo.com"],
		["07491057510","teeblessingm@gmail.com"],
		["07455887991","Thandiwemuziya@hotmail.com"],
		["07917742015","Marciagarise@yahoo.co.uk"],
		["07508496559","nheralaina@yahoo.co.uk"],
		["07913665535","chinyamurindim@gmail.com"],
		["07853804045","matmadya@yahoo.com"],
		["07450248368","mmadas@gmail.com"],
		["07585551561","amandasackey@hotmail.com"],
		["07510458452","anyabunze@gmail.com"],
		["07554598883","lindamanyau@yahoo.co.uk"],
		["07931175103","sidndlovu957@yahoo.com"],
		["07539835610","lindel1968@hotmail.co.uk"],
		["07563373877","gchisango@hotmail.com"],
		["07476888830","mshelter14@yahoo.com"],
		["07886913620","bchiren2@jaguarlandrover.com"],
		["07583000424","sandra.campbell@nacro.org.uk"],
		["07946094355","amavurayi@gmail.com"],
		["07460508855","matanhikepg@gmail.com"],
		["07735062308","isabellachingono@yahoo.co.uk"],
		["07984371441","sachies@btinternet.com"],
		["07428591628","gracemusa@live.com"],
		["07716456165","angelinemarwizi@yahoo.com"],
		["07510525771","rmukasanaz@yahoo.co.uk"],
		["07463762217","misspatrah@ymail.com"],
		["07414060051","trishchikomo@yahoo.co.uk"],
		["07950693154","npe.diogo@hotmail.co.uk"],
		["07745579422","Vimbai20@hotmail.com"],
		["07943263329","Lexcious@Gmail.com"],
		["07748503754","lsbc@europe.com"],
		["07867651090","info@wcfl.co.uk"],
		["07749817002","rjaravaza@hotmail.com"],
		["07490067567","Loicechulu@Gmail.com"],
		["07454494456","vonylicious@hotmail.com"],
		["07462202057","hovva04@hotmail.co.uk"],
		["07473535538","nyathi.albert@yahoo.com"],
		["0755842424","netsaishereni@yahoo.com"],
		["07966881916","Ciribotoagnes@yahoo.co.uk"],
		["07413451065","carolt00@yahoo.com"],
		["07743334444","ezekiel.jiya@live.co.uk"],
		["07852816992","mandykachingwe@gmail.com"],
		["07412148135",""],
		["07863067528","eunicechatukuta@yahoo.co.uk"],
		["07585701938","jgardnhood@yahoo.co.uk"],
		["07481139648","malon305@gmail.com"],
		["07446152989","jchimwayange@yahoo.co.uk"],
		["07513816249","wnyaunwa@yahoo.co.uk"],
		["07840917489","tizaimutizira@rocketmail.com"],
		["07470005483","mabvaro@yahoo.co.uk"],
		["07931417904","ewasterfall@hotmail.co.uk"],
		["07949443988","vkalinda@hotmail.com"],
		["07445551243","bozztj@hotmail.com"],
		["07919098472","agathamazengera867@gmail.com"],
		["07816310366","marumecharity@ymail.com"],
		["07402887555","Beejay1603@gmail.com"],
		["07447909637","raymolion2001@yahoo.co.uk"],
		["07473991151","beanyathi@hotmail.com"],
		["07717121248","matinto@hotmail.co.uk"],
		["07578247376","netsaishereni@yahoo.com"],
		["07402820961","lindsy143@gmail.com"],
		["07917475436","sammlots@yahoo.co.uk"],
		["07832268725","bea.manokore@gmail.com"],
		["07429226344","tmesa2001@yahoo.co.uk"],
		["07961590281","bonnienyamachanda@hotmail.co.uk"],
		["07474315727","mmuchato@gmail.com"],
		["07722210864","kanengonicharity@yahoo.co.uk"],
		["07951063905","elnerzaranyika@ymail.com"],
		["07707441902","jjnyabunze@gmail.com"],
		["07511373602","emutebuka@yahoo.com"],
		["07762993041","tgondo@hotmail.co.uk"],
		["07453266742","skufirwa4@yahoo.com"],
		["07931624100","ruziyam@yahoo.co.uk"],
		["07944186977","deechanakira@yahoo.co.uk"],
		["07801449992","medbiochem@hotmail.co.uk"],
		["07486365132","shamisostorey@hotmail.co.uk"],
		["07879345632","enock843@btinternet.com"],
		["07583686519","mgotora321@yahoo.com"],
		["07783067279","tatenda83@yahoo.co.uk"],
		["07951524395","isaacant@hotmail.com"],
		["07515949449","chelegwa@yahoo.com"],
		["07970203615","smusamira@yahoo.com"],
		["07411600832","ggfrey@yahoo.com"],
		["07413764931","muroyiwa@aol.com"],
		["07402047616","Bellatee2000@yahoo.com"],
		["07460214761","happysonrakabopa@gmail.com"],
		["07818117665","charlene.ndundu@yahoo.com"],
		["07522552290","ncube_linda83@yahoo.co.uk"],
		["07411050799","kennymlauzi@gmail.com"],
		["07474930945","schiccodzi@yahoo.co.uk"],
		["07487729264","cathyncube@googlemail.com"],
		["07775959844","braandy2002@gmail.com"],
		["07863639717","scholastic.mapfumo@yahoo.com"],
		["07565461292","r.koroka@yahoo.com"],
		["07877884930","louiseliv12@gmail.com"],
		["07455192666","rufaro.mukanya@yahoo.com"],
		["07894008981","iahlatswayo@yahoo.com"],
		["07960145638","phinsimonpary@hotmail.co.uk"],
		["07774970363","wmavima@hotmail.co.uk"],
		["07434715551","tjtmuchat0@hotmail.co.uk"],
		["07462311138","Dstephenmnkande@yahoo.co.uk"],
		["07508211895","Nakai.pind@gmail.com"],
		["07722100302","bnhamoinesu@yahoo.co.uk"],
		["07951496489","farayi43@gmail.com"],
		["07944147019","pgasa@yahoo.co.uk"],
		["07498651133","maryngwira@yahoo.co.uk"],
		["07455976736","maunduramhaka@gmail.com"],
		["07817285390","soph_alfred@yahoo.com"],
		["07855031055","divatash@live.com"],
		["07977452528","alexmhandu@googlemail.com"],
		["07899851743","garikai@mail.com"],
		["07449113119","e.fashani@gmail.com"],
		["07460089804","toddmaf@gmail.com"],
		["07474864693","Lindazimba@mail.com"],
		["07894908116","Gomovigi@yahoo.co.uk"],
		["07983355776","tendaishumba@yahoo.co.uk"],
		["07506366973","tatenda.nambureti@gmail.com"],
		["07758655154","allengwizo@googlemail.com"],
		["07462991666","morlzen@yahoo.co.uk"],
		["07405770009",""],
		["07722075629","reginamagwenzi9@yahoo.co.uk"],
		["07585777272","Yasinta.martin@yahoo.com"],
		["07944144396","samanthamutongi@hotmail.com"],
		["07472364284","rufaroakoto@hotmail.com"],
		["07533574808","nyashamavura@outlook.com"],
		["07717711035","whitemarjorie@ymail.com"],
		["07575422502","phiriabbs@yahoo.com"],
		["07501478929","Rosendlov2@hotmail.com"],
		["07480392456","Diana.chamboko@yahoo.co.uk"],
		["07733298439","wondernashlee@yahoo.co.uk"],
		["07448894040","rosemaryjinjika@yahoo.co.uk"],
		["07575599858","Shensovushe@yahoo.co.uk"],
		["07475034386","Bon2rise@gmail.com"],
		["07908523686","osmansibanda@hotmail.co.uk"],
		["07554388059","raymurove@gmail.com"],
		["07803438700","eliasmuch@yahoo.co.uk"],
		["07411112171","sunshine_rita@yahoo.com"],
		["07453302671","patiencemagaisa@yahoo.co.uk"],
		["07757944302","sarahmasocha@hotmail.com"],
		["07456035090","ineskaposa@gmail.com"],
		["07576967431","gracechirombo@yahoo.co.uk"],
		["07572799079","nbumstead@ymail.com"],
		["07786874348","tapiwazhakata@yahoo.co.uk"],
		["07960081001","nyakumbijj@yahoo.co.uk"],
		["07400577750","fuchinez@yahoo.co.uk"],
		["07749419104","fungwa.mawarire@gmail.com"],
		["07412258970","S.hombarume@aol.com"],
		["07878459716","bamu.gloria@yahoo.com"],
		["07879529477","Mubikaf@yahoo.com"],
		["07578894896","debra.harry11@yahoo.com"],
		["07908538428","chenai.machinjike@yahoo.com"],
		["07479429809","tendai_brown@msn.com"],
		["07927371993","moillachaza@yahoo.co.uk"],
		["07539442413","qmutizwa@yahoo.co.uk"],
		["07883001400","arlenemhandu@hotmail.com"],
		["07877695725","martha.nhidza@yahoo.co.uk"],
		["07500773734","Florence.musiiwa@yahoo.com"],
		["07982083785","sdmavurayi@gmail.com"],
		["07429038126","bhasvi.caroline@yahoo.com"],
		["07710654017","t.h.nyamukapa@hotmail.co.uk"],
		["07784333724","milliemoyo@yahoo.co.uk"],
		["07475455255","tamarym@yahoo.co.uk"],
		["07858431770","JDMSIMBE1@GMAIL.COM"],
		["07882313653","empireelyon@yahoo.com"],
		["07477162058","melodykamanga@yahoo.co.uk"],
		["07950888637","n.chiduku@live.co.uk"],
		["07925850068","chengembanje05@outlook.com"],
		["07463064662","esanyangore@yahoo.co.uk"],
		["07999168562","lancemphoko@yahoo.co.uk"],
		["07908233221","kgezi@hotmail.com"],
		["07931156633","angelinekashiri@yahoo.co.uk"],
		["07454173124","mafamuffin@yahoo.co.uk"],
		["07846522290","smtemeri@hotmail.co.uk"],
		["07500961925","bfundira@yahoo.co.uk"],
		["07480866306","alfawill76@gmail.com"],
		["07482210328","sykogsn@gmail.com"],
		["07975527536","mwamisele2@hotmail.com"],
		["07533712879","billyhighland@googlemail.com"],
		["07837259326","cornelius_sd@hotmail.com"],
		["07539226418","katijaabdul@hotmail.com"],
		["07802814401","wborerwe@rocketmail.com"],
		["07400141488","overlandmoto@yahoo.co.uk"],
		["07446110741","graceshonhai@gmail.com"],
		["07926108712","nkumbulanikazibone@yahoo.co.uk"],
		["07450457782","taffychikadaya@yahoo.co.uk"],
		["07832515101","nettyjames@hotmail.com"],
		["07496172826","mmushambi@hotmail.com"],
		["07913424567","lena_maurukira@live.co.uk"],
		["07450468224","tasaramoyo@yahoo.com"],
		["07491008614","Ronaldg2010@yahoo.co.uk"],
		["07445992570","tmushapaidze@hotmail.com"],
		["07938918138","maryzvobgo@hotmail.co.uk"],
		["07427510600","annykombo2000@gmail.com"],
		["07951173294","ckbabeywanguxxx@yahoo.co.uk"],
		["07962389607","omohiddin@hotmail.co.uk"],
		["07979872022","nicknhanhi737@hotmail.com"],
		["07546435455","tmbarukunta@gmail.com"],
		["07450409301","ruthmashavira@ymail.com"],
		["07476335527","mimichivhanga@gmail.com"],
		["07985111684","agathazambe@yahoo.co.uk"],
		["07584674567","trudefur@yahoo.com"],
		["07449331380","keitutiger@yahoo.co.uk"],
		["07956970621",""],
		["07429581112","sngwenya4000@yahoo.co.uk"],
		["07828867720","ruthychipendo@yahoo.co.uk"],
		["07447777407","lennynheta@yahoo.co.uk"],
		["07424239866","tony_banjo@live.co.uk"],
		["07990831721","akaonardo@yahoo.com"],
		["07403807045","muradzikwascott@yahoo.com"],
		["07429952457","touchofpearl3@gmail.com"],
		["07538759507","margaret_femi@yahoo.co.uk"],
		["07745702417","nazarenelson@yahoo.com"],
		["07502584039","smafaune3@gmail.com"],
		["07907204037","caroegum@gmail.com"],
		["07539818515","poetic_underneath@yahoo.co.uk"],
		["07432085006","winnetmakuwe@gmail.com"],
		["07887296579","lgagigo@yahoo.co.uk"],
		["07481435235","pzdube@yahoo.co.uk"],
		["07411735656","simplemum3@hotmail.co.uk"],
		["07915292288",""],
		["07456455946","munandip@yahoo.co.uk"],
		["07738915142","mazarire72@yahoo.co.uk"],
		["07903233168","daphnewade@aol.com"],
		["07853355958","tmezt@yahoo.co.uk"],
		["07890043751","kudzichips2@yahoo.co.uk"],
		["07455111221","establisher-rose@hotmail.com"],
		["07492912149","pastorjanemutanga@gmail.com"],
		["07454173053","nmakubika@gmail.com"],
		["07949689829","linamat18@hotmail.co.uk"],
		["07490709425","ddnyathi@yahoo.co.uk"],
		["07447423817","tondecox@yahoo.co.uk"],
		["07904614753","cherop66@yahoo.co.uk"],
		["07480659853","ltmancama@yahoo.co.uk"],
		["07426068810","hidaya01@hotmail.co.uk"],
		["07766984024","schifamba@hotmail.com"],
		["07401252562","ndeymariejoof@hotmail.co.uk"],
		["07577561058","brooke.savanhu@yahoo.co.uk"],
		["07576169286","mexie.kadzutumwakis@gmail.com"],
		["07752538204","kelly_mccallum@live.co.uk"],
		["07832529636","Taffy187@icloud.com"],
		["07799909753","trixi2011@hotmail.co.uk"],
		["07450960813","tonderai_samanyanga@yahoo.co.uk"],
		["07588514941",""],
		["07830458469","edithveremu@ymail.com"],
		["07447928572","Pmakechemu@msn.com"],
		["07414696489","shilk@hotmail.co.uk"],
		["07960071561","Clevmanjoro@yahoo.com"],
		["07865062451","nwandolinda2000@yahoo.co.uk"],
		["07727145344","cynthia263.cj@gmail.com"],
		["07533482341","ksndanga@yahoo.com"],
		["07726297676","ruchirere@hotmail.com"],
		["07952058234","tnyaks@yahoo.com"],
		["07887846853","nonocee@gmail.com"],
		["07982701574","smutizha@gmail.com"],
		["07858055097","rmmashiri@hotmail.com"],
		["07932988320","mauleen40@yahoo.co.uk"],
		["07976226140","patriciamhondiwa@yahoo.co.uk"],
		["07903652159","Maryemelia@gmail.com"],
		["07590569672","brightonchireka@yahoo.com"],
		["07714082038","onemailaway@me.com"],
		["07848930634","wendymush@yahoo.co.uk"],
		["07428310082","gmunemo@yahoo.com"],
		["07480133661","greshelalibinu@hotmail.com"],
		["07456898898","shellomc@hotmail.co.uk"],
		["07429062591","tulucshay84@hotmail.co.uk"],
		["07478755819","estherpilime@yahoo.co.uk"],
		["07472411898","dianasango@yahoo.co.uk"],
		["07799558702","tayzmusiiwa@hotmail.co.uk"],
		["07841527211","Caroltambula@gmail.com"],
		["07932925266","pm_phiri@yahoo.co.uk"],
		["07454329211","nhetak@yahoo.co.uk"],
		["07557410445","mellisa188@hotmail.com"],
		["07481479407","benex18@yahoo.co.uk"],
		["07550085310","mtengwapreston@gmail.com"],
		["07930537376","simba_chase@yahoo.com"],
		["07447603483","pluwani@yahoo.com"],
		["07426250688","tapmancee@yahoo.co.uk"],
		["07553533665","bellachitate@yahoo.co.uk"],
		["07462565454","chipo1984@hotmail.co.uk"],
		["07908144623","gkabba22@gmail.com"],
		["07455029236","mazvitachaya@yahoo.co.uk"],
		["07926588060","tendai.makoni@yahoo.co.uk"],
		["07490786845","mugomba.annalia@yahoo.co.uk"],
		["073980555911","selinabota@yahoo.co.uk"],
		["07983252275","gkaching@hotmail.com"],
		["07591468600","lamontchitepo@hotmail.co.uk"],
		["07985577421","jedza4@gmail.com"],
		["07852691579","esther.nyamukapa@yahoo.co.uk"],
		["07889406222","nigel.nyathi9@gmail.com"],
		["07736817180","ar_manungo@yahoo.co.uk"],
		["07711953613","mobonzy@yahoo.co.uk"],
		["07480247284","marutafungai@hotmail.co.uk"],
		["07975832870","sidlet24@gmail.com"],
		["07775618610","Settiek@yahoo.co.uk"],
		["07514654805","nmatemura@gmail.com"],
		["07841427245","Diankay79@gmail.com"],
		["07475815588","vzimondi@gmail.com"],
		["07445728004","fmuseka@hotmail.co.uk"],
		["07952089103","joelchigome@hotmail.com"],
		["07450959694","florencejaratina@gmail.com"],
		["07400034356","blesswale2003@yahoo.com"],
		["07588803172","selinasibanda@yahoo.co.uk"],
		["07427469692","Cathrinesikirwayi@yahoo.co.uk"],
		["07401115517","chipojeyi@hotmail.co.uk"],
		["07886821854",""],
		["07850384097","juliasajida2000@yahoo.co.uk"],
		["07506962219","shyletkay@yahoo.co.uk"],
		["07474869540","d_halloway@hotmail.co.uk"],
		["07533577315","valemlauzi@yahoo.co.uk"],
		["07474359623","hazelandiki@gmail.com"],
		["07449505916","mmagadzire@gmail.com"],
		["07578802976","bajulaiyebolaji@gmail.com"],
		["07462353663","chirume@live.com"],
		["07870476454","elliot_chinyama2000@yahoo.co.uk"],
		["07463258998","wallacemangove@gmail.com"],
		["07957113279","gerliekaduya79@googlemail.com"],
		["07717713084","dmupambwa@yahoo.co.uk"],
		["07455112216","gladyssango54@yahoo.com"],
		["07757083417","emmanuelmakoni27@gmail.com"],
		["07908855298","kwamekodua12@gmail.com"],
		["07411491368","suengwerume@yahoo.co.uk"],
		["07745553721","lyn1980@hotmail.co.uk"],
		["07490712348","Shellymahachi@yahoo.co.uk"],
		["07787503528","teemagodi@yahoo.co.uk"],
		["07588950192","regmasby@gmail.com"],
		["07545867049","cathrinemaphosa64@gmail"],
		["07788407498","leochirozvani@gmail.com"],
		["07916677614","emuodzi@gmail.com"],
		["07711953613","liezatf@yahoo.co.uk"],
		["07480248394","Gloriabonza@hotmail.co.uk"],
		["07821245680","nyabunzew@yahoo.com"],
		["07805334072","fionabadila@yahoo.co.uk"],
		["07802785805","phillipmatanga77@gmail.com"],
		["07475034386","automartexports@gmail.com"],
		["07463412383","mfhove@hotmail.com"],
		["07939081889","charitymudiwa@yahoo.co.uk"],
		["07907089899","zebhe2000@yahoo.co.uk"],
		["07427414212","kudzy23@hotmail.com"],
		["07846495521","vassilicki2001@yahoo.co.uk"],
		["07500183435","bradenc1979@mail.com"],
		["07516432179","tatenda33.js@gmail.com"],
		["07940439392","rmz54@yahoo.co.uk"],
		["07428175140","kudapj2004@yahoo.co.uk"],
		["07733588041","holylee@hotmail.co.uk"],
		["07710466948","petermukabeta@gmail.com"],
		["07427005838","margaret.kadiki@yahoo.co.uk"],
		["07340741621","thandi_m@yahoo.com"],
		["07391671957","dotndebele@yahoo.co.uk"],
		["07460644148","achiguma@hotmail.co.uk"],
		["07402611637","m.matthew-06@hotmail.com"],
		["07708446172","Misslizkwanga@yahoo.co.uk"],
		["07490681121","cuthbertchibango@hotmail.com"],
		["07428421167","chichiokoro@outlook.com"],
		["07470501295","abbottg39@yahoo.co.uk"],
		["07477560287","purplerainpvtltd@gmail.com"],
		["07449772257","sithulie@hotmail.com"],
		["07913785322","abigailmuriro@hotmail.co.uk"],
		["07469993843","Cynthiamashazhike@hotmail.co.uk"],
		["07508421102","gwindisyd@yahoo.com"],
		["07463908955","mufumisis@yahoo.com"],
		["07825443939","pmafaune@outlook.com"],
		["07872646174","Ochawapiwa@gmail.com"],
		["07957234116","belmadzima@gmail.com"],
		["07426475995","Terri_babesz@hotmail.com"],
		["07505008271","rkashora@gmail.com"],
		["07881202039","alecajida@yahoo.co.uk"],
		["07456080607","toyinmojiajose@gmail.com"],
		["07946623029","tracysakuenda1@hotmail.co.uk"],
		["07476209518","vaidahroki@yahoo.co.uk"],
		["07516399272","thandiwemazula@gmail.com"],
		["07855569931","ccdeborah5@gmail.com"],
		["07400440865","bmafuwe@yahoo.co.uk"],
		["07738089669","chipomotsi29@yahoo.co.uk"],
		["07983728885","Grizzler1@live.co.uk"],
		["07471680979","fungai.maurukira@yahoo.com"],
		["07501928957","langtonmiriyoga@gmail.com"],
		["07450555643","mmbvumbe@yahoo.co.uk"],
		["07578521018","trucilam@yahoo.com"],
		["07904297851","Rayruzvidzo@yahoo.com"],
		["07436983642","Bmanyida268@gmail.com"],
		["07402093804","adamkananji@gmail.com"],
		["07515505067","phyllismutare@gmail.com"],
		["07783099006","gwenmus315@gmail.com"],
		["07429171599","livybrown2003@googlemail.com"],
		["07904372101","chenaimuranda@yahoo.com"],
		["07909447297","trudyphillip1@gmail.com"],
		["07473870829","washie@mail.com"],
		["07585605573","Adele.ndoro@gmail.com"],
		["07490969726","jolajesuayeni@yahoo.co.uk"],
		["07432391954","Gemma.davenport86@gmail.com"],
		["07450959694","Pride.nyamuridzo@gmail.com"],
		["07414764048","davidzenda@yahoo.co.uk"],
		["07883147052","sangozburg@yahoo.co.uk"],
		["07931175103","Sidndlovu957@yahoo.com"],
		["07572879651","bingandadi@gmail.com"],
		["07926125321","dlaminicece35@gmail.com"],
		["07403761542","ruemadiri@gmail.com"],
		["07872310752","fmaxwebo@yahoo.co.uk"],
		["07568468081","emprestrisha30@gmail.com"],
		["07557141824","carolchiz41@gmail.com"],
		["07949766524","Yasinta.martin@yahoo.com"],
		["07456989398","e.masunga@yahoo.co.uk"],
		["07946677087",""],
		["07909601703","chloty@hotmail.co.uk"],
		["07788472009","pchagada@yahoo.co.uk"],
		["07805925038","gsamas@live.co.uk"],
		["07501186831","jackiechibamu@gmail.com"],
		["07429080300","cmaurukira@live.co.uk"],
		["07920117201","chugaspapa@yahoo.com"],
		["07412600057","ppachirera@yahoo.com"],
		["07508568165","tbkamusorifashions@gmail.com"],
		["07340902768","josephalesho@yahoo.com"],
		["07583241513","rkutama@yahoo.co.uk"],
		["07988988025","nrabeca@gmail.com"],
		["07401743432","tmakuve@yahoo.com"],
		["07853592872","victorianyaguze@yahoo.com"],
		["07545626929","sheila_mhungu@sky.com"],
		["07717669792","pzdube@yahoo.co.uk"],
		["07478858181","audreymhuru@yahoo.co.uk"],
		["07943815980","Kudziemutari@msn.com"],
		["07469746633","gettie38@hotmail.co.uk"],
		["07456027472","gchingono@yahoo.co.uk"],
		["07919098406","yvonnechari@yahoo.co.uk"],
		["07576816124","mchigama35@gmail.com"],
		["07882313653","empireelyon@yahoo.com"],
		["07411365895","Matifunga@hotmail.com"],
		["07950992251","dsadomba@yahoo.co.uk"],
		["07900874981","oniefe@yahoo.co.uk"],
		["07999305204","sheilahmagaya@yahoo.co.uk"],
		["07492428145","vmasube@gmail.com"],
		["07450922282","solaaro@hotmail.co.uk"],
		["07960834232","toitei.matt@gmail.com"],
		["07960237643","eenhira@yahoo.co.uk"],
		["07939031519","lmanhambara@yahoo.co.uk"],
		["07446206431","jfhlasi@gmail.com"],
		["07584855532","Tkamhara@Gmail.com"],
		["07577911915","lillianmudzivare@yahoo.co.uk"],
		["07478313372","Savannahtropic@gmail.com"],
		["07903817021","etenul@googlemail.com"],
		["07533286564","dmasomera@yahoo.co.uk"],
		["07507139027","masychloe@yahoo.co.uk"],
		["07578108709","getridet@yahoo.co.uk"],
		["07789911036","wendychiku@yahoo.com"],
		["07583509549","rachelg479@hotmail.com"],
		["07447510327","kelvin.makanza@fhft.nhs.uk"],
		["07455969803","rmavezere@yahoo.com"],
		["07412686488","cjhmany@yahoo.co.uk"],
		["07497826321","adichirova12@gmail.com"],
		["07722075360","jetiposh@hotmail.com"],
		["07802896479","shepherd.nyamandi41@yahoo.co.uk"],
		["07463868978","pedtkunaka@yahoo.co.uk"],
		["07402579633","ytyoseph@yahoo.co.uk"],
		["07500588867","sibusisekile@yahoo.co.uk"],
		["07821714729","jennymakuwa@hotmail.co.uk"],
		["07492945570","zvikoej@yahoo.co.uk"],
		["07990040604","chibinjanawillis@yahoo.co.uk"],
		["07401014753","talentk.kambarami@gmail.com"],
		["07492695687","thandi.moyo@yahoo.com"],
		["07932064852","mercynhandara@yahoo.com"],
		["07848393236","faithguzha@gmail.com"],
		["07445859042","sekaindor@googlemail.com"],
		["07769222496","robbiemaze@yahoo.co.uk"],
		["07550085417","cyniecee@gmail.com"],
		["07853135470","tellomathe@hotmail.com"],
		["07464773277","toddndlovu@outlook.com"],
		["07961974484","albert.masawi@yahoo.co.uk"],
		["07850992767","berrykad@gmail.com"],
		["07444538399","Franconechaz@gmail.com"],
		["07413 097190","Jaybango247@gmail.com"],
		["07877920344","osadebejohn@hotmail.com"],
		["07506219641","faithtachiona12@gmail.com"],
		["07479498898","kudamuduma02@hotmail.co.uk"],
		["07787720997","mmahari@aol.com"],
		["07985686972","alinosnhmns@yahoo.co.uk"],
		["07868440970","lloyd.luwani@yahoo.co.uk"],
		["07584422113",""],
		["07473919909","kumbiraichuma@yahoo.co.uk"],
		["07766320584","ndeysinlove@yahoo.com"],
		["07411287211","rhodachikaponya@yahoo.co.uk"],
		["07575092869","nestairons@yahoo.com"],
		["07572503415","allinechikuni@yahoo.co.uk"],
		["07477835800","bvoro11@gmail.com"],
		["07946312289","echipaike@yahoo.com"],
		["07392836870","tasha-12@hotmail.co.uk"],
		["07886263885","humble.gweshe@originhousing.org.uk"],
		["07549377560","vince75@hotmail.co.uk"],
		["07886821854",""],
		["07932712051","athenkosiq85@gmail.com"],
		["07983951875",""],
		["07983951875",""]
	];

	foreach ($contacts as $contact) {
		echo"<h4>". $contact[0] ."</h4>";
		$twillio->message($contact[0], $message);
	}



});


Route::resource("tweets","TweetController");

$active_multilang = defined('CNF_MULTILANG') ? CNF_LANG : 'en';
 \App::setLocale($active_multilang);
 if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {

    $lang = (\Session::get('lang') !=""? \Session::get('lang') : CNF_LANG);
    \App::setLocale($lang);
}

Route::get('applynow', ['as' => 'applynow', 'uses' => 'ApplynowController@create']);
Route::post('applynow', ['as' => 'applynow', 'uses' => 'ApplynowController@store']);
Route::post('process_application', ['as' => 'process_application', 'uses' => 'ApplynowController@processLoanApplication']);
Route::get('pre-contract', 'ApplynowController@preContractAgreement');
Route::get('credit-agreement', 'ApplynowController@creditAgreement');
Route::get('testfonts', 'ApplynowController@testAgreement');

Route::get('deposits/active', 'DepositsController@active');


Route::get('sendmail', function() {

	ini_set('display_errors', 1);
	error_reporting(-1);

	$to      = 'k.mkhonza@yahoo.co.uk';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' ."\r\n".
		'Reply-To: webmaster@example.com' ."\r\n".
		'X-Mailer: PHP/' . phpversion();

	echo mail($to, $subject, $message, $headers);

	print_r(error_get_last());

	echo 'send mail';
});

Route::get('server', function() {
	phpinfo();
});

Route::get('/', 'HomeController@index');
Route::controller('home', 'HomeController');

Route::controller('/user', 'UserController');

include('pageroutes.php');
include('moduleroutes.php');

Route::get('/restric',function(){

	return view('errors.blocked');

});

Route::resource('sximoapi', 'SximoapiController');
Route::group(['middleware' => 'auth'], function()
{
	Route::get('core/elfinder', 'Core\ElfinderController@getIndex');
	Route::post('core/elfinder', 'Core\ElfinderController@getIndex');
	Route::controller('/dashboard', 'DashboardController');
	Route::controllers([
		'core/users'		=> 'Core\UsersController',
		'notification'		=> 'NotificationController',
		'core/logs'			=> 'Core\LogsController',
		'core/pages' 		=> 'Core\PagesController',
		'core/groups' 		=> 'Core\GroupsController',
		'core/template' 	=> 'Core\TemplateController',
	]);

});

Route::group(['middleware' => 'auth' , 'middleware'=>'sximoauth'], function()
{

	Route::controllers([
		'sximo/menu'		=> 'Sximo\MenuController',
		'sximo/config' 		=> 'Sximo\ConfigController',
		'sximo/module' 		=> 'Sximo\ModuleController',
		'sximo/tables'		=> 'Sximo\TablesController',
		'sximo/code'		=> 'Sximo\CodeController'
	]);



});

//Route::get('/apply-now', 'ProcessapplicationsController');

Route::get('/demo-contract', 'ProcessapplicationsController@generateContract');
Route::get('/democontract', 'ProcessapplicationsController@fontsContract');

Route::get('generateXMLFile', 'ProductsalesdataController@generateXMLFile');

Route::get('date', function() {

	$date = date('Y-m-d', strtotime('12/01-2016'));

	echo number_format(1.9, 2);

	var_dump('i am here', $date);

});

Route::get('test', function () {

	$json_array = [
    //     ["671697","22148","2018-01-22","250.00","HCST","1260.27","0.00","312.00","N","0","31","S","1968-01-08","B66 3BD","2500","S","T","EF","","62.00","Lindel McDonald ","Non Member Loan","13 Chamberlain walk, Smethwick ,Birmingham B66 3BD, Smethwick, Birmingham, B66 3BD","Other (O)","0.80","250.00","22-02-2018"  ],
    //     ["671697","22152","2018-01-22","400.00","HCST","1304.2","0.00","469.00","N","0","22","S","1964-04-20","HD4 6NQ","1800","S","T","ET","","69.00","Raphael Adeyinka Adesina","EB Non Member Loan_FL ","52, Newsome Road, Huddersfield, HD4 6NQ","Divorced (D)","0.80","400.00","12-02-2018"  ],
    //     ["671697","22052","2018-01-12","500.00","HCST","720.14","0.00","542.00","N","0","14","S","1966-10-25","DY3 1AA","2364","S","C","ET","","42.00","Linette Ndimande","EB Member Loan_FL","171 Tipton Road, Dudley, West Midlands, DY3 1AA, United Kingdom","Single (S)","0.60","500.00","26-01-2018"  ],
    //     ["671697","22309","2018-02-06","200.00","HCST","1296.62","0.00","244.80","N","0","28","S","1978-11-03","M40 0DU","1000","S","T","EF","","44.80","Mary Rubina Mungwira","Non Member Loan","55 Woodstock Road, Moston, Manchester, M40 0DU","Other (O)","0.80","200.00","06-03-2018"  ],
    //     ["671697","22551","2018-03-21","200.00","HCST","1260.27","0.00","249.60","N","0","31","S","1968-01-08","B66 3BD","2500","S","T","EF","","49.60","Lindel McDonald ","Non Member Loan","13 Chamberlain walk, Smethwick ,Birmingham B66 3BD, Smethwick, Birmingham, B66 3BD","Other (O)","0.80","200.00","21-04-2018"  ],
    //     ["671697","22251","2018-01-29","500.00","HCST","720.14","0.00","542.00","N","0","14","S","1966-10-25","DY3 1AA","2364","S","C","ET","","42.00","Linette Ndimande","EB Member Loan_FL","171 Tipton Road, Dudley, West Midlands, DY3 1AA, United Kingdom","Single (S)","0.60","500.00","12-02-2018"  ],
    //     ["671697","22532","2018-03-07","500.00","HCST","720.14","0.00","542.00","N","0","14","S","1966-10-25","DY3 1AA","2364","S","C","ET","","42.00","Linette Ndimande","EB Member Loan_FL","171 Tipton Road, Dudley, West Midlands, DY3 1AA, United Kingdom","Single (S)","0.60","500.00","21-03-2018"  ],
    //     ["671697","22162","2018-01-23","500.00","HCST","1296.62","0.00","612.00","N","0","28","S","1973-04-26","CV6 1EX","2800","M","T","ET","","112.00","Jocelyn Mufaro Mukono","EB Non Member Loan_FL ","22 , Southbank Road, Coventry, West Midlands, CV6 1EX","","0.80","500.00","20-02-2018"  ],
    //     ["671697","22297","2018-02-03","200.00","HCST","1272.17","0.00","248.00","N","0","30","S","1986-11-23","EH22 5EY","1200","S","T","EF","","48.00","Kudzai Mukahadzi","Non Member Loan","24 Laburnum Place,  Mayfield, Dalkeith, EH22 5EY","Single (S)","0.80","200.00","05-03-2018"  ],
    //     ["671697","22109","2018-01-18","1000.00","HCST","658.17","0.00","1168.00","N","0","28","S","1963-07-18","DY2 0DX","2500","M","O","ET","","168.00","Kevin  Ndingindwayo","EB Member Loan_FL (Guarantor Enabled)","78 Racemeadow Crescent, Netherton Dudley, West Midlands, DY2 0DX","","0.60","1000.00","15-02-2018"  ],
    //     ["671697","22393","2018-02-15","150.00","HCST","1272.17","0.00","186.00","N","0","30","S","1973-09-27","M7 4SB","1400","S","T","EF","","36.00","Tebeth Mesa","Non Member Loan","33 Cheshill court, Marlborough Road, Salford, Manchester, M7 4SB","Other (O)","0.80","150.00","17-03-2018"  ],
    //     ["671697","22421","2018-02-16","500.00","HCST","720.14","0.00","542.00","N","0","14","S","1966-10-25","DY3 1AA","2364","S","C","ET","","42.00","Linette Ndimande","EB Member Loan_FL","171 Tipton Road, Dudley, West Midlands, DY3 1AA, United Kingdom","Single (S)","0.60","500.00","02-03-2018"  ],
    //     ["671697","22423","2018-02-16","500.00","HCST","1296.62","0.00","612.00","N","0","28","S","1977-12-18","B66 4SE","1570","M","O","ET","","112.00","Srikanta Haralakatta Bakula  ","EB Non Member Loan_FL ","39 Barrett street, Smethwick West, Midlands , B664SE","","0.80","500.00","16-03-2018"  ]
    // ];
		//
		// [
		  [671697,22787,"2018-05-25",500,"HCST",740.14,0,542,"N",0,14,"S","1966-10-25","DY3 1AA",2364,"S","C","ET",""  ],
		  [671697,22603,"2018-04-04",500,"HCST",658.17,0,563,"N",0,26,"S","1963-11-20","SS14 1QD",2000,"S","C","ET",""  ],
		  [671697,22728,"2018-05-09",500,"HCST",720.14,0,542,"N",0,14,"S","1966-10-25","DY3 1AA",2364,"S","C","ET",""  ]
		];

//	var_dump($json_array);

//
//	$array_data = array(
//		'CoreItems' => array(
//			'FirmReferenceNumber' => '123456',
//			'TransRef' => 'UniqueTransRef-JanFile-02',
//			'Cancellation' => false
//
//		),
//		'ShortTermLoans' => array(
//			'TransactionDate' => '2015-02-20',
//			'LoanAmount' => rand(100, 10000),
//			'LoanType' => LOAN_TYPE,
//			'APR' => rand(9, 158),
//			'ArrangementFee' => rand(50, 200),
//			'TotalAmountPayable' => rand(200, 1200),
//			'Rollover' => 'N',
//			'OrderOfRollover' => 0,
//			'LengthOfTerm' => rand(1,31),
//			'ReasonForLoan' => 'S',
//			'DOBOfBorrower' => '1980-04-18',
//			'PostCode' => 'SW1 1WS',
//			'MonthlyIncomeOfBorrower' => rand(2100, 7000),
//			'MaritalStatusOfBorrower' => 'M',
//			'ResidentialStatusOfBorrower' => 'O',
//			'EmploymentStatusOfBorrower' => 'EF'
//		),
//	);

	$data = [];

	foreach ($json_array as $fca) {
		/*

		1	FirmReferenceNumber
		2	TransactionRef
		3	TransactionDate
		4	LoanAmount
		5	LoanType
		6	APR
		7	ArrangementFee
		8	TotalAmountPayable
		9	Rollover
		10	OrderOfRollover
		11	LengthOfTerm
		12	ReasonForLoan
		13	DOBOfBorrower
		14	PostCode
		15	MonthlyIncomeOfBorrower
		16	MaritalStatusOfBorrower
		17	ResidentialStatusOfBorrower
		18	Employment_status_of_borrower

		 */

		$array_data = array(
			'CoreItems' => array(
				'FirmReferenceNumber' => $fca[0],
				'TransRef' => $fca[1],
				'Cancellation' => false
			),
			'ShortTermLoans' => array(
				'TransactionDate' => date('Y-m-d', strtotime($fca[2])),
				'LoanAmount' => intval($fca[3]),
				'LoanType' => $fca[4],
				'APR' => number_format($fca[5], 2),
				'ArrangementFee' => intval($fca[6]),
				'TotalAmountPayable' => intval($fca[7]),
				'Rollover' => $fca[8],
				'OrderOfRollover' => $fca[9],
				'LengthOfTerm' => $fca[10],
				'ReasonForLoan' => $fca[11],
				'DOBOfBorrower' => date('Y-m-d', strtotime($fca[12])),
				'PostCode' => $fca[13],
				'MonthlyIncomeOfBorrower' => intval($fca[14]),
				'MaritalStatusOfBorrower' => $fca[15],
				'ResidentialStatusOfBorrower' => $fca[16],
				'EmploymentStatusOfBorrower' => $fca[17]
			),
		);
		array_push($data, $array_data);
	}

	$productSalesData = array(
		'@attributes' => array(
			'xmlns' =>"urn:fsa-gov-uk:MER:PSD006:1",
			'xmlns:xsi' =>"http://www.w3.org/2001/XMLSchema-instance",
			'xsi:schemaLocation' =>"urn:fsa-gov-uk:MER:PSD006:1 http://www.fsa.gov.uk/MER/DRG/PSD006/v1/PSD006-Schema.xsd"
		),
		'PSDFeedHeader' => array(
			'Submitter' => array(
				'SubmittingFirm' => 671697
			),
			'ReportDetails' => array(
				'ReportCreationDate' => date('Y-m-d'),
				'ReportIdentifier' => 'UniqueReportv2',


			),
		),
		'PSD006FeedMsg' => $data,
	);

	$version ='1.0';
	$encoding = 'UTF-8';

	Array2XML::init($version, $encoding);
	$xml = Array2XML::createXML('PSD006-ShortTermLoans', $productSalesData);
//	echo(header('content-type: text/xml'));
//	echo $xml->saveXML();
//
//	die();

	$filename = 'ProductSalesData' . date('Yms_Hms') . '.xml';
	header('Content-type:"text/xml"; charset="utf8"');

	header('Content-disposition: attachment; filename="'.$filename.'"');

	echo $xml->saveXML();
});
