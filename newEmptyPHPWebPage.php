        <?php
echo "哈囉~~<br>";
class Cat{
    public $name;
    protected  $position;
    
    public function _construct($name){
        $this->name =$name;
        $this->position =['x'=>0,'y'=>0]; 
    }
    public  function moveto($x,$y){
        $this->position['x'] = $x;
        $this->position['y'] = $y;
        return $this->position;
    }
    public  function moveadd($x,$y){
        $this->position['x'] =  $this->position['x']+1 ;
        $this->position['y'] =  $this->position['y']+1;
        return $this->position;
    }
public function resetPosition(){
    $this->moto(0,0);
}
    
    }
$pet = new cat("kiki");
echo $pet->name;
echo "<br>";
$pet->name= "hello kiki"

    
        ?>

