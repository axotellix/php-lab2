
<?php

    $layout_type = $_GET['layout-type'] ?? 'A';


    function tabF() {
        global $layout_type;

        switch ( $layout_type ) {

            //: plain text layout
            case 'A':

                foreach( F() as $value ) {
                    echo "$value </br>";
                }
                break;

            case 'B':

                echo '<ul>';
                foreach( F() as $value ) {
                    echo "<li>$value</li>";
                }
                echo '</ul>';
                break;

            case 'C':

                echo '<ol>';
                foreach( F() as $value ) {
                    echo "<li>$value</li>";
                }
                echo '</ol>';
                break;

            case 'D':

                $i = 1;     // set > row number

                echo '<table class = "table-dark table-max col3">';

                echo <<< THEADER
                <tr>
                    <td>№</td>
                    <td>Argument</td>
                    <td>Value</td>
                </tr>
                THEADER;

                foreach( F(true) as $value ) {
                    echo <<< FVAL
                    <tr>
                        <td>$i</td>
                        <td>{$value[0]}</td>
                        <td>{$value[1]}</td>
                    </tr>
                    FVAL;
                    $i++;
                }
                echo '</table>';
                break;

            case 'E':

                foreach( F() as $value ) {
                    echo "<div>$value</div>";
                }
                break;
            
            default:
                $layout_type = 'A';
                header('Location: index.php');
        }

    }
?>