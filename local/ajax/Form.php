<?

class Form 
{

    public function __construct(array $data){
        foreach ($data as $key => $value) {
            $this->$key = htmlentities($value);
        }
    }

    public function getValues(): array
    {
        $reflector = new \ReflectionObject($this);
        $properties = $reflector->getProperties();
        $mapProperties = [];
        foreach ($properties as $property){
            $propertyName = $property->getName();
            $mapProperties[$propertyName] = $this->$propertyName;
        }

        return $mapProperties;
    }
}


?>