<!doctype html>
<html>
<head>
	<title>
		jQuery
	</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="shorcut icon" type="image/png" href="img/jQuery.png">
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	<script src="js/toktok.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<div class="nav">
				<div id="nav">
					Kies een onderdeel:
				</div>
			</div>
			<div class="toTop">
				<a href="">Naar boven</a>
			</div>
			<div class="help">
				<span class="close"><a href="">Close (x)</a></span>
				Om omhoog te scrollen doe je het volgende:<br>
				Door gebruik te maken van de scrollbar aan de linkerkant van je scherm kun je omhoog of omlaag scrollen.<br>
				<img src="img/scroll.png" width="150"><br>
				Je kunt of de schuiver of de pijltjes aan de boven- en onderkant hierbij gebruiken.
				<b>De pijltjes zien er zo uit: </b><i>geen afbeelding beschikbaar</i>.
			</div>
			<img src="img/jQuery Logo.png" class="logo">
			<h1 class="contentStart">jQuery for Beginners</h1>
		</header>
		<p>jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. Used by over 60% of the 10,000 most visited websites, jQuery is the most popular JavaScript library in use today. jQuery is free, open source software, licensed under the MIT License.</p>

		<p class="exp" id="u1">jQuery is written in javascript. But before you even start you need to or link jQuery in with the following attributes: <span class="command">&lt;script src="//code.jquery.com/jquery-1.11.0.min.js"&gt;&lt;/script&gt;</span> and <span class="command">&lt;script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"&gt;&lt;/script&gt;</span> For the ones who don't know how to link a .js file to your HTML file. Here is the explanation: First create a .js file and save it. Then go to your ...(line truncated)...</p>

		<p><b>Opdracht 1: </b>Het is belangrijk dat je je bestanden altijd goed opslaat. Open <a href="http://www.notepadplusplus.com/">notepad++</a> op je computer en maak een nieuw bestand aan. Ga onder 'File' naar 'Opslaan als...' en sla het bestand op als <i>'example.js'</i>.</p>

		<p class="exp" id="u2">When you start with the .js file you need a command to indicate that it's jQuery. You do this with the <span class="command">$(document)</span> command, after that you put the command <span class="command">.ready()</span> behind it. <span class="command">.ready()</span> tells the jQuery that something is going to happen. between the bracets of <span class="command">.ready()</span> you need to put the function <span class="command">function(){}.</span> In the <span class="command">function(){}</span> you want to put everything the jQuery needs to do. Note: don't forget to add after every function <span class="command">;</span>.</p>
		origin/master

		<p><b>Opdracht 2: </b></p>

		<p>Nunc interdum commodo cursus. Duis lacus lacus, euismod at maximus eget, facilisis et justo. Maecenas ut varius nulla. Vestibulum viverra nisi tristique sagittis vulputate. Vivamus id sapien quis mi tincidunt cursus. Suspendisse potenti. Proin non ipsum posuere, tristique quam sit amet, sollicitudin diam. Phasellus est erat, eleifend at tellus in, euismod rutrum turpis. Cras bibendum lectus sit amet tellus sodales, vitae laoreet augue placerat. Sed eget scelerisque dui. Sed finibus nibh quis tellus aliquam, at vulputate risus tempor. Etiam vehicula lorem eget iaculis molestie. Proin sagittis, purus et sagittis tempus, lacus lacus rutrum libero, id elementum nisl magna id mauris. Praesent vestibulum convallis auctor.</p>

		<p>Donec mollis in diam vehicula ullamcorper. In malesuada neque id ipsum varius tristique. Praesent eget tellus mi. Proin semper dapibus sodales. Donec hendrerit urna ac ipsum condimentum, in elementum arcu vulputate. Pellentesque non eleifend risus. Aliquam tristique enim non dui commodo, ac viverra urna ultrices. Sed commodo neque et condimentum luctus.</p>

		<p>Integer sodales vitae odio fermentum ullamcorper. Nullam molestie fringilla ligula in maximus. Sed nec nulla elit. Maecenas est felis, egestas ut nisl vitae, fermentum tincidunt purus. Sed erat ante, condimentum ac dolor non, porta pharetra erat. Donec tincidunt urna risus, consequat iaculis augue molestie pharetra. Etiam dolor magna, venenatis fermentum felis vitae, lobortis vehicula quam. Fusce pulvinar augue quis turpis scelerisque, id dignissim quam feugiat. Sed commodo in lorem ut lacinia. Aenean at est ac justo aliquam porta. Sed commodo dapibus ligula ut bibendum. Aliquam nec lorem a mauris ultrices aliquet lacinia in dui. Nulla consectetur nulla id leo cursus iaculis. Fusce hendrerit turpis eget gravida cursus.</p>

		<p class="exp" id="u3">Pellentesque vitae enim molestie, ultricies nibh et, fringilla ex. Sed eget laoreet neque, non cursus magna. Proin aliquam maximus dui ornare fringilla. In vitae ornare dolor. Mauris sed rutrum ante, vel malesuada ante. Etiam imperdiet ullamcorper orci at porttitor. Donec accumsan nisl est, vitae laoreet nisl luctus mattis. Nullam eu finibus orci, eu consectetur mauris. Integer commodo ligula eu magna finibus imperdiet.</p>

		<p>Nulla ut urna quis quam dapibus gravida. Maecenas maximus vitae eros ac ullamcorper. Etiam posuere vestibulum orci, ut blandit mauris. Nulla lacinia, nibh vulputate suscipit faucibus, odio ipsum tempus nunc, at sagittis augue est id orci. Morbi rutrum quam sit amet euismod tristique. Nunc id tincidunt ante. Curabitur vestibulum eros et arcu sagittis, vel cursus mi sodales.</p>

		<p>Ut blandit pharetra arcu at ullamcorper. Vestibulum facilisis justo nulla, sit amet semper nunc porta ut. Phasellus ornare interdum erat quis dictum. Etiam nulla ligula, congue a enim sit amet, faucibus ultricies metus. Phasellus ac mattis mi. Phasellus eget libero vel diam malesuada congue in nec magna. Aliquam vehicula, risus non porttitor bibendum, lectus velit feugiat tellus, a euismod ex dolor in velit. Integer egestas fermentum erat eget sollicitudin. Duis volutpat sodales quam vitae blandit. Curabitur et fringilla erat, quis cursus nunc.</p>

		<p>In justo mauris, gravida sit amet maximus ut, semper at purus. Mauris eu mollis nisi. Suspendisse eget ultricies sem. Aenean luctus arcu eget ullamcorper faucibus. Ut ultrices, nisl et facilisis rhoncus, mauris lorem hendrerit purus, in blandit est risus non lorem. Morbi finibus elit at nunc vulputate accumsan. Praesent et nisi accumsan, venenatis dolor vel, congue dolor. Suspendisse potenti. Aliquam tristique metus at quam vulputate, sed facilisis dui faucibus. Vivamus et posuere turpis. Suspendisse potenti.</p>

		<p>Etiam in nibh hendrerit, porta mi ut, tristique dui. Aenean vitae erat quis purus sodales venenatis. Duis eleifend elementum libero, id aliquam nisi hendrerit venenatis. Donec aliquet ultricies est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim consectetur velit et elementum. Nullam pellentesque ultrices purus id sodales.</p>

		<p class="exp" id="u4">Donec at faucibus lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse nec leo felis. Nullam ut luctus libero. Sed in neque id odio accumsan ornare. In hac habitasse platea dictumst. Nulla facilisi. Maecenas porta tincidunt quam, in viverra sapien ultricies consectetur. Vestibulum ac ex aliquet, porta orci eu, bibendum lacus. Nam eu purus et turpis blandit ullamcorper. Nulla facilisi.</p>

		<p>Pellentesque ut consectetur turpis, in elementum lacus. Suspendisse a accumsan nisl. Nunc ultrices libero at urna fermentum, vel tempus nisi iaculis. Ut ultricies quam sit amet pellentesque faucibus. Donec lacinia euismod ex, quis hendrerit nunc porttitor facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed mollis convallis felis eget laoreet. Donec egestas nisl eget metus rhoncus suscipit. Curabitur ut ante ullamcorper, gravida tortor at, tincidunt ipsum. Fusce accumsan sapien a orci malesuada feugiat. Nulla facilisi. Aenean vitae neque malesuada, sollicitudin odio quis, iaculis massa. Aliquam ac lacus sed mauris fermentum rutrum. Vivamus elit mauris, auctor ac erat vel, efficitur lobortis quam. Aenean placerat vulputate dolor et vulputate.</p>

		<p>In tincidunt lacinia ex, eu porttitor mi convallis ut. Maecenas ac libero efficitur, laoreet risus at, suscipit quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus rhoncus faucibus rhoncus. Ut et viverra ipsum, vitae hendrerit lorem. Nunc vitae aliquet lectus. Sed luctus, leo quis auctor vehicula, sem risus imperdiet ante, congue egestas turpis urna sit amet libero. Nulla vel urna blandit, varius eros quis, pharetra erat. Integer ut tellus dictum, ornare dolor sed, gravida massa.</p>

		<p>Sed sagittis sit amet leo at accumsan. Fusce nibh urna, imperdiet ut blandit at, pulvinar sit amet enim. Vestibulum feugiat odio id ornare sodales. Donec quis vulputate leo. Suspendisse auctor vehicula suscipit. Integer sed pellentesque lorem, sed pulvinar libero. Nam posuere et risus ut suscipit. Duis porta ac justo nec blandit. In ac accumsan tellus, a blandit lorem. Nullam eget dui vel odio pellentesque aliquam.</p>

		<p>Praesent sit amet ligula convallis, maximus tellus in, convallis lorem. Nunc semper libero non magna tempor, a tempor mi tristique. Mauris semper ultricies massa, ut convallis nisl vestibulum eget. Aliquam malesuada porta nulla, in feugiat ligula ultrices ac. Curabitur tempus lectus vel lacus consectetur, in ultricies justo porttitor. Proin dignissim consequat nibh eu vulputate. Ut quis volutpat metus. Aenean aliquet velit est, non tincidunt sapien lobortis et. Etiam sit amet ligula id sem cursus pulvinar ut et magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque egestas, arcu eget porta rhoncus, magna ligula posuere urna, varius fermentum nulla nibh ut erat. Nullam tempus feugiat diam, sed elementum urna placerat sed. Cras commodo ligula id dignissim lacinia.</p>

		<p>Nunc risus lorem, ornare quis tempus in, lobortis scelerisque ipsum. Etiam vel sapien pharetra, consequat sem a, vestibulum neque. Aenean porta quam non nulla porta, non fringilla nisi vestibulum. Aliquam eu nisl arcu. Nullam scelerisque ex in lacus eleifend convallis in non mauris. Donec sodales hendrerit vulputate. Phasellus lobortis, mauris vel rutrum tempus, ligula leo auctor tortor, imperdiet sollicitudin neque lacus vitae eros.</p>

		<p>Sed blandit malesuada nunc et rhoncus. Sed condimentum sed enim quis tristique. Nulla et elit in risus accumsan cursus. Nam at viverra arcu. Donec luctus enim ut orci volutpat, id auctor erat condimentum. Suspendisse egestas eros ac massa tempor, in ultrices sapien mollis. Nunc bibendum purus vitae sollicitudin sagittis. Praesent bibendum, velit vitae consequat lobortis, dolor nunc volutpat erat, vitae hendrerit turpis urna eget neque. Aliquam sed malesuada ipsum. Vivamus luctus enim nec maximus placerat.</p>

		<p>Etiam a placerat mauris, et fringilla erat. Maecenas vel lacus tortor. Suspendisse potenti. Nullam rutrum ultrices nisi in ullamcorper. Ut tristique augue ac interdum egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur pulvinar, magna sed finibus molestie, odio quam tincidunt tortor, eget tincidunt lectus ante sit amet justo. In venenatis justo vel sem semper, non tempor nibh cursus. In laoreet mi leo, vitae imperdiet diam gravida nec. Duis id tincidunt urna, id commodo tellus. In sed justo et urna ultrices pellentesque nec ac ante. Nullam feugiat mauris ac turpis dictum, id ultrices massa elementum. Duis et felis vitae felis facilisis condimentum. Nunc euismod nisl sit amet quam bibendum pellentesque. Cras venenatis, ligula ac pharetra eleifend, elit sem pulvinar tellus, sed suscipit ante dui ut arcu.</p>

		<p class="exp" id="u5">Curabitur eget metus interdum, elementum velit ac, suscipit erat. Mauris a lorem turpis. Mauris molestie lacus urna, nec semper lacus faucibus eu. Suspendisse in velit commodo, rhoncus turpis quis, maximus magna. Fusce sit amet tortor nisi. Etiam at felis nisi. Nullam posuere vulputate commodo. Donec tristique a sem et egestas. Morbi elementum condimentum nisi, non vehicula tortor viverra sed. Vivamus at porttitor sapien. Maecenas rhoncus nisi nibh, non ultricies neque hendrerit ut. Phasellus convallis sapien egestas, pretium nunc nec, finibus ante.</p>

		<p>Suspendisse metus massa, ultrices in nulla sit amet, efficitur venenatis est. Nunc vitae ultrices sapien, vel fermentum nibh. Ut dui tortor, semper eu tellus vel, blandit dapibus turpis. Mauris congue, lorem at laoreet auctor, sapien urna dictum nisi, vitae viverra nunc erat sed erat. Proin nisl magna, sagittis sit amet mauris nec, ultrices bibendum tellus. Mauris dignissim sem vitae libero laoreet hendrerit. Nunc finibus leo vestibulum rhoncus laoreet. Curabitur consequat mauris at hendrerit laoreet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean laoreet, lectus vel blandit pellentesque, nulla mi condimentum elit, a dictum sem eros a ipsum. Integer iaculis tincidunt rhoncus. Etiam vestibulum ac sapien nec imperdiet. Nam vitae turpis mattis, rhoncus urna sit amet, maximus felis. Fusce fringilla mauris lorem, sit amet imperdiet metus porttitor ut. Aenean accumsan sem eget libero semper dignissim.</p>

		<p>Praesent et pulvinar diam. Morbi condimentum porttitor ligula non tincidunt. In blandit mauris augue, quis varius massa tempus eget. Morbi maximus vel massa nec consectetur. Morbi auctor condimentum iaculis. Integer ut tristique justo. Aliquam scelerisque convallis posuere. Pellentesque vitae turpis purus. Pellentesque faucibus, mi et finibus vehicula, ligula elit porta nisl, ut fringilla tellus nibh ut nisi. Nam commodo elementum maximus. Pellentesque iaculis lectus ac sapien tempus, auctor maximus neque ultricies. Quisque aliquam, libero a tincidunt eleifend, purus mi vehicula massa, efficitur facilisis nisl justo non mi. Aliquam rhoncus convallis molestie. Proin vel sem ac nisl maximus vehicula id non sapien.</p>

		<p>Vestibulum iaculis neque leo, sodales euismod quam blandit sed. Maecenas luctus sollicitudin sodales. Sed ac eros nunc. Vestibulum consequat eros posuere erat semper, ac condimentum neque cursus. Cras viverra vulputate dolor, et faucibus mauris ultrices ut. Quisque scelerisque lectus eget tellus mattis varius gravida eget purus. Fusce nec venenatis metus. Fusce orci turpis, laoreet nec porta ut, auctor nec massa. Nunc ipsum elit, mollis in metus id, molestie elementum neque.</p>

		<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla in turpis vel urna volutpat eleifend. Pellentesque enim justo, pharetra vel sodales ut, finibus in augue. Proin vitae fringilla orci. Mauris consequat consequat sodales. Sed feugiat nunc lorem, id mollis diam tempus blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean cursus urna neque, vitae cursus lacus consequat at. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sit amet elit molestie, molestie urna eu, aliquam diam. Phasellus condimentum congue risus eu molestie. Vestibulum porttitor lacus non turpis condimentum suscipit.</p>

		<p class="exp" id="u10">In vel laoreet nibh. Mauris dapibus tincidunt quam, mollis finibus diam lacinia ac. Phasellus sit amet ex turpis. Pellentesque sollicitudin eros turpis, id lobortis massa rutrum sed. Vestibulum condimentum augue a sem imperdiet, id sollicitudin nisi malesuada. Aliquam erat volutpat. Ut risus urna, aliquam sed quam eget, ultrices sodales mi. Duis id viverra magna, eget sollicitudin urna.</p>
		<footer>
			This Site is made by Aznarthon and danivenk (<a href="http://hakkajiten.com" target="_blank">Hakkajiten</a>), and is commissioned by Mr. Rejaibi
		</footer>
	</div>
</body>
</html>