
<footer>
    <hr>
    <div class="container text-center">
        <?php
        $name = basename($_SERVER['PHP_SELF']);
        $newname = substr($name, -6);
        if ($newname == 'Sk.php'){
            echo '      <h3>Podpíš sa, keď nechceš príst o niečo</h3>
                     <p>Napíš svoje meno a e-mail </p>';

            echo '<form action="" class="form-inline">
            <div class="form-group">
                <label for="subscription">Meno:</label>
                <input type="text" class="form-control" id="subscription" placeholder="Neved...">
            </div>
            <div class="form-group">
                <label for="email">Email adresa:</label>
                <input type="text" class="form-control" id="email" placeholder="Email-címed...">
            </div>
            <button type="submit" id="subscribe" class="btn btn-default">Subscribe</button>

        </form>
        ';
        }
        else {
            echo '     <h3>Iratkozz fel, ha nem akarsz lemaradni semmiről!</h3>
                   <p>Írd be a neved, és email-címed</p>';
            echo '<form action="php/submitEmail.php" method="get" class="form-inline">
                <div class="form-group">
                    <label for="name">Név:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Neved...">
                </div>
                <div class="form-group">
                 <label for="email">Email cím:</label>
                 <input type="text" class="form-control" id="email" name="email" placeholder="Email-címed...">
                </div>
                <button type="submit" id="subscribe" class="btn btn-default">Feliratkozás</button>
                 </form>
        ';
        }
        ?>




        <hr>
        <ul class="list-inline">
            <li><a target="_blank" href="https://www.facebook.com/trollnalja" class="fa fa-facebook"></a></li>
            <li><a target="_blank" href="https://twitter.com/RealTrollnalja" class="fa fa-twitter"></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCcB-fWBjv-kobZhbFyRoqDA" class="fa fa-youtube"></a></li>
            <li><a target="_blank" href="https://www.instagram.com/trollnalja" class="fa fa-instagram"></a></li>
        </ul>

        <p>created by brThong &copy; Copyright @ 2017</p>

    </div><!-- end Container-->
</footer>


<!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>