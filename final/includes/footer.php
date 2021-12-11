<footer> <!-- START footer section //////// -->
        <ul>
            <li
            >copyright &copy; 
                <?php
                    $date_current = date('Y');
                    $date_created = 2017;
                    if ($date_current == $date_created) {
                        echo $date_current;
                    }
                    else {
                        echo ''.$date_created.' - '.$date_current.'';
                    }
                ?>
            </li>
            <li>All rights reserved</li>
            <li><a href="">Terms of use</a></li>
            <li><a href="">web design by Edwin</a></li>
            <li><a href="http://validator.w3.org/check/referer" target="_blank">HTML validation</a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">CSS validation</a></li>
        </ul>

    </footer>

    </div> <!-- END of wrapper -->

</body> <!-- END of body /////////////////////////////////////////// --> 

</html>