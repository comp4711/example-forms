<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * This is a simple form, meant to be handled traditionally
 */
?><!DOCTYPE html>
<html lang="en">
    <body>

		<h1>Silly input form:</h1>
		<div id="body">
			<form action="/handler/handle_traditional" method="post">
				Why don't they play poker in the jungle?<br>
				<input type="radio" name="jungle" value="treefrog"> Too many tree frogs.<br>
				<input type="radio" name="jungle" value="cheetah"> Too many cheetahs.<br>
				<input type="radio" name="jungle" value="river"> Too many rivers.<br><br>
				Check the box if you want your answer to be graded:
				<input type="checkbox" name="grade" value="yes"><br><br>
				<input type="submit" name="submit" value="Submit"><br>
			</form>	
		</div>

		<hr/>
		<a href="/handler">Return to forms handling examples</a>
		<a href="/">Return to the home page</a>
    </body>
</html>