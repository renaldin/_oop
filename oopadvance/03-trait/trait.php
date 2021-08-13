<?php 

trait Log {
    protected function log($message)
    {
        echo "{$message}\n";
    }
}

class Table {
    use Log;

    public function save()
    {
        $this->log("created log");
    }
}

(new Table())->save();