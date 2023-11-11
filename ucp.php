
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login |PB</title>
	<style>
	@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    background:lavenderblush;
}

nav {
    position: fixed;
    padding: 25px 60px;
    z-index: 1;
}

.form-wrapper {
    position: absolute;
    left: 50%;
    top: 50%;
    border-radius: 4px;
    padding: 70px;
    width: 450px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .75);
}

.form-wrapper h2 {
    color: #fff;
    font-size: 2rem;
}

.form-wrapper form {
    margin: 25px 0 65px;
}

form .form-control {
    height: 50px;
    position: relative;
    margin-bottom: 16px;
}

.form-control input {
    height: 100%;
    width: 100%;
    background: #333;
    border: none;
    outline: none;
    border-radius: 4px;
    color: #fff;
    font-size: 1rem;
    padding: 0 20px;
}

.form-control input:is(:focus, :valid) {
    background: #444;
    padding: 16px 20px 0;
}

.form-control label {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1rem;
    pointer-events: none;
    color: #8c8c8c;
    transition: all 0.1s ease;
}

.form-control input:is(:focus, :valid)~label {
    font-size: 0.75rem;
    transform: translateY(-130%);
}

form button {
    width: 100%;
    padding: 16px 0;
    font-size: 1rem;
    background: gray;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    border: none;
    outline: none;
    margin: 25px 0 10px;
    cursor: pointer;
    transition: 0.1s ease;
}
.c{
    width: 100%;
    padding: 16px 0;
    font-size: 1rem;
    background:lightgreen;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    border: none;
    outline: none;
    margin: 25px 0 10px;
    cursor: pointer;
    transition: 0.1s ease;
}

form button:hover {
    background: #c40812;
}
.c:hover{
    background:darkgreen;
}

.form-wrapper a {
    text-decoration: none;
}
	</style>
</head>
<body>
    <nav>
        <a href="index.php"><img src="IMAGES/lnnew.png" alt="" style="height:50px; width:50px; border-radius:50%;"></a>
    </nav>
    <div class="form-wrapper">
        <h2>User Change Password</h2>
        <form action="uccode.php" method="post">
            <div class="form-control">
                <input type="password" required name="op">
                <label>Old Password</label>
            </div>
            <div class="form-control">
                <input type="password" required name="np">
                <label>New Password</label>
            </div>
            <div class="form-control">
                <input type="password" required name="cnp">
                <label>Change New Password</label>
            </div>
            <button type="submit" >Change</button>
            <a href="index.php"><button type="button" >Home</button></a>
                           
            </div>
        </form>
    </div>
</body>
</html>