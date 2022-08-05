<?php
	/*
    cheloniangall.com is a website created to host a webchat intended to replace the CodinGame's deleted one.
    Copyright (C) 2022 BlaiseEbuth

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
    */

	if (isset($_POST['account_form_type'])) {
		
		$_SESSION['account_form_type'] = $_POST['account_form_type'];
	}
	else if (!isset($_SESSION['account_form_type'])) {

		$_SESSION['account_form_type'] = 'log_in';
	}
?>
<div id = "account_bar">
	<a href = "https://cheloniangall.com">
		<img
			src = "images/title.png"
			alt = "ChelonianGall logo"
			id = "site_title"
		/>
	</a>
	<?php
		if (!isset($_SESSION['login']) || $_SESSION['login'] != 'valid') {

			if ($_SESSION['account_form_type'] == 'log_in') {
	?>
			<form
				id = "log_in_form"
				action = "backend/login.php"
				method = "post"
			>
				<input
					type = "text"
					id = "log_in_username"
					name = "username"
					placeholder = "USERNAME"
					<?php
						if ($_SESSION['login'] == 'bad_username') {

							echo('class = "bad_username"');
						}

						if (isset($_SESSION['username'])) {

							echo("value = \"{$_SESSION['username']}\"");
						}
					?>
					minlength = "1"
					maxlength = "30"
					spellcheck = "false"
					required
				/>
				<input
					type = "password"
					id = "log_in_password"
					name = "password"
					placeholder = "PASSWORD"
					<?php
						if ($_SESSION['login'] == 'bad_password') {

							echo('class = "bad_password');
						}
					?>
					minlength = "8"
					maxlength = "50"
					spellcheck = "false"
					required
				/>
				<input
					type = "submit"
					value = "LOG IN"
				/>
			</form>
			<form
				id = "switch_to_sign_up"
				action = "https://cheloniangall.com"
				method = "post"
			>
				<input
					type = "hidden"
					name = "account_form_type"
					value = "sign_up"
				/>
				<label>
					No account yet?
				</label>
				<button type = "submit">
					SIGN UP
				</button>
			</form>
		<?php
			}
			else {
		?>
			<form
				id="sign_up_form"
				action="backend/signup.php"
				method="post"
			>
				<input
					type = "text"
					name = "username"
					placeholder = "USERNAME"
					<?php
						if ($_SESSION['signup'] == 'username_already_used') {

							echo('class = "username_already_used"');
						}

						if (isset($_SESSION['username'])) {

							echo("value = \"{$_SESSION['username']}\"");
						}
					?>
					minlength = "1"
					maxlength = "30"
					spellcheck = "false"
					pattern = "[a-zA-Z0-9_]{1,30}"
					title = "From 1 to 30 characters among &quot;0-9a-z_&quot;"
					required
				/>
				<input
					type = "password"
					name = "password"
					placeholder = "PASSWORD"
					<?php
						if ($_SESSION['signup'] == 'signup_error') {

							echo('class = "signup_error');
						}
					?>
					minlength = "8"
					maxlength = "50"
					spellcheck = "false"
					required
				/>
				<input
					type = "submit"
					value = "SIGN UP"
				/>
			</form>
			<form
				id = "switch_to_log_in"
				action = "https://cheloniangall.com"
				method = "post"
			>
				<input
					type = "hidden"
					name = "account_form_type"
					value = "log_in"
				/>
				<label>
					Already have an account?
				</label>
				<button id = "switch_to_log_in">
					LOG IN
				</button>
			</form>
	<?php
			}
		}
		else {
	?>
		<div id = "user_identity">
			Logged in as 
			<span>
				<?php
					echo($_SESSION['username'])
				?>
			</span>
		</div>
		<form
			id = "log_out_form"
			action = "backend/logout.php"
			method = "post"
		>
			<button
				id = "log_out_button"
				type = "submit"
				onclick = "logout()"
			>
				LOG OUT
			</button>
		</form>
	<?php
		}
	?>
</div>