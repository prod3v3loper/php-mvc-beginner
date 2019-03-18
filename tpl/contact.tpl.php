<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <h3><?php echo $content[0] ?></h3>
                <p><?php echo $content[1] ?></p>
                
                <form action="index.php?p=submit" method="post">
                    <div class="form-group"><input type="text" name="nachricht[name]" placeholder="Name" class="form-control"></div>
                    <div class="form-group"><input type="text" name="nachricht[mail]" placeholder="E-Mail" class="form-control"></div>
                    <div class="form-group"><textarea name="nachricht[message]" placeholder="Nachricht" class="form-control"></textarea></div>
                    <button type="submit" name="nachricht[send]" class="btn btn-info">Senden</button>
                </form>
                
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</main>