<h1>Search Results</h1>


<?php
                $establishment_p = "Establishment:";
                    for($i = 0; $i < count($establishments); $i++){
                        $id = $establishments[$i]['id']
                ?>
                <a href= "<?php echo site_url("tracker/Establishment_specific/$id")?>">
                <button class="ton1"><strong><?php echo $establishment_p?></strong>
                <h4>
                    <?php 
                    echo "<br/>";
                       print_r($establishments[$i]['name']);
                    ?></h4>
                    </button>
                </a>
                <?php
                    }
                ?>  