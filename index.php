<?php require_once('header.php'); ?>
    
    <section class="container">
        <div class="post-container">
            <?php for ($i=1; $i <= 8; $i++) { ?> 
                <article class="post-item">
                    <div class="post-header <?php echo $i == 2 ? 'no-image' : 'with-image'; ?>">
                        <div class="bg-image" style="background-image: url('posts-image/post (<?php echo $i; ?>).png')"></div>
                    </div>
                    <header class="post-title">
                        <h2 class="title">
                            <a href="post.php" title="Post Title">Post Title</a>
                        </h2>
                    </header>
                    <div class="post-excerpt">
                        <?php randonLorenIpsun(); ?>
                    </div>
                    <footer class="post-footer">
                        <a href="post.php" class="btn btn-default btn-readmore">
                            <i class="fa fa-chevron-right icon" aria-hidden="true"></i>
                            <i class="fa fa-thumbs-o-up icon-hover" aria-hidden="true"></i>
                            Ver post
                        </a>
                    </footer>
                </article>
            <?php } ?>
        </div>
    </section>
    
    <div class="text-center">
        <ul class="pagination">
            <li>
                <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#">1</a>
            </li>
            <li class="active">
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    
<?php require_once('footer.php'); 



function randonLorenIpsun($p = 1){
    $loren = getIpsun();
    $len = strlen($loren);
    
    $min = rand(0, $len);
    $max = rand(0, $len);
    
    $loren = substr($loren, $min, $max);
    
    $lines = explode("\r", $loren);
    $rows = array();
    
    foreach ($lines as $index => $line) {
        if($index < $p)
            $rows[] = '<p>' . $line . '</p>';
    }
    
    $loren = implode("", $rows);
    
    echo ($loren);
}
function getIpsun(){
    return 'Liquorice sesame snaps powder carrot cake gummies carrot cake pastry macaroon pastry. Croissant cupcake caramels biscuit bonbon pastry cotton candy. Topping dessert toffee soufflé pie donut donut. Chupa chups bear claw marshmallow lemon drops sweet roll biscuit chupa chups.
Dessert marzipan donut. Apple pie lemon drops caramels liquorice ice cream lemon drops cake brownie. Halvah jelly-o croissant chocolate pastry croissant cupcake jelly-o pie. Biscuit fruitcake biscuit liquorice bonbon jelly candy cookie apple pie.
Chocolate bar chocolate cake cake liquorice cupcake biscuit. Sugar plum gummi bears soufflé. Bear claw chocolate tiramisu donut brownie icing.
Croissant pudding caramels oat cake. Jelly lemon drops chocolate marzipan. Cheesecake liquorice soufflé sweet biscuit dragée pudding caramels.
Sweet roll lemon drops cake cheesecake sweet powder. Marshmallow cake tiramisu. Chocolate dessert tiramisu apple pie sweet.
Pastry danish icing cotton candy cookie. Fruitcake topping gingerbread. Muffin wafer sesame snaps bear claw croissant.
Cotton candy croissant jelly-o. Macaroon pastry toffee icing apple pie lemon drops gummi bears icing jelly. Cotton candy icing sugar plum marzipan fruitcake dessert cotton candy sugar plum.
Topping pastry apple pie bonbon chocolate cake pastry pastry cookie. Sweet jelly beans wafer brownie cake cake candy. Jujubes icing jelly gingerbread cake.
Fruitcake gummies icing sweet roll. Cupcake jujubes halvah tiramisu powder cheesecake topping. Jelly-o marshmallow liquorice fruitcake. Powder soufflé candy canes cake muffin jelly-o liquorice chocolate bar danish.
Brownie wafer apple pie sugar plum cotton candy jelly beans lollipop. Sweet lemon drops danish sweet roll biscuit. Jujubes cookie gingerbread.';
}