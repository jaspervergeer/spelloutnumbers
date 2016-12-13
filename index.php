<?php

	if($_GET['l'] == 'es'){			
		$language = 'es';
		$language_name = 'Spanish';
	} else if($_GET['l'] == 'fr'){
		$language = 'fr';
		$language_name = 'French';
	} else if($_GET['l'] == 'ru'){
		$language = 'ru';
		$language_name = 'Russian';
	} else if($_GET['l'] == 'pt'){
		$language = 'pt';
		$language_name = 'Portuguese';	
	} else if($_GET['l'] == 'de'){
		$language = 'de';
		$language_name = 'German';
	} else if($_GET['l'] == 'ar'){
		$language = 'ar';
		$language_name = 'Arabic';		
	} else if($_GET['l'] == 'it'){
		$language = 'it';
		$language_name = 'Italian';
	} else if($_GET['l'] == 'zh'){
		$language = 'zh';
		$language_name = 'Chinese';	
	} else {
		$language = 'es';
		$language_name = 'Spanish';
	}

	// make sure, the number is really a number.. and not html
	$number = htmlspecialchars($_GET['number']);
			
	// give page a title
	if(is_numeric($number)){
		$title = 'Write '.$number.' in '.$language_name;
	} else {
		$title = 'Spell Out Numbers Home';
	}
	include('header.php');


			// Is this a number page? Or the home page?
			// If there is a number, then it's a number page
			if(is_numeric($number)){// this is the number page

				echo '<a href="/"><i class="material-icons" style="font-size:40px; color:#74a5fc;">home</i></a><br><br>';//home button
				
				echo 'How to write '.$number.' in '.$language_name.':<br><br>';

				$f = new NumberFormatter($language, NumberFormatter::SPELLOUT);
				echo '<b>'.$f->format($number).'</b>';

				echo '<br><br><br>';

				if($number < 100){
					$number_to_add = 1;
				} elseif ($number < 1000 ) {
					$number_to_add = 10;
				} elseif ($number < 10000 ) {
					$number_to_add = 100;
				} elseif ($number < 100000 ) {
					$number_to_add = 1000;
				} elseif ($number < 10000000 ) {
					$number_to_add = 10000;
				} else {
					$number_to_add = 10000000;
				}


				if($number_to_add < 1000000){
					$previous_number = $number - $number_to_add;
						
					echo '<a href="index.php?number='.$previous_number.'&l='.$language.'"> &lt; '.$previous_number.'</a>';
					
					echo ' &nbsp; &nbsp;  ';

					$next_number = $number + $number_to_add;
					echo '<a href="index.php?number='.$next_number.'&l='.$language.'"> '.$next_number.' &gt; </a>';
				}

			} else { // is this the homepage
?>
				<b>Welcome to Spell Out Numbers</b><br><br>
				Here you will find the spelling of numbers in many languages. Just click on a number!
				<br>	
				<br>
				<b>Spanish</b><br>
				<?php
				//
				// Spanish numbers
				// 
				show_numbers('es');
				?>
				<br><br><b>French</b><br>
				<?php
				//
				// French numbers
				// 
				show_numbers('fr');
				?>
				<br><br><b>German</b><br>
				<?php
				//
				// German numbers
				// 
				show_numbers('de');
				?>
				<br><br><b>Italian</b><br>
				<?php
				//
				// Italian numbers
				// 
				show_numbers('it');
				?>
				<br><br><b>Portuguese</b><br>
				<?php
				//
				// Portuguese numbers
				// 
				show_numbers('pt');
				?>
				<br><br><b>Russian</b><br>
				<?php
				//
				// Russian numbers
				// 
				show_numbers('ru');
				?>
				<br><br><b>Chinese</b><br>
				<?php
				//
				// Chinese numbers
				// 
				show_numbers('zh');
				?>
				<br><br><b>Arabic</b><br>
				<?php
				//
				// Arabic numbers
				// 
				show_numbers('ar');




			} // is this the homepage


function show_numbers($language){

				$x = 0;
				while($x < 20){
					echo '<a href="index.php?number='.$x.'&l='.$language.'">'.$x.'</a> ';
					$x = $x + 1;
				}
				while($x < 100){
					echo '<a href="index.php?number='.$x.'&l='.$language.'">'.$x.'</a> ';
					$x = $x + 10;
				}
				while($x < 10000000){
					echo '<a href="index.php?number='.$x.'&l='.$language.'">'.$x.'</a> ';
					$x = $x * 10;
				}

}



include('footer.php');

