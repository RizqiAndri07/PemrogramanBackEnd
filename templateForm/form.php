<?php
class Form{
    var $fields = array();
    var $action;
    var $submit = "";
    var $jumField=0;

    function __construct($action, $submit){
        $this->action = $action;
        $this->submit = $submit;
    }

    function displayForm(){
        echo "<form action='".$this->action."' method='post'>";
        echo "<table width='100%'>";
        for($i=0; $i<$this->jumField; $i++){
            echo "<tr>
                <td align='right'>".$this->fields[$i]['label']."</td>
                <td>";
            $this->displayField($this->fields[$i]); // Menampilkan field sesuai dengan tag
            echo "</td></tr>";
        }
        echo "<tr><td colspan='2' align='center'><input type='submit' name='tombol' value='".$this->submit."'></td></tr>";
        echo "</table>";
    }

    function displayField($field){
        // Sesuaikan output berdasarkan tipe tag
        switch($field['tag']){
            case 'input':
                echo "<input type='".$field['type']."' name='".$field['name']."'>";
                break;
            case 'select':
                echo "<select name='".$field['name']."'>";
                foreach ($field['options'] as $option) {
                    echo "<option value='".$option."'>".$option."</option>";
                }
                echo "</select>";
                break;
            case 'textarea':
                echo "<textarea name='".$field['name']."'></textarea>";
                break;
            default:
                echo "<input type='text' name='".$field['name']."'>"; // Default jika tag tidak dikenali
        }
    }

    function addField($name, $label, $tag='input', $type='text', $options=array()){
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['tag'] = $tag;
        $this->fields[$this->jumField]['type'] = $type;
        if ($tag == 'select') {
            $this->fields[$this->jumField]['options'] = $options;
        }
        $this->jumField++;
    }
}
?>
