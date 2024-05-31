<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="./infUsu.css">
    <title>Informacion</title>

</head>
<body>
    <header>
        <div>
            <nav class="navcompleta navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand me-2" href="./index.php">
                <img
                class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo"
                height="16"
                alt="./index.php"
                loading="lazy"
                style="margin-top: -1px;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarButtonsExample">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                            </li>
                            </ul>          
                        <div class="d-flex align-items-center">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <h1>Personal Information</h1>
	<form id="personal-info-form">
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="first-name" required>

		<label for="last-name">Last Name:</label>
		<input type="text" id="last-name" name="last-name" required>

		<label for="nationality">Nationality:</label>
		<input type="text" id="nationality" name="nationality" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="phone-number">Phone Number:</label>
		<input type="tel" id="phone-number" name="phone-number" required>

		<label for="bio">Tell us about yourself:</label>
		<textarea id="bio" name="bio" rows="4" cols="50"></textarea>

		<button type="submit">Submit</button>
	</form>

    
<footer id="foot">        
        
</footer>
<script src="../scriptGeneral.js"></script>
<script src="infUsu.js"></script>

</body>
</html>