<main>
    <div class="wrapper">
        <!-- ciclo foreach per iterare ogni album all'interno dell'array -->
        <?php foreach($db as $album) { ?>        
        <div class="album">
            <div class="album-bg">
                <div class="album-img">
                    <!-- Tramite php, viene inserito il link alla src dell'img -->
                    <img src="<?php echo $album['poster']; ?>" alt="cover album">
                </div>
                <div class="album-text">
                    <!-- Ogni valore contenuto degli album è stampato tramite php nell'html -->
                    <h2><?php echo $album['title']; ?></h2>
                    <p><?php echo $album['author']; ?></p>
                    <p><?php echo $album['genre']; ?></p>
                    <p><?php echo $album['year']; ?></p>
                </div>
            </div>            
        </div>
    
        <?php } ?>
        
    </div>
</main>