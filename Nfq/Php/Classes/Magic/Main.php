<?php namespace Php\Classes\Magic;

class Main {

    private $text;
    public $var;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function __destruct()
    {
        echo "Skripto pabaiga.";
    }

    public function __get($text)
    {
        if (property_exists($this, $text)) {
            return $this->text;
        }
    }

    public function __set($text, $value)
    {
        if (property_exists($this, $text)) {
            $this->text = $value;
        }
    }

    public function __call($metodas, $arguments)
    {
        echo "Kviečiamas metodas: '$metodas' su argumentais: "
            . implode(', ', $arguments) . "<br>";
    }

    public static function __callStatic($metodas, $arguments)
    {
        echo "Kviečiamas statinis metodas: '$metodas' su argumentais: "
            . implode(', ', $arguments) . "<br>";
    }

    public function  __isset($text)
    {
        return isset($this->text);
    }

    public function __unset($text)
    {
        unset($this->text);
    }

    public function __toString()
    {
        return $this->text;
    }

    public function __sleep()
    {
        return array('text');
    }

    public function __wakeup()
    {
        echo 'Kažkas įvyko';
    }

    public function __invoke()
    {
        echo 'Objektas kviečiamas kaip metodas' . "<br>";
    }

    public static function __set_state($array)
    {
        $obj = new Main($array['var']);
        return $obj;
    }

    public function __debugInfo() {
        return [
            'pakeltaKvadratu' => $this->text ** 2,
        ];
    }

}

