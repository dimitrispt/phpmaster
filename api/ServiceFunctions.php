<?php
//create a SOAP service


class ServiceFunctions {
    
    /**
     * 
     * @param string $first_name
     * @param string $last__name
     * @return string
     */
    public function getDisplayName($first_name, $last__name) {
        $name = '';
        $name .= strtoupper(substr($first_name,0,1));
        $name .= ' ' . ucfirst($last__name);
        return $name;
    }
    
    /**
     * 
     * @param string $paragraph
     * @return int
     */
    public function countWords($paragraph) {
        $words = preg_split('/[. ,!?;]+/', $paragraph);
        return count($words);
    }
}
?>
