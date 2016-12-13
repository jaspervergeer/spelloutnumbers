	
				<br><br><br>
				<!-- if a numberpage show searchbox, advertisement and homepage link -->
				<?php if ($title != 'Spell Out Numbers Home'){ if ($title != 'Privacy Policy'){?>
					<script>
					//check if the searchinput is a number
						function checkInput() {
							var x = document.forms["searchbox"]["number"].value;
							x = x.trim();
							if(isNaN(x) || x == "") {
								document.forms["searchbox"]["number"].value = "";
								return false;
							}
						}
					</script>
					<!-- searchbox -->
					<form name="searchbox" onsubmit="return checkInput()" autocomplete="off">
						Search number: 	<input name="number" type="number" pattern="[0-9]*" inputmode="numeric" style="width:80px;" autofocus>
						<input type="hidden" name="l" value="<?php echo $language;?>">
						<input type="submit" value="Go">
					</form>
					<br><br>
					<!-- google ad -->
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- spelloutnumbers -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-0736501223732422"
					     data-ad-slot="7145084565"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>

					<br><br>
					<a href="/">www.spelloutnumbers.com</a>
					<!-- If it is the privacy policy page show homepage link -->
				<?php } else { ?>

					<a href="/">www.spellloutnumbers.com</a>
					<!-- If it is the home page show privacy policy link -->
				<?php }} else { ?>

					<a href="/privacy_policy.php">Privacy Policy</a>

		        <?php } ?>
		</div>
	</div>
</div>

</body>
</html>