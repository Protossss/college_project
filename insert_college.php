<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main_style.css">
</head>

<body>

    <?php include 'header.php';?>
    <div id="body-container">
        <div class="insert-college-form-wrapper">
            <form class="insert-college-form" action="college_enter.php"
                method="POST">
                <div class="form-element">
                    <label for="cname">College Name</label><br>
                    <input type="text" name="cname" id="cname" required>
                </div>
                <div class="form-element">
                    <label for="caffiliated">Affiliated University</label><br>
                    <select name="caffiliated" id="caffiliated" required>
                        <option value="tribhuvan">Tribhuvan University</option>
                        <option value="kathmandu">Kathmandu University</option>
                        <option value="pokhara">Pokhara University</option>
                        <option value="purbanchal">Purbanchal University</option>
                        <option value="midwestern">Mid Western University</option>
                    </select>
                </div>
                <div class="form-element">
                    <label for="address">Address</label><br>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="form-element">
                    <label for="province">Province</label><br>
                    <select name="province" id="province">
                        <option value="province 1">Province 1</option>
                        <option value="province 2">Province 2</option>
                        <option value="province 3">Province 3</option>
                        <option value="province 4">Province 4</option>
                        <option value="province 5">Province 5</option>
                        <option value="province 6">Province 6</option>
                        <option value="province 7">Province 7</option>
                    </select>
                </div><br>
                <div class="form-element">
                    <label for="cduration">Duration</label><br>
                    <input type="number" name="cduration" id="cduration" required>
                </div>
                <div class="form-element">
                    <label for="cfees">Fees</label><br>
                    <input type="number" name="cfees" id="cfees" required>
                </div>

                <div class="form-element">
                    <label for="cwebsite">Website</label><br>
                    <input type="text" name="cwebsite" id="cwebsite" required>
                </div>
                <div class="form-element">
                    <label for="ccontact">Contact</label><br>
                    <input type="number" name="ccontact" id="ccontact" required>
                </div>
                <div class="form-element">
                    <label for="cmail">E-mail</label><br>
                    <input type="email" name="cmail" id="cmail" required>
                </div>
                <div class="form-element">
                    <label for="type">Type</label><br>
                    <select name="type" id="type" required>
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
                <div class="form-element">
                    <label for="about">About</label><br>
                    <textarea name="about" id="about" cols="30" rows="10" style="width: 100%;" required></textarea>
                </div>
                <!-- <div class="form-element">
                    <label for="image">Image</label><br>
                    <input type="image" name="image" id="image" required>
                </div> -->
                <div>
                    <input type="submit" name="insert_college" value="Enter">
                </div>
            </form>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>