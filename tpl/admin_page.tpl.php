<main>
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                
                <!--h3{Page}+ul>li*5>a[href=test]{seite $}-->
                
                <h3>Pages</h3>
                
                <ul>
                    <li><a href="index.php">Startseite</a></li>
                    <li><a href="index.php">Über Uns</a></li>
                    <li><a href="">seite 3</a></li>
                    <li><a href="">seite 4</a></li>
                    <li><a href="">seite 5</a></li>
                </ul>
                
                <!--form.form-inline>div.form-group*2>input[type=text].form-control-->
                
                <form action="index.php?p=newPage" method="post" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="seiten[name]" class="form-control"></div>
                    <div class="form-group">
                        <input type="text" name="seiten[label]" class="form-control"></div>
                    <button type="submit" class='btn btn-info'>Speichern</button>
                </form>

            </div>
            
            <div class="col-md-6">
                
            </div>
            
        </div>
    </div>
</main>