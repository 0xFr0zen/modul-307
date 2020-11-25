<?php
    /**
     * Crates a Bootstrap-Card
     * 
     * @param string $imageLink
     * @param string $title
     * @param string $description
     * 
     * @return string precreated card as html
     */
    function createCard(string $imageLink, string $title, string $description = "", string $buttonText = "Open", string $cardLink = ""){

        return "
        <div class=\"col-sm-2\">
            <div class=\"card\">
                <img src=\"$imageLink\" class=\"card-img-top\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$title</h5>
                    <p class=\"card-text\">$description</p>
                    <a href=\"./formular-$cardLink.php\" class=\"btn btn-primary\">$buttonText</a>
                </div>
            </div>
        </div>
        ";
    }
    /**
     * Crates a Service-Rows-Card
     * 
     * @param array $array
     * 
     * @return string precreated cards as html
     */
    function createServices(array $services){
        // $d = ;
        $d = "";
        foreach ($services as $key2 => $value) {
            $d .= createCard($value["image"], $value["title"], $value["description"], $value["price"], $value["cardLink"]);
        }
        
        return $d;
    }
?>